<?php

namespace WSD\BrightSignApi\Entity\Application;

class VideoOrImagesPresentationZone extends PresentationZone
{

    /**
     * @var AnalogOutputMode $AnalogOutput
     */
    protected $AnalogOutput = null;

    /**
     * @var AnalogOutputMode $AnalogOutput2
     */
    protected $AnalogOutput2 = null;

    /**
     * @var AnalogOutputMode $AnalogOutput3
     */
    protected $AnalogOutput3 = null;

    /**
     * @var AudioMixingType $AudioMixing
     */
    protected $AudioMixing = null;

    /**
     * @var int $AudioVolume
     */
    protected $AudioVolume = null;

    /**
     * @var HDMIOutputMode $HDMIOutput
     */
    protected $HDMIOutput = null;

    /**
     * @var ImageMode $ImageMode
     */
    protected $ImageMode = null;

    /**
     * @var boolean $IsFront
     */
    protected $IsFront = null;

    /**
     * @var SPDIFOutputMode $SPDIFOutput
     */
    protected $SPDIFOutput = null;

    /**
     * @var USBOutputMode $USBOutput
     */
    protected $USBOutput = null;

    /**
     * @var int $VideoVolume
     */
    protected $VideoVolume = null;

    /**
     * @var ViewMode $ViewMode
     */
    protected $ViewMode = null;

    
    public function __construct()
    {
      parent::__construct();
    }

    /**
     * @return AnalogOutputMode
     */
    public function getAnalogOutput()
    {
      return $this->AnalogOutput;
    }

    /**
     * @param AnalogOutputMode $AnalogOutput
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setAnalogOutput($AnalogOutput)
    {
      $this->AnalogOutput = $AnalogOutput;
      return $this;
    }

    /**
     * @return AnalogOutputMode
     */
    public function getAnalogOutput2()
    {
      return $this->AnalogOutput2;
    }

    /**
     * @param AnalogOutputMode $AnalogOutput2
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setAnalogOutput2($AnalogOutput2)
    {
      $this->AnalogOutput2 = $AnalogOutput2;
      return $this;
    }

    /**
     * @return AnalogOutputMode
     */
    public function getAnalogOutput3()
    {
      return $this->AnalogOutput3;
    }

    /**
     * @param AnalogOutputMode $AnalogOutput3
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setAnalogOutput3($AnalogOutput3)
    {
      $this->AnalogOutput3 = $AnalogOutput3;
      return $this;
    }

    /**
     * @return AudioMixingType
     */
    public function getAudioMixing()
    {
      return $this->AudioMixing;
    }

    /**
     * @param AudioMixingType $AudioMixing
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setAudioMixing($AudioMixing)
    {
      $this->AudioMixing = $AudioMixing;
      return $this;
    }

    /**
     * @return int
     */
    public function getAudioVolume()
    {
      return $this->AudioVolume;
    }

    /**
     * @param int $AudioVolume
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setAudioVolume($AudioVolume)
    {
      $this->AudioVolume = $AudioVolume;
      return $this;
    }

    /**
     * @return HDMIOutputMode
     */
    public function getHDMIOutput()
    {
      return $this->HDMIOutput;
    }

    /**
     * @param HDMIOutputMode $HDMIOutput
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setHDMIOutput($HDMIOutput)
    {
      $this->HDMIOutput = $HDMIOutput;
      return $this;
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
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setImageMode($ImageMode)
    {
      $this->ImageMode = $ImageMode;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsFront()
    {
      return $this->IsFront;
    }

    /**
     * @param boolean $IsFront
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setIsFront($IsFront)
    {
      $this->IsFront = $IsFront;
      return $this;
    }

    /**
     * @return SPDIFOutputMode
     */
    public function getSPDIFOutput()
    {
      return $this->SPDIFOutput;
    }

    /**
     * @param SPDIFOutputMode $SPDIFOutput
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setSPDIFOutput($SPDIFOutput)
    {
      $this->SPDIFOutput = $SPDIFOutput;
      return $this;
    }

    /**
     * @return USBOutputMode
     */
    public function getUSBOutput()
    {
      return $this->USBOutput;
    }

    /**
     * @param USBOutputMode $USBOutput
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setUSBOutput($USBOutput)
    {
      $this->USBOutput = $USBOutput;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoVolume()
    {
      return $this->VideoVolume;
    }

    /**
     * @param int $VideoVolume
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setVideoVolume($VideoVolume)
    {
      $this->VideoVolume = $VideoVolume;
      return $this;
    }

    /**
     * @return ViewMode
     */
    public function getViewMode()
    {
      return $this->ViewMode;
    }

    /**
     * @param ViewMode $ViewMode
     * @return \WSD\BrightSignApi\Entity\Application\VideoOrImagesPresentationZone
     */
    public function setViewMode($ViewMode)
    {
      $this->ViewMode = $ViewMode;
      return $this;
    }

}
