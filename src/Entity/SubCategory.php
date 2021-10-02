<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22/02/2020
 * Time: 1:26 AM
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SubCategoryRepository")
 */
class SubCategory implements TimestampableInterface, TranslatableInterface
{
    use TimestampableTrait, TranslatableTrait;

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
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="subCategory")
     */
    private $category;

    /**
     * @ORM\ManyToMany(targetEntity="Size", inversedBy="subCategory")
     */
    private $size;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image5;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image6;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image7;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image8;

    /**
     * @return mixed
     */
    public function getImage1()
    {
        return $this->image1;
    }

    /**
     * @param mixed $image1
     */
    public function setImage1($image1): void
    {
        $this->image1 = $image1;
    }

    /**
     * @return mixed
     */
    public function getImage2()
    {
        return $this->image2;
    }

    /**
     * @param mixed $image2
     */
    public function setImage2($image2): void
    {
        $this->image2 = $image2;
    }

    /**
     * @return mixed
     */
    public function getImage3()
    {
        return $this->image3;
    }

    /**
     * @param mixed $image3
     */
    public function setImage3($image3): void
    {
        $this->image3 = $image3;
    }

    /**
     * @return mixed
     */
    public function getImage4()
    {
        return $this->image4;
    }

    /**
     * @param mixed $image4
     */
    public function setImage4($image4): void
    {
        $this->image4 = $image4;
    }

    /**
     * @return mixed
     */
    public function getImage5()
    {
        return $this->image5;
    }

    /**
     * @param mixed $image5
     */
    public function setImage5($image5): void
    {
        $this->image5 = $image5;
    }

    /**
     * @return mixed
     */
    public function getImage6()
    {
        return $this->image6;
    }

    /**
     * @param mixed $image6
     */
    public function setImage6($image6): void
    {
        $this->image6 = $image6;
    }

    /**
     * @return mixed
     */
    public function getImage7()
    {
        return $this->image7;
    }

    /**
     * @param mixed $image7
     */
    public function setImage7($image7): void
    {
        $this->image7 = $image7;
    }

    /**
     * @return mixed
     */
    public function getImage8()
    {
        return $this->image8;
    }

    /**
     * @param mixed $image8
     */
    public function setImage8($image8): void
    {
        $this->image8 = $image8;
    }

    /**
     * @return mixed
     */
    public function getImage9()
    {
        return $this->image9;
    }

    /**
     * @param mixed $image9
     */
    public function setImage9($image9): void
    {
        $this->image9 = $image9;
    }

    /**
     * @return mixed
     */
    public function getImage10()
    {
        return $this->image10;
    }

    /**
     * @param mixed $image10
     */
    public function setImage10($image10): void
    {
        $this->image10 = $image10;
    }

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image9;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    protected $image10;

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }

    /**
     * @ORM\OneToMany(targetEntity="Product", mappedBy="subCategory")
     */
    private $product;

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

}