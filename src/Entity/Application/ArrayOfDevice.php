<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDevice implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Device[] $Device
     */
    protected $Device = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Device[]
     */
    public function getDevice()
    {
      return $this->Device;
    }

    /**
     * @param Device[] $Device
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDevice
     */
    public function setDevice(array $Device = null)
    {
      $this->Device = $Device;
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
      return isset($this->Device[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Device
     */
    public function offsetGet($offset)
    {
      return $this->Device[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Device $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Device[] = $value;
      } else {
        $this->Device[$offset] = $value;
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
      unset($this->Device[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Device Return the current element
     */
    public function current()
    {
      return current($this->Device);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Device);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Device);
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
      reset($this->Device);
    }

    /**
     * Countable implementation
     *
     * @return Device Return count of elements
     */
    public function count()
    {
      return count($this->Device);
    }

}
