<?php

namespace source\Models\School;

class Teacher
{
    private ?int $id;
    private ?string $name;
    private ?string $email;
    private ?string $specialization;

    public function __construct($id = null, $name = null, $email = null, $specialization = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->specialization = $specialization;
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
        return $this->email;
    }

    public function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getSpecialization(): ?string
    {
        return $this->specialization;
    }

    public function setSpecialization($specialization): void
    {
        $this->specialization = $specialization;
    }

    public function show(): string
    {
        return "Professor (Teacher): {$this->id} - Nome: {$this->name}<br>
                E-mail: {$this->email}<br>
                Especialização (Specialization): {$this->specialization}";
    }
}