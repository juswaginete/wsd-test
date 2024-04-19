<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfDynamicPlaylistContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var DynamicPlaylistContent[] $DynamicPlaylistContent
     */
    protected $DynamicPlaylistContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return DynamicPlaylistContent[]
     */
    public function getDynamicPlaylistContent()
    {
      return $this->DynamicPlaylistContent;
    }

    /**
     * @param DynamicPlaylistContent[] $DynamicPlaylistContent
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfDynamicPlaylistContent
     */
    public function setDynamicPlaylistContent(array $DynamicPlaylistContent = null)
    {
      $this->DynamicPlaylistContent = $DynamicPlaylistContent;
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
      return isset($this->DynamicPlaylistContent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return DynamicPlaylistContent
     */
    public function offsetGet($offset)
    {
      return $this->DynamicPlaylistContent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param DynamicPlaylistContent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->DynamicPlaylistContent[] = $value;
      } else {
        $this->DynamicPlaylistContent[$offset] = $value;
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
      unset($this->DynamicPlaylistContent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return DynamicPlaylistContent Return the current element
     */
    public function current()
    {
      return current($this->DynamicPlaylistContent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->DynamicPlaylistContent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->DynamicPlaylistContent);
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
      reset($this->DynamicPlaylistContent);
    }

    /**
     * Countable implementation
     *
     * @return DynamicPlaylistContent Return count of elements
     */
    public function count()
    {
      return count($this->DynamicPlaylistContent);
    }

}
