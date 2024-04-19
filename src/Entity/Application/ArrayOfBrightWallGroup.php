<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWallGroup implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWallGroup[] $BrightWallGroup
     */
    protected $BrightWallGroup = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWallGroup[]
     */
    public function getBrightWallGroup()
    {
      return $this->BrightWallGroup;
    }

    /**
     * @param BrightWallGroup[] $BrightWallGroup
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWallGroup
     */
    public function setBrightWallGroup(array $BrightWallGroup = null)
    {
      $this->BrightWallGroup = $BrightWallGroup;
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
      return isset($this->BrightWallGroup[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWallGroup
     */
    public function offsetGet($offset)
    {
      return $this->BrightWallGroup[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWallGroup $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWallGroup[] = $value;
      } else {
        $this->BrightWallGroup[$offset] = $value;
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
      unset($this->BrightWallGroup[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWallGroup Return the current element
     */
    public function current()
    {
      return current($this->BrightWallGroup);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWallGroup);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWallGroup);
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
      reset($this->BrightWallGroup);
    }

    /**
     * Countable implementation
     *
     * @return BrightWallGroup Return count of elements
     */
    public function count()
    {
      return count($this->BrightWallGroup);
    }

}
