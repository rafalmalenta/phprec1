<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ShopItemRepository")
 */
class ShopItem
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Column(type="string", nullable=false", lenght=20)
     */
    private $itemName;

    /**
     * @Column(type="string", lenght=1000")
     */
    private $itemDescribtion;

    /**
     * @Column(type="integer", nullable=false" )
     */
    private $itemPrice;

    public function getId(): ?int
    {
        return $this->id;
    }
}
