<?php

namespace WSD\BrightSignApi\Entity\Application;

class EnhancedAudioPresentationZone extends PresentationZone
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
     * @var int $FadeLength
     */
    protected $FadeLength = null;

    /**
     * @var HDMIOutputMode $HDMIOutput
     */
    protected $HDMIOutput = null;

    /**
     * @var SPDIFOutputMode $SPDIFOutput
     */
    protected $SPDIFOutput = null;

    /**
     * @var USBOutputMode $USBOutput
     */
    protected $USBOutput = null;

    
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
     */
    public function setAudioVolume($AudioVolume)
    {
      $this->AudioVolume = $AudioVolume;
      return $this;
    }

    /**
     * @return int
     */
    public function getFadeLength()
    {
      return $this->FadeLength;
    }

    /**
     * @param int $FadeLength
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
     */
    public function setFadeLength($FadeLength)
    {
      $this->FadeLength = $FadeLength;
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
     */
    public function setHDMIOutput($HDMIOutput)
    {
      $this->HDMIOutput = $HDMIOutput;
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
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
     * @return \WSD\BrightSignApi\Entity\Application\EnhancedAudioPresentationZone
     */
    public function setUSBOutput($USBOutput)
    {
      $this->USBOutput = $USBOutput;
      return $this;
    }

}
