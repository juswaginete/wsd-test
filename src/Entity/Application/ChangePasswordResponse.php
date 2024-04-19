<?php

namespace WSD\BrightSignApi\Entity\Application;

class ChangePasswordResponse
{

    /**
     * @var boolean $ChangePasswordResult
     */
    protected $ChangePasswordResult = null;

    /**
     * @param boolean $ChangePasswordResult
     */
    public function __construct($ChangePasswordResult)
    {
      $this->ChangePasswordResult = $ChangePasswordResult;
    }

    /**
     * @return boolean
     */
    public function getChangePasswordResult()
    {
      return $this->ChangePasswordResult;
    }

    /**
     * @param boolean $ChangePasswordResult
     * @return \WSD\BrightSignApi\Entity\Application\ChangePasswordResponse
     */
    public function setChangePasswordResult($ChangePasswordResult)
    {
      $this->ChangePasswordResult = $ChangePasswordResult;
      return $this;
    }

}
