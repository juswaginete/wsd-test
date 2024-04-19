<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class ContentUploadService extends \WSD\BrightSignApi\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'StartWebPageUploadSession' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\StartWebPageUploadSession',
      'StartWebPageUploadSessionResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\StartWebPageUploadSessionResponse',
      'StartFileUpload' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\StartFileUpload',
      'StartFileUploadResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\StartFileUploadResponse',
      'AppendChunk' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\AppendChunk',
      'AppendChunkResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\AppendChunkResponse',
      'CompleteFileUpload' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\CompleteFileUpload',
      'CompleteFileUploadResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\CompleteFileUploadResponse',
      'CancelFileUpload' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\CancelFileUpload',
      'CancelFileUploadResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\CancelFileUploadResponse',
      'CompleteWebPageUploadSession' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\CompleteWebPageUploadSession',
      'CompleteWebPageUploadSessionResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\CompleteWebPageUploadSessionResponse',
      'GetFileUploadStatus' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\GetFileUploadStatus',
      'GetFileUploadStatusResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\GetFileUploadStatusResponse',
      'GetWebPageUploadStatus' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\GetWebPageUploadStatus',
      'GetWebPageUploadStatusResponse' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\GetWebPageUploadStatusResponse',
      'WebPageUploadArguments' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\WebPageUploadArguments',
      'ContentUploadArguments' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ContentUploadArguments',
      'ContentUpdateArguments' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ContentUpdateArguments',
      'WebPageUpdateArguments' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\WebPageUpdateArguments',
      'WebPageAssetUploadArguments' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\WebPageAssetUploadArguments',
      'ArrayOfWebPageAssetUploadArguments' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ArrayOfWebPageAssetUploadArguments',
      'WebPageUploadStatus' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\WebPageUploadStatus',
      'ContentUploadStatus' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ContentUploadStatus',
      'ContentNegotiationStatus' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ContentNegotiationStatus',
      'ArrayOfContentInfo' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ArrayOfContentInfo',
      'ContentInfo' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ContentInfo',
      'ArrayOfContentUploadStatus' => 'WSD\\BrightSignApi\\Entity\\ContentUpload\\ArrayOfContentUploadStatus',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'soap_version' => 1,
      'trace' => 1,
      'cache_wsdl' => 0,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.instore-experience.com/Uploads/2014/07/SOAP/WSDL/';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param StartWebPageUploadSession $parameters
     * @return StartWebPageUploadSessionResponse
     */
    public function StartWebPageUploadSession(StartWebPageUploadSession $parameters)
    {
      return $this->__soapCall('StartWebPageUploadSession', array($parameters));
    }

    /**
     * @param StartFileUpload $parameters
     * @return StartFileUploadResponse
     */
    public function StartFileUpload(StartFileUpload $parameters)
    {
      return $this->__soapCall('StartFileUpload', array($parameters));
    }

    /**
     * @param AppendChunk $parameters
     * @return AppendChunkResponse
     */
    public function AppendChunk(AppendChunk $parameters)
    {
      return $this->__soapCall('AppendChunk', array($parameters));
    }

    /**
     * @param CompleteFileUpload $parameters
     * @return CompleteFileUploadResponse
     */
    public function CompleteFileUpload(CompleteFileUpload $parameters)
    {
      return $this->__soapCall('CompleteFileUpload', array($parameters));
    }

    /**
     * @param CancelFileUpload $parameters
     * @return CancelFileUploadResponse
     */
    public function CancelFileUpload(CancelFileUpload $parameters)
    {
      return $this->__soapCall('CancelFileUpload', array($parameters));
    }

    /**
     * @param CompleteWebPageUploadSession $parameters
     * @return CompleteWebPageUploadSessionResponse
     */
    public function CompleteWebPageUploadSession(CompleteWebPageUploadSession $parameters)
    {
      return $this->__soapCall('CompleteWebPageUploadSession', array($parameters));
    }

    /**
     * @param GetFileUploadStatus $parameters
     * @return GetFileUploadStatusResponse
     */
    public function GetFileUploadStatus(GetFileUploadStatus $parameters)
    {
      return $this->__soapCall('GetFileUploadStatus', array($parameters));
    }

    /**
     * @param GetWebPageUploadStatus $parameters
     * @return GetWebPageUploadStatusResponse
     */
    public function GetWebPageUploadStatus(GetWebPageUploadStatus $parameters)
    {
      return $this->__soapCall('GetWebPageUploadStatus', array($parameters));
    }

}
