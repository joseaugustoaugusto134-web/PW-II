<?php   

namespace source\Models;

class User
{
    protected $name;
    protected $email;

    protected $id;

    protected $password;

    protected $photo;
    public function __construct(string $name = null, string $email = null, int $id = null, string $password = null, string $photo = null)
    {
        $this->name = $name;
        $this->email = $email;
        $this->id = $id;
        $this->password = $password;
        $this->photo = $photo;
    }

    public function getId(): ?int 
{
    return $this->id;
}
public function setId(string $birthDate): void
{
    $this->id = $id;
}

public function getName(): ?string 
{
    return $this->name;
}
public function setName(string $name): void
{
    $this->name = $name;
}

public function getEmail(): ?string
{
    return $this->email;
}
public function setEmail(string $email): void
{
    $this->email = $email;
}

public function getPassword(): ?int
{
    return $this->password;
}

public function setPassword(int $password): void
{
    $this->password = $password;
}

public function getPhoto(): ?string
{
    return $this->photo;
}

public function setPhoto(?string $photo): void
{
    $this->photo = $photo;
}
}