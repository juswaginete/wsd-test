<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDeviceError implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeviceError[] $DeviceError
     */
    protected $DeviceError = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceError[]
     */
    public function getDeviceError()
    {
      return $this->DeviceError;
    }

    /**
     * @param DeviceError[] $DeviceError
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDeviceError
     */
    public function setDeviceError(array $DeviceError = null)
    {
      $this->DeviceError = $DeviceError;
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
      return isset($this->DeviceError[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeviceError
     */
    public function offsetGet($offset)
    {
      return $this->DeviceError[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeviceError $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeviceError[] = $value;
      } else {
        $this->DeviceError[$offset] = $value;
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
      unset($this->DeviceError[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeviceError Return the current element
     */
    public function current()
    {
      return current($this->DeviceError);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeviceError);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeviceError);
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
      reset($this->DeviceError);
    }

    /**
     * Countable implementation
     *
     * @return DeviceError Return count of elements
     */
    public function count()
    {
      return count($this->DeviceError);
    }

}
