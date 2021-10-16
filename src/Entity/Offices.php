<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Offices
 *
 * @ORM\Table(name="offices")
 * @ORM\Entity
 */
class Offices
{
    /**
     * @var string
     *
     * @ORM\Column(name="officeCode", type="string", length=10, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $officeCode;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

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
     * @var string|null
     *
     * @ORM\Column(name="state", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $state = 'NULL';

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50, nullable=false)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="postalCode", type="string", length=15, nullable=false)
     */
    private $postalCode;

    /**
     * @var string
     *
     * @ORM\Column(name="territory", type="string", length=10, nullable=false)
     */
    private $territory;


}
