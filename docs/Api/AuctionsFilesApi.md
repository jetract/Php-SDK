# Jetract\AuctionsFilesApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Test*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuctionFile**](AuctionsFilesApi.md#deleteAuctionFile) | **DELETE** /auctions/files/{auctionID} | 
[**newAuctionFile**](AuctionsFilesApi.md#newAuctionFile) | **POST** /auctions/files/{auctionID} | 


# **deleteAuctionFile**
> \Jetract\Model\JStatus deleteAuctionFile($auctionID, $companyID)



This function will remove a file from Auction Files.<br>Bidders will no longer be able to access this file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 

try {
    $result = $apiInstance->deleteAuctionFile($auctionID, $companyID);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsFilesApi->deleteAuctionFile: ', $e->getMessage(), PHP_EOL;
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

# **newAuctionFile**
> \Jetract\Model\JStatus newAuctionFile($auctionID, $companyID, $auctionAttachFiles)



This function will add a new file to auction files. Bidders will be able to see and download the file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Jetract\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Jetract\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Jetract\Api\AuctionsFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auctionID = "auctionID_example"; // string | 
$companyID = "companyID_example"; // string | 
$auctionAttachFiles = new \Jetract\Model\AuctionAttachFiles(); // \Jetract\Model\AuctionAttachFiles | 

try {
    $result = $apiInstance->newAuctionFile($auctionID, $companyID, $auctionAttachFiles);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsFilesApi->newAuctionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auctionID** | **string**|  |
 **companyID** | **string**|  |
 **auctionAttachFiles** | [**\Jetract\Model\AuctionAttachFiles**](../Model/AuctionAttachFiles.md)|  |

### Return type

[**\Jetract\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

