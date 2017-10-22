<?php
/**
 * Created by PhpStorm.
 * User: danishmmir
 * Date: 4/10/17
 * Time: 9:17 PM
 */

return [

        /**
         * Your affiliate associate tag.
         */
        'associate_tag' => env('ASSOCIATE_TAG_COM', ''),

        /**
         * Your access key.
         */
        'access_key_id' => env('ACCESS_KEY_ID_COM', ''),

        /**
         * Your secret key.
         */
        'secret_access_key' => env('SECRET_KEY_COM', ''),


        /**
         * Preferred locale
         */
        'locale' => env('LOCALE_COM', 'com'),

        /**
         * Preferred response group
         */
        'response_group' => env('AMAZON_RESPONSE_GROUP', 'Images,ItemAttributes'),

        /**
         * Preferred search index
         */
        'search_index' => env('AMAZON_SEARCH_INDEX', 'All'),


    ];