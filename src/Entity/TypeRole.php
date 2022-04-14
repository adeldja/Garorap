<?php
namespace App\Entity;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="TypeRole")
 */
class TypeRole {
    
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
    protected $libelle;
    
    /**
     * @ORM\ManyToMany(targetEntity="User", mappedBy="lesTypeRoles")
    */
    protected $lesUsers;
     
    function getId(): int {
        return $this->id;
    }

    function getLibelle() {
        return $this->libelle;
    }

    function getLesUsers() {
        return $this->lesUsers;
    }

    function setId(int $id): void {
        $this->id = $id;
    }

    function setLibelle($libelle): void {
        $this->libelle = $libelle;
    }

    function setLesUsers($lesUsers): void {
        $this->lesUsers = $lesUsers;
    }

}