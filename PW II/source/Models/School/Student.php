<?php

namespace source\Models\School;

class Student
{
    private ?int $id;
    private ?string $name;
    private ?string $email;
    private ?string $registrationNumber;

    public function __construct($id = null, $name = null, $email = null, $registrationNumber = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->registrationNumber = $registrationNumber;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string 
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        $this->email = $email;
    }

    public function getRegistrationNumber(): ?string
    {
        return $registrationNumber;
    }

    public function setRegistrationNumber($registrationNumber): void
    {
        $this->registrationNumber = $registrationNumber;
    }

    public function show(): string
    {
        return "Aluno (Student): {$this->id} - Nome: {$this->name}<br>
                E-mail: {$this->email}<br>
                Matrícula (Registration): {$this->registrationNumber}";
    }
}