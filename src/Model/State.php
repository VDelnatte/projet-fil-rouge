<?php

namespace Sthom\App\model;
class State {

    private int $idState;

    private ?string $name;

    


    /**
     * Get the value of idState
     */ 
    public function getIdState()
    {
        return $this->idState;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}