<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Employees
 *
 * @ORM\Table(name="employees", indexes={@ORM\Index(name="employees_ibfk_2", columns={"officeCode"}), @ORM\Index(name="employees_ibfk_1", columns={"reportsTo"})})
 * @ORM\Entity
 */
class Employees
{
    /**
     * @var int
     *
     * @ORM\Column(name="employeeNumber", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $employeeNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=50, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=50, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="extension", type="string", length=10, nullable=false)
     */
    private $extension;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="jobTitle", type="string", length=50, nullable=false)
     */
    private $jobTitle;

    /**
     * @var \Employees
     *
     * @ORM\ManyToOne(targetEntity="Employees")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="reportsTo", referencedColumnName="employeeNumber")
     * })
     */
    private $reportsTo;

    /**
     * @var \Offices
     *
     * @ORM\ManyToOne(targetEntity="Offices")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="officeCode", referencedColumnName="officeCode")
     * })
     */
    private $officecode;


}
