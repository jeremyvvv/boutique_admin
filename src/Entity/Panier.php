<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table(name="panier")
 * @ORM\Entity
 */
class Panier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="date_creation", type="string", length=50, nullable=false)
     */
    private $dateCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="montant_total", type="decimal", precision=15, scale=2, nullable=false)
     */
    private $montantTotal;


}
