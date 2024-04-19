<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfPresentation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var Presentation[] $Presentation
     */
    protected $Presentation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return Presentation[]
     */
    public function getPresentation()
    {
      return $this->Presentation;
    }

    /**
     * @param Presentation[] $Presentation
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfPresentation
     */
    public function setPresentation(array $Presentation = null)
    {
      $this->Presentation = $Presentation;
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
      return isset($this->Presentation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return Presentation
     */
    public function offsetGet($offset)
    {
      return $this->Presentation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param Presentation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->Presentation[] = $value;
      } else {
        $this->Presentation[$offset] = $value;
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
      unset($this->Presentation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return Presentation Return the current element
     */
    public function current()
    {
      return current($this->Presentation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->Presentation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->Presentation);
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
      reset($this->Presentation);
    }

    /**
     * Countable implementation
     *
     * @return Presentation Return count of elements
     */
    public function count()
    {
      return count($this->Presentation);
    }

}
