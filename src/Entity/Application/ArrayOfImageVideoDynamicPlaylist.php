<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfImageVideoDynamicPlaylist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ImageVideoDynamicPlaylist[] $ImageVideoDynamicPlaylist
     */
    protected $ImageVideoDynamicPlaylist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ImageVideoDynamicPlaylist[]
     */
    public function getImageVideoDynamicPlaylist()
    {
      return $this->ImageVideoDynamicPlaylist;
    }

    /**
     * @param ImageVideoDynamicPlaylist[] $ImageVideoDynamicPlaylist
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfImageVideoDynamicPlaylist
     */
    public function setImageVideoDynamicPlaylist(array $ImageVideoDynamicPlaylist = null)
    {
      $this->ImageVideoDynamicPlaylist = $ImageVideoDynamicPlaylist;
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
      return isset($this->ImageVideoDynamicPlaylist[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ImageVideoDynamicPlaylist
     */
    public function offsetGet($offset)
    {
      return $this->ImageVideoDynamicPlaylist[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ImageVideoDynamicPlaylist $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ImageVideoDynamicPlaylist[] = $value;
      } else {
        $this->ImageVideoDynamicPlaylist[$offset] = $value;
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
      unset($this->ImageVideoDynamicPlaylist[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ImageVideoDynamicPlaylist Return the current element
     */
    public function current()
    {
      return current($this->ImageVideoDynamicPlaylist);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ImageVideoDynamicPlaylist);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ImageVideoDynamicPlaylist);
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
      reset($this->ImageVideoDynamicPlaylist);
    }

    /**
     * Countable implementation
     *
     * @return ImageVideoDynamicPlaylist Return count of elements
     */
    public function count()
    {
      return count($this->ImageVideoDynamicPlaylist);
    }

}
