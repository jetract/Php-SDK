# Jetract\BiddersGroupsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteBidderGroup**](BiddersGroupsApi.md#deleteBidderGroup) | **DELETE** /bidders/groups/{groupID} | 
[**getBidderGroup**](BiddersGroupsApi.md#getBidderGroup) | **GET** /bidders/groups/{groupID} | 
[**getBidderGroups**](BiddersGroupsApi.md#getBidderGroups) | **GET** /bidders/groups | 
[**newBidderGroup**](BiddersGroupsApi.md#newBidderGroup) | **POST** /bidders/groups | 
[**updateBidderGroup**](BiddersGroupsApi.md#updateBidderGroup) | **PUT** /bidders/groups/{groupID} | 


# **deleteBidderGroup**
> \Jetract\Model\JStatus deleteBidderGroup($companyID, $groupID)



This function will delete a bidder group from a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$groupID = "groupID_example"; // string | 

try {
    $result = $apiInstance->deleteBidderGroup($companyID, $groupID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->deleteBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **groupID** | **string**|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidderGroup**
> \Jetract\Model\BidderGroupResponse getBidderGroup($companyID, $groupID, $includeBidders)



This function will return the details of a given bidder group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$groupID = "groupID_example"; // string | 
$includeBidders = "includeBidders_example"; // string | 

try {
    $result = $apiInstance->getBidderGroup($companyID, $groupID, $includeBidders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->getBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **groupID** | **string**|  |
 **includeBidders** | **string**|  | [optional]

### Return type

[**\Jetract\Model\BidderGroupResponse**](../Model/BidderGroupResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidderGroups**
> \Jetract\Model\BidderGroupsResponse getBidderGroups($companyID, $includeBidders)



This function will return all Bidder Groups of a given company.<br>A bidder group can be used to enable multiple bidders to participate in the same auction<br>without attaching each bidder.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$includeBidders = "includeBidders_example"; // string | 

try {
    $result = $apiInstance->getBidderGroups($companyID, $includeBidders);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->getBidderGroups: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **includeBidders** | **string**|  | [optional]

### Return type

[**\Jetract\Model\BidderGroupsResponse**](../Model/BidderGroupsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newBidderGroup**
> \Jetract\Model\JResponseID newBidderGroup($companyID, $bidderGroupNew)



This function will create a new bidder group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$bidderGroupNew = new \Jetract\Model\BidderGroupNew(); // \Jetract\Model\BidderGroupNew | 

try {
    $result = $apiInstance->newBidderGroup($companyID, $bidderGroupNew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->newBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **bidderGroupNew** | [**\Jetract\Model\BidderGroupNew**](../Model/BidderGroupNew.md)|  |

### Return type

[**\Jetract\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBidderGroup**
> \Jetract\Model\JStatus updateBidderGroup($companyID, $groupID, $bidderGroupNew)



This function will update a given bidder group.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\BiddersGroupsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$groupID = "groupID_example"; // string | 
$bidderGroupNew = new \Jetract\Model\BidderGroupNew(); // \Jetract\Model\BidderGroupNew | 

try {
    $result = $apiInstance->updateBidderGroup($companyID, $groupID, $bidderGroupNew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BiddersGroupsApi->updateBidderGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **groupID** | **string**|  |
 **bidderGroupNew** | [**\Jetract\Model\BidderGroupNew**](../Model/BidderGroupNew.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
