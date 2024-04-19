<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfLiveMediaFeed implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LiveMediaFeed[] $LiveMediaFeed
     */
    protected $LiveMediaFeed = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LiveMediaFeed[]
     */
    public function getLiveMediaFeed()
    {
      return $this->LiveMediaFeed;
    }

    /**
     * @param LiveMediaFeed[] $LiveMediaFeed
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfLiveMediaFeed
     */
    public function setLiveMediaFeed(array $LiveMediaFeed = null)
    {
      $this->LiveMediaFeed = $LiveMediaFeed;
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
      return isset($this->LiveMediaFeed[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LiveMediaFeed
     */
    public function offsetGet($offset)
    {
      return $this->LiveMediaFeed[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LiveMediaFeed $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LiveMediaFeed[] = $value;
      } else {
        $this->LiveMediaFeed[$offset] = $value;
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
      unset($this->LiveMediaFeed[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LiveMediaFeed Return the current element
     */
    public function current()
    {
      return current($this->LiveMediaFeed);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LiveMediaFeed);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LiveMediaFeed);
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
      reset($this->LiveMediaFeed);
    }

    /**
     * Countable implementation
     *
     * @return LiveMediaFeed Return count of elements
     */
    public function count()
    {
      return count($this->LiveMediaFeed);
    }

}
