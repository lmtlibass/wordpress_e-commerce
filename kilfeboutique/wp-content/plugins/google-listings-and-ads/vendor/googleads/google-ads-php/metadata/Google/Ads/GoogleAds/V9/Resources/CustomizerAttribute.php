<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v9/resources/customizer_attribute.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V9\Resources;

class CustomizerAttribute
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/ads/googleads/v9/enums/customizer_attribute_type.protogoogle.ads.googleads.v9.enums"�
CustomizerAttributeTypeEnum"e
CustomizerAttributeType
UNSPECIFIED 
UNKNOWN
TEXT

NUMBER	
PRICE
PERCENTB�
!com.google.ads.googleads.v9.enumsBCustomizerAttributeTypeProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
?google/ads/googleads/v9/enums/customizer_attribute_status.protogoogle.ads.googleads.v9.enums"t
CustomizerAttributeStatusEnum"S
CustomizerAttributeStatus
UNSPECIFIED 
UNKNOWN
ENABLED
REMOVEDB�
!com.google.ads.googleads.v9.enumsBCustomizerAttributeStatusProtoPZBgoogle.golang.org/genproto/googleapis/ads/googleads/v9/enums;enums�GAA�Google.Ads.GoogleAds.V9.Enums�Google\\Ads\\GoogleAds\\V9\\Enums�!Google::Ads::GoogleAds::V9::Enumsbproto3
�
<google/ads/googleads/v9/resources/customizer_attribute.proto!google.ads.googleads.v9.resources=google/ads/googleads/v9/enums/customizer_attribute_type.protogoogle/api/field_behavior.protogoogle/api/resource.protogoogle/api/annotations.proto"�
CustomizerAttributeK
resource_name (	B4�A�A.
,googleads.googleapis.com/CustomizerAttribute
id (B�A
name (	B�A�Ae
type (2R.google.ads.googleads.v9.enums.CustomizerAttributeTypeEnum.CustomizerAttributeTypeB�Ak
status (2V.google.ads.googleads.v9.enums.CustomizerAttributeStatusEnum.CustomizerAttributeStatusB�A:y�Av
,googleads.googleapis.com/CustomizerAttributeFcustomers/{customer_id}/customizerAttributes/{customizer_attribute_id}B�
%com.google.ads.googleads.v9.resourcesBCustomizerAttributeProtoPZJgoogle.golang.org/genproto/googleapis/ads/googleads/v9/resources;resources�GAA�!Google.Ads.GoogleAds.V9.Resources�!Google\\Ads\\GoogleAds\\V9\\Resources�%Google::Ads::GoogleAds::V9::Resourcesbproto3'
        , true);
        static::$is_initialized = true;
    }
}

