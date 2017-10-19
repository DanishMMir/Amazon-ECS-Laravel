<?php
namespace Packages\AmazonProAdvAPI\src;
use Packages\AmazonProAdvAPI\src\helpers\APIHelper;
include_once (base_path('packages/AmazonProAdvAPI/config/amazoncredentials.php'));
use InvalidArgumentException;


class BrowseNodeLookup{
        private $locales = [
            'co.uk', 'com', 'ca', 'com.br', 'de', 'es', 'fr', 'in', 'it', 'co.jp', 'com.mx'
        ];
        private $locale;
        private $associateTag;
        private $accessKeyId;
        private $secretAccessKey;
        private $apiHelper;
    public  function __construct(){
            $this->validConfig();
            $this->locale = amazonCredentials('locale');
            $this->associateTag = amazonCredentials('associate_tag');
            $this->accessKeyId = amazonCredentials('access_key_id');
            $this->secretAccessKey = amazonCredentials('secret_access_key');
            $this->apiHelper = new APIHelper();

    }
    public function browseNodeLookup($rawParams){
        $params = $this->apiHelper->buildParams($rawParams);

        $validParams = array('BrowseNodeId','ResponseGroup');
        $validResponseGroup = array('BrowseNodeInfo','MostGifted','NewReleases','MostWishedFor','TopSellers');


        if(!isset($params['BrowseNodeId'])){
            throw new InvalidArgumentException(
                sprintf(
                    'You have not provided the required parameter: %s', 'BrowseNodeId'
                )
            );
            return false;
        }

        foreach ($params as $paramsKey => $paramsValue) {
            if (!in_array($paramsKey, $validParams)) {
                throw new InvalidArgumentException(
                    sprintf(
                        'You have configured one or more invalid Request Parameters. Possible Request Parameters are: %s',
                        implode(', ', $validParams)
                    )
                );
                return false;
            }
        }

        foreach (explode(",",$params['ResponseGroup']) as $responseGroup) {
            if (!in_array($responseGroup, $validResponseGroup)) {
                throw new InvalidArgumentException(
                    sprintf(
                        'You have configured one or more invalid Response Group. Possible Response Groups are: %s',
                        implode(', ', $validResponseGroup)
                    )
                );
                return false;
            }
        }

        // handle OK
        $signedURL = $this->apiHelper->buildURL('BrowseNodeLookup',$params);
//        echo $signedURL;
//        echo "<br>";

        // Get cURL resource
        $curl = curl_init();
// Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $signedURL,
        ));
// Send the request & save response to $resp
        $resp = curl_exec($curl);
// Close request to clear up some resources
        curl_close($curl);

        echo $resp;
//        return array(
//
//        );

        return null;

    }
    private function validConfig()
    {
        if(empty(amazonCredentials('access_key_id')) || empty(amazonCredentials('secret_access_key')) || empty(amazonCredentials('associate_tag')))
        {
            throw new InvalidArgumentException('No Access Key, Secret Key or Associate Tag has been set.');
        }

        if(!in_array(amazonCredentials('locale'), $this->locales))
        {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured an invalid locale "%s". Possible locales are: %s',
                    amazonCredentials('locale'),
                    implode(', ', $this->locales)
                )
            );
        }
    }
}