<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 25/02/2020
 * Time: 11:28 PM
 */

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Contract\Entity\TimestampableInterface;
use Knp\DoctrineBehaviors\Model\Timestampable\TimestampableTrait;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProductsSizeRepository")
 * @ORM\Table(name="sizes")
 */
class Size implements TimestampableInterface
{
    use TimestampableTrait;

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getItemCode()
    {
        return $this->itemCode;
    }

    /**
     * @param mixed $itemCode
     */
    public function setItemCode($itemCode): void
    {
        $this->itemCode = $itemCode;
    }

    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $itemCode;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $height;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $width;

    /**
     * @return mixed
     */
    public function getSecondLength()
    {
        return $this->secondLength;
    }

    /**
     * @param mixed $secondLength
     */
    public function setSecondLength($secondLength): void
    {
        $this->secondLength = $secondLength;
    }

    /**
     * @return mixed
     */
    public function getOzSize()
    {
        return $this->ozSize;
    }

    /**
     * @param mixed $ozSize
     */
    public function setOzSize($ozSize): void
    {
        $this->ozSize = $ozSize;
    }

    /**
     * @return mixed
     */
    public function getMilliLiter()
    {
        return $this->milliLiter;
    }

    /**
     * @param mixed $milliLiter
     */
    public function setMilliLiter($milliLiter): void
    {
        $this->milliLiter = $milliLiter;
    }

    /**
     * @return mixed
     */
    public function getLiter()
    {
        return $this->liter;
    }

    /**
     * @param mixed $liter
     */
    public function setLiter($liter): void
    {
        $this->liter = $liter;
    }

    /**
     * @return mixed
     */
    public function getTextSize()
    {
        return $this->textSize;
    }

    /**
     * @param mixed $textSize
     */
    public function setTextSize($textSize): void
    {
        $this->textSize = $textSize;
    }

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $length;


    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $secondLength;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $ozSize;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */

    private $milliLiter;

    /**
     * @ORM\Column(type="float", nullable=true)
     */

    private $liter;

    /**
     * @ORM\Column(type="string", nullable=true)
     */

    private $textSize;

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
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */
    public function setHeight($height): void
    {
        $this->height = $height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param mixed $width
     */
    public function setWidth($width): void
    {
        $this->width = $width;
    }

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length): void
    {
        $this->length = $length;
    }


    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="size")
     */
    private $product;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\SubCategory", mappedBy="size")
     */
    private $subCategory;

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
     * @return mixed
     */
    public function getSizeType()
    {
        return $this->sizeType;
    }

    /**
     * @param mixed $sizeType
     */
    public function setSizeType($sizeType): void
    {
        $this->sizeType = $sizeType;
    }
}