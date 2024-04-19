<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class User
{

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var string $Description
     */
    protected $Description = null;

    /**
     * @var string $Email
     */
    protected $Email = null;

    /**
     * @var string $FirstName
     */
    protected $FirstName = null;

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
     * @var \DateTime $LastLoginDate
     */
    protected $LastLoginDate = null;

    /**
     * @var string $LastName
     */
    protected $LastName = null;

    /**
     * @var string $Login
     */
    protected $Login = null;

    /**
     * @var string $Password
     */
    protected $Password = null;

    /**
     * @var string $RoleName
     */
    protected $RoleName = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\User
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
     * @return string
     */
    public function getDescription()
    {
      return $this->Description;
    }

    /**
     * @param string $Description
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setDescription($Description)
    {
      $this->Description = $Description;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->Email;
    }

    /**
     * @param string $Email
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setEmail($Email)
    {
      $this->Email = $Email;
      return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
      return $this->FirstName;
    }

    /**
     * @param string $FirstName
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setFirstName($FirstName)
    {
      $this->FirstName = $FirstName;
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
     * @return \WSD\BrightSignApi\Entity\Application\User
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
     * @return \WSD\BrightSignApi\Entity\Application\User
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
     * @return \WSD\BrightSignApi\Entity\Application\User
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
     * @return \DateTime
     */
    public function getLastLoginDate()
    {
      if ($this->LastLoginDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastLoginDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastLoginDate
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setLastLoginDate(\DateTime $LastLoginDate = null)
    {
      if ($LastLoginDate == null) {
       $this->LastLoginDate = null;
      } else {
        $this->LastLoginDate = $LastLoginDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
      return $this->LastName;
    }

    /**
     * @param string $LastName
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setLastName($LastName)
    {
      $this->LastName = $LastName;
      return $this;
    }

    /**
     * @return string
     */
    public function getLogin()
    {
      return $this->Login;
    }

    /**
     * @param string $Login
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setLogin($Login)
    {
      $this->Login = $Login;
      return $this;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->Password;
    }

    /**
     * @param string $Password
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setPassword($Password)
    {
      $this->Password = $Password;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
      return $this->RoleName;
    }

    /**
     * @param string $RoleName
     * @return \WSD\BrightSignApi\Entity\Application\User
     */
    public function setRoleName($RoleName)
    {
      $this->RoleName = $RoleName;
      return $this;
    }

}
