# Jetract\AuctionsDurationApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**changeAutoExtend**](AuctionsDurationApi.md#changeAutoExtend) | **POST** /auctions/duration/autoExtend/{auctionID} | 
[**extend**](AuctionsDurationApi.md#extend) | **POST** /auctions/duration/extend/{auctionID} | 


# **changeAutoExtend**
> \Jetract\Model\JStatus changeAutoExtend($auctionID, $auctionAutoTimeExtension, $companyID)



This function will change the Auto Extend configurations of a given auction.<br>You can Turn ON/OFF or modify the extension rules.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsDurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$auctionAutoTimeExtension = new \Jetract\Model\AuctionAutoTimeExtension(); // \Jetract\Model\AuctionAutoTimeExtension | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->changeAutoExtend($auctionID, $auctionAutoTimeExtension, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsDurationApi->changeAutoExtend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **auctionAutoTimeExtension** | [**\Jetract\Model\AuctionAutoTimeExtension**](../Model/AuctionAutoTimeExtension.md)|  |
 **companyID** | **string**|  | [optional]

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **extend**
> \Jetract\Model\JStatus extend($auctionID, $companyID, $auctionExtendDuration)



This function will change the duration of a given auction.<br>Keep in mind that extend duration can be negative!<br>Example: 5 --> Adds 5 minutes to duration.<br>Example:-5 -->Subtracts 5 minutes from duration.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsDurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 
$auctionExtendDuration = new \Jetract\Model\AuctionExtendDuration(); // \Jetract\Model\AuctionExtendDuration | 

try {
    $result = $apiInstance->extend($auctionID, $companyID, $auctionExtendDuration);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsDurationApi->extend: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |
 **auctionExtendDuration** | [**\Jetract\Model\AuctionExtendDuration**](../Model/AuctionExtendDuration.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

