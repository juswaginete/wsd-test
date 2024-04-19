<?php

namespace WSD\BrightSignApi\Entity\Application;

class ActivateSubscriptionKeyResponse
{

    /**
     * @var boolean $ActivateSubscriptionKeyResult
     */
    protected $ActivateSubscriptionKeyResult = null;

    /**
     * @param boolean $ActivateSubscriptionKeyResult
     */
    public function __construct($ActivateSubscriptionKeyResult)
    {
      $this->ActivateSubscriptionKeyResult = $ActivateSubscriptionKeyResult;
    }

    /**
     * @return boolean
     */
    public function getActivateSubscriptionKeyResult()
    {
      return $this->ActivateSubscriptionKeyResult;
    }

    /**
     * @param boolean $ActivateSubscriptionKeyResult
     * @return \WSD\BrightSignApi\Entity\Application\ActivateSubscriptionKeyResponse
     */
    public function setActivateSubscriptionKeyResult($ActivateSubscriptionKeyResult)
    {
      $this->ActivateSubscriptionKeyResult = $ActivateSubscriptionKeyResult;
      return $this;
    }

}
