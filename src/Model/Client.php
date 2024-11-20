<?php

namespace Sthom\App\model;
class Client {

    private string $numSIRET;

    private ?string $companyName;

    private ?string $workField;

    private ?string $contactFirstName;

    private ?string $contactLastName;


    /**
     * Get the value of numSIRET
     */ 
    public function getNumSIRET()
    {
        return $this->numSIRET;
    }

    /**
     * Set the value of numSIRET
     *
     * @return  self
     */ 
    public function setNumSIRET($numSIRET)
    {
        $this->numSIRET = $numSIRET;

        return $this;
    }

    /**
     * Get the value of companyName
     */ 
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * Set the value of companyName
     *
     * @return  self
     */ 
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;

        return $this;
    }

    /**
     * Get the value of workField
     */ 
    public function getWorkField()
    {
        return $this->workField;
    }

    /**
     * Set the value of workField
     *
     * @return  self
     */ 
    public function setWorkField($workField)
    {
        $this->workField = $workField;

        return $this;
    }

    /**
     * Get the value of contactFirstName
     */ 
    public function getContactFirstName()
    {
        return $this->contactFirstName;
    }

    /**
     * Set the value of contactFirstName
     *
     * @return  self
     */ 
    public function setContactFirstName($contactFirstName)
    {
        $this->contactFirstName = $contactFirstName;

        return $this;
    }

    /**
     * Get the value of contactLastName
     */ 
    public function getContactLastName()
    {
        return $this->contactLastName;
    }

    /**
     * Set the value of contactLastName
     *
     * @return  self
     */ 
    public function setContactLastName($contactLastName)
    {
        $this->contactLastName = $contactLastName;

        return $this;
    }
}