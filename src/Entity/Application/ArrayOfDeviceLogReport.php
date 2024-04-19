<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDeviceLogReport implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeviceLogReport[] $DeviceLogReport
     */
    protected $DeviceLogReport = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceLogReport[]
     */
    public function getDeviceLogReport()
    {
      return $this->DeviceLogReport;
    }

    /**
     * @param DeviceLogReport[] $DeviceLogReport
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDeviceLogReport
     */
    public function setDeviceLogReport(array $DeviceLogReport = null)
    {
      $this->DeviceLogReport = $DeviceLogReport;
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
      return isset($this->DeviceLogReport[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeviceLogReport
     */
    public function offsetGet($offset)
    {
      return $this->DeviceLogReport[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeviceLogReport $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeviceLogReport[] = $value;
      } else {
        $this->DeviceLogReport[$offset] = $value;
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
      unset($this->DeviceLogReport[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeviceLogReport Return the current element
     */
    public function current()
    {
      return current($this->DeviceLogReport);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeviceLogReport);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeviceLogReport);
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
      reset($this->DeviceLogReport);
    }

    /**
     * Countable implementation
     *
     * @return DeviceLogReport Return count of elements
     */
    public function count()
    {
      return count($this->DeviceLogReport);
    }

}
