<?php

namespace WSD\BrightSignApi\Entity\Application;

class PresentationZone
{

    /**
     * @var ArrayOfPresentationContent $Content
     */
    protected $Content = null;

    /**
     * @var int $Height
     */
    protected $Height = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var int $Width
     */
    protected $Width = null;

    /**
     * @var int $X
     */
    protected $X = null;

    /**
     * @var int $Y
     */
    protected $Y = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ArrayOfPresentationContent
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param ArrayOfPresentationContent $Content
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
     */
    public function setContent($Content)
    {
      $this->Content = $Content;
      return $this;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
      return $this->Height;
    }

    /**
     * @param int $Height
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
     */
    public function setHeight($Height)
    {
      $this->Height = $Height;
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
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
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
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
      return $this->Width;
    }

    /**
     * @param int $Width
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
     */
    public function setWidth($Width)
    {
      $this->Width = $Width;
      return $this;
    }

    /**
     * @return int
     */
    public function getX()
    {
      return $this->X;
    }

    /**
     * @param int $X
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
     */
    public function setX($X)
    {
      $this->X = $X;
      return $this;
    }

    /**
     * @return int
     */
    public function getY()
    {
      return $this->Y;
    }

    /**
     * @param int $Y
     * @return \WSD\BrightSignApi\Entity\Application\PresentationZone
     */
    public function setY($Y)
    {
      $this->Y = $Y;
      return $this;
    }

}
