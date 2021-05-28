<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Correspondre
 *
 * @ORM\Table(name="correspondre", indexes={@ORM\Index(name="IDX_2AE140C4AABEFE2C", columns={"id_produit_id"}), @ORM\Index(name="IDX_2AE140C49CE5D6FC", columns={"id_tag_id"})})
 * @ORM\Entity
 */
class Correspondre
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
     * @var \Tag
     *
     * @ORM\ManyToOne(targetEntity="Tag")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_tag_id", referencedColumnName="id")
     * })
     */
    private $idTag;

    /**
     * @var \Produit
     *
     * @ORM\ManyToOne(targetEntity="Produit")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_produit_id", referencedColumnName="id")
     * })
     */
    private $idProduit;


}
