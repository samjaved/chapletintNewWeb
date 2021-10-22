<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SocialMediaRepository")
 *
 */
class SocialMedia implements TimestampableInterface,  TranslatableInterface
{
    use TimestampableTrait, TranslatableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getId()
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

    /**
     * @return mixed
     */
    public function getVideoLink()
    {
        return $this->videoLink;
    }

    /**
     * @param mixed $videoLink
     */
    public function setVideoLink($videoLink): void
    {
        $this->videoLink = $videoLink;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $videoLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fackebookLink;

    /**
     * @return mixed
     */
    public function getFackebookLink()
    {
        return $this->fackebookLink;
    }

    /**
     * @param mixed $fackebookLink
     */
    public function setFackebookLink($fackebookLink): void
    {
        $this->fackebookLink = $fackebookLink;
    }

    /**
     * @return mixed
     */
    public function getInstagramLink()
    {
        return $this->instagramLink;
    }

    /**
     * @param mixed $instagramLink
     */
    public function setInstagramLink($instagramLink): void
    {
        $this->instagramLink = $instagramLink;
    }

    /**
     * @return mixed
     */
    public function getTwitterLink()
    {
        return $this->twitterLink;
    }

    /**
     * @param mixed $twitterLink
     */
    public function setTwitterLink($twitterLink): void
    {
        $this->twitterLink = $twitterLink;
    }

    /**
     * @return mixed
     */
    public function getLinkedInLink()
    {
        return $this->linkedInLink;
    }

    /**
     * @param mixed $linkedInLink
     */
    public function setLinkedInLink($linkedInLink): void
    {
        $this->linkedInLink = $linkedInLink;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $instagramLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $twitterLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkedInLink;

}