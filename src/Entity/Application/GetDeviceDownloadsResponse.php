<?php

namespace WSD\BrightSignApi\Entity\Application;

class GetDeviceDownloadsResponse
{

    /**
     * @var PagedDeviceDownloadList $GetDeviceDownloadsResult
     */
    protected $GetDeviceDownloadsResult = null;

    /**
     * @param PagedDeviceDownloadList $GetDeviceDownloadsResult
     */
    public function __construct($GetDeviceDownloadsResult)
    {
      $this->GetDeviceDownloadsResult = $GetDeviceDownloadsResult;
    }

    /**
     * @return PagedDeviceDownloadList
     */
    public function getGetDeviceDownloadsResult()
    {
      return $this->GetDeviceDownloadsResult;
    }

    /**
     * @param PagedDeviceDownloadList $GetDeviceDownloadsResult
     * @return \WSD\BrightSignApi\Entity\Application\GetDeviceDownloadsResponse
     */
    public function setGetDeviceDownloadsResult($GetDeviceDownloadsResult)
    {
      $this->GetDeviceDownloadsResult = $GetDeviceDownloadsResult;
      return $this;
    }

}
