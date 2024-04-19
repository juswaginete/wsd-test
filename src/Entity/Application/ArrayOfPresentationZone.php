<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfPresentationZone implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PresentationZone[] $PresentationZone
     */
    protected $PresentationZone = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PresentationZone[]
     */
    public function getPresentationZone()
    {
      return $this->PresentationZone;
    }

    /**
     * @param PresentationZone[] $PresentationZone
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfPresentationZone
     */
    public function setPresentationZone(array $PresentationZone = null)
    {
      $this->PresentationZone = $PresentationZone;
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
      return isset($this->PresentationZone[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PresentationZone
     */
    public function offsetGet($offset)
    {
      return $this->PresentationZone[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PresentationZone $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PresentationZone[] = $value;
      } else {
        $this->PresentationZone[$offset] = $value;
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
      unset($this->PresentationZone[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PresentationZone Return the current element
     */
    public function current()
    {
      return current($this->PresentationZone);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PresentationZone);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PresentationZone);
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
      reset($this->PresentationZone);
    }

    /**
     * Countable implementation
     *
     * @return PresentationZone Return count of elements
     */
    public function count()
    {
      return count($this->PresentationZone);
    }

}
