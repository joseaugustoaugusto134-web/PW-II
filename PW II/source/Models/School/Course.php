<?php

namespace source\Models\School;
use source\Models\School\Teacher;

class Course
{
    private ?int $id;
    private ?string $name;
    private ?string $code;
    private ?int $workload;
    private ?Teacher $teacher;

    public function __construct($id = null, $name = null, $code = null, $workload = null, $teacher = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->code = $code;
        $this->workload = $workload;
        $this->teacher = $teacher;
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

    public function getCode(): ?string
    {
        return $this->code;
    }

    public function setCode($code): void
    {
        $this->code = $code;
    }

    public function getWorkload(): ?int
    {
        return $this->workload;
    }

    public function setWorkload($workload): void
    {
        $this->workload = $workload;
    }

    public function getTeacher(): ?Teacher
    {
        return $this->teacher;
    }

    public function setTeacher($teacher): void
    {
        $this->teacher = $teacher;
    }

    public function show(): string
    {
        return "Disciplina (Course): {$this->id} - {$this->name}<br>
                Código (Code): {$this->code}<br>
                Carga Horária (Workload): {$this->workload}
                Professor (Teacher): {$this->teacher}";
    }
}