<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Content[] $Content
     */
    protected $Content = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Content[]
     */
    public function getContent()
    {
      return $this->Content;
    }

    /**
     * @param Content[] $Content
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfContent
     */
    public function setContent(array $Content = null)
    {
      $this->Content = $Content;
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
      return isset($this->Content[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Content
     */
    public function offsetGet($offset)
    {
      return $this->Content[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Content $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Content[] = $value;
      } else {
        $this->Content[$offset] = $value;
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
      unset($this->Content[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Content Return the current element
     */
    public function current()
    {
      return current($this->Content);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Content);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Content);
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
      reset($this->Content);
    }

    /**
     * Countable implementation
     *
     * @return Content Return count of elements
     */
    public function count()
    {
      return count($this->Content);
    }

}
