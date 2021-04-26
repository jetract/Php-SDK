# Swagger\Client\ProcurementRequestsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteProcurementRequest**](ProcurementRequestsApi.md#deleteProcurementRequest) | **DELETE** /procurementrequests/{procurementRequestID} | 
[**getProcurementRequest**](ProcurementRequestsApi.md#getProcurementRequest) | **GET** /procurementrequests/{procurementRequestID} | 
[**getProcurementRequests**](ProcurementRequestsApi.md#getProcurementRequests) | **GET** /procurementrequests | 
[**newProcurementRequest**](ProcurementRequestsApi.md#newProcurementRequest) | **POST** /procurementrequests | 


# **deleteProcurementRequest**
> \Swagger\Client\Model\JStatus deleteProcurementRequest($user_id, $procurement_request_id, $company_id, $x_api_key)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcurementRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$procurement_request_id = "procurement_request_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->deleteProcurementRequest($user_id, $procurement_request_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcurementRequestsApi->deleteProcurementRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **procurement_request_id** | **string**|  |
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

# **getProcurementRequest**
> \Swagger\Client\Model\ProcurementRequestResponse getProcurementRequest($user_id, $procurement_request_id, $company_id, $x_api_key)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcurementRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$procurement_request_id = "procurement_request_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getProcurementRequest($user_id, $procurement_request_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcurementRequestsApi->getProcurementRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **procurement_request_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\ProcurementRequestResponse**](../Model/ProcurementRequestResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getProcurementRequests**
> \Swagger\Client\Model\ProcurementRequestsResponse getProcurementRequests($user_id, $company_id, $x_api_key)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcurementRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getProcurementRequests($user_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcurementRequestsApi->getProcurementRequests: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\ProcurementRequestsResponse**](../Model/ProcurementRequestsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newProcurementRequest**
> \Swagger\Client\Model\ProcurementRequestNewResponse newProcurementRequest($user_id, $company_id, $x_api_key, $procurement_request_new)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\ProcurementRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$procurement_request_new = new \Swagger\Client\Model\ProcurementRequestNew(); // \Swagger\Client\Model\ProcurementRequestNew | 

try {
    $result = $apiInstance->newProcurementRequest($user_id, $company_id, $x_api_key, $procurement_request_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProcurementRequestsApi->newProcurementRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **procurement_request_new** | [**\Swagger\Client\Model\ProcurementRequestNew**](../Model/ProcurementRequestNew.md)|  |

### Return type

[**\Swagger\Client\Model\ProcurementRequestNewResponse**](../Model/ProcurementRequestNewResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

