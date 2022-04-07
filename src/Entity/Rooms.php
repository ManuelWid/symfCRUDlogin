<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Status;

/**
 * Rooms
 *
 * @ORM\Table(name="rooms", indexes={@ORM\Index(name="IDX_7CA11A96AAED72D", columns={"fk_status_id"})})
 * @ORM\Entity
 */
class Rooms
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="room_nr", type="integer", nullable=false)
     */
    private $roomNr;

    /**
     * @var string
     *
     * @ORM\Column(name="size", type="string", length=20, nullable=false)
     */
    private $size;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=255, nullable=false)
     */
    private $description;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="string", length=255, nullable=false, options={"default"="default.jpg"})
     */
    private $picture = 'default.jpg';

    /**
     * @var \Status
     *
     * @ORM\ManyToOne(targetEntity="Status")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fk_status_id", referencedColumnName="id")
     * })
     */
    private $fkStatus;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomNr(): ?int
    {
        return $this->roomNr;
    }

    public function setRoomNr(int $roomNr): self
    {
        $this->roomNr = $roomNr;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(string $size): self
    {
        $this->size = $size;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getFkStatus(): ?Status
    {
        return $this->fkStatus;
    }

    public function setFkStatus(?Status $fkStatus): self
    {
        $this->fkStatus = $fkStatus;

        return $this;
    }


}
