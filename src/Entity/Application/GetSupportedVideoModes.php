<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetSupportedVideoModes
{

    /**
     * @var DeviceModel $deviceModel
     */
    protected $deviceModel = null;

    /**
     * @var ConnectorType $connectorType
     */
    protected $connectorType = null;

    /**
     * @param DeviceModel $deviceModel
     * @param ConnectorType $connectorType
     */
    public function __construct($deviceModel, $connectorType)
    {
      $this->deviceModel = $deviceModel;
      $this->connectorType = $connectorType;
    }

    /**
     * @return DeviceModel
     */
    public function getDeviceModel()
    {
      return $this->deviceModel;
    }

    /**
     * @param DeviceModel $deviceModel
     * @return \WSD\BrightSignApi\Entity\Application\GetSupportedVideoModes
     */
    public function setDeviceModel($deviceModel)
    {
      $this->deviceModel = $deviceModel;
      return $this;
    }

    /**
     * @return ConnectorType
     */
    public function getConnectorType()
    {
      return $this->connectorType;
    }

    /**
     * @param ConnectorType $connectorType
     * @return \WSD\BrightSignApi\Entity\Application\GetSupportedVideoModes
     */
    public function setConnectorType($connectorType)
    {
      $this->connectorType = $connectorType;
      return $this;
    }

}
