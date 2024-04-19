<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWallConfiguration implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWallConfiguration[] $BrightWallConfiguration
     */
    protected $BrightWallConfiguration = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWallConfiguration[]
     */
    public function getBrightWallConfiguration()
    {
      return $this->BrightWallConfiguration;
    }

    /**
     * @param BrightWallConfiguration[] $BrightWallConfiguration
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWallConfiguration
     */
    public function setBrightWallConfiguration(array $BrightWallConfiguration = null)
    {
      $this->BrightWallConfiguration = $BrightWallConfiguration;
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
      return isset($this->BrightWallConfiguration[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWallConfiguration
     */
    public function offsetGet($offset)
    {
      return $this->BrightWallConfiguration[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWallConfiguration $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWallConfiguration[] = $value;
      } else {
        $this->BrightWallConfiguration[$offset] = $value;
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
      unset($this->BrightWallConfiguration[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWallConfiguration Return the current element
     */
    public function current()
    {
      return current($this->BrightWallConfiguration);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWallConfiguration);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWallConfiguration);
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
      reset($this->BrightWallConfiguration);
    }

    /**
     * Countable implementation
     *
     * @return BrightWallConfiguration Return count of elements
     */
    public function count()
    {
      return count($this->BrightWallConfiguration);
    }

}
