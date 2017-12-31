<?php
include dirname(__FILE__).'/../../src/autoload.php';

/**
 * Class Detecterio
 * @author Alexander Schikowsky
 * @copyright ProLexSoft UG
 */
class Detecterio
{
    private $detecterSecret;
    private $googlePrivateCaptchaKey;
    private $googlePublicCaptchaKey;

    /**
     * detecterSecret
     * The Secret ist required to identifies your App in our Service
     *
     * Detecterio constructor.
     * @param $detecterSecret
     */
    public function __construct($detecterSecret, $googlePrivateCaptchaKey, $googlePublicCaptchaKey)
    {
        $this->detecterSecret = $detecterSecret;
        $this->googlePrivateCaptchaKey = $googlePrivateCaptchaKey;
        $this->googlePublicCaptchaKey = $googlePublicCaptchaKey;
    }

    /**
     * Check the request and make an
     *
     * @author Alexander Schikowsky
     */
    public function checkRequest()
    {
        $verifiedAsHuman = false;

        if(isset($_POST['g-recaptcha-response'])){
            $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$this->googlePrivateCaptchaKey.'&response='.$_POST['g-recaptcha-response']);
            $responseData = json_decode($verifyResponse);
            if($responseData->success){
                $verifiedAsHuman = true;
            }
        }

        $requestPrepareService = new RequestPrepareService();

        $data = $requestPrepareService->prepareData($this->detecterSecret, $verifiedAsHuman);

        $detecterIOClient = new DetecterIOClient();

        $isBad = $detecterIOClient->isRequestBad($data);

        if ($isBad == true && $verifiedAsHuman == false) {
            header('HTTP/1.0 403 Forbidden');

            include 'resource/views/verification.html.php';

            die();
        }
    }

    public function test(){
        $verifiedAsHuman = false;

        # Here you can do something to verify the human.
        # A sample integration to check how a human can be verified look at the folder integration/google and checkout the verification process
        if($_REQUEST['isVerified']){
            $verifiedAsHuman = true;
        }

        # Its required to initialize the PrepareService and the DetecterIO API Client
        $requestPrepareService = new RequestPrepareService();
        $detecterIOClient = new DetecterIOClient();

        # Preparing the data with  the service
        $data = $requestPrepareService->prepareData($this->detecterSecret, $verifiedAsHuman);

        # Check if request is bad
        # Here we use the prepared data
        $isBad = $detecterIOClient->isRequestBad($data);

        # If request is bad we will give them a 403 forbidden page
        # There you can do what you want to block bad requests
        if ($isBad == true && $verifiedAsHuman == false) {
            header('HTTP/1.0 403 Forbidden');

            # For example you include a simple verification page with captcha or something else
            include 'resource/views/verification.html.php';

            die();
        }
    }
}