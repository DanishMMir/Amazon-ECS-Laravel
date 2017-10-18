<?php
namespace Packages\AmazonProAdvAPI\src;
use Packages\AmazonProAdvAPI\src\helpers\APIHelper;
use Packages\AmazonProAdvAPI\config\amazoncredentials;
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
//        $this->validConfig();
        $this->locale =config('amazoncredentials.locale');
        $this->associateTag=config('amazoncredentials.associate_tag');
        $this->accessKeyId = config('amazoncredentials.access_key_id');
        $this->secretAccessKey = config('amazoncredentials.secret_access_key');
        $this->apiHelper = new APIHelper();
    }
    public function browseNodeLookup($rawParams ){
        $params = $this->apiHelper->buildParams($rawParams);
        echo "<pre>";
//        print_r(ENV);
        echo config('amazoncredentials.secret_access_key');
        print_r($params);
        exit;
        $validResponseGroup = array('BrowseNodeInfo','MostGifted','NewReleases','MostWishedFor','TopSellers');
        if(!$responseGroup || !array_key_exists($responseGroup, $validResponseGroup)) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured one or more invalid Response Group. Possible Response Groups are: %s',
                    implode(', ', $validResponseGroup)
                )
            );
            return false;
        }

        // handle OK
        buildURL('BrowseNodeLookup',$browseNodeId,$responseGroup);
        return array(

        );

    }
    private function validConfig()
    {
        if(empty(config('amazoncredentials.access_key_id')) || empty(config('amazoncredentials.secret_access_key')) || empty(config('amazoncredentials.associate_tag')))
        {
            throw new InvalidArgumentException('No Access Key, Secret Key or Associate Tag has been set.');
        }

        if(!in_array(config('amazoncredentials.locale'), $this->locales))
        {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured an invalid locale "%s". Possible locales are: %s',
                    config('amazon.locale'),
                    implode(', ', $this->locales)
                )
            );
        }
    }
}