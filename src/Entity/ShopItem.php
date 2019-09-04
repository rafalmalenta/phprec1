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
     * @ORM\Column(type="string", nullable=false, length=20)
     */
    private $itemName;

    /**
     *@ORM\Column(type="string", length=2000, nullable=true)
     */
    private $itemDescribtion;

    /**
     * @ORM\Column(type="integer", nullable=false )
     */
    private $itemPrice;

    public function getId(): ?int
    {
        return $this->id;
    }
}
