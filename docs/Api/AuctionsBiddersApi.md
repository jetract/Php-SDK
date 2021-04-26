# Swagger\Client\AuctionsBiddersApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBidder**](AuctionsBiddersApi.md#addBidder) | **POST** /auctions/bidders/{auctionID} | 
[**auctionsBiddersAgreementsResetAuctionIDPost**](AuctionsBiddersApi.md#auctionsBiddersAgreementsResetAuctionIDPost) | **POST** /auctions/bidders/agreements/reset/{auctionID} | 


# **addBidder**
> \Swagger\Client\Model\JStatus addBidder($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_bidder)



This function will return the bidders of a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsBiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_attach_bidder = new \Swagger\Client\Model\AuctionAttachBidder(); // \Swagger\Client\Model\AuctionAttachBidder | 

try {
    $result = $apiInstance->addBidder($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_bidder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsBiddersApi->addBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **auction_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **auction_attach_bidder** | [**\Swagger\Client\Model\AuctionAttachBidder**](../Model/AuctionAttachBidder.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auctionsBiddersAgreementsResetAuctionIDPost**
> \Swagger\Client\Model\JStatus auctionsBiddersAgreementsResetAuctionIDPost($user_id, $auction_id, $company_id, $x_api_key, $auction_bidder_agreement_reset)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsBiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_bidder_agreement_reset = new \Swagger\Client\Model\AuctionBidderAgreementReset(); // \Swagger\Client\Model\AuctionBidderAgreementReset | 

try {
    $result = $apiInstance->auctionsBiddersAgreementsResetAuctionIDPost($user_id, $auction_id, $company_id, $x_api_key, $auction_bidder_agreement_reset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsBiddersApi->auctionsBiddersAgreementsResetAuctionIDPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **auction_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **auction_bidder_agreement_reset** | [**\Swagger\Client\Model\AuctionBidderAgreementReset**](../Model/AuctionBidderAgreementReset.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

