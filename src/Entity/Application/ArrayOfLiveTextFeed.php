<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfLiveTextFeed implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LiveTextFeed[] $LiveTextFeed
     */
    protected $LiveTextFeed = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LiveTextFeed[]
     */
    public function getLiveTextFeed()
    {
      return $this->LiveTextFeed;
    }

    /**
     * @param LiveTextFeed[] $LiveTextFeed
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfLiveTextFeed
     */
    public function setLiveTextFeed(array $LiveTextFeed = null)
    {
      $this->LiveTextFeed = $LiveTextFeed;
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
      return isset($this->LiveTextFeed[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LiveTextFeed
     */
    public function offsetGet($offset)
    {
      return $this->LiveTextFeed[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LiveTextFeed $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LiveTextFeed[] = $value;
      } else {
        $this->LiveTextFeed[$offset] = $value;
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
      unset($this->LiveTextFeed[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LiveTextFeed Return the current element
     */
    public function current()
    {
      return current($this->LiveTextFeed);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LiveTextFeed);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LiveTextFeed);
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
      reset($this->LiveTextFeed);
    }

    /**
     * Countable implementation
     *
     * @return LiveTextFeed Return count of elements
     */
    public function count()
    {
      return count($this->LiveTextFeed);
    }

}
