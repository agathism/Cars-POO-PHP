<?php
class Car
{
    private int $id;
    private string $brand;
    private string $model;
    private int $horsePower;
    private string $image;

    public function __construct(int $id, string $brand, string $model, int $horsePower, string $image)
    {
        $this->id = $id;
        $this->brand = $brand;
        $this->model = $model;
        $this->horsePower = $horsePower;
        $this->image = $image;
    }
    // ID 
    public function getID(): int
    {
        return $this->id;
    }
    // MODEL
    public function getModel(): string
    {
        return $this->model;
    }
    public function setModel(string $model): void
    {
        $this->model = $model;
    }
    // BRAND
    public function getBrand(): string
    {
        return $this->brand;
    }
    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }
    // HORSEPOWER
    public function getHorsePower(): int
    {
        return $this->horsePower;
    }
    public function setHorsePower(int $horsePower): void
    {
        $this->horsePower = $horsePower;
    }
    // IMAGE
    public function getImage(): string
    {
        return $this->image;
    }
    public function setImage(string $image): void
    {
        $this->image = $image;
    }

}

