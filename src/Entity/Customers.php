<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customers
 *
 * @ORM\Table(name="customers", indexes={@ORM\Index(name="customers_ibfk_1", columns={"salesRepEmployeeNumber"})})
 * @ORM\Entity
 */
class Customers
{
    /**
     * @var int
     *
     * @ORM\Column(name="customerNumber", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="customerName", type="string", length=50, nullable=false)
     */
    private $customerName;

    /**
     * @var string
     *
     * @ORM\Column(name="contactLastName", type="string", length=50, nullable=false)
     */
    private $contactLastName;

    /**
     * @var string
     *
     * @ORM\Column(name="contactFirstName", type="string", length=50, nullable=false)
     */
    private $contactFirstName;

    /**
     * @var string
     *
     * @ORM\Column(name="phone", type="string", length=50, nullable=false)
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="addressLine1", type="string", length=50, nullable=false)
     */
    private $addressLine1;

    /**
     * @var string|null
     *
     * @ORM\Column(name="addressLine2", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $addressLine2 = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $state = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="postalCode", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $postalCode = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=false)
     */
    private $country;

    /**
     * @var float|null
     *
     * @ORM\Column(name="creditLimit", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $creditLimit = NULL;

    /**
     * @var \Employees
     *
     * @ORM\ManyToOne(targetEntity="Employees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="salesRepEmployeeNumber", referencedColumnName="employeeNumber")
     * })
     */
    private $salesRepEmployeeNumber;


}
