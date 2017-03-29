<?php

namespace Leopardd\Bundle\UrlShortenerBundle\Entity;

use \DateTime as DateTime;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class ShortUrl
 * @package Leopardd\Bundle\UrlShortenerBundle\Entity
 * @ORM\Entity(repositoryClass="Leopardd\Bundle\UrlShortenerBundle\Repository\ShortUrlRepository")
 * @ORM\Table(name="short_url", indexes={@ORM\Index(name="idx", columns={"id"})})
 */
class ShortUrl implements ShortUrlInterface
{
    /**
     * @var int
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     * @ORM\Column(name="code", type="string", unique=true, nullable=true, options={"collation":"utf8_bin"})
     */
    protected $code;

    /**
     * @var string
     * @ORM\Column(name="url", type="string")
     */
    protected $url;

    /**
     * @var DateTime
     * @ORM\Column(name="created", type="datetime")
     */
    private $created;

    /**
     * ShortUrl constructor.
     */
    public function __construct()
    {
        $this->created = new DateTime();
    }

    /**
     * {@inheritdoc}
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * {@inheritdoc}
     */
    public function setCode($code)
    {
        $this->code = $code;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * {@inheritdoc}
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param DateTime $created
     * @return $this
     */
    public function setCreated($created)
    {
        $this->created = $created;

        return $this;
    }
}
