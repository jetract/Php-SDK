# Swagger\Client\BiddersGroupsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBidderGroup**](BiddersGroupsApi.md#deleteBidderGroup) | **DELETE** /bidders/groups/{groupID} | 
[**getBidderGroup**](BiddersGroupsApi.md#getBidderGroup) | **GET** /bidders/groups/{groupID} | 
[**getBidderGroups**](BiddersGroupsApi.md#getBidderGroups) | **GET** /bidders/groups | 
[**newBidderGroup**](BiddersGroupsApi.md#newBidderGroup) | **POST** /bidders/groups | 
[**updateBidderGroup**](BiddersGroupsApi.md#updateBidderGroup) | **PUT** /bidders/groups/{groupID} | 


# **deleteBidderGroup**
> \Swagger\Client\Model\JStatus deleteBidderGroup($user_id, $company_id, $x_api_key, $group_id)



This function will delete a bidder group from a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$group_id = "group_id_example"; // string | 

try {
    $result = $apiInstance->deleteBidderGroup($user_id, $company_id, $x_api_key, $group_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->deleteBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **group_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidderGroup**
> \Swagger\Client\Model\BidderGroupResponse getBidderGroup($user_id, $company_id, $x_api_key, $group_id, $include_bidders)



This function will return the details of a given bidder group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$group_id = "group_id_example"; // string | 
$include_bidders = "include_bidders_example"; // string | 

try {
    $result = $apiInstance->getBidderGroup($user_id, $company_id, $x_api_key, $group_id, $include_bidders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->getBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **group_id** | **string**|  |
 **include_bidders** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BidderGroupResponse**](../Model/BidderGroupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidderGroups**
> \Swagger\Client\Model\BidderGroupsResponse getBidderGroups($user_id, $company_id, $x_api_key, $include_bidders)



This function will return all Bidder Groups of a given company.<br>A bidder group can be used to enable multiple bidders to participate in the same auction<br>without attaching each bidder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$include_bidders = "include_bidders_example"; // string | 

try {
    $result = $apiInstance->getBidderGroups($user_id, $company_id, $x_api_key, $include_bidders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->getBidderGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **include_bidders** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BidderGroupsResponse**](../Model/BidderGroupsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newBidderGroup**
> \Swagger\Client\Model\JResponseID newBidderGroup($user_id, $company_id, $x_api_key, $bidder_group_new)



This function will create a new bidder group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$bidder_group_new = new \Swagger\Client\Model\BidderGroupNew(); // \Swagger\Client\Model\BidderGroupNew | 

try {
    $result = $apiInstance->newBidderGroup($user_id, $company_id, $x_api_key, $bidder_group_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->newBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **bidder_group_new** | [**\Swagger\Client\Model\BidderGroupNew**](../Model/BidderGroupNew.md)|  |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBidderGroup**
> \Swagger\Client\Model\JStatus updateBidderGroup($user_id, $company_id, $x_api_key, $group_id, $bidder_group_new)



This function will update a given bidder group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$group_id = "group_id_example"; // string | 
$bidder_group_new = new \Swagger\Client\Model\BidderGroupNew(); // \Swagger\Client\Model\BidderGroupNew | 

try {
    $result = $apiInstance->updateBidderGroup($user_id, $company_id, $x_api_key, $group_id, $bidder_group_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->updateBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **group_id** | **string**|  |
 **bidder_group_new** | [**\Swagger\Client\Model\BidderGroupNew**](../Model/BidderGroupNew.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

