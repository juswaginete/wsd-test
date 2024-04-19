<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfLiveTextFeedItem implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var LiveTextFeedItem[] $LiveTextFeedItem
     */
    protected $LiveTextFeedItem = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return LiveTextFeedItem[]
     */
    public function getLiveTextFeedItem()
    {
      return $this->LiveTextFeedItem;
    }

    /**
     * @param LiveTextFeedItem[] $LiveTextFeedItem
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfLiveTextFeedItem
     */
    public function setLiveTextFeedItem(array $LiveTextFeedItem = null)
    {
      $this->LiveTextFeedItem = $LiveTextFeedItem;
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
      return isset($this->LiveTextFeedItem[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return LiveTextFeedItem
     */
    public function offsetGet($offset)
    {
      return $this->LiveTextFeedItem[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param LiveTextFeedItem $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->LiveTextFeedItem[] = $value;
      } else {
        $this->LiveTextFeedItem[$offset] = $value;
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
      unset($this->LiveTextFeedItem[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return LiveTextFeedItem Return the current element
     */
    public function current()
    {
      return current($this->LiveTextFeedItem);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->LiveTextFeedItem);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->LiveTextFeedItem);
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
      reset($this->LiveTextFeedItem);
    }

    /**
     * Countable implementation
     *
     * @return LiveTextFeedItem Return count of elements
     */
    public function count()
    {
      return count($this->LiveTextFeedItem);
    }

}
