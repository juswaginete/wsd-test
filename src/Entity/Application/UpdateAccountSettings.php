<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateAccountSettings
{

    /**
     * @var int $accountId
     */
    protected $accountId = null;

    /**
     * @var boolean $restrictWebUiAccess
     */
    protected $restrictWebUiAccess = null;

    /**
     * @var boolean $restrictBrightAuthorAccess
     */
    protected $restrictBrightAuthorAccess = null;

    /**
     * @param int $accountId
     * @param boolean $restrictWebUiAccess
     * @param boolean $restrictBrightAuthorAccess
     */
    public function __construct($accountId, $restrictWebUiAccess, $restrictBrightAuthorAccess)
    {
      $this->accountId = $accountId;
      $this->restrictWebUiAccess = $restrictWebUiAccess;
      $this->restrictBrightAuthorAccess = $restrictBrightAuthorAccess;
    }

    /**
     * @return int
     */
    public function getAccountId()
    {
      return $this->accountId;
    }

    /**
     * @param int $accountId
     * @return \WSD\BrightSignApi\Entity\Application\UpdateAccountSettings
     */
    public function setAccountId($accountId)
    {
      $this->accountId = $accountId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictWebUiAccess()
    {
      return $this->restrictWebUiAccess;
    }

    /**
     * @param boolean $restrictWebUiAccess
     * @return \WSD\BrightSignApi\Entity\Application\UpdateAccountSettings
     */
    public function setRestrictWebUiAccess($restrictWebUiAccess)
    {
      $this->restrictWebUiAccess = $restrictWebUiAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictBrightAuthorAccess()
    {
      return $this->restrictBrightAuthorAccess;
    }

    /**
     * @param boolean $restrictBrightAuthorAccess
     * @return \WSD\BrightSignApi\Entity\Application\UpdateAccountSettings
     */
    public function setRestrictBrightAuthorAccess($restrictBrightAuthorAccess)
    {
      $this->restrictBrightAuthorAccess = $restrictBrightAuthorAccess;
      return $this;
    }

}
