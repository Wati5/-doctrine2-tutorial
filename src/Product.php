<?php
// src/Product.php
 
use Doctrine\ORM\Mapping as ORM;
 
#[ORM\Entity]
#[ORM\Table(name: 'products')]
class Product
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private int|null $id = null;
 
    #[ORM\Column(type: 'string')]
    private string $name;
 
    // Getter for $id
    public function getId(): Int|null
    {
        return $this->id;
    }
 
    // Getter for $name
    public function getName(): string
    {
        return $this->name;
    }
 
    // Setter for $name
    public function setName(string $name)
    {
        $this->name = $name;
    }
}