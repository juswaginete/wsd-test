<?php

namespace WSD\BrightSignApi\Entity\Application;

class ImagesPresentationZone extends PresentationZone
{

    /**
     * @var ImageMode $ImageMode
     */
    protected $ImageMode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return ImageMode
     */
    public function getImageMode()
    {
      return $this->ImageMode;
    }

    /**
     * @param ImageMode $ImageMode
     * @return \WSD\BrightSignApi\Entity\Application\ImagesPresentationZone
     */
    public function setImageMode($ImageMode)
    {
      $this->ImageMode = $ImageMode;
      return $this;
    }

}
