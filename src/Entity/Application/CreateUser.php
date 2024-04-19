<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateUser
{

    /**
     * @var User $user
     */
    protected $user = null;

    /**
     * @param User $user
     */
    public function __construct($user)
    {
      $this->user = $user;
    }

    /**
     * @return User
     */
    public function getUser()
    {
      return $this->user;
    }

    /**
     * @param User $user
     * @return \WSD\BrightSignApi\Entity\Application\CreateUser
     */
    public function setUser($user)
    {
      $this->user = $user;
      return $this;
    }

}
