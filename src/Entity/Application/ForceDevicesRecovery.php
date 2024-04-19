<?php

namespace WSD\BrightSignApi\Entity\Application;

class ForceDevicesRecovery
{

    /**
     * @var ArrayOfint $deviceIds
     */
    protected $deviceIds = null;

    /**
     * @var boolean $reformat
     */
    protected $reformat = null;

    /**
     * @param ArrayOfint $deviceIds
     * @param boolean $reformat
     */
    public function __construct($deviceIds, $reformat)
    {
      $this->deviceIds = $deviceIds;
      $this->reformat = $reformat;
    }

    /**
     * @return ArrayOfint
     */
    public function getDeviceIds()
    {
      return $this->deviceIds;
    }

    /**
     * @param ArrayOfint $deviceIds
     * @return \WSD\BrightSignApi\Entity\Application\ForceDevicesRecovery
     */
    public function setDeviceIds($deviceIds)
    {
      $this->deviceIds = $deviceIds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReformat()
    {
      return $this->reformat;
    }

    /**
     * @param boolean $reformat
     * @return \WSD\BrightSignApi\Entity\Application\ForceDevicesRecovery
     */
    public function setReformat($reformat)
    {
      $this->reformat = $reformat;
      return $this;
    }

}
