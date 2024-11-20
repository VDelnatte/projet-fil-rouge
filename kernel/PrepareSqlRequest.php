<?php

namespace Sthom\Kernel;

class PrepareSqlRequest { 

    public static function sanitize(array $values): array
    {
        $return = [];
        foreach($values as $value) {
            $return[] = self::sanitizeOneValue($value);
        }
        return $return;
    }

    private static function sanitizeOneValue($value) {
        if ($value !== NULL && !is_numeric($value)) {
            $value = htmlspecialchars($value);
        }
        return $value;
    }

    public static function formatCreate($entity): array
    {
        return self::returnSqlUpdateOrCreate($entity, false);
    }

    public static function formatUpdate($entity): array
    {
        return self::returnSqlUpdateOrCreate($entity);
    }

    private static function returnSqlUpdateOrCreate(object $entity, bool $update=true): array
    {
        $reflection = new ReflectionEntity($entity);
        $properties = $reflection->getProperties();
        $return = [
            'values' => [],
            'attributes' => '',
        ];
        $max = count($properties)-1;
        $i = 0;
        foreach ($properties as $key=>$value) {
            $return['values'][] = self::sanitizeOneValue($value);
            if( $i !== $max)
            {
                $return['attributes'] .= $update ? $key.'=?,' : '?,';
            } else {
                $return['attributes'] .= $update ? $key.'=?' : '?';
            }
            $i++;
        }
        return $return;
    }

    public static function returnSqlSelect(array $attributes)
    {
        $return = [
            'attributes' => '',
            'values' => [],

        ];
        if ($attributes) {
            $return['attributes'] .= ' where';
            $max = count($attributes)-1;
            $i = 0;
            foreach ($attributes as $key=>$value) {
                $return['values'][] = self::sanitizeOneValue($value);
                if ($i !== $max) {
                    $return['attributes'] .= ' '.$key.'=? AND';
                } else {
                    $return['attributes'] .= ' '.$key.'=?';
                }
                $i++;
            }
        }
        var_dump($return['attributes']);
        return $return;
    }
}