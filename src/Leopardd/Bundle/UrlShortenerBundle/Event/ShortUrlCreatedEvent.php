<?php

namespace Leopardd\Bundle\UrlShortenerBundle\Event;

use Symfony\Component\EventDispatcher\Event;
use Leopardd\Bundle\UrlShortenerBundle\Entity\ShortUrlInterface;

/**
 * Class ShortUrlCreatedEvent
 * @package Leopardd\Bundle\UrlShortenerBundle\Event
 */
class ShortUrlCreatedEvent extends Event
{
    /** @var ShortUrlInterface */
    private $shortUrl;

    /**
     * ShortUrlCreatedEvent constructor.
     * @param ShortUrlInterface $shortUrl
     */
    public function __construct($shortUrl)
    {
        $this->shortUrl = $shortUrl;
    }

    /**
     * @return ShortUrlInterface
     */
    public function getShortUrl()
    {
        return $this->shortUrl;
    }
}
