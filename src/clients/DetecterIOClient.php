<?php

/**
 * Class RequestService
 * @author Alexander Schikowsky
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
     * @author Alexander Schikowsky
     * @return bool
     */
    public function isRequestBad($preparedData){

        $response = HttpRequester::HTTPPost(self::DETECTER_API_URL."/detect/badRequest", $preparedData);
        
        if($response['success'] == true){
            return $response['data']['bad'];
        }

        return false;
    }
}

