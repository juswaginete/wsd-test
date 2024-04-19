<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfPresentationInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PresentationInfo[] $PresentationInfo
     */
    protected $PresentationInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PresentationInfo[]
     */
    public function getPresentationInfo()
    {
      return $this->PresentationInfo;
    }

    /**
     * @param PresentationInfo[] $PresentationInfo
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfPresentationInfo
     */
    public function setPresentationInfo(array $PresentationInfo = null)
    {
      $this->PresentationInfo = $PresentationInfo;
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
      return isset($this->PresentationInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PresentationInfo
     */
    public function offsetGet($offset)
    {
      return $this->PresentationInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PresentationInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PresentationInfo[] = $value;
      } else {
        $this->PresentationInfo[$offset] = $value;
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
      unset($this->PresentationInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PresentationInfo Return the current element
     */
    public function current()
    {
      return current($this->PresentationInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PresentationInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PresentationInfo);
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
      reset($this->PresentationInfo);
    }

    /**
     * Countable implementation
     *
     * @return PresentationInfo Return count of elements
     */
    public function count()
    {
      return count($this->PresentationInfo);
    }

}
