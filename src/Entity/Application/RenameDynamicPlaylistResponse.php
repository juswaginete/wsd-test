<?php

namespace WSD\BrightSignApi\Entity\Application;

class RenameDynamicPlaylistResponse
{

    /**
     * @var boolean $RenameDynamicPlaylistResult
     */
    protected $RenameDynamicPlaylistResult = null;

    /**
     * @param boolean $RenameDynamicPlaylistResult
     */
    public function __construct($RenameDynamicPlaylistResult)
    {
      $this->RenameDynamicPlaylistResult = $RenameDynamicPlaylistResult;
    }

    /**
     * @return boolean
     */
    public function getRenameDynamicPlaylistResult()
    {
      return $this->RenameDynamicPlaylistResult;
    }

    /**
     * @param boolean $RenameDynamicPlaylistResult
     * @return \WSD\BrightSignApi\Entity\Application\RenameDynamicPlaylistResponse
     */
    public function setRenameDynamicPlaylistResult($RenameDynamicPlaylistResult)
    {
      $this->RenameDynamicPlaylistResult = $RenameDynamicPlaylistResult;
      return $this;
    }

}
