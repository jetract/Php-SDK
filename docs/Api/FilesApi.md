# Swagger\Client\FilesApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**download**](FilesApi.md#download) | **GET** /files/{fileID} | 
[**upload**](FilesApi.md#upload) | **POST** /files | 


# **download**
> download($user_id, $company_id, $file_id, $x_api_key)





### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$file_id = "file_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $apiInstance->download($user_id, $company_id, $file_id, $x_api_key);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->download: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **file_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

void (empty response body)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> \Swagger\Client\Model\JResponseID upload($user_id, $company_id, $x_api_key, $content_type)



This function will upload a file to Jetract Servers.<br>Returning data will be ID of newly created file.<br>Important:You need to pass, is_public,company_uuid and file in a form-data!

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\FilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$content_type = "content_type_example"; // string | Content-Type of the upload request.

try {
    $result = $apiInstance->upload($user_id, $company_id, $x_api_key, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FilesApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **content_type** | **string**| Content-Type of the upload request. |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

