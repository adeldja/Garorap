<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
/**
 * Description of TypeReservation
 *
 * @author lucas.lafourcade
 */
/**
 * @ORM\Entity
 * @ORM\Table(name="TypeReservation")
 */
class TypeReservation {
    /** @ORM\Id
     * @ORM\GeneratedValue
     * * @ORM\Column(type="integer")
     */
    protected $id;
    /**
     * @ORM\Column(type="string")
     * 
     */
    protected $periode;
    /**
     * @ORM\Column(type="integer")
     * 
     */
    protected $prix;
    /**
     * @ORM\OneToMany(targetEntity="User", mappedBy="unTypeReservation")
     */
    protected $lesUtilisateurs;
    
    public function __construct() {
       $this->lesUtilisateurs = new ArrayCollection();
    }
    function getId() {
        return $this->id;
    }

    function getPeriode() {
        return $this->periode;
    }

    function getPrix() {
        return $this->prix;
    }

    function getLesUtilisateurs() {
        return $this->lesUtilisateurs;
    }

    function setId($id): void {
        $this->id = $id;
    }

    function setPeriode($periode): void {
        $this->periode = $periode;
    }

    function setPrix($prix): void {
        $this->prix = $prix;
    }

    function setLesUtilisateurs($lesUtilisateurs): void {
        $this->lesUtilisateurs = $lesUtilisateurs;
    }


}
