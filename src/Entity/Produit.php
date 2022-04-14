<?php
namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="Produit")
 */
class Produit {
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="float")
     */
    protected $prix;
    /**
     * @ORM\Column(type="string")
     */
    protected $libelle;
   
    function getId(): int {
        return $this->id;
    }

    function getPrix() {
        return $this->prix;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function setId(int $id): void {
        $this->id = $id;
    }

    function setPrix($prix): void {
        $this->prix = $prix;
    }

    function setLibelle($libelle): void {
        $this->libelle = $libelle;
    }

}