<?php

namespace WSD\BrightSignApi\Entity\Application;

class CheckSubscriptionKeyResponse
{

    /**
     * @var boolean $CheckSubscriptionKeyResult
     */
    protected $CheckSubscriptionKeyResult = null;

    /**
     * @param boolean $CheckSubscriptionKeyResult
     */
    public function __construct($CheckSubscriptionKeyResult)
    {
      $this->CheckSubscriptionKeyResult = $CheckSubscriptionKeyResult;
    }

    /**
     * @return boolean
     */
    public function getCheckSubscriptionKeyResult()
    {
      return $this->CheckSubscriptionKeyResult;
    }

    /**
     * @param boolean $CheckSubscriptionKeyResult
     * @return \WSD\BrightSignApi\Entity\Application\CheckSubscriptionKeyResponse
     */
    public function setCheckSubscriptionKeyResult($CheckSubscriptionKeyResult)
    {
      $this->CheckSubscriptionKeyResult = $CheckSubscriptionKeyResult;
      return $this;
    }

}
