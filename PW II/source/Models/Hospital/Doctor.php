<?php

namespace source\Models\Hospital;

use source\Models\User;

class Doctor extends User 
{ 

    private $crm;
    private $speciality;

    public function __construct(string $crm = null, string $speciality = null) 
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
        echo "Email: {$this->email}";
        echo "CRM: {$this->crm}";
        echo "Especialidade: {$this->speciality}";
    }
}