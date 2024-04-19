<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfWebPage implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var WebPage[] $WebPage
     */
    protected $WebPage = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return WebPage[]
     */
    public function getWebPage()
    {
      return $this->WebPage;
    }

    /**
     * @param WebPage[] $WebPage
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfWebPage
     */
    public function setWebPage(array $WebPage = null)
    {
      $this->WebPage = $WebPage;
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
      return isset($this->WebPage[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return WebPage
     */
    public function offsetGet($offset)
    {
      return $this->WebPage[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param WebPage $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->WebPage[] = $value;
      } else {
        $this->WebPage[$offset] = $value;
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
      unset($this->WebPage[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return WebPage Return the current element
     */
    public function current()
    {
      return current($this->WebPage);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->WebPage);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->WebPage);
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
      reset($this->WebPage);
    }

    /**
     * Countable implementation
     *
     * @return WebPage Return count of elements
     */
    public function count()
    {
      return count($this->WebPage);
    }

}
