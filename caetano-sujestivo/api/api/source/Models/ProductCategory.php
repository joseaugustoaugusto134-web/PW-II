<?php

namespace Source\Models;

use Source\Core\Connect;

class ProductCategory
{
    private ?int $id;
    private ?int $categoryId;
    private ?string $name;
    private ?float $price;

    public function __construct(?int $id = null, ?int $categoryId = null, ?string $name = null, ?float $price = null)
    {
        $this->id = $id;
        $this->categoryId = $categoryId;
        $this->name = $name;
        $this->price = $price;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getCategoryId(): int
    {
        return $this->categoryId;
    }

    public function setCategoryId(int $categoryId): void
    {
        $this->categoryId = $categoryId;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function listAll (): array
    {
        $query = "SELECT  products_categories.name
                  FROM products_categories";
        $stmt = Connect::getInstance()->query($query);
        return $stmt->fetchAll();
    }

    public function listById (int $id): object | false
    {
        $query = "SELECT products_categories.name FROM products_categories WHERE id = :id";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function insert (): bool
    {
        $query = "INSERT INTO products_categories VALUES (NULL, :name)";
        $stmt = Connect::getInstance()->prepare($query);
        $stmt->bindParam(":categoryId", $this->categoryId);
        $stmt->bindParam(":name", $this->name);
        $stmt->bindParam(":price", $this->price);
        if(!$stmt->execute()) {
            return false;
        }
        $this->id = Connect::getInstance()->lastInsertId();
        return true;
    }
}