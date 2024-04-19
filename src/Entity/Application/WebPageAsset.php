<?php

namespace WSD\BrightSignApi\Entity\Application;

class WebPageAsset
{

    /**
     * @var string $FileHash
     */
    protected $FileHash = null;

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var int $FileSize
     */
    protected $FileSize = null;

    /**
     * @var string $PhysicalPath
     */
    protected $PhysicalPath = null;

    /**
     * @var string $RelativePath
     */
    protected $RelativePath = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return string
     */
    public function getFileHash()
    {
      return $this->FileHash;
    }

    /**
     * @param string $FileHash
     * @return \WSD\BrightSignApi\Entity\Application\WebPageAsset
     */
    public function setFileHash($FileHash)
    {
      $this->FileHash = $FileHash;
      return $this;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
      return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \WSD\BrightSignApi\Entity\Application\WebPageAsset
     */
    public function setFileName($FileName)
    {
      $this->FileName = $FileName;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->FileSize;
    }

    /**
     * @param int $FileSize
     * @return \WSD\BrightSignApi\Entity\Application\WebPageAsset
     */
    public function setFileSize($FileSize)
    {
      $this->FileSize = $FileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhysicalPath()
    {
      return $this->PhysicalPath;
    }

    /**
     * @param string $PhysicalPath
     * @return \WSD\BrightSignApi\Entity\Application\WebPageAsset
     */
    public function setPhysicalPath($PhysicalPath)
    {
      $this->PhysicalPath = $PhysicalPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getRelativePath()
    {
      return $this->RelativePath;
    }

    /**
     * @param string $RelativePath
     * @return \WSD\BrightSignApi\Entity\Application\WebPageAsset
     */
    public function setRelativePath($RelativePath)
    {
      $this->RelativePath = $RelativePath;
      return $this;
    }

}
