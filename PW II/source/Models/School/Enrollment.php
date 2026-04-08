<?php

namespace source\Models\School;
use source\Models\School\Course;
use source\Models\School\Student;

class Enrollment
{
    private ?int $id;
    private ?Student $student;
    private ?Course $course;
    private ?string $enrollmentDate;
    private ?float $grade;
    private ?string $status;

    public function __construct($id = null, $student = null, $course = null, $enrollmentDate = null)
    {
        $this->id = $id;
        $this->student = $student;
        $this->course = $course;
        $this->enrollmentDate = $enrollmentDate;
        $this->grade = null;
        $this->status = "ativa";
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getCourse(): ?Course
    {
        return $this->course;
    }

    public function setCourse($course): void
    {
        $this->course = $course;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent($student): void
    {
        $this->student = $student;
    }

    public function getEnrollmentDate(): ?string
    {
        return $this->enrollmentDate;
    }

    public function setEnrollmentDate($enrollmentDate): void
    {
        $this->enrollmentDate = $enrollmentDate;
    }

    public function getGrade(): ?float
    {
        return $this->grade;
    }

    public function setGrade($grade): void
    {
        $this->grade = $grade;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus($status): void
    {
        $this->status = $status;
    }

    public function approve(): bool
    {
        if($grade !== null && $grade >= 6.0)
        {
            $this->setStatus("concluída");
            return true;
        }
        else
        {
            return false;
        }
    }

    public function show(): string
    {
        return "Matrícula (Enrollment): {$this->id}<br>
                Aluno (Student): {$this->student}<br>
                Disciplina (Course): {$this->course}<br>
                Professor (Teacher): {$this->teacher}<br>
                Data de Matrícula (EnrollmentDate): {$this->enrollmentDate}<br>
                Nota (Grade): {$this->grade}<br>
                Situação (Status): {$this->status}";
    }
}