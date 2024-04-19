<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeviceLogsSettings
{

    /**
     * @var boolean $EnableDiagnosticLog
     */
    protected $EnableDiagnosticLog = null;

    /**
     * @var boolean $EnableEventLog
     */
    protected $EnableEventLog = null;

    /**
     * @var boolean $EnablePlaybackLog
     */
    protected $EnablePlaybackLog = null;

    /**
     * @var boolean $EnableStateLog
     */
    protected $EnableStateLog = null;

    /**
     * @var boolean $EnableVariableLog
     */
    protected $EnableVariableLog = null;

    /**
     * @var boolean $UploadAtBoot
     */
    protected $UploadAtBoot = null;

    /**
     * @var duration $UploadTime
     */
    protected $UploadTime = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return boolean
     */
    public function getEnableDiagnosticLog()
    {
      return $this->EnableDiagnosticLog;
    }

    /**
     * @param boolean $EnableDiagnosticLog
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setEnableDiagnosticLog($EnableDiagnosticLog)
    {
      $this->EnableDiagnosticLog = $EnableDiagnosticLog;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableEventLog()
    {
      return $this->EnableEventLog;
    }

    /**
     * @param boolean $EnableEventLog
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setEnableEventLog($EnableEventLog)
    {
      $this->EnableEventLog = $EnableEventLog;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnablePlaybackLog()
    {
      return $this->EnablePlaybackLog;
    }

    /**
     * @param boolean $EnablePlaybackLog
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setEnablePlaybackLog($EnablePlaybackLog)
    {
      $this->EnablePlaybackLog = $EnablePlaybackLog;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableStateLog()
    {
      return $this->EnableStateLog;
    }

    /**
     * @param boolean $EnableStateLog
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setEnableStateLog($EnableStateLog)
    {
      $this->EnableStateLog = $EnableStateLog;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getEnableVariableLog()
    {
      return $this->EnableVariableLog;
    }

    /**
     * @param boolean $EnableVariableLog
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setEnableVariableLog($EnableVariableLog)
    {
      $this->EnableVariableLog = $EnableVariableLog;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUploadAtBoot()
    {
      return $this->UploadAtBoot;
    }

    /**
     * @param boolean $UploadAtBoot
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setUploadAtBoot($UploadAtBoot)
    {
      $this->UploadAtBoot = $UploadAtBoot;
      return $this;
    }

    /**
     * @return duration
     */
    public function getUploadTime()
    {
      return $this->UploadTime;
    }

    /**
     * @param duration $UploadTime
     * @return \WSD\BrightSignApi\Entity\Application\DeviceLogsSettings
     */
    public function setUploadTime($UploadTime)
    {
      $this->UploadTime = $UploadTime;
      return $this;
    }

}
