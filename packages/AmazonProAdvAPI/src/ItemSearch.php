<?php
/**
 * Created by PhpStorm.
 * User: Danish Mir
 * Date: 20-10-2017
 * Time: 09:38 PM
 */

namespace Packages\AmazonProAdvAPI\src;
use InvalidArgumentException;

use Packages\AmazonProAdvAPI\src\helpers\APIHelper;

class ItemSearch
{
    use APIHelper;
    private $locales = [
        'co.uk', 'com', 'ca', 'com.br', 'de', 'es', 'fr', 'in', 'it', 'co.jp', 'com.mx'
    ];
    public  function __construct(){
        $this->validConfig();
    }
    public function itemSearch($rawParams){
        $params = $this->buildParams($rawParams);

        $validParams = array('SearchIndex','ResponseGroup','BrowseNode','Keywords','Sort','Actor','Artist','Author','Availability','Brand','Composer',
            'Condition','Conductor','Director','IncludeReviewsSummary','ItemPage','Manufacturer','MaximumPrice','MerchantId','MinimumPrice','MinPercentageOff',
            'Orchestra','Power','Publisher','RelatedItemPage','RelationshipType','Title','TruncateReviewsAt','VariationPage','AudienceRating');

        $optionalParams = array('Keywords','Title','Power','BrowseNode','Artist','Author','Actor','Director','AudienceRating','Manufacturer','MusicLabel',
            'Composer','Publisher','Brand','Conductor','Orchestra','TextStream','Cuisine','City','Neighborhood');

        $validResponseGroup = array('Accessories','AlternateVersions','BrowseNodes','EditorialReview','Images','ItemAttributes','ItemIds','Large','Medium',
            'OfferFull','OfferListings','Offers','OfferSummary','PromotionSummary','RelatedItems','Reviews','SalesRank','SearchBins','Similarities','Small',
            'Tracks','Variations','VariationMatrix','VariationOffers','VariationSummary');

        $validSearchIndexes = array('All','Appliances','ArtsAndCrafts','Automotive','Baby','Beauty','Blended','Books','Collectibles','Electronics','Fashion',
            'FashionBaby','FashionBoys','FashionGirls','FashionMen','FashionWomen','GiftCards','Grocery','HealthPersonalCare','HomeGarden','Industrial',
            'KindleStore','LawnAndGarden','Luggage','MP3Downloads','Magazines','Merchants','MobileApps','Movies','Music','MusicalInstruments','OfficeProducts',
            'PCHardware','PetSupplies','Software','SportingGoods','Tools','Toys','UnboxVideo','VideoGames','Wine','Wireless');

        $validAvalibilities = array('Available');

        $validConditions = array('New','Used','Collectible','Refurbished','All');

        $validIncludeReviewsSummaries = array('true','false');

        $validMerchantIds = array('Amazon');

        $validRelationshipTypes = array('AuthorityTitle','DigitalMusicArranger','DigitalMusicComposer','DigitalMusicConductor','DigitalMusicEnsemble',
            'DigitalMusicLyricist','DigitalMusicPerformer','DigitalMusicPrimaryArtist','DigitalMusicProducer','DigitalMusicRemixer','DigitalMusicSongWriter',
            'Episode','Season','Tracks');

        $validAudienceRatings = array('G','PG','PG-13','R','NC-17','NR','Unrated');


        if(!isset($params['SearchIndex'])){
            throw new InvalidArgumentException(
                sprintf(
                    'You have not provided the required parameter: %s', 'SearchIndex'
                )
            );
            return false;
        }

        if(!isset($optionalParams)){
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured none of the optional Request Parameters. Possible optional Request Parameters are: %s',
                    implode(', ', $optionalParams)
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

        if(isset($params['ResponseGroup'])) {
            foreach (explode(",", $params['ResponseGroup']) as $responseGroup) {
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
        }

        if (!in_array($params['SearchIndex'], $validSearchIndexes)) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured a wrong Search Index. Possible Search Indexes are: %s',
                    implode(', ', $validSearchIndexes)
                )
            );
            return false;
        }

        if (isset($params['Availability'])? !in_array($params['Availability'], $validAvalibilities) : false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured a wrong Availability. Possible Availabilities are: %s',
                    implode(', ', $validAvalibilities)
                )
            );
            return false;
        }

        if (isset($params['Condition'])? !in_array($params['Condition'], $validConditions): false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured a wrong Condition. Possible Conditions are: %s',
                    implode(', ', $validConditions)
                )
            );
            return false;
        }

        if (isset($params['ConditiIncludeReviewsSummaryon'])? !in_array($params['IncludeReviewsSummary'], $validIncludeReviewsSummaries) : false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured a wrong Include Reviews Summary. Possible Include Reviews Summaries are: %s',
                    implode(', ', $validIncludeReviewsSummaries)
                )
            );
            return false;
        }

        if (isset($params['ConditiIncludeReviewsSummaryon'])? !in_array($params['MerchantId'], $validMerchantIds) : false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured a wrong Merchant Id. Possible Merchant Ids are: %s',
                    implode(', ', $validMerchantIds)
                )
            );
            return false;
        }

        if (isset($params['ConditiIncludeReviewsSummaryon'])? !in_array($params['RelationshipType'], $validRelationshipTypes) : false) {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured a wrong Relationship Type. Possible Relationship Types are: %s',
                    implode(', ', $validRelationshipTypes)
                )
            );
            return false;
        }

        if(isset($params['AudienceRating'])) {
            foreach (explode(",", $params['AudienceRating']) as $audienceRating) {
                if (!in_array($audienceRating, $validAudienceRatings)) {
                    throw new InvalidArgumentException(
                        sprintf(
                            'You have configured one or more invalid Audience Ratings. Possible Audience Ratings are: %s',
                            implode(', ', $validAudienceRatings)
                        )
                    );
                    return false;
                }
            }
        }

        // handle OK
        $signedURL = $this->buildURL('ItemSearch',$params);

        // Get cURL resource
        $curl = curl_init();
// Set some options - we are passing in a useragent too here
        curl_setopt_array($curl, array(
            CURLOPT_RETURNTRANSFER => 'TRUE',
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
        if(empty(config('amazoncredentials.access_key_id')) || empty(config('amazoncredentials.secret_access_key')) || empty(config('amazoncredentials.associate_tag')))
        {
            throw new InvalidArgumentException('No Access Key, Secret Key or Associate Tag has been set.');
        }

        if(!in_array(config('amazoncredentials.locale'), $this->locales))
        {
            throw new InvalidArgumentException(
                sprintf(
                    'You have configured an invalid locale "%s". Possible locales are: %s',
                    config('amazoncredentials.locale'),
                    implode(', ', $this->locales)
                )
            );
        }
    }
}