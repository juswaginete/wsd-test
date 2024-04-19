<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class ArrayOfWebPageAssetUploadArguments implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WebPageAssetUploadArguments[] $WebPageAssetUploadArguments
     */
    protected $WebPageAssetUploadArguments = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebPageAssetUploadArguments[]
     */
    public function getWebPageAssetUploadArguments()
    {
      return $this->WebPageAssetUploadArguments;
    }

    /**
     * @param WebPageAssetUploadArguments[] $WebPageAssetUploadArguments
     * @return \WSD\BrightSignApi\Entity\ContentUpload\ArrayOfWebPageAssetUploadArguments
     */
    public function setWebPageAssetUploadArguments(array $WebPageAssetUploadArguments = null)
    {
      $this->WebPageAssetUploadArguments = $WebPageAssetUploadArguments;
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
      return isset($this->WebPageAssetUploadArguments[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebPageAssetUploadArguments
     */
    public function offsetGet($offset)
    {
      return $this->WebPageAssetUploadArguments[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebPageAssetUploadArguments $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WebPageAssetUploadArguments[] = $value;
      } else {
        $this->WebPageAssetUploadArguments[$offset] = $value;
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
      unset($this->WebPageAssetUploadArguments[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WebPageAssetUploadArguments Return the current element
     */
    public function current()
    {
      return current($this->WebPageAssetUploadArguments);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WebPageAssetUploadArguments);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WebPageAssetUploadArguments);
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
      reset($this->WebPageAssetUploadArguments);
    }

    /**
     * Countable implementation
     *
     * @return WebPageAssetUploadArguments Return count of elements
     */
    public function count()
    {
      return count($this->WebPageAssetUploadArguments);
    }

}
