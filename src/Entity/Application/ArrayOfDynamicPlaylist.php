<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDynamicPlaylist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DynamicPlaylist[] $DynamicPlaylist
     */
    protected $DynamicPlaylist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DynamicPlaylist[]
     */
    public function getDynamicPlaylist()
    {
      return $this->DynamicPlaylist;
    }

    /**
     * @param DynamicPlaylist[] $DynamicPlaylist
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDynamicPlaylist
     */
    public function setDynamicPlaylist(array $DynamicPlaylist = null)
    {
      $this->DynamicPlaylist = $DynamicPlaylist;
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
      return isset($this->DynamicPlaylist[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DynamicPlaylist
     */
    public function offsetGet($offset)
    {
      return $this->DynamicPlaylist[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DynamicPlaylist $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DynamicPlaylist[] = $value;
      } else {
        $this->DynamicPlaylist[$offset] = $value;
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
      unset($this->DynamicPlaylist[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DynamicPlaylist Return the current element
     */
    public function current()
    {
      return current($this->DynamicPlaylist);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DynamicPlaylist);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DynamicPlaylist);
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
      reset($this->DynamicPlaylist);
    }

    /**
     * Countable implementation
     *
     * @return DynamicPlaylist Return count of elements
     */
    public function count()
    {
      return count($this->DynamicPlaylist);
    }

}
