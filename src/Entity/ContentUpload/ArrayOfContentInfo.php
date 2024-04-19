<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class ArrayOfContentInfo implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContentInfo[] $ContentInfo
     */
    protected $ContentInfo = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentInfo[]
     */
    public function getContentInfo()
    {
      return $this->ContentInfo;
    }

    /**
     * @param ContentInfo[] $ContentInfo
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ArrayOfContentInfo
     */
    public function setContentInfo(array $ContentInfo = null)
    {
      $this->ContentInfo = $ContentInfo;
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
      return isset($this->ContentInfo[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContentInfo
     */
    public function offsetGet($offset)
    {
      return $this->ContentInfo[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContentInfo $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContentInfo[] = $value;
      } else {
        $this->ContentInfo[$offset] = $value;
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
      unset($this->ContentInfo[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContentInfo Return the current element
     */
    public function current()
    {
      return current($this->ContentInfo);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContentInfo);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContentInfo);
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
      reset($this->ContentInfo);
    }

    /**
     * Countable implementation
     *
     * @return ContentInfo Return count of elements
     */
    public function count()
    {
      return count($this->ContentInfo);
    }

}
