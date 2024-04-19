<?php

namespace WSD\BrightSignApi;

/**
 * Class WSSoapClient
 *
 * Ruthlessly copied from https://gist.github.com/Turin86/5569152 and changed into our usage.
 *
 * @package WSD\BrightSignApi\Client
 * @author Jesper Skytte Marcussen <jsm@westsoftdevelopment.dk>
 */
class SoapClient extends \SoapClient
{

    const OASIS = 'http://docs.oasis-open.org/wss/2004/01';

    /**
     * @var string
     */
    private $username;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $account;

    public function __construct($wsdl, array $options = null)
    {                
        parent::__construct($wsdl, $options + [
            'location' => str_replace('WSDL', 'Basic', $wsdl),
            'connection_timeout' => 500000,            
            'keep_alive' => false,
        ]);
    }

    /**
     * Set WS-Security credentials
     *
     * @param string $username
     * @param string $password
     * @param string $account
     */
    public function __setUsernameToken($username, $password, $account)
    {
        $this->username = $username;
        $this->password = $password;
        $this->account = $account;
    }

    /**
     *
     *
     * @param string $function_name
     * @param array $arguments
     * @param array|null $options
     * @param array|null $input_headers
     * @param array|null $output_headers
     *
     * @return mixed
     * @author Jesper Skytte Marcussen <jsm@westsoftdevelopment.dk>
     */
    public function __soapCall(
        $function_name,
        $arguments,
        $options = null,
        $input_headers = null,
        &$output_headers = null
    ) {
        $this->__setSoapHeaders($this->generateWSSecurityHeader());
        return parent::__soapCall($function_name, $arguments, $options, $input_headers, $output_headers);
    }

    /**
     * Generates WS-Security headers
     *
     * @return \SoapHeader
     */
    private function generateWSSecurityHeader()
    {
        $xml = '
<wsse:Security xmlns:wsse="' . self::OASIS . '/oasis-200401-wss-wssecurity-secext-1.0.xsd">
    <wsse:UsernameToken>
        <wsse:Username>' . $this->account . '/' . $this->username . '</wsse:Username>
        <wsse:Password>' . $this->password . '</wsse:Password>
    </wsse:UsernameToken>
</wsse:Security>';

        return new \SoapHeader(
            self::OASIS . '/oasis-200401-wss-wssecurity-secext-1.0.xsd',
            'Security',
            new \SoapVar($xml, XSD_ANYXML),
            true);
    }
}