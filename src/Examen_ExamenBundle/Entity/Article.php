<?php

namespace Examen_ExamenBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="Examen_ExamenBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie_article", type="string", length=255)
     */
    private $categorieArticle;

    /**
     * @var bool
     *
     * @ORM\Column(name="etat_publication", type="boolean")
     */
    private $etatPublication;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_parution", type="datetime")
     */
    private $dateParution;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     *
     * @return Article
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;

        return $this;
    }

    /**
     * Get auteur
     *
     * @return string
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set categorieArticle
     *
     * @param string $categorieArticle
     *
     * @return Article
     */
    public function setCategorieArticle($categorieArticle)
    {
        $this->categorieArticle = $categorieArticle;

        return $this;
    }

    /**
     * Get categorieArticle
     *
     * @return string
     */
    public function getCategorieArticle()
    {
        return $this->categorieArticle;
    }

    /**
     * Set etatPublication
     *
     * @param boolean $etatPublication
     *
     * @return Article
     */
    public function setEtatPublication($etatPublication)
    {
        $this->etatPublication = $etatPublication;

        return $this;
    }

    /**
     * Get etatPublication
     *
     * @return bool
     */
    public function getEtatPublication()
    {
        return $this->etatPublication;
    }

    /**
     * Set dateParution
     *
     * @param \DateTime $dateParution
     *
     * @return Article
     */
    public function setDateParution($dateParution)
    {
        $this->dateParution = $dateParution;

        return $this;
    }

    /**
     * Get dateParution
     *
     * @return \DateTime
     */
    public function getDateParution()
    {
        return $this->dateParution;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}
