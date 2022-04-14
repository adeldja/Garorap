<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nom;
    /**
     * @ORM\Column(type="string")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json", nullable=true)
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;
    /**
     * @ORM\Column(type="integer")
     */
    private $solde;
    /**
     * @ORM\Column(type="boolean")
     */
    private $revoquer;
    /**
     * @ORM\Column(type="boolean")
     */
    private $DejaPasser;
    /**
     * @ORM\ManyToOne(targetEntity="TypeReservation", inversedBy="lesUtilisateurs",)
     */
    protected $unTypeReservation;
    /**
     * @ORM\ManyToMany(targetEntity="TypeRole", mappedBy="lesUsers")
    */
    protected $lesTypeRoles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }
    function getNom() {
        return $this->nom;
    }

    function getPrenom() {
        return $this->prenom;
    }

    function getSolde() {
        return $this->solde;
    }

    function getRevoquer() {
        return $this->revoquer;
    }

    function getDejaPasser() {
        return $this->DejaPasser;
    }

    function getUnTypeReservation() {
        return $this->unTypeReservation;
    }

    function setNom($nom): void {
        $this->nom = $nom;
    }

    function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }

    function setSolde($solde): void {
        $this->solde = $solde;
    }

    function setRevoquer($revoquer): void {
        $this->revoquer = $revoquer;
    }

    function setDejaPasser($DejaPasser): void {
        $this->DejaPasser = $DejaPasser;
    }

    function setUnTypeReservation($unTypeReservation): void {
        $this->unTypeReservation = $unTypeReservation;
    }

    
    
    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
