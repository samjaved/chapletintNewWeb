<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;

/**
 * @ORM\Entity
 * @ORM\Table(name="exhibitions")
 */
class Exhibition implements TimestampableInterface
{
    use TimestampableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $location;

    /**
     * @return mixed
     */
    public function getExhibition_date()
    {
        return $this->exhibition_date;
    }

    /**
     * @param mixed $exhibition_date
     */
    public function setExhibitionDate($exhibition_date): void
    {
        $this->exhibition_date = $exhibition_date;
    }

    /**
     * @ORM\Column(type="date",name="date_of_exhibition")
     */
    private $exhibition_date;

    /**
     * @return mixed
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param mixed $link
     */
    public function setLink($link): void
    {
        $this->link = $link;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $hall;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $stand;

    /**
     * @ORM\Column(type="string", length=255, nullable=true, name="exhibition_link")
     */
    private $link;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(?string $location): self
    {
        $this->location = $location;

        return $this;
    }


    public function getHall(): ?string
    {
        return $this->hall;
    }

    public function setHall(?string $hall): self
    {
        $this->hall = $hall;

        return $this;
    }

    public function getStand(): ?string
    {
        return $this->stand;
    }

    public function setStand(?string $stand): self
    {
        $this->stand = $stand;

        return $this;
    }
}
