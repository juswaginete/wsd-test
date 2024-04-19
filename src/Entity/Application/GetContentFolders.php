<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetContentFolders
{

    /**
     * @var string $virtualPath
     */
    protected $virtualPath = null;

    /**
     * @param string $virtualPath
     */
    public function __construct($virtualPath)
    {
      $this->virtualPath = $virtualPath;
    }

    /**
     * @return string
     */
    public function getVirtualPath()
    {
      return $this->virtualPath;
    }

    /**
     * @param string $virtualPath
     * @return \WSD\BrightSignApi\Entity\Application\GetContentFolders
     */
    public function setVirtualPath($virtualPath)
    {
      $this->virtualPath = $virtualPath;
      return $this;
    }

}
