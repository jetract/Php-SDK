# Jetract\BiddersApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBidder**](BiddersApi.md#deleteBidder) | **DELETE** /bidders/{bidderID} | 
[**getBidder**](BiddersApi.md#getBidder) | **GET** /bidders/{bidderID} | 
[**getBidders**](BiddersApi.md#getBidders) | **GET** /bidders | 
[**newBidder**](BiddersApi.md#newBidder) | **POST** /bidders | 
[**updateBidder**](BiddersApi.md#updateBidder) | **PUT** /bidders/{bidderID} | 


# **deleteBidder**
> \Jetract\Model\JStatus deleteBidder($companyID, $bidderID)



This function will delete a given Bidder from a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$bidderID = "bidderID_example"; // string | 

try {
    $result = $apiInstance->deleteBidder($companyID, $bidderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->deleteBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **bidderID** | **string**|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidder**
> \Jetract\Model\BidderResponse getBidder($bidderID)



This function will return the details of a given Bidder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bidderID = "bidderID_example"; // string | 

try {
    $result = $apiInstance->getBidder($bidderID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->getBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **bidderID** | **string**|  |

### Return type

[**\Jetract\Model\BidderResponse**](../Model/BidderResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidders**
> \Jetract\Model\BiddersResponse getBidders($companyID)



This function will return all bidders of a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->getBidders($companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->getBidders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |

### Return type

[**\Jetract\Model\BiddersResponse**](../Model/BiddersResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newBidder**
> \Jetract\Model\JResponseID newBidder($companyID, $bidderNew)



This function will crate a new bidder at a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$bidderNew = new \Jetract\Model\BidderNew(); // \Jetract\Model\BidderNew | 

try {
    $result = $apiInstance->newBidder($companyID, $bidderNew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->newBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **bidderNew** | [**\Jetract\Model\BidderNew**](../Model/BidderNew.md)|  |

### Return type

[**\Jetract\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBidder**
> \Jetract\Model\JStatus updateBidder($companyID, $bidderID, $bidderUpdate)



This function will update a given bidder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$bidderID = "bidderID_example"; // string | 
$bidderUpdate = new \Jetract\Model\BidderUpdate(); // \Jetract\Model\BidderUpdate | 

try {
    $result = $apiInstance->updateBidder($companyID, $bidderID, $bidderUpdate);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->updateBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **bidderID** | **string**|  |
 **bidderUpdate** | [**\Jetract\Model\BidderUpdate**](../Model/BidderUpdate.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

