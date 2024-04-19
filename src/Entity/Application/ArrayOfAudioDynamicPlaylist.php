<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfAudioDynamicPlaylist implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var AudioDynamicPlaylist[] $AudioDynamicPlaylist
     */
    protected $AudioDynamicPlaylist = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return AudioDynamicPlaylist[]
     */
    public function getAudioDynamicPlaylist()
    {
      return $this->AudioDynamicPlaylist;
    }

    /**
     * @param AudioDynamicPlaylist[] $AudioDynamicPlaylist
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfAudioDynamicPlaylist
     */
    public function setAudioDynamicPlaylist(array $AudioDynamicPlaylist = null)
    {
      $this->AudioDynamicPlaylist = $AudioDynamicPlaylist;
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
      return isset($this->AudioDynamicPlaylist[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return AudioDynamicPlaylist
     */
    public function offsetGet($offset)
    {
      return $this->AudioDynamicPlaylist[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param AudioDynamicPlaylist $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->AudioDynamicPlaylist[] = $value;
      } else {
        $this->AudioDynamicPlaylist[$offset] = $value;
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
      unset($this->AudioDynamicPlaylist[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return AudioDynamicPlaylist Return the current element
     */
    public function current()
    {
      return current($this->AudioDynamicPlaylist);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->AudioDynamicPlaylist);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->AudioDynamicPlaylist);
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
      reset($this->AudioDynamicPlaylist);
    }

    /**
     * Countable implementation
     *
     * @return AudioDynamicPlaylist Return count of elements
     */
    public function count()
    {
      return count($this->AudioDynamicPlaylist);
    }

}
