# Swagger\Client\AuctionsFilesApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteAuctionFile**](AuctionsFilesApi.md#deleteAuctionFile) | **DELETE** /auctions/files/{auctionID} | 
[**newAuctionFile**](AuctionsFilesApi.md#newAuctionFile) | **POST** /auctions/files/{auctionID} | 


# **deleteAuctionFile**
> \Swagger\Client\Model\JStatus deleteAuctionFile($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_file)



This function will remove a file from Auction Files.<br>Bidders will no longer be able to access this file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_delete_file = new \Swagger\Client\Model\AuctionDeleteFile(); // \Swagger\Client\Model\AuctionDeleteFile | 

try {
    $result = $apiInstance->deleteAuctionFile($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsFilesApi->deleteAuctionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **auction_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **auction_delete_file** | [**\Swagger\Client\Model\AuctionDeleteFile**](../Model/AuctionDeleteFile.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAuctionFile**
> \Swagger\Client\Model\JStatus newAuctionFile($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_files)



This function will add a new file to auction files. Bidders will be able to see and download the file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsFilesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_attach_files = new \Swagger\Client\Model\AuctionAttachFiles(); // \Swagger\Client\Model\AuctionAttachFiles | 

try {
    $result = $apiInstance->newAuctionFile($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_files);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsFilesApi->newAuctionFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **auction_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **auction_attach_files** | [**\Swagger\Client\Model\AuctionAttachFiles**](../Model/AuctionAttachFiles.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

