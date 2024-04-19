<?php

namespace WSD\BrightSignApi\Entity\Application;

class AuthenticateResponse
{

    /**
     * @var User $AuthenticateResult
     */
    protected $AuthenticateResult = null;

    /**
     * @param User $AuthenticateResult
     */
    public function __construct($AuthenticateResult)
    {
      $this->AuthenticateResult = $AuthenticateResult;
    }

    /**
     * @return User
     */
    public function getAuthenticateResult()
    {
      return $this->AuthenticateResult;
    }

    /**
     * @param User $AuthenticateResult
     * @return \WSD\BrightSignApi\Entity\Application\AuthenticateResponse
     */
    public function setAuthenticateResult($AuthenticateResult)
    {
      $this->AuthenticateResult = $AuthenticateResult;
      return $this;
    }

}
