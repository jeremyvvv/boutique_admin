<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contenir
 *
 * @ORM\Table(name="contenir", indexes={@ORM\Index(name="IDX_3C914DFD77482E5B", columns={"id_panier_id"}), @ORM\Index(name="IDX_3C914DFDAABEFE2C", columns={"id_produit_id"})})
 * @ORM\Entity
 */
class Contenir
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
     * @var int
     *
     * @ORM\Column(name="quantite", type="integer", nullable=false)
     */
    private $quantite;

    /**
     * @var \Panier
     *
     * @ORM\ManyToOne(targetEntity="Panier")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_panier_id", referencedColumnName="id")
     * })
     */
    private $idPanier;

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
