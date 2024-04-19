<?php

namespace WSD\BrightSignApi\Entity\Application;

use WSD\BrightSignApi\Api;

class BrightWallPresentation
{

    /**
     * @var AnalogOutputMode $AnalogOutput1
     */
    protected $AnalogOutput1 = null;

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
     * @var string $AutorunVersion
     */
    protected $AutorunVersion = null;

    /**
     * @var BrightWallConfiguration $Configuration
     */
    protected $Configuration = null;

    /**
     * @var \DateTime $CreationDate
     */
    protected $CreationDate = null;

    /**
     * @var ArrayOfBrightWallGroupInfo $Groups
     */
    protected $Groups = null;

    /**
     * @var HDMIOutputMode $HDMIOutput
     */
    protected $HDMIOutput = null;

    /**
     * @var int $Id
     */
    protected $Id = null;

    /**
     * @var boolean $IsRegular
     */
    protected $IsRegular = null;

    /**
     * @var \DateTime $LastModifiedDate
     */
    protected $LastModifiedDate = null;

    /**
     * @var string $Name
     */
    protected $Name = null;

    /**
     * @var FileInfo $ProjectFile
     */
    protected $ProjectFile = null;

    /**
     * @var SPDIFOutputMode $SPDIFOutput
     */
    protected $SPDIFOutput = null;

    /**
     * @var ArrayOfBrightWallScreen $Screens
     */
    protected $Screens = null;

    /**
     * @var USBOutputMode $USBOutput
     */
    protected $USBOutput = null;

    /**
     * @var ViewMode $ViewMode
     */
    protected $ViewMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AnalogOutputMode
     */
    public function getAnalogOutput1()
    {
      return $this->AnalogOutput1;
    }

    /**
     * @param AnalogOutputMode $AnalogOutput1
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setAnalogOutput1($AnalogOutput1)
    {
      $this->AnalogOutput1 = $AnalogOutput1;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setAudioMixing($AudioMixing)
    {
      $this->AudioMixing = $AudioMixing;
      return $this;
    }

    /**
     * @return string
     */
    public function getAutorunVersion()
    {
      return $this->AutorunVersion;
    }

    /**
     * @param string $AutorunVersion
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setAutorunVersion($AutorunVersion)
    {
      $this->AutorunVersion = $AutorunVersion;
      return $this;
    }

    /**
     * @return BrightWallConfiguration
     */
    public function getConfiguration()
    {
      return $this->Configuration;
    }

    /**
     * @param BrightWallConfiguration $Configuration
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setConfiguration($Configuration)
    {
      $this->Configuration = $Configuration;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getCreationDate()
    {
      if ($this->CreationDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->CreationDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $CreationDate
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setCreationDate(\DateTime $CreationDate = null)
    {
      if ($CreationDate == null) {
       $this->CreationDate = null;
      } else {
        $this->CreationDate = $CreationDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
      return $this;
    }

    /**
     * @return ArrayOfBrightWallGroupInfo
     */
    public function getGroups()
    {
      return $this->Groups;
    }

    /**
     * @param ArrayOfBrightWallGroupInfo $Groups
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setGroups($Groups)
    {
      $this->Groups = $Groups;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setHDMIOutput($HDMIOutput)
    {
      $this->HDMIOutput = $HDMIOutput;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setId($Id)
    {
      $this->Id = $Id;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRegular()
    {
      return $this->IsRegular;
    }

    /**
     * @param boolean $IsRegular
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setIsRegular($IsRegular)
    {
      $this->IsRegular = $IsRegular;
      return $this;
    }

    /**
     * @return \DateTime
     */
    public function getLastModifiedDate()
    {
      if ($this->LastModifiedDate == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->LastModifiedDate, new \DateTimeZone('UTC'));
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $LastModifiedDate
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setLastModifiedDate(\DateTime $LastModifiedDate = null)
    {
      if ($LastModifiedDate == null) {
       $this->LastModifiedDate = null;
      } else {
        $this->LastModifiedDate = $LastModifiedDate->setTimezone(new \DateTimeZone('UTC'))->format(Api::DATETIME_FORMAT);
      }
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setName($Name)
    {
      $this->Name = $Name;
      return $this;
    }

    /**
     * @return FileInfo
     */
    public function getProjectFile()
    {
      return $this->ProjectFile;
    }

    /**
     * @param FileInfo $ProjectFile
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setProjectFile($ProjectFile)
    {
      $this->ProjectFile = $ProjectFile;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setSPDIFOutput($SPDIFOutput)
    {
      $this->SPDIFOutput = $SPDIFOutput;
      return $this;
    }

    /**
     * @return ArrayOfBrightWallScreen
     */
    public function getScreens()
    {
      return $this->Screens;
    }

    /**
     * @param ArrayOfBrightWallScreen $Screens
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setScreens($Screens)
    {
      $this->Screens = $Screens;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setUSBOutput($USBOutput)
    {
      $this->USBOutput = $USBOutput;
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
     * @return \WSD\BrightSignApi\Entity\Application\BrightWallPresentation
     */
    public function setViewMode($ViewMode)
    {
      $this->ViewMode = $ViewMode;
      return $this;
    }

}
