<?php

namespace source\Models\Course;
use source\Models\User;

class Instructor extends User
{
    private $degree;
    private $bio;

    public function __construct(string $degree = null, string $bio = null, string $name = null, string $email = null, int $id = null)
    {
        parent::__construct($name, $email, $id);
        $this->degree = $degree;
        $this->bio = $bio;
    }

    public function getDegree()
    {
        return $this->degree;
    }

    public function setDegree(string $degree)
    {
        $this->degree = $degree;
    }

    public function getBio()
    {
        return $this->bio;
    }

    public function setBio(string $bio)
    {
        $this->bio = $bio;
    }

    public function show(): void
    {
        echo "Instrutor: {$this->getId()} - Nome: {$this->getName()}<br>";
        echo "Email: {$this->getEmail()}<br>";
        echo "Formação: {$this->degree}<br>";
        echo "Biografia: {$this->bio}<br>";
    }
}