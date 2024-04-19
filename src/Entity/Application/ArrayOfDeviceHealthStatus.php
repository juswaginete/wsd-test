<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDeviceHealthStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeviceHealthStatus[] $DeviceHealthStatus
     */
    protected $DeviceHealthStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceHealthStatus[]
     */
    public function getDeviceHealthStatus()
    {
      return $this->DeviceHealthStatus;
    }

    /**
     * @param DeviceHealthStatus[] $DeviceHealthStatus
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDeviceHealthStatus
     */
    public function setDeviceHealthStatus(array $DeviceHealthStatus = null)
    {
      $this->DeviceHealthStatus = $DeviceHealthStatus;
      return $this;
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset An offset to check for
     * @return boolean true on success or false on failure
     */
    public function offsetExists($offset)
    {
      return isset($this->DeviceHealthStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeviceHealthStatus
     */
    public function offsetGet($offset)
    {
      return $this->DeviceHealthStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeviceHealthStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeviceHealthStatus[] = $value;
      } else {
        $this->DeviceHealthStatus[$offset] = $value;
      }
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to unset
     * @return void
     */
    public function offsetUnset($offset)
    {
      unset($this->DeviceHealthStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeviceHealthStatus Return the current element
     */
    public function current()
    {
      return current($this->DeviceHealthStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeviceHealthStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeviceHealthStatus);
    }

    /**
     * Iterator implementation
     *
     * @return boolean Return the validity of the current position
     */
    public function valid()
    {
      return $this->key() !== null;
    }

    /**
     * Iterator implementation
     * Rewind the Iterator to the first element
     *
     * @return void
     */
    public function rewind()
    {
      reset($this->DeviceHealthStatus);
    }

    /**
     * Countable implementation
     *
     * @return DeviceHealthStatus Return count of elements
     */
    public function count()
    {
      return count($this->DeviceHealthStatus);
    }

}
