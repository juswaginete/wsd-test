<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfScheduledPresentation implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var ScheduledPresentation[] $ScheduledPresentation
     */
    protected $ScheduledPresentation = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return ScheduledPresentation[]
     */
    public function getScheduledPresentation()
    {
      return $this->ScheduledPresentation;
    }

    /**
     * @param ScheduledPresentation[] $ScheduledPresentation
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfScheduledPresentation
     */
    public function setScheduledPresentation(array $ScheduledPresentation = null)
    {
      $this->ScheduledPresentation = $ScheduledPresentation;
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
      return isset($this->ScheduledPresentation[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return ScheduledPresentation
     */
    public function offsetGet($offset)
    {
      return $this->ScheduledPresentation[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param ScheduledPresentation $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->ScheduledPresentation[] = $value;
      } else {
        $this->ScheduledPresentation[$offset] = $value;
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
      unset($this->ScheduledPresentation[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return ScheduledPresentation Return the current element
     */
    public function current()
    {
      return current($this->ScheduledPresentation);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->ScheduledPresentation);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->ScheduledPresentation);
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
      reset($this->ScheduledPresentation);
    }

    /**
     * Countable implementation
     *
     * @return ScheduledPresentation Return count of elements
     */
    public function count()
    {
      return count($this->ScheduledPresentation);
    }

}
