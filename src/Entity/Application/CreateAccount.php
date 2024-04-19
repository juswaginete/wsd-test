<?php

namespace WSD\BrightSignApi\Entity\Application;

class CreateAccount
{

    /**
     * @var Account $account
     */
    protected $account = null;

    /**
     * @param Account $account
     */
    public function __construct($account)
    {
      $this->account = $account;
    }

    /**
     * @return Account
     */
    public function getAccount()
    {
      return $this->account;
    }

    /**
     * @param Account $account
     * @return \WSD\BrightSignApi\Entity\Application\CreateAccount
     */
    public function setAccount($account)
    {
      $this->account = $account;
      return $this;
    }

}
