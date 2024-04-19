<?php

namespace WSD\BrightSignApi\Entity\Application;

class GenerateDeviceSetupPackage
{

    /**
     * @var DeviceSettings $settings
     */
    protected $settings = null;

    /**
     * @param DeviceSettings $settings
     */
    public function __construct($settings)
    {
      $this->settings = $settings;
    }

    /**
     * @return DeviceSettings
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param DeviceSettings $settings
     * @return \WSD\BrightSignApi\Entity\Application\GenerateDeviceSetupPackage
     */
    public function setSettings($settings)
    {
      $this->settings = $settings;
      return $this;
    }

}
