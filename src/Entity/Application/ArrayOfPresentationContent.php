<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfPresentationContent implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var PresentationContent[] $PresentationContent
     */
    protected $PresentationContent = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return PresentationContent[]
     */
    public function getPresentationContent()
    {
      return $this->PresentationContent;
    }

    /**
     * @param PresentationContent[] $PresentationContent
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfPresentationContent
     */
    public function setPresentationContent(array $PresentationContent = null)
    {
      $this->PresentationContent = $PresentationContent;
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
      return isset($this->PresentationContent[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return PresentationContent
     */
    public function offsetGet($offset)
    {
      return $this->PresentationContent[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param PresentationContent $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->PresentationContent[] = $value;
      } else {
        $this->PresentationContent[$offset] = $value;
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
      unset($this->PresentationContent[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return PresentationContent Return the current element
     */
    public function current()
    {
      return current($this->PresentationContent);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->PresentationContent);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->PresentationContent);
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
      reset($this->PresentationContent);
    }

    /**
     * Countable implementation
     *
     * @return PresentationContent Return count of elements
     */
    public function count()
    {
      return count($this->PresentationContent);
    }

}
