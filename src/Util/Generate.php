<?php

namespace WSD\BrightSignApi\Util;

use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Finder\Finder;
use Wsdl2PhpGenerator\Config;
use Wsdl2PhpGenerator\Generator;

class Generate
{

    const ROOT_DIR = 'src/Entity/';
    const ROOT_NAMESPACE = 'WSD\BrightSignApi\Entity';

    /**
     *
     *
     * @param $arguments
     * @param $options
     *
     * @author Jesper Skytte Marcussen <jsm@westsoftdevelopment.dk>
     */
    public static function generate($arguments, $options)
    {
        $fs = new Filesystem();

        $dir = (isset($options['dir']) ? $options['dir'] : '') . '/' . self::ROOT_DIR;

        if ($fs->exists($dir)) {
            $fs->remove($dir);
        }

        $commonArguments = [
            'sharedTypes' => true,
            'soapClientClass' => '\\WSD\\BrightSignApi\\SoapClient',
            'soapClientOptions' => [
                'soap_version' => SOAP_1_1,
                'trace' => 1,
                'cache_wsdl' => WSDL_CACHE_NONE,
            ],
        ];

        $lists = [
            'application' => array_merge([
                'inputFile' => $arguments['a_wsdl'],
                'outputDir' => $dir . 'Application/',
                'namespaceName' => self::ROOT_NAMESPACE . '\Application',
            ], $commonArguments),
            'upload' => array_merge([
                'inputFile' => $arguments['cu_wsdl'],
                'outputDir' => $dir . 'ContentUpload/',
                'namespaceName' => self::ROOT_NAMESPACE . '\ContentUpload',
            ], $commonArguments),

        ];

        foreach ($lists as $key => $list) {
            $generator = new Generator();
            $generator->generate(new Config($list));

            $fs->remove($list['outputDir'] . 'autoload.php');
        }
    }
}