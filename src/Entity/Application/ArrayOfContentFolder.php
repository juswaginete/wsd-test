<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfContentFolder implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ContentFolder[] $ContentFolder
     */
    protected $ContentFolder = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ContentFolder[]
     */
    public function getContentFolder()
    {
      return $this->ContentFolder;
    }

    /**
     * @param ContentFolder[] $ContentFolder
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfContentFolder
     */
    public function setContentFolder(array $ContentFolder = null)
    {
      $this->ContentFolder = $ContentFolder;
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
      return isset($this->ContentFolder[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ContentFolder
     */
    public function offsetGet($offset)
    {
      return $this->ContentFolder[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ContentFolder $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ContentFolder[] = $value;
      } else {
        $this->ContentFolder[$offset] = $value;
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
      unset($this->ContentFolder[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ContentFolder Return the current element
     */
    public function current()
    {
      return current($this->ContentFolder);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ContentFolder);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ContentFolder);
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
      reset($this->ContentFolder);
    }

    /**
     * Countable implementation
     *
     * @return ContentFolder Return count of elements
     */
    public function count()
    {
      return count($this->ContentFolder);
    }

}
