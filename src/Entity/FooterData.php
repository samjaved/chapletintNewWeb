<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FooterDataRepository")
 *
 */
class FooterData implements TimestampableInterface
{

    use TimestampableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string")
     */

    private $firstEmail;


    /**
     * @ORM\Column(type="string")
     */

    private $secondEmail;


    /**
     * @ORM\Column(type="string")
     */

    private $phoneNumber;

    /**
     * @return mixed
     */
    public function getFirstEmail()
    {
        return $this->firstEmail;
    }

    /**
     * @param mixed $firstEmail
     */
    public function setFirstEmail($firstEmail): void
    {
        $this->firstEmail = $firstEmail;
    }

    /**
     * @return mixed
     */
    public function getSecondEmail()
    {
        return $this->secondEmail;
    }

    /**
     * @param mixed $secondEmail
     */
    public function setSecondEmail($secondEmail): void
    {
        $this->secondEmail = $secondEmail;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     */
    public function setPhoneNumber($phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return mixed
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param mixed $fax
     */
    public function setFax($fax): void
    {
        $this->fax = $fax;
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

    /**
     * @ORM\Column(type="string")
     */

    private $fax;

    /**
     * @ORM\Column(type="string")
     */

    private $address;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }


}
