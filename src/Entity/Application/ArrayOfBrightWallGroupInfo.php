<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWallGroupInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWallGroupInfo[] $BrightWallGroupInfo
     */
    protected $BrightWallGroupInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWallGroupInfo[]
     */
    public function getBrightWallGroupInfo()
    {
      return $this->BrightWallGroupInfo;
    }

    /**
     * @param BrightWallGroupInfo[] $BrightWallGroupInfo
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWallGroupInfo
     */
    public function setBrightWallGroupInfo(array $BrightWallGroupInfo = null)
    {
      $this->BrightWallGroupInfo = $BrightWallGroupInfo;
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
      return isset($this->BrightWallGroupInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWallGroupInfo
     */
    public function offsetGet($offset)
    {
      return $this->BrightWallGroupInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWallGroupInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWallGroupInfo[] = $value;
      } else {
        $this->BrightWallGroupInfo[$offset] = $value;
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
      unset($this->BrightWallGroupInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWallGroupInfo Return the current element
     */
    public function current()
    {
      return current($this->BrightWallGroupInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWallGroupInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWallGroupInfo);
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
      reset($this->BrightWallGroupInfo);
    }

    /**
     * Countable implementation
     *
     * @return BrightWallGroupInfo Return count of elements
     */
    public function count()
    {
      return count($this->BrightWallGroupInfo);
    }

}
