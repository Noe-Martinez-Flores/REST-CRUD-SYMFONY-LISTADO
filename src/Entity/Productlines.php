<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Productlines
 *
 * @ORM\Table(name="productlines")
 * @ORM\Entity
 */
class Productlines
{
    /**
     * @var string
     *
     * @ORM\Column(name="productLine", type="string", length=50, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $productLine;

    /**
     * @var string|null
     *
     * @ORM\Column(name="textDescription", type="string", length=4000, nullable=true, options={"default"="NULL"})
     */
    private $textDescription = 'NULL';

    /**
     * @var string|null
     *
     * @ORM\Column(name="htmlDescription", type="text", length=65535, nullable=true, options={"default"="NULL"})
     */
    private $htmlDescription = 'NULL';

    /**
     * @var binary|null
     *
     * @ORM\Column(name="image", type="binary", nullable=true, options={"default"="NULL"})
     */
    private $image = 'NULL';


}
