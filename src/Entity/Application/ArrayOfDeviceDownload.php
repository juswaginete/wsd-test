<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDeviceDownload implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeviceDownload[] $DeviceDownload
     */
    protected $DeviceDownload = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceDownload[]
     */
    public function getDeviceDownload()
    {
      return $this->DeviceDownload;
    }

    /**
     * @param DeviceDownload[] $DeviceDownload
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDeviceDownload
     */
    public function setDeviceDownload(array $DeviceDownload = null)
    {
      $this->DeviceDownload = $DeviceDownload;
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
      return isset($this->DeviceDownload[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeviceDownload
     */
    public function offsetGet($offset)
    {
      return $this->DeviceDownload[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeviceDownload $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeviceDownload[] = $value;
      } else {
        $this->DeviceDownload[$offset] = $value;
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
      unset($this->DeviceDownload[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeviceDownload Return the current element
     */
    public function current()
    {
      return current($this->DeviceDownload);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeviceDownload);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeviceDownload);
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
      reset($this->DeviceDownload);
    }

    /**
     * Countable implementation
     *
     * @return DeviceDownload Return count of elements
     */
    public function count()
    {
      return count($this->DeviceDownload);
    }

}
