# Swagger\Client\AuctionsOffersApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteOffer**](AuctionsOffersApi.md#deleteOffer) | **DELETE** /auctions/offers/{auctionID} | 


# **deleteOffer**
> \Swagger\Client\Model\JStatus deleteOffer($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_offer)



This function will delete an offer from given bidder and an auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsOffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_delete_offer = new \Swagger\Client\Model\AuctionDeleteOffer(); // \Swagger\Client\Model\AuctionDeleteOffer | 

try {
    $result = $apiInstance->deleteOffer($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsOffersApi->deleteOffer: ', $e->getMessage(), PHP_EOL;
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
 **auction_delete_offer** | [**\Swagger\Client\Model\AuctionDeleteOffer**](../Model/AuctionDeleteOffer.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

