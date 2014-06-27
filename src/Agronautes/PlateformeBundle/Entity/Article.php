<?php

namespace Agronautes\PlateformeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Article
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Agronautes\PlateformeBundle\Entity\ArticleRepository")
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="headline", type="string", length=255)
     */
    private $headline;

    /**
     * @var string
     *
     * @ORM\Column(name="articleBody", type="text")
     */
    private $articleBody;

    /**
     * @var string
     *
     * @ORM\Column(name="articleSection", type="string", length=255)
     */
    private $articleSection;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateCreated", type="datetime")
     */
    private $dateCreated;

    /**
     * @var string
     *
     * @ORM\Column(name="dateModified", type="datetime",nullable=true)
     */
    private $dateModified;
	
	 /**
    * @ORM\Column(name="published", type="boolean")
    */
  private $published;
	
	
//CONSTRUCTEUR
	public function __construct()
	{
    $this->dateCreated = new \Datetime(); 
	}


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set headline
     *
     * @param string $headline
     * @return Article
     */
    public function setHeadline($headline)
    {
        $this->headline = $headline;

        return $this;
    }

    /**
     * Get headline
     *
     * @return string 
     */
    public function getHeadline()
    {
        return $this->headline;
    }

    /**
     * Set articleBody
     *
     * @param string $articleBody
     * @return Article
     */
    public function setArticleBody($articleBody)
    {
        $this->articleBody = $articleBody;

        return $this;
    }

    /**
     * Get articleBody
     *
     * @return string 
     */
    public function getArticleBody()
    {
        return $this->articleBody;
    }

    /**
     * Set articleSection
     *
     * @param string $articleSection
     * @return Article
     */
    public function setArticleSection($articleSection)
    {
        $this->articleSection = $articleSection;

        return $this;
    }

    /**
     * Get articleSection
     *
     * @return string 
     */
    public function getArticleSection()
    {
        return $this->articleSection;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     * @return Article
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime 
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param string $dateModified
     * @return Article
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return string 
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;

        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }
}
