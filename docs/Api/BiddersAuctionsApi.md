# Swagger\Client\BiddersAuctionsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bidderAuctionsAuctionIDGet**](BiddersAuctionsApi.md#bidderAuctionsAuctionIDGet) | **GET** /bidder/auctions/{auctionID} | 
[**bidderAuctionsGet**](BiddersAuctionsApi.md#bidderAuctionsGet) | **GET** /bidder/auctions | 


# **bidderAuctionsAuctionIDGet**
> \Swagger\Client\Model\BidderAuctionResponse bidderAuctionsAuctionIDGet($user_id, $auction_id, $company_id, $x_api_key)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersAuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->bidderAuctionsAuctionIDGet($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersAuctionsApi->bidderAuctionsAuctionIDGet: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\BidderAuctionResponse**](../Model/BidderAuctionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bidderAuctionsGet**
> \Swagger\Client\Model\BidderAuctionsResponse bidderAuctionsGet($user_id, $company_id, $x_api_key, $status, $type, $range)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersAuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$status = "status_example"; // string | Status of the Auction.<br>ONGOING: ACTIVE + WAITING<br>FINISHED:FLOW+COMPLETE<br>Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.<br>Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed.
$type = "type_example"; // string | Type of the Auction.
$range = "range_example"; // string | Auction Date Range.

try {
    $result = $apiInstance->bidderAuctionsGet($user_id, $company_id, $x_api_key, $status, $type, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersAuctionsApi->bidderAuctionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **status** | **string**| Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. | [optional]
 **type** | **string**| Type of the Auction. | [optional]
 **range** | **string**| Auction Date Range. | [optional]

### Return type

[**\Swagger\Client\Model\BidderAuctionsResponse**](../Model/BidderAuctionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

