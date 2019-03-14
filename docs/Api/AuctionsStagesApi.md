# Jetract\AuctionsStagesApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuctionStage**](AuctionsStagesApi.md#deleteAuctionStage) | **DELETE** /auctions/stages/{auctionID} | 
[**endAuctionStage**](AuctionsStagesApi.md#endAuctionStage) | **POST** /auctions/stages/end/{auctionID} | 
[**newAuctionStage**](AuctionsStagesApi.md#newAuctionStage) | **POST** /auctions/stages/{auctionID} | 
[**startAuctionStage**](AuctionsStagesApi.md#startAuctionStage) | **POST** /auctions/stages/start/{auctionID} | 


# **deleteAuctionStage**
> \Jetract\Model\JStatus deleteAuctionStage($auctionID, $auctionStageDelete, $companyID)



This function will delete a stage from a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$auctionStageDelete = new \Jetract\Model\AuctionStageDelete(); // \Jetract\Model\AuctionStageDelete | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->deleteAuctionStage($auctionID, $auctionStageDelete, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->deleteAuctionStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **auctionStageDelete** | [**\Jetract\Model\AuctionStageDelete**](../Model/AuctionStageDelete.md)|  |
 **companyID** | **string**|  | [optional]

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endAuctionStage**
> \Jetract\Model\JStatus endAuctionStage($auctionID, $companyID, $auctionStageEnd)



This function will terminate a stage from a given auction.<br>Warning!!! Only use at Sealed and Enveloped Auction Types!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 
$auctionStageEnd = new \Jetract\Model\AuctionStageEnd(); // \Jetract\Model\AuctionStageEnd | 

try {
    $result = $apiInstance->endAuctionStage($auctionID, $companyID, $auctionStageEnd);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->endAuctionStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |
 **auctionStageEnd** | [**\Jetract\Model\AuctionStageEnd**](../Model/AuctionStageEnd.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAuctionStage**
> \Jetract\Model\JResponseID newAuctionStage($auctionID, $companyID)



This function will create a new stage to a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->newAuctionStage($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->newAuctionStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |

### Return type

[**\Jetract\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startAuctionStage**
> \Jetract\Model\JStatus startAuctionStage($auctionID, $companyID)



This function will start a stage for a given auction.<br>Warning!!!Only use at Sealed and Enveloped Auction Types.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsStagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->startAuctionStage($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsStagesApi->startAuctionStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

