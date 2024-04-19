<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateUserResponse
{

    /**
     * @var User $CreateUserResult
     */
    protected $CreateUserResult = null;

    /**
     * @param User $CreateUserResult
     */
    public function __construct($CreateUserResult)
    {
      $this->CreateUserResult = $CreateUserResult;
    }

    /**
     * @return User
     */
    public function getCreateUserResult()
    {
      return $this->CreateUserResult;
    }

    /**
     * @param User $CreateUserResult
     * @return \WSD\BrightSignApi\Entity\Application\CreateUserResponse
     */
    public function setCreateUserResult($CreateUserResult)
    {
      $this->CreateUserResult = $CreateUserResult;
      return $this;
    }

}
