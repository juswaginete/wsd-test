<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWall implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWall[] $BrightWall
     */
    protected $BrightWall = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWall[]
     */
    public function getBrightWall()
    {
      return $this->BrightWall;
    }

    /**
     * @param BrightWall[] $BrightWall
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWall
     */
    public function setBrightWall(array $BrightWall = null)
    {
      $this->BrightWall = $BrightWall;
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
      return isset($this->BrightWall[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWall
     */
    public function offsetGet($offset)
    {
      return $this->BrightWall[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWall $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWall[] = $value;
      } else {
        $this->BrightWall[$offset] = $value;
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
      unset($this->BrightWall[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWall Return the current element
     */
    public function current()
    {
      return current($this->BrightWall);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWall);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWall);
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
      reset($this->BrightWall);
    }

    /**
     * Countable implementation
     *
     * @return BrightWall Return count of elements
     */
    public function count()
    {
      return count($this->BrightWall);
    }

}
