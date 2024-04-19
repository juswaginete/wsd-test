<?php

namespace WSD\BrightSignApi\Entity\Application;

class GenerateDeviceSetupPackageResponse
{

    /**
     * @var base64Binary $GenerateDeviceSetupPackageResult
     */
    protected $GenerateDeviceSetupPackageResult = null;

    /**
     * @param base64Binary $GenerateDeviceSetupPackageResult
     */
    public function __construct($GenerateDeviceSetupPackageResult)
    {
      $this->GenerateDeviceSetupPackageResult = $GenerateDeviceSetupPackageResult;
    }

    /**
     * @return base64Binary
     */
    public function getGenerateDeviceSetupPackageResult()
    {
      return $this->GenerateDeviceSetupPackageResult;
    }

    /**
     * @param base64Binary $GenerateDeviceSetupPackageResult
     * @return \WSD\BrightSignApi\Entity\Application\GenerateDeviceSetupPackageResponse
     */
    public function setGenerateDeviceSetupPackageResult($GenerateDeviceSetupPackageResult)
    {
      $this->GenerateDeviceSetupPackageResult = $GenerateDeviceSetupPackageResult;
      return $this;
    }

}
