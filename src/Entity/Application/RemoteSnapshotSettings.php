<?php

namespace WSD\BrightSignApi\Entity\Application;

class RemoteSnapshotSettings
{

    /**
     * @var duration $CaptureInterval
     */
    protected $CaptureInterval = null;

    /**
     * @var boolean $Enabled
     */
    protected $Enabled = null;

    /**
     * @var int $ImageQuality
     */
    protected $ImageQuality = null;

    /**
     * @var ScreenOrientation $ScreenOrientation
     */
    protected $ScreenOrientation = null;

    /**
     * @var int $ScreenShotsCountLimit
     */
    protected $ScreenShotsCountLimit = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return duration
     */
    public function getCaptureInterval()
    {
      return $this->CaptureInterval;
    }

    /**
     * @param duration $CaptureInterval
     * @return \WSD\BrightSignApi\Entity\Application\RemoteSnapshotSettings
     */
    public function setCaptureInterval($CaptureInterval)
    {
      $this->CaptureInterval = $CaptureInterval;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnabled()
    {
      return $this->Enabled;
    }

    /**
     * @param boolean $Enabled
     * @return \WSD\BrightSignApi\Entity\Application\RemoteSnapshotSettings
     */
    public function setEnabled($Enabled)
    {
      $this->Enabled = $Enabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getImageQuality()
    {
      return $this->ImageQuality;
    }

    /**
     * @param int $ImageQuality
     * @return \WSD\BrightSignApi\Entity\Application\RemoteSnapshotSettings
     */
    public function setImageQuality($ImageQuality)
    {
      $this->ImageQuality = $ImageQuality;
      return $this;
    }

    /**
     * @return ScreenOrientation
     */
    public function getScreenOrientation()
    {
      return $this->ScreenOrientation;
    }

    /**
     * @param ScreenOrientation $ScreenOrientation
     * @return \WSD\BrightSignApi\Entity\Application\RemoteSnapshotSettings
     */
    public function setScreenOrientation($ScreenOrientation)
    {
      $this->ScreenOrientation = $ScreenOrientation;
      return $this;
    }

    /**
     * @return int
     */
    public function getScreenShotsCountLimit()
    {
      return $this->ScreenShotsCountLimit;
    }

    /**
     * @param int $ScreenShotsCountLimit
     * @return \WSD\BrightSignApi\Entity\Application\RemoteSnapshotSettings
     */
    public function setScreenShotsCountLimit($ScreenShotsCountLimit)
    {
      $this->ScreenShotsCountLimit = $ScreenShotsCountLimit;
      return $this;
    }

}
