<?php

// src/Entity/Hotel.php
namespace App\Entity;

use App\Repository\HotelRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HotelRepository::class)]
#[ORM\Table(name: 'hotels')]

class Hotel
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

    #[ORM\Column(type: 'text')]
    private $title;

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }
    #[ORM\Column(type: 'text')]
    private $description;

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    #[ORM\Column(type: 'decimal', scale: 2)]
    private $price;

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(float $price): self
    {
        $this->price = $price;
        return $this;
    }


    #[ORM\Column(type: 'text')]
    private $img_url;

    public function getImgUrl(): ?string
    {
        return $this->img_url;
    }
    public function setImgUrl(?string $img_url): self
    {
        $this->img_url = $img_url;
        return $this;
    }

    #[ORM\Column(type: 'integer')]
    private $stars;

    public function getStars(): ?int{
        return $this->stars;
    }
    public function setStars(?int $stars): self{
        $this->stars = $stars;
        return $this;
    }

    #[ORM\Column(type: 'text')]
    private $city;

    public function getCity(): ?string {
        return $this->city;
    }
    public function setCity(string $city): self{
        $this->city = $city;
        return $this;

    }

    #[ORM\Column(type: 'text')]
    private $country;

    public function getCountry(): ?string{
        return $this->country;
    }

    public function setCountry(string $country): self{
        $this->country = $country;
        return $this;
    }

    #[ORM\Column(type: 'text')]
    private $type_object;

    public function getTypeObject(): ?string{
        return $this->type_object;
    }
    public function setTypeObject(string $type_object): self{

        $this->type_object = $type_object;
        return $this;
    }


}
