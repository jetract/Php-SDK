# Swagger\Client\AuctionsReportsApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getExcelReport**](AuctionsReportsApi.md#getExcelReport) | **GET** /auctions/reports/excel/{auctionID} | 


# **getExcelReport**
> \Swagger\Client\Model\AuctionReportResponse getExcelReport($user_id, $auction_id, $company_id, $x_api_key)



This function will generate an excel report of the given auction.<br>Return will be the ID of newly generated file. You can use files/get method to download the file.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\AuctionsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getExcelReport($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuctionsReportsApi->getExcelReport: ', $e->getMessage(), PHP_EOL;
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

### Return type

[**\Swagger\Client\Model\AuctionReportResponse**](../Model/AuctionReportResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

