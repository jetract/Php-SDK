# Jetract\AuctionsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuction**](AuctionsApi.md#deleteAuction) | **DELETE** /auctions/{auctionID} | 
[**endAuction**](AuctionsApi.md#endAuction) | **POST** /auctions/end/{auctionID} | 
[**getAuction**](AuctionsApi.md#getAuction) | **GET** /auctions/{auctionID} | 
[**getAuctions**](AuctionsApi.md#getAuctions) | **GET** /auctions | 
[**newAuction**](AuctionsApi.md#newAuction) | **POST** /auctions | 
[**publishAuction**](AuctionsApi.md#publishAuction) | **POST** /auctions/publish/{auctionID} | 
[**startAuction**](AuctionsApi.md#startAuction) | **POST** /auctions/start/{auctionID} | 
[**updateAuction**](AuctionsApi.md#updateAuction) | **PUT** /auctions/{auctionID} | 


# **deleteAuction**
> \Jetract\Model\JStatus deleteAuction($auctionID, $companyID)



This function will delete an auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->deleteAuction($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->deleteAuction: ', $e->getMessage(), PHP_EOL;
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

# **endAuction**
> \Jetract\Model\JStatus endAuction($auctionID, $companyID)



This function will terminate an Auction.<br>A notification will be pushed to all bidders in real-time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->endAuction($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->endAuction: ', $e->getMessage(), PHP_EOL;
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

# **getAuction**
> \Jetract\Model\AuctionResponse getAuction($auctionID, $companyID)



This function will return the details of a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->getAuction($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->getAuction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |

### Return type

[**\Jetract\Model\AuctionResponse**](../Model/AuctionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuctions**
> \Jetract\Model\AuctionsResponse getAuctions($companyID, $status, $type)



This function will return all auctions for a given company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$status = "status_example"; // string | Status of the Auction.<br>ONGOING: ACTIVE + WAITING<br>FINISHED:FLOW+COMPLETE<br>Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.<br>Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed.
$type = "type_example"; // string | Type of the Auction.

try {
    $result = $apiInstance->getAuctions($companyID, $status, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->getAuctions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **status** | **string**| Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. |
 **type** | **string**| Type of the Auction. |

### Return type

[**\Jetract\Model\AuctionsResponse**](../Model/AuctionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAuction**
> \Jetract\Model\JResponseID newAuction($companyID, $auctionNew)



This function will create a new auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$companyID = "companyID_example"; // string | 
$auctionNew = new \Jetract\Model\AuctionNew(); // \Jetract\Model\AuctionNew | 

try {
    $result = $apiInstance->newAuction($companyID, $auctionNew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->newAuction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **companyID** | **string**|  |
 **auctionNew** | [**\Jetract\Model\AuctionNew**](../Model/AuctionNew.md)|  |

### Return type

[**\Jetract\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **publishAuction**
> \Jetract\Model\JStatus publishAuction($auctionID, $companyID)



This function will publish a previously drafted auction. Bidders will be able to see and join the auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->publishAuction($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->publishAuction: ', $e->getMessage(), PHP_EOL;
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

# **startAuction**
> \Jetract\Model\JStatus startAuction($auctionID, $companyID)



This function will start the auction. A notification will be pushed to all bidders in real-time.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->startAuction($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->startAuction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  | [optional]

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuction**
> \Jetract\Model\JStatus updateAuction($auctionID, $companyID, $auctionNew)



This function will update a given auction.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 
$auctionNew = new \Jetract\Model\AuctionNew(); // \Jetract\Model\AuctionNew | 

try {
    $result = $apiInstance->updateAuction($auctionID, $companyID, $auctionNew);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsApi->updateAuction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |
 **auctionNew** | [**\Jetract\Model\AuctionNew**](../Model/AuctionNew.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

