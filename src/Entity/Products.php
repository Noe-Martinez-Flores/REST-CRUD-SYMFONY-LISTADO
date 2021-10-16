<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ORM\Table(name="products", indexes={@ORM\Index(name="products_ibfk_1", columns={"productLine"})})
 * @ORM\Entity
 */
class Products
{
    /**
     * @var string
     *
     * @ORM\Column(name="productCode", type="string", length=15, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productCode;

    /**
     * @var string
     *
     * @ORM\Column(name="productName", type="string", length=70, nullable=false)
     */
    private $productName;

    /**
     * @var string
     *
     * @ORM\Column(name="productScale", type="string", length=10, nullable=false)
     */
    private $productScale;

    /**
     * @var string
     *
     * @ORM\Column(name="productVendor", type="string", length=50, nullable=false)
     */
    private $productVendor;

    /**
     * @var string
     *
     * @ORM\Column(name="productDescription", type="text", length=65535, nullable=false)
     */
    private $productDescription;

    /**
     * @var int
     *
     * @ORM\Column(name="quantityInStock", type="smallint", nullable=false)
     */
    private $quantityInStock;

    /**
     * @var float
     *
     * @ORM\Column(name="buyPrice", type="float", precision=10, scale=0, nullable=false)
     */
    private $buyPrice;

    /**
     * @var float
     *
     * @ORM\Column(name="MSRP", type="float", precision=10, scale=0, nullable=false)
     */
    private $MSRP;

    /**
     * @var \Productlines
     *
     * @ORM\ManyToOne(targetEntity="Productlines")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="productLine", referencedColumnName="productLine")
     * })
     */
    private $productLine;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="Orders", mappedBy="productcode")
     */
    private $orderNumber;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderNumber = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
