<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfGroupInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var GroupInfo[] $GroupInfo
     */
    protected $GroupInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return GroupInfo[]
     */
    public function getGroupInfo()
    {
      return $this->GroupInfo;
    }

    /**
     * @param GroupInfo[] $GroupInfo
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfGroupInfo
     */
    public function setGroupInfo(array $GroupInfo = null)
    {
      $this->GroupInfo = $GroupInfo;
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
      return isset($this->GroupInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return GroupInfo
     */
    public function offsetGet($offset)
    {
      return $this->GroupInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param GroupInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->GroupInfo[] = $value;
      } else {
        $this->GroupInfo[$offset] = $value;
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
      unset($this->GroupInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return GroupInfo Return the current element
     */
    public function current()
    {
      return current($this->GroupInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->GroupInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->GroupInfo);
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
      reset($this->GroupInfo);
    }

    /**
     * Countable implementation
     *
     * @return GroupInfo Return count of elements
     */
    public function count()
    {
      return count($this->GroupInfo);
    }

}
