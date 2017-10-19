<?php
namespace Packages\AmazonProAdvAPI\src\helpers;
include_once (base_path('packages/AmazonProAdvAPI/config/amazoncredentials.php'));

class APIHelper{

    function buildURL($operation, $changingParams)
    {
        // Base URL
        define("BASE_URL","webservices.amazon");
        //  The region you are interested in
        $locale = amazonCredentials('locale');


        $uri = "/onca/xml";

        $fixedParams = array(
            "Service" => "AWSECommerceService",
            "Operation" => $operation,
            "AWSAccessKeyId" => amazonCredentials('access_key_id'),
            "AssociateTag" => amazonCredentials('associate_tag')
        );

        $params = array_merge($fixedParams,$changingParams);

        // Set current timestamp if not set
        if (!isset($params["Timestamp"])) {
            $params["Timestamp"] = gmdate('Y-m-d\TH:i:s\Z');
        }

        // Sort the parameters by key
        ksort($params);

        $pairs = array();

        foreach ($params as $key => $value) {
            array_push($pairs, rawurlencode($key) . "=" . rawurlencode($value));
        }

        // Generate the canonical query
        $canonical_query_string = join("&", $pairs);

        // Generate the string to be signed
        $string_to_sign = "GET\n" . BASE_URL.".". $locale . "\n" . $uri . "\n" . $canonical_query_string;

        // Generate the signature required by the Product Advertising API
        $signature = base64_encode(hash_hmac("sha256", $string_to_sign, amazonCredentials('secret_access_key'), true));

        // Generate the signed URL
        $request_url = 'http://' . BASE_URL.".". $locale . $uri . '?' . $canonical_query_string . '&Signature=' . rawurlencode($signature);

        return $request_url;
    }

    function buildParams($rawParams){
        $params = Array();
        $params['SearchIndex'] = !isset($rawParams['SearchIndex']) ?'':$rawParams['SearchIndex']; //The product category to search.
        $params['Keywords'] = !isset($rawParams['Keywords']) ?'':$rawParams['Keywords'];  //A word or phrase that describes an item, such as a title, author, and so on.
        $params['ResponseGroup'] = !isset($rawParams['ResponseGroup']) ?'':implode(",",$rawParams['ResponseGroup']);  //The type of product data you want returned.
        $params['Sort'] = !isset($rawParams['Sort']) ?'':$rawParams['Sort'];  //How items in the response are ordered.
        $params['BrowseNode'] = !isset($rawParams['BrowseNode']) ?'':$rawParams['BrowseNode'];    //Browse nodes are numbers that identify product categories.
        $params['BrowseNodeId'] = !isset($rawParams['BrowseNodeId']) ?'':$rawParams['BrowseNodeId'];    //Browse nodes are numbers that identify product categories. -- For BrowseNodeLookup
        $params['Actor'] = !isset($rawParams['Actor']) ?'':$rawParams['Actor'];   //Actor name associated with the item.
        $params['Artist'] = !isset($rawParams['Artist']) ?'':$rawParams['Artist'];    //Artist name associated with the item.
        $params['Author'] = !isset($rawParams['Author']) ?'':$rawParams['Author'];    //Author name associated with the item.
        $params['Availability'] = !isset($rawParams['Availability']) ?'':$rawParams['Availability'];  //Enables the ItemSearch operation to return only available items.
        $params['Brand'] = !isset($rawParams['Brand']) ?'':$rawParams['Brand'];   //Brand name associated with an item.
        $params['Composer'] = !isset($rawParams['Composer']) ?'':$rawParams['Composer'];  //Composer name associated with an item.
        $params['Condition'] = !isset($rawParams['Condition']) ?'':$rawParams['Condition'];   //Specifies an item's condition.
        $params['Conductor'] = !isset($rawParams['Conductor']) ?'':$rawParams['Conductor'];   //Conductor name associated with the item.
        $params['Director'] = !isset($rawParams['Director']) ?'':$rawParams['Director'];  //Director name associated with an item.
        $params['IncludeReviewsSummary'] = !isset($rawParams['IncludeReviewsSummary']) ?'':$rawParams['IncludeReviewsSummary'];   //When set to true, returns the reviews summary URL.
        $params['ItemPage'] = !isset($rawParams['ItemPage']) ?'':$rawParams['ItemPage'];  //Returns a specific page of items from all of the items in a response.
        $params['Manufacturer'] = !isset($rawParams['Manufacturer']) ?'':$rawParams['Manufacturer'];  //Manufacturer name associated with an item.
        $params['MaximumPrice'] = !isset($rawParams['MaximumPrice']) ?'':$rawParams['MaximumPrice'];  //Specifies the maximum item price in the response. Prices are returned in the lowest currency denomination. For example, 3241 is $32.41.
        $params['MerchantId'] = !isset($rawParams['MerchantId']) ?'':$rawParams['MerchantId'];    //Filters search results and offer listings to only items sold by Amazon
        $params['MinimumPrice'] = !isset($rawParams['MinimumPrice']) ?'':$rawParams['MinimumPrice'];  //Specifies the minimum item price in the response. Prices are returned in the lowest currency denomination. For example, 3241 is $32.41.
        $params['MinPercentageOff'] = !isset($rawParams['MinPercentageOff']) ?'':$rawParams['MinPercentageOff'];  //Specifies the minimum percentage off the item price.
        $params['Orchestra'] = !isset($rawParams['Orchestra']) ?'':$rawParams['Orchestra'];   //Orchestra name associated with an item.
        $params['Power'] = !isset($rawParams['Power']) ?'':$rawParams['Power'];   //Performs a book search using a complex query string. This parameter works only when SearchIndex is set to ‘Books’.
        $params['Publisher'] = !isset($rawParams['Publisher']) ?'':$rawParams['Publisher'];   //Publisher name associated with an item.
        $params['RelatedItemPage'] = !isset($rawParams['RelatedItemPage']) ?'':$rawParams['RelatedItemPage']; //Each ItemLookup request can return a maximum of 10 related items. RelatedItemPage specifies which set of 10 items to return. This parameter is only valid when used with the RelatedItems response group.
        $params['RelationshipType'] = !isset($rawParams['RelationshipType']) ?'':$rawParams['RelationshipType'];  //Returns related items by the specified value. This parameter is required when used with the RelatedItems response group.
        $params['Title'] = !isset($rawParams['Title']) ?'':$rawParams['Title'];   //Title associated with the item.
        $params['TruncateReviewsAt'] = !isset($rawParams['TruncateReviewsAt']) ?'':$rawParams['TruncateReviewsAt'];   //Enter a value to specify the length of the item review. By default, reviews are truncated to 1000 characters. To return complete reviews, enter 0.
        $params['VariationPage'] = !isset($rawParams['VariationPage']) ?'':$rawParams['VariationPage'];   //Returns a specific page of variations from the ItemSearch operation. By default, ItemSearch returns all variations.
        $params['AudienceRating'] = !isset($rawParams['AudienceRating']) ?'':implode(",",$rawParams['AudienceRating']);    //Movie rating based on MPAA ratings or age.
        $params['ItemId'] = !isset($rawParams['ItemId']) ?'':$rawParams['ItemId'];    //A number that uniquely identifies an item. The number is specified by the parameter IdType.
        $params['IdType'] = !isset($rawParams['IdType']) ?'':$rawParams['IdType'];    //Item identifier type.
        $params['SimilarityType'] = !isset($rawParams['SimilarityType']) ?'':$rawParams['SimilarityType'];    //'Intersection' returns the intersection of items that are similar to all of the ASINs specified. 'Random' returns the union of items that are similar to all of the ASINs specified.
        foreach ($params as $parameter => $value){
            if ($value == '')
                unset($params[$parameter]);
        }
        return $params;
    }
}