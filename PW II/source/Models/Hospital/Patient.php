<?php

namespace source\Models\Hospital;

use source\Models\User;

class Patient extends User {
    private $birthDate;
    private $medicalReport;

    public function __construct(string $birthDate = null, string $medicalReport) 
    {
        parent::__construct($name, $email, $id, $password, $photo);
        $this->birthDate = $birthDate;
        $this->medicalReport = $medicalReport;
}


public function getBirthDate(): string 
{
    return $this->birthDate;
}
public function setBirthDate(string $birthDate): void
{
    $this->birthDate = $birthDate;
}

public function getMedicalReport(): ?string 
{
    return $this->medicalReport;
}
public function setMedicalReport(string $birthDate): void  
{
    $this->birthDate = $birthDate;
}



public function show(): void 
{
    echo "Paciente: {$this->id} - Nome: {$this->name}<br>";
    echo "Email: {$this->email}";
    echo "Data de Nascimento: {$this->birthDate}";
    echo "Prontuário Clínico: {$this->medicalReport}";
}
}
