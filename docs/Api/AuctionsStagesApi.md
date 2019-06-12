# Swagger\Client\AuctionsStagesApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuctionStage**](AuctionsStagesApi.md#deleteAuctionStage) | **DELETE** /auctions/stages/{auctionID} | 
[**endAuctionStage**](AuctionsStagesApi.md#endAuctionStage) | **POST** /auctions/stages/end/{auctionID} | 
[**newAuctionStage**](AuctionsStagesApi.md#newAuctionStage) | **POST** /auctions/stages/{auctionID} | 
[**startAuctionStage**](AuctionsStagesApi.md#startAuctionStage) | **POST** /auctions/stages/start/{auctionID} | 


# **deleteAuctionStage**
> \Swagger\Client\Model\JStatus deleteAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_delete)



This function will delete a stage from a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_stage_delete = new \Swagger\Client\Model\AuctionStageDelete(); // \Swagger\Client\Model\AuctionStageDelete | 

try {
    $result = $apiInstance->deleteAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->deleteAuctionStage: ', $e->getMessage(), PHP_EOL;
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
 **auction_stage_delete** | [**\Swagger\Client\Model\AuctionStageDelete**](../Model/AuctionStageDelete.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endAuctionStage**
> \Swagger\Client\Model\JStatus endAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_end)



This function will terminate a stage from a given auction.<br>Warning!!! Only use at Sealed and Enveloped Auction Types!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_stage_end = new \Swagger\Client\Model\AuctionStageEnd(); // \Swagger\Client\Model\AuctionStageEnd | 

try {
    $result = $apiInstance->endAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->endAuctionStage: ', $e->getMessage(), PHP_EOL;
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
 **auction_stage_end** | [**\Swagger\Client\Model\AuctionStageEnd**](../Model/AuctionStageEnd.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAuctionStage**
> \Swagger\Client\Model\JResponseID newAuctionStage($auction_id, $company_id)



This function will create a new stage to a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->newAuctionStage($auction_id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->newAuctionStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auction_id** | **string**|  |
 **company_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startAuctionStage**
> \Swagger\Client\Model\JStatus startAuctionStage($user_id, $auction_id, $company_id, $x_api_key)



This function will start a stage for a given auction.<br>Warning!!!Only use at Sealed and Enveloped Auction Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsStagesApi(
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
    $result = $apiInstance->startAuctionStage($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->startAuctionStage: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

