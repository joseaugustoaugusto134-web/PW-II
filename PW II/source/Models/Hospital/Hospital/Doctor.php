<?php

namespace source\Models\Hospital;

use source\Models\User;

class Doctor extends User 
{ 

    private $crm;
    private $speciality;

    public function __construct(string $crm = null, string $speciality = null, string $name = null, string $email = null, int $id = null, string $password = null, string $photo = null) 
    {
        parent::__construct($name, $email, $id, $password, $photo);
        $this->crm = $crm;
        $this->speciality = $speciality;        
    }

    public function getCrm(): ?string
    {
        return $this->crm;
    }

    public function setCrm(string $crm): void
    {
        $this->crm = $crm;
    }

    public function getSpeciality(): ?string
    {
        return $this->speciality;
    }

    public function setSpeciality(string $speciality): void
    {
        $this->speciality = $speciality;
    }

    public function show()
    {
        echo "Médico: {$this->id} - Nome: {$this->name}<br>";
        echo "Email: {$this->email}<br>";
        echo "CRM: {$this->crm}<br>";
        echo "Especialidade: {$this->speciality}<br>";
    }
}