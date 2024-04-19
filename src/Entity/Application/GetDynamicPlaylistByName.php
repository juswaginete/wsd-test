<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDynamicPlaylistByName
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var boolean $loadContent
     */
    protected $loadContent = null;

    /**
     * @param string $name
     * @param boolean $loadContent
     */
    public function __construct($name, $loadContent)
    {
      $this->name = $name;
      $this->loadContent = $loadContent;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylistByName
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getLoadContent()
    {
      return $this->loadContent;
    }

    /**
     * @param boolean $loadContent
     * @return \WSD\BrightSignApi\Entity\Application\GetDynamicPlaylistByName
     */
    public function setLoadContent($loadContent)
    {
      $this->loadContent = $loadContent;
      return $this;
    }

}
