# Swagger\Client\BiddersApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBidder**](BiddersApi.md#deleteBidder) | **DELETE** /bidders/{bidderID} | 
[**getBidder**](BiddersApi.md#getBidder) | **GET** /bidders/{bidderID} | 
[**getBidders**](BiddersApi.md#getBidders) | **GET** /bidders | 
[**newBidder**](BiddersApi.md#newBidder) | **POST** /bidders | 
[**updateBidder**](BiddersApi.md#updateBidder) | **PUT** /bidders/{bidderID} | 


# **deleteBidder**
> \Swagger\Client\Model\JStatus deleteBidder($user_id, $bidder_id, $company_id, $x_api_key)



This function will delete a given Bidder from a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$bidder_id = "bidder_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->deleteBidder($user_id, $bidder_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->deleteBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **bidder_id** | **string**|  |
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

# **getBidder**
> \Swagger\Client\Model\BidderResponse getBidder($user_id, $bidder_id, $company_id, $x_api_key)



This function will return the details of a given Bidder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$bidder_id = "bidder_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getBidder($user_id, $bidder_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->getBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **bidder_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\BidderResponse**](../Model/BidderResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidders**
> \Swagger\Client\Model\BiddersResponse getBidders($user_id, $company_id, $x_api_key)



This function will return all bidders of a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getBidders($user_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->getBidders: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\BiddersResponse**](../Model/BiddersResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newBidder**
> \Swagger\Client\Model\BidderNewResponse newBidder($user_id, $company_id, $x_api_key, $bidder_new)



This function will crate a new bidder at a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$bidder_new = new \Swagger\Client\Model\BidderNew(); // \Swagger\Client\Model\BidderNew | 

try {
    $result = $apiInstance->newBidder($user_id, $company_id, $x_api_key, $bidder_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->newBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **bidder_new** | [**\Swagger\Client\Model\BidderNew**](../Model/BidderNew.md)|  |

### Return type

[**\Swagger\Client\Model\BidderNewResponse**](../Model/BidderNewResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBidder**
> \Swagger\Client\Model\JStatus updateBidder($user_id, $bidder_id, $company_id, $x_api_key, $bidder_update)



This function will update a given bidder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$bidder_id = "bidder_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$bidder_update = new \Swagger\Client\Model\BidderUpdate(); // \Swagger\Client\Model\BidderUpdate | 

try {
    $result = $apiInstance->updateBidder($user_id, $bidder_id, $company_id, $x_api_key, $bidder_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersApi->updateBidder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **bidder_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **bidder_update** | [**\Swagger\Client\Model\BidderUpdate**](../Model/BidderUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

