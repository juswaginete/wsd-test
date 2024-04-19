<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateAccountResponse
{

    /**
     * @var Account $CreateAccountResult
     */
    protected $CreateAccountResult = null;

    /**
     * @param Account $CreateAccountResult
     */
    public function __construct($CreateAccountResult)
    {
      $this->CreateAccountResult = $CreateAccountResult;
    }

    /**
     * @return Account
     */
    public function getCreateAccountResult()
    {
      return $this->CreateAccountResult;
    }

    /**
     * @param Account $CreateAccountResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateAccountResponse
     */
    public function setCreateAccountResult($CreateAccountResult)
    {
      $this->CreateAccountResult = $CreateAccountResult;
      return $this;
    }

}
