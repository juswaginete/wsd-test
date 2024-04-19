<?php

namespace WSD\BrightSignApi\Entity\Application;

class PresentationContent
{

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var string $StateName
     */
    protected $StateName = null;

    
    public function __construct()
    {
    
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
     * @return \WSD\BrightSignApi\Entity\Application\PresentationContent
     */
    public function setId($Id)
    {
      $this->Id = $Id;
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
     * @return \WSD\BrightSignApi\Entity\Application\PresentationContent
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return string
     */
    public function getStateName()
    {
      return $this->StateName;
    }

    /**
     * @param string $StateName
     * @return \WSD\BrightSignApi\Entity\Application\PresentationContent
     */
    public function setStateName($StateName)
    {
      $this->StateName = $StateName;
      return $this;
    }

}
