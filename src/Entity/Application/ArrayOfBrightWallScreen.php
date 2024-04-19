<?php

namespace WSD\BrightSignApi\Entity\Application;

class ArrayOfBrightWallScreen implements \ArrayAccess, \Iterator, \Countable
{

    /**
     * @var BrightWallScreen[] $BrightWallScreen
     */
    protected $BrightWallScreen = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return BrightWallScreen[]
     */
    public function getBrightWallScreen()
    {
      return $this->BrightWallScreen;
    }

    /**
     * @param BrightWallScreen[] $BrightWallScreen
     * @return \WSD\BrightSignApi\Entity\Application\ArrayOfBrightWallScreen
     */
    public function setBrightWallScreen(array $BrightWallScreen = null)
    {
      $this->BrightWallScreen = $BrightWallScreen;
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
      return isset($this->BrightWallScreen[$offset]);
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to retrieve
     * @return BrightWallScreen
     */
    public function offsetGet($offset)
    {
      return $this->BrightWallScreen[$offset];
    }

    /**
     * ArrayAccess implementation
     *
     * @param mixed $offset The offset to assign the value to
     * @param BrightWallScreen $value The value to set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
      if (!isset($offset)) {
        $this->BrightWallScreen[] = $value;
      } else {
        $this->BrightWallScreen[$offset] = $value;
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
      unset($this->BrightWallScreen[$offset]);
    }

    /**
     * Iterator implementation
     *
     * @return BrightWallScreen Return the current element
     */
    public function current()
    {
      return current($this->BrightWallScreen);
    }

    /**
     * Iterator implementation
     * Move forward to next element
     *
     * @return void
     */
    public function next()
    {
      next($this->BrightWallScreen);
    }

    /**
     * Iterator implementation
     *
     * @return string|null Return the key of the current element or null
     */
    public function key()
    {
      return key($this->BrightWallScreen);
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
      reset($this->BrightWallScreen);
    }

    /**
     * Countable implementation
     *
     * @return BrightWallScreen Return count of elements
     */
    public function count()
    {
      return count($this->BrightWallScreen);
    }

}
