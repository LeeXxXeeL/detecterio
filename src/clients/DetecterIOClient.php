<?php

/**
 * Class RequestService
 * @copyright ProLexSoft UG
 */
class DetecterIOClient
{
    CONST DETECTER_API_URL = "http://localhost/api";

    /**
     * Check Your Request if it is bad
     * URL /api/detect/badRequest
     *
     * @param $preparedData
     * @return bool
     */
    public function isRequestBad($preparedData)
    {

        $response = HttpRequester::post(self::DETECTER_API_URL . "/detect/badRequest", $preparedData);

        if ($response['success'] == true) {
            return $response['data']['bad'];
        }

        return false;
    }
}

