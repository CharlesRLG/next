<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/errors/resource_count_limit_exceeded_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V11\Errors;

class ResourceCountLimitExceededError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
Igoogle/ads/googleads/v11/errors/resource_count_limit_exceeded_error.protogoogle.ads.googleads.v11.errors"�
#ResourceCountLimitExceededErrorEnum"�
ResourceCountLimitExceededError
UNSPECIFIED 
UNKNOWN
ACCOUNT_LIMIT
CAMPAIGN_LIMIT
ADGROUP_LIMIT
AD_GROUP_AD_LIMIT
AD_GROUP_CRITERION_LIMIT
SHARED_SET_LIMIT
MATCHING_FUNCTION_LIMIT
RESPONSE_ROW_LIMIT_EXCEEDED	
RESOURCE_LIMIT
B�
#com.google.ads.googleads.v11.errorsB$ResourceCountLimitExceededErrorProtoPZEgoogle.golang.org/genproto/googleapis/ads/googleads/v11/errors;errors�GAA�Google.Ads.GoogleAds.V11.Errors�Google\\Ads\\GoogleAds\\V11\\Errors�#Google::Ads::GoogleAds::V11::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

