<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @ORM\Table(name="payments", indexes={@ORM\Index(name="IDX_65D29B32D53183C5", columns={"customerNumber"})})
 * @ORM\Entity
 */
class Payments
{
    /**
     * @var string
     *
     * @ORM\Column(name="checkNumber", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $checkNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="paymentDate", type="date", nullable=false)
     */
    private $paymentDate;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float", precision=10, scale=0, nullable=false)
     */
    private $amount;

    /**
     * @var \Customers
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Customers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customerNumber", referencedColumnName="customerNumber")
     * })
     */
    private $customerNumber;

    public function __toString()
    {
        return $this->paymentDate;
    }

}
