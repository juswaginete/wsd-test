<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfVideoMode implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var VideoMode[] $VideoMode
     */
    protected $VideoMode = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return VideoMode[]
     */
    public function getVideoMode()
    {
      return $this->VideoMode;
    }

    /**
     * @param VideoMode[] $VideoMode
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfVideoMode
     */
    public function setVideoMode(array $VideoMode = null)
    {
      $this->VideoMode = $VideoMode;
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
      return isset($this->VideoMode[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return VideoMode
     */
    public function offsetGet($offset)
    {
      return $this->VideoMode[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param VideoMode $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->VideoMode[] = $value;
      } else {
        $this->VideoMode[$offset] = $value;
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
      unset($this->VideoMode[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return VideoMode Return the current element
     */
    public function current()
    {
      return current($this->VideoMode);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->VideoMode);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->VideoMode);
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
      reset($this->VideoMode);
    }

    /**
     * Countable implementation
     *
     * @return VideoMode Return count of elements
     */
    public function count()
    {
      return count($this->VideoMode);
    }

}
