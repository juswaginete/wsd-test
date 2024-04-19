<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDeviceScreenShot implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DeviceScreenShot[] $DeviceScreenShot
     */
    protected $DeviceScreenShot = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DeviceScreenShot[]
     */
    public function getDeviceScreenShot()
    {
      return $this->DeviceScreenShot;
    }

    /**
     * @param DeviceScreenShot[] $DeviceScreenShot
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDeviceScreenShot
     */
    public function setDeviceScreenShot(array $DeviceScreenShot = null)
    {
      $this->DeviceScreenShot = $DeviceScreenShot;
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
      return isset($this->DeviceScreenShot[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DeviceScreenShot
     */
    public function offsetGet($offset)
    {
      return $this->DeviceScreenShot[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DeviceScreenShot $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DeviceScreenShot[] = $value;
      } else {
        $this->DeviceScreenShot[$offset] = $value;
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
      unset($this->DeviceScreenShot[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DeviceScreenShot Return the current element
     */
    public function current()
    {
      return current($this->DeviceScreenShot);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DeviceScreenShot);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DeviceScreenShot);
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
      reset($this->DeviceScreenShot);
    }

    /**
     * Countable implementation
     *
     * @return DeviceScreenShot Return count of elements
     */
    public function count()
    {
      return count($this->DeviceScreenShot);
    }

}
