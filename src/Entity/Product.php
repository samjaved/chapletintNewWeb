<?php


namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Contract\Entity\TranslatableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;
use Knp\DoctrineBehaviors\Model\Translatable\TranslatableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 * @ORM\Table(name="products")
 */
class Product implements TimestampableInterface,TranslatableInterface
{
    use TimestampableTrait,TranslatableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

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
    public function getLatest()
    {
        return $this->latest;
    }

    /**
     * @param mixed $latest
     */
    public function setLatest($latest): void
    {
        $this->latest = $latest;
    }


    /**
     * @ORM\Column(type="boolean", length=255, nullable=true)
     */

    private $latest;
    /**
     * @ORM\ManyToOne(targetEntity="SubCategory", inversedBy="product")
     */
    private $subCategory;

    /**
     * @ORM\ManyToMany(targetEntity="Size", inversedBy="product")
     */
    private $size;

    /**
     * @return mixed
     */
    public function getSubCategory()
    {
        return $this->subCategory;
    }

    /**
     * @param mixed $subCategory
     */
    public function setSubCategory($subCategory): void
    {
        $this->subCategory = $subCategory;
    }

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
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * @param mixed $productName
     */
    public function setProductName($productName): void
    {
        $this->productName = $productName;
    }

    /**
     * @ORM\OneToOne(targetEntity="ProductName", inversedBy="product")
     */
    private $productName;

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


}