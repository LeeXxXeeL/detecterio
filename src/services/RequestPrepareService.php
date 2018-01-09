<?php

/**
 * Class Detecterio
 * @author Alexander Schikowsky
 * @copyright ProLexSoft UG
 */
class RequestPrepareService
{

    /**
     * @param $detecterSecret
     * @author Alexander Schikowsky
     * @return array
     */
    public function prepareData($detecterSecret, $verifiedAsHuman = false)
    {
        return array(
            "userData" => array(
                "ip" => $this->getRequestIp(),
                "host" => $_SERVER['HTTP_HOST'],
                "requestURI" => $_SERVER['HTTP_REFERER'],
                "scriptName" => $_SERVER['SCRIPT_NAME'],
                "userAgent" => $_SERVER['HTTP_USER_AGENT'],
                "isVerifiedAsHuman" => $verifiedAsHuman
            ),
            "detecterData" => array(
                "secret" => $detecterSecret
            )
        );
    }

    /**
     * There are many methods to select the IP from the request
     *
     * @author Alexander Schikowsky
     * @return string
     */
    private function getRequestIp() : string
    {

        $ipaddress = '';

        if (isset($_SERVER['HTTP_CLIENT_IP'])) {
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        } elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        } elseif (isset($_SERVER['HTTP_FORWARDED'])) {
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        } elseif (isset($_SERVER['REMOTE_ADDR'])) {
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        }

        return $ipaddress;
    }
}
