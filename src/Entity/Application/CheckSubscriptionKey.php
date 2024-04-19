<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckSubscriptionKey
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @param string $key
     */
    public function __construct($key)
    {
      $this->key = $key;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \WSD\BrightSignApi\Entity\Application\CheckSubscriptionKey
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
