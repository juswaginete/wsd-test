<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWallPresentation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWallPresentation[] $BrightWallPresentation
     */
    protected $BrightWallPresentation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWallPresentation[]
     */
    public function getBrightWallPresentation()
    {
      return $this->BrightWallPresentation;
    }

    /**
     * @param BrightWallPresentation[] $BrightWallPresentation
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWallPresentation
     */
    public function setBrightWallPresentation(array $BrightWallPresentation = null)
    {
      $this->BrightWallPresentation = $BrightWallPresentation;
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
      return isset($this->BrightWallPresentation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWallPresentation
     */
    public function offsetGet($offset)
    {
      return $this->BrightWallPresentation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWallPresentation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWallPresentation[] = $value;
      } else {
        $this->BrightWallPresentation[$offset] = $value;
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
      unset($this->BrightWallPresentation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWallPresentation Return the current element
     */
    public function current()
    {
      return current($this->BrightWallPresentation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWallPresentation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWallPresentation);
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
      reset($this->BrightWallPresentation);
    }

    /**
     * Countable implementation
     *
     * @return BrightWallPresentation Return count of elements
     */
    public function count()
    {
      return count($this->BrightWallPresentation);
    }

}
