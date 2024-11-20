<?php

namespace Sthom\App\model;
class Task {

    private int $idTask;

    private ?string $name;

    private ?string $description;

    private ?string $type;

    private ?string $format;

    private ?string $priority;

    private ?\DateTimeImmutable $beginDate;

    private ?\DateTimeImmutable $theoriticalEndDate;

    private ?\DateTimeImmutable $realEndDate;

    private int $idUserDeveloper;

    private int $idProject;

    private int $idState;

    



    /**
     * Get the value of idTask
     */ 
    public function getIdTask()
    {
        return $this->idTask;
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

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of format
     */ 
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set the value of format
     *
     * @return  self
     */ 
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get the value of beginDate
     */ 
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set the value of beginDate
     *
     * @return  self
     */ 
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get the value of theoriticalEndDate
     */ 
    public function getTheoriticalEndDate()
    {
        return $this->theoriticalEndDate;
    }

    /**
     * Set the value of theoriticalEndDate
     *
     * @return  self
     */ 
    public function setTheoriticalEndDate($theoriticalEndDate)
    {
        $this->theoriticalEndDate = $theoriticalEndDate;

        return $this;
    }

    /**
     * Get the value of realEndDate
     */ 
    public function getRealEndDate()
    {
        return $this->realEndDate;
    }

    /**
     * Set the value of realEndDate
     *
     * @return  self
     */ 
    public function setRealEndDate($realEndDate)
    {
        $this->realEndDate = $realEndDate;

        return $this;
    }

    /**
     * Get the value of idUserDeveloper
     */ 
    public function getIdUserDeveloper()
    {
        return $this->idUserDeveloper;
    }

    /**
     * Get the value of idProject
     */ 
    public function getIdProject()
    {
        return $this->idProject;
    }

    /**
     * Get the value of idState
     */ 
    public function getIdState()
    {
        return $this->idState;
    }

    /**
     * Get the value of priority
     */ 
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set the value of priority
     *
     * @return  self
     */ 
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }
}