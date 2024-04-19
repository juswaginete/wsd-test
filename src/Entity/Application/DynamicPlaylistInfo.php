<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\JsonSerializeTrait;

class DynamicPlaylistInfo implements \JsonSerializable
{

    use JsonSerializeTrait;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistInfo
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
     * @return \WSD\BrightSignApi\Entity\Application\DynamicPlaylistInfo
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

}
