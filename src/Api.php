<?php

namespace WSD\BrightSignApi;

use WSD\BrightSignApi\Entity\Application\MainService;
use WSD\BrightSignApi\Entity\ContentUpload\ContentUploadService;

class Api
{
    const DATETIME_FORMAT = 'Y-m-d\TH:i:s\Z';
    /**
     * @var MainService;
     */
    private $applicationClient = null;
    /**
     * @var ContentUploadService;
     */
    private $contentUploadClient = null;
    /**
     * @var string
     */
    private $username = null;
    /**
     * @var string
     */
    private $account = null;
    /**
     * @var string
     */
    private $password = null;

    /**
     *
     *
     * @param string $username
     * @param string $password
     * @param string $account
     *
     * @author Jesper Skytte Marcussen <jsm@westsoftdevelopment.dk>
     */
    public function setAuthenticationOptions($username, $password, $account)
    {
        $this->username = $username;
        $this->password = $password;
        $this->account = $account;
    }

    /**
     *
     *
     * @return MainService
     * @throws \Exception
     * @author Jesper Skytte Marcussen <jsm@westsoftdevelopment.dk>
     */
    public function getApplicationClient()
    {
        if ($this->applicationClient === null) {
            if ($this->username === null) {
                throw new \Exception('Missing authentication data');
            }
            $this->applicationClient = new MainService();
            $this->applicationClient->__setUsernameToken($this->username, $this->password, $this->account);
        }
        return $this->applicationClient;
    }

    /**
     *
     * @return ContentUploadService;
     * @throws \Exception
     * @author Jesper Skytte Marcussen <jsm@westsoftdevelopment.dk>
     */
    public function getContentUploadClient()
    {
        if ($this->contentUploadClient === null) {
            if ($this->username === null) {
                throw new \Exception('Missing authentication data');
            }
            $this->contentUploadClient = new ContentUploadService();
            $this->contentUploadClient->__setUsernameToken($this->username, $this->password, $this->account);
        }
        return $this->contentUploadClient;
    }


}