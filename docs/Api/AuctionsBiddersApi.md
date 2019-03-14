# Jetract\AuctionsBiddersApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBidder**](AuctionsBiddersApi.md#addBidder) | **POST** /auctions/bidders/{auctionID} | 


# **addBidder**
> \Jetract\Model\JStatus addBidder($auctionID, $companyID, $auctionAttachBidder)



This function will return the bidders of a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsBiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 
$auctionAttachBidder = new \Jetract\Model\AuctionAttachBidder(); // \Jetract\Model\AuctionAttachBidder | 

try {
    $result = $apiInstance->addBidder($auctionID, $companyID, $auctionAttachBidder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsBiddersApi->addBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |
 **auctionAttachBidder** | [**\Jetract\Model\AuctionAttachBidder**](../Model/AuctionAttachBidder.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

