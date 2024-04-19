<?php

namespace WSD\BrightSignApi\Entity\Application;

class AudioDynamicPlaylist extends DynamicPlaylist
{

    
    public function __construct()
    {
      parent::__construct();
    }

    protected function __addJsonData()
    {
        return ['Type' => 'Audio'];
    }
}
