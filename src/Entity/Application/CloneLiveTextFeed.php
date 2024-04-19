<?php

namespace WSD\BrightSignApi\Entity\Application;

class CloneLiveTextFeed
{

    /**
     * @var string $feedUrl
     */
    protected $feedUrl = null;

    /**
     * @param string $feedUrl
     */
    public function __construct($feedUrl)
    {
      $this->feedUrl = $feedUrl;
    }

    /**
     * @return string
     */
    public function getFeedUrl()
    {
      return $this->feedUrl;
    }

    /**
     * @param string $feedUrl
     * @return \WSD\BrightSignApi\Entity\Application\CloneLiveTextFeed
     */
    public function setFeedUrl($feedUrl)
    {
      $this->feedUrl = $feedUrl;
      return $this;
    }

}
