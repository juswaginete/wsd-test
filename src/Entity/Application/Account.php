<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class Account
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var \DateTime $DeadlineDate
     */
    protected $DeadlineDate = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsLockedOut
     */
    protected $IsLockedOut = null;

    /**
     * @var \DateTime $LastLockoutDate
     */
    protected $LastLockoutDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var boolean $RestrictBrightAuthorAccess
     */
    protected $RestrictBrightAuthorAccess = null;

    /**
     * @var boolean $RestrictWebUIAccess
     */
    protected $RestrictWebUIAccess = null;

    /**
     * @var ArrayOfUser $Users
     */
    protected $Users = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setCreationDate(\DateTime $CreationDate = null)
    {
      if ($CreationDate == null) {
       $this->CreationDate = null;
      } else {
        $this->CreationDate = $CreationDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getDeadlineDate()
    {
      if ($this->DeadlineDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->DeadlineDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $DeadlineDate
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setDeadlineDate(\DateTime $DeadlineDate = null)
    {
      if ($DeadlineDate == null) {
       $this->DeadlineDate = null;
      } else {
        $this->DeadlineDate = $DeadlineDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->Id;
    }

    /**
     * @param int $Id
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLockedOut()
    {
      return $this->IsLockedOut;
    }

    /**
     * @param boolean $IsLockedOut
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setIsLockedOut($IsLockedOut)
    {
      $this->IsLockedOut = $IsLockedOut;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastLockoutDate()
    {
      if ($this->LastLockoutDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastLockoutDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastLockoutDate
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setLastLockoutDate(\DateTime $LastLockoutDate = null)
    {
      if ($LastLockoutDate == null) {
       $this->LastLockoutDate = null;
      } else {
        $this->LastLockoutDate = $LastLockoutDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->Name;
    }

    /**
     * @param string $Name
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictBrightAuthorAccess()
    {
      return $this->RestrictBrightAuthorAccess;
    }

    /**
     * @param boolean $RestrictBrightAuthorAccess
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setRestrictBrightAuthorAccess($RestrictBrightAuthorAccess)
    {
      $this->RestrictBrightAuthorAccess = $RestrictBrightAuthorAccess;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRestrictWebUIAccess()
    {
      return $this->RestrictWebUIAccess;
    }

    /**
     * @param boolean $RestrictWebUIAccess
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setRestrictWebUIAccess($RestrictWebUIAccess)
    {
      $this->RestrictWebUIAccess = $RestrictWebUIAccess;
      return $this;
    }

    /**
     * @return ArrayOfUser
     */
    public function getUsers()
    {
      return $this->Users;
    }

    /**
     * @param ArrayOfUser $Users
     * @return \WSD\BrightSignApi\Entity\Application\Account
     */
    public function setUsers($Users)
    {
      $this->Users = $Users;
      return $this;
    }

}
