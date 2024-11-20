<?php

namespace Sthom\Kernel;

class ReflectionEntity {
    private \ReflectionClass $reflection;
    private array $reflectionProperties;
    private object $entity;

    public function __construct(object $entity)
    {
        $this->entity = $entity;
        $this->reflection = new \ReflectionClass($entity);
        $this->setReflexionProperties();
    }

    private function setReflexionProperties()
    {
        $this->reflectionProperties = $this->reflection->getProperties();
    }

    public function getProperties():array
    {
        $return = [];
        foreach ($this->reflectionProperties as $reflectionPropertie) {
            $return[$reflectionPropertie->getName()] = $reflectionPropertie->getValue($this->entity);
        }
        return $return;
    }

    public function getFQName(): string
    {
        return $this->reflection->getName();
    }

    public function getName(): string 
    {
        return $this->reflection->getShortName();
    }
}