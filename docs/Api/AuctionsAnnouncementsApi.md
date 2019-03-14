# Jetract\AuctionsAnnouncementsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAnnouncements**](AuctionsAnnouncementsApi.md#getAnnouncements) | **GET** /auctions/announcements/{auctionID} | 
[**newAnnouncement**](AuctionsAnnouncementsApi.md#newAnnouncement) | **POST** /auctions/announcements/{auctionID} | 


# **getAnnouncements**
> \Jetract\Model\AuctionAnnouncementsResponse getAnnouncements($auctionID, $companyID)



This function will return all announcements made in a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsAnnouncementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->getAnnouncements($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAnnouncementsApi->getAnnouncements: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |

### Return type

[**\Jetract\Model\AuctionAnnouncementsResponse**](../Model/AuctionAnnouncementsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAnnouncement**
> \Jetract\Model\AuctionAnnouncementResponse newAnnouncement($auctionID, $companyID, $auctionAnnouncementNew)



This function will post a new announcement to a given auction. All announcements will be pushed to all bidders in real-time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsAnnouncementsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 
$auctionAnnouncementNew = new \Jetract\Model\AuctionAnnouncementNew(); // \Jetract\Model\AuctionAnnouncementNew | 

try {
    $result = $apiInstance->newAnnouncement($auctionID, $companyID, $auctionAnnouncementNew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsAnnouncementsApi->newAnnouncement: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |
 **auctionAnnouncementNew** | [**\Jetract\Model\AuctionAnnouncementNew**](../Model/AuctionAnnouncementNew.md)|  |

### Return type

[**\Jetract\Model\AuctionAnnouncementResponse**](../Model/AuctionAnnouncementResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

