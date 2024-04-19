<?php

namespace WSD\BrightSignApi\Entity\Application;

class UpdateGroupsFirmware
{

    /**
     * @var ArrayOfint $groupIds
     */
    protected $groupIds = null;

    /**
     * @var string $hd9xxFirmware
     */
    protected $hd9xxFirmware = null;

    /**
     * @var string $hdx10Firmware
     */
    protected $hdx10Firmware = null;

    /**
     * @var string $hdx20Firmware
     */
    protected $hdx20Firmware = null;

    /**
     * @var string $hdx22Firmware
     */
    protected $hdx22Firmware = null;

    /**
     * @var string $xdx30Firmware
     */
    protected $xdx30Firmware = null;

    /**
     * @var string $xdx32Firmware
     */
    protected $xdx32Firmware = null;

    /**
     * @var string $_x0034_kx42Firmware
     */
    protected $_x0034_kx42Firmware = null;

    /**
     * @param ArrayOfint $groupIds
     * @param string $hd9xxFirmware
     * @param string $hdx10Firmware
     * @param string $hdx20Firmware
     * @param string $hdx22Firmware
     * @param string $xdx30Firmware
     * @param string $xdx32Firmware
     * @param string $_x0034_kx42Firmware
     */
    public function __construct($groupIds, $hd9xxFirmware, $hdx10Firmware, $hdx20Firmware, $hdx22Firmware, $xdx30Firmware, $xdx32Firmware, $_x0034_kx42Firmware)
    {
      $this->groupIds = $groupIds;
      $this->hd9xxFirmware = $hd9xxFirmware;
      $this->hdx10Firmware = $hdx10Firmware;
      $this->hdx20Firmware = $hdx20Firmware;
      $this->hdx22Firmware = $hdx22Firmware;
      $this->xdx30Firmware = $xdx30Firmware;
      $this->xdx32Firmware = $xdx32Firmware;
      $this->_x0034_kx42Firmware = $_x0034_kx42Firmware;
    }

    /**
     * @return ArrayOfint
     */
    public function getGroupIds()
    {
      return $this->groupIds;
    }

    /**
     * @param ArrayOfint $groupIds
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setGroupIds($groupIds)
    {
      $this->groupIds = $groupIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getHd9xxFirmware()
    {
      return $this->hd9xxFirmware;
    }

    /**
     * @param string $hd9xxFirmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setHd9xxFirmware($hd9xxFirmware)
    {
      $this->hd9xxFirmware = $hd9xxFirmware;
      return $this;
    }

    /**
     * @return string
     */
    public function getHdx10Firmware()
    {
      return $this->hdx10Firmware;
    }

    /**
     * @param string $hdx10Firmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setHdx10Firmware($hdx10Firmware)
    {
      $this->hdx10Firmware = $hdx10Firmware;
      return $this;
    }

    /**
     * @return string
     */
    public function getHdx20Firmware()
    {
      return $this->hdx20Firmware;
    }

    /**
     * @param string $hdx20Firmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setHdx20Firmware($hdx20Firmware)
    {
      $this->hdx20Firmware = $hdx20Firmware;
      return $this;
    }

    /**
     * @return string
     */
    public function getHdx22Firmware()
    {
      return $this->hdx22Firmware;
    }

    /**
     * @param string $hdx22Firmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setHdx22Firmware($hdx22Firmware)
    {
      $this->hdx22Firmware = $hdx22Firmware;
      return $this;
    }

    /**
     * @return string
     */
    public function getXdx30Firmware()
    {
      return $this->xdx30Firmware;
    }

    /**
     * @param string $xdx30Firmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setXdx30Firmware($xdx30Firmware)
    {
      $this->xdx30Firmware = $xdx30Firmware;
      return $this;
    }

    /**
     * @return string
     */
    public function getXdx32Firmware()
    {
      return $this->xdx32Firmware;
    }

    /**
     * @param string $xdx32Firmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function setXdx32Firmware($xdx32Firmware)
    {
      $this->xdx32Firmware = $xdx32Firmware;
      return $this;
    }

    /**
     * @return string
     */
    public function get_x0034_kx42Firmware()
    {
      return $this->_x0034_kx42Firmware;
    }

    /**
     * @param string $_x0034_kx42Firmware
     * @return \WSD\BrightSignApi\Entity\Application\UpdateGroupsFirmware
     */
    public function set_x0034_kx42Firmware($_x0034_kx42Firmware)
    {
      $this->_x0034_kx42Firmware = $_x0034_kx42Firmware;
      return $this;
    }

}
