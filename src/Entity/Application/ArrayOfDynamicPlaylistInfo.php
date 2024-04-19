<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDynamicPlaylistInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DynamicPlaylistInfo[] $DynamicPlaylistInfo
     */
    protected $DynamicPlaylistInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DynamicPlaylistInfo[]
     */
    public function getDynamicPlaylistInfo()
    {
      return $this->DynamicPlaylistInfo;
    }

    /**
     * @param DynamicPlaylistInfo[] $DynamicPlaylistInfo
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDynamicPlaylistInfo
     */
    public function setDynamicPlaylistInfo(array $DynamicPlaylistInfo = null)
    {
      $this->DynamicPlaylistInfo = $DynamicPlaylistInfo;
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
      return isset($this->DynamicPlaylistInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DynamicPlaylistInfo
     */
    public function offsetGet($offset)
    {
      return $this->DynamicPlaylistInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DynamicPlaylistInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DynamicPlaylistInfo[] = $value;
      } else {
        $this->DynamicPlaylistInfo[$offset] = $value;
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
      unset($this->DynamicPlaylistInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DynamicPlaylistInfo Return the current element
     */
    public function current()
    {
      return current($this->DynamicPlaylistInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DynamicPlaylistInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DynamicPlaylistInfo);
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
      reset($this->DynamicPlaylistInfo);
    }

    /**
     * Countable implementation
     *
     * @return DynamicPlaylistInfo Return count of elements
     */
    public function count()
    {
      return count($this->DynamicPlaylistInfo);
    }

}
