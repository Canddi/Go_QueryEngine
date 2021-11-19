<?php

namespace GoQueryEngine\Service;
use Exception;
use GuzzleHttp\Client as GuzzleClient;
use GoQueryEngine\Model\Output\ModelOutputAbstract;
use GoQueryEngine\Model\Where\ModelWhereAbstract;

class ServiceAthena
{
    const c_strURL_Athena = '/prodcloud/athena_query';
    private static $_instance;
    private static $_guzzleConnection;
    private $_arrwhere = array();
    private $_bInternal = false;
    private $_bUnique = false;
    private $_strCBURL = '';

    public function __construct(string $strBaseURL) {
        if (empty($strBaseURL)) {
            throw new Exception('Base URL cannot be empty');
        }

        $this->_strBaseURL = $strBaseURL;
    }

    public static function getInstance(string $strBaseURL)
    {
        if (self::$_instance !== null) {
            return self::$_instance;
        }

        return new ServiceAthena($strBaseURL);
    }

    public function setToken(string $strToken)
    {
        $this->_strToken = $strToken;
    }

    public function setOutput(ModelOutputAbstract $modelOutputAbstract)
    {
        $this->_modelOutputAbstract = $modelOutputAbstract;
    }

    public function addWhere(ModelWhereAbstract $modelWhereAbstract)
    {
        $this->_arrwhere[] = $modelWhereAbstract;
    }

    public function setBInternal(bool $bInternal)
    {
        $this->_bInternal = $bInternal;
    }

    public function setBUnique(bool $bUnique)
    {
        $this->_bUnique = $bUnique;
    }

    public function setCallbackURL(string $strCBURL)
    {
        $this->_strCBURL = $strCBURL;
    }

    public function lookup()
    {
        // validate token, baseurl, wheres, outputtype
        // get guzzle connection
        // send request
        // end
    }

    /**
     * Used for testing
     *      This injects in a GuzzleConnection so we can
     *      mock this
     *
     * @param \GuzzleHttp\Client $guzzleConnection
     **/
    public static function injectGuzzle(
        GuzzleClient $guzzleConnection
    ) {
        self::$_guzzleConnection    = $guzzleConnection;
    }

    protected static function _getGuzzle($strBaseUri, $strAccessToken)
    : GuzzleClient
    {
        if (!self::$_guzzleConnection) {
            $arrDefaults                = [
                'base_uri'              => $strBaseUri,
                'method'                => 'POST',
                'timeout'               => 10,
                'connect_timeout'       => 10,
                'headers'               => [
                    'Accept'            => 'application/json',
                    'Accept-Encoding'   => 'gzip, deflate',
                    'Authorization'     => $strAccessToken
                ],
                "verify"                => false
            ];
            self::$_guzzleConnection    = new GuzzleClient($arrDefaults);
        }

        return self::$_guzzleConnection;
    }
}
