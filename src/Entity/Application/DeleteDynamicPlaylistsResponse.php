<?php

namespace WSD\BrightSignApi\Entity\Application;

class DeleteDynamicPlaylistsResponse
{

    /**
     * @var boolean $DeleteDynamicPlaylistsResult
     */
    protected $DeleteDynamicPlaylistsResult = null;

    /**
     * @param boolean $DeleteDynamicPlaylistsResult
     */
    public function __construct($DeleteDynamicPlaylistsResult)
    {
      $this->DeleteDynamicPlaylistsResult = $DeleteDynamicPlaylistsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteDynamicPlaylistsResult()
    {
      return $this->DeleteDynamicPlaylistsResult;
    }

    /**
     * @param boolean $DeleteDynamicPlaylistsResult
     * @return \WSD\BrightSignApi\Entity\Application\DeleteDynamicPlaylistsResponse
     */
    public function setDeleteDynamicPlaylistsResult($DeleteDynamicPlaylistsResult)
    {
      $this->DeleteDynamicPlaylistsResult = $DeleteDynamicPlaylistsResult;
      return $this;
    }

}
