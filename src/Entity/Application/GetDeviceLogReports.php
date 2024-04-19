<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceLogReports
{

    /**
     * @var int $deviceId
     */
    protected $deviceId = null;

    /**
     * @var DeviceLogType $logType
     */
    protected $logType = null;

    /**
     * @var string $marker
     */
    protected $marker = null;

    /**
     * @var int $pageSize
     */
    protected $pageSize = null;

    /**
     * @param int $deviceId
     * @param DeviceLogType $logType
     * @param string $marker
     * @param int $pageSize
     */
    public function __construct($deviceId, $logType, $marker, $pageSize)
    {
      $this->deviceId = $deviceId;
      $this->logType = $logType;
      $this->marker = $marker;
      $this->pageSize = $pageSize;
    }

    /**
     * @return int
     */
    public function getDeviceId()
    {
      return $this->deviceId;
    }

    /**
     * @param int $deviceId
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceLogReports
     */
    public function setDeviceId($deviceId)
    {
      $this->deviceId = $deviceId;
      return $this;
    }

    /**
     * @return DeviceLogType
     */
    public function getLogType()
    {
      return $this->logType;
    }

    /**
     * @param DeviceLogType $logType
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceLogReports
     */
    public function setLogType($logType)
    {
      $this->logType = $logType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarker()
    {
      return $this->marker;
    }

    /**
     * @param string $marker
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceLogReports
     */
    public function setMarker($marker)
    {
      $this->marker = $marker;
      return $this;
    }

    /**
     * @return int
     */
    public function getPageSize()
    {
      return $this->pageSize;
    }

    /**
     * @param int $pageSize
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceLogReports
     */
    public function setPageSize($pageSize)
    {
      $this->pageSize = $pageSize;
      return $this;
    }

}
