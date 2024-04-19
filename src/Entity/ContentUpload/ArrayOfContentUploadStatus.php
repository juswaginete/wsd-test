<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class ArrayOfContentUploadStatus implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContentUploadStatus[] $ContentUploadStatus
     */
    protected $ContentUploadStatus = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentUploadStatus[]
     */
    public function getContentUploadStatus()
    {
      return $this->ContentUploadStatus;
    }

    /**
     * @param ContentUploadStatus[] $ContentUploadStatus
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ArrayOfContentUploadStatus
     */
    public function setContentUploadStatus(array $ContentUploadStatus = null)
    {
      $this->ContentUploadStatus = $ContentUploadStatus;
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
      return isset($this->ContentUploadStatus[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContentUploadStatus
     */
    public function offsetGet($offset)
    {
      return $this->ContentUploadStatus[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContentUploadStatus $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContentUploadStatus[] = $value;
      } else {
        $this->ContentUploadStatus[$offset] = $value;
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
      unset($this->ContentUploadStatus[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContentUploadStatus Return the current element
     */
    public function current()
    {
      return current($this->ContentUploadStatus);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContentUploadStatus);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContentUploadStatus);
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
      reset($this->ContentUploadStatus);
    }

    /**
     * Countable implementation
     *
     * @return ContentUploadStatus Return count of elements
     */
    public function count()
    {
      return count($this->ContentUploadStatus);
    }

}
