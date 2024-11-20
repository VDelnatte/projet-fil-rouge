<?php

namespace Sthom\App\model;
class Project {

    private int $idProject;

    private ?string $name;

    private ?string $description;

    private ?\DateTimeImmutable $beginDate;

    private ?\DateTimeImmutable $theoriticalDeadLine;

    private ?\DateTimeImmutable $realDeadLine;

    private int $idState;

    private string $numSIRET;

    private int $idUserProjectManager;


    /**
     * Get the value of idProject
     */ 
    public function getIdProject()
    {
        return $this->idProject;
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
     * Get the value of theoriticalDeadLine
     */ 
    public function getTheoriticalDeadLine()
    {
        return $this->theoriticalDeadLine;
    }

    /**
     * Set the value of theoriticalDeadLine
     *
     * @return  self
     */ 
    public function setTheoriticalDeadLine($theoriticalDeadLine)
    {
        $this->theoriticalDeadLine = $theoriticalDeadLine;

        return $this;
    }

    /**
     * Get the value of realDeadLine
     */ 
    public function getRealDeadLine()
    {
        return $this->realDeadLine;
    }

    /**
     * Set the value of realDeadLine
     *
     * @return  self
     */ 
    public function setRealDeadLine($realDeadLine)
    {
        $this->realDeadLine = $realDeadLine;

        return $this;
    }

    /**
     * Get the value of idState
     */ 
    public function getIdState()
    {
        return $this->idState;
    }

    /**
     * Get the value of numSIRET
     */ 
    public function getNumSIRET()
    {
        return $this->numSIRET;
    }

    /**
     * Get the value of idUserProjectManager
     */ 
    public function getIdUserProjectManager()
    {
        return $this->idUserProjectManager;
    }
}