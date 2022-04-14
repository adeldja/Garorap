<?php
namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="TypeBracelet")
 */
class TypeBracelet {
    
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * @var int
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     */
    protected $couleur;
    
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="unTypeBracelet")
    */
    protected $lesUsers;
    function __construct($lesUsers) {
        $this->lesUsers = $lesUsers;
    }

    
    function getId(): int {
        return $this->id;
    }

    function getCouleur() {
        return $this->couleur;
    }

    function getLesUsers() {
        return $this->lesUsers;
    }

    function setId(int $id): void {
        $this->id = $id;
    }

    function setCouleur($couleur): void {
        $this->couleur = $couleur;
    }

    function setLesUsers($lesUsers): void {
        $this->lesUsers = $lesUsers;
    }

}