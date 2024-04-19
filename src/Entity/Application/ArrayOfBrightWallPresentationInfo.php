<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWallPresentationInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWallPresentationInfo[] $BrightWallPresentationInfo
     */
    protected $BrightWallPresentationInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWallPresentationInfo[]
     */
    public function getBrightWallPresentationInfo()
    {
      return $this->BrightWallPresentationInfo;
    }

    /**
     * @param BrightWallPresentationInfo[] $BrightWallPresentationInfo
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWallPresentationInfo
     */
    public function setBrightWallPresentationInfo(array $BrightWallPresentationInfo = null)
    {
      $this->BrightWallPresentationInfo = $BrightWallPresentationInfo;
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
      return isset($this->BrightWallPresentationInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWallPresentationInfo
     */
    public function offsetGet($offset)
    {
      return $this->BrightWallPresentationInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWallPresentationInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWallPresentationInfo[] = $value;
      } else {
        $this->BrightWallPresentationInfo[$offset] = $value;
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
      unset($this->BrightWallPresentationInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWallPresentationInfo Return the current element
     */
    public function current()
    {
      return current($this->BrightWallPresentationInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWallPresentationInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWallPresentationInfo);
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
      reset($this->BrightWallPresentationInfo);
    }

    /**
     * Countable implementation
     *
     * @return BrightWallPresentationInfo Return count of elements
     */
    public function count()
    {
      return count($this->BrightWallPresentationInfo);
    }

}
