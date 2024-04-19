<?php

namespace WSD\BrightSignApi\Entity\Application;

class ChangePassword
{

    /**
     * @var string $newPassword
     */
    protected $newPassword = null;

    /**
     * @param string $newPassword
     */
    public function __construct($newPassword)
    {
      $this->newPassword = $newPassword;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
      return $this->newPassword;
    }

    /**
     * @param string $newPassword
     * @return \WSD\BrightSignApi\Entity\Application\ChangePassword
     */
    public function setNewPassword($newPassword)
    {
      $this->newPassword = $newPassword;
      return $this;
    }

}
