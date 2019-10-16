<?php

declare(strict_types=1);

namespace Model\Entity;

class Product
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var float
     */
    private $price;

	/**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

	/**
	 * @param int $id
	 * @return Product
	 */
	public function setId(int $id): Product
	{
		$this->id = $id;
		return $this;
	}

	/**
	 * @param string $name
	 * @return Product
	 */
	public function setName(string $name): Product
	{
		$this->name = $name;
		return $this;
	}

	/**
	 * @param float $price
	 * @return Product
	 */
	public function setPrice(float $price): Product
	{
		$this->price = $price;
		return $this;
	}

    /**
     * @return array
     */
    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
        ];
    }
}
