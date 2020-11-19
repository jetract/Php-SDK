# Swagger\Client\DefaultApi

All URIs are relative to *https://30fo61e8a3.execute-api.eu-west-1.amazonaws.com/Production*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addBidder**](DefaultApi.md#addBidder) | **POST** /auctions/bidders/{auctionID} | 
[**auctionsBiddersAgreementsResetAuctionIDPost**](DefaultApi.md#auctionsBiddersAgreementsResetAuctionIDPost) | **POST** /auctions/bidders/agreements/reset/{auctionID} | 
[**bidderAuctionsAuctionIDGet**](DefaultApi.md#bidderAuctionsAuctionIDGet) | **GET** /bidder/auctions/{auctionID} | 
[**bidderAuctionsGet**](DefaultApi.md#bidderAuctionsGet) | **GET** /bidder/auctions | 
[**biddersBiddingPost**](DefaultApi.md#biddersBiddingPost) | **POST** /bidders/bidding | 
[**deleteAuction**](DefaultApi.md#deleteAuction) | **DELETE** /auctions/{auctionID} | 
[**deleteAuctionFile**](DefaultApi.md#deleteAuctionFile) | **DELETE** /auctions/files/{auctionID} | 
[**deleteAuctionStage**](DefaultApi.md#deleteAuctionStage) | **DELETE** /auctions/stages/{auctionID} | 
[**deleteBidder**](DefaultApi.md#deleteBidder) | **DELETE** /bidders/{bidderID} | 
[**deleteBidderGroup**](DefaultApi.md#deleteBidderGroup) | **DELETE** /bidders/groups/{groupID} | 
[**deleteCategory**](DefaultApi.md#deleteCategory) | **DELETE** /categories/{categoryID} | 
[**deleteOffer**](DefaultApi.md#deleteOffer) | **DELETE** /auctions/offers/{auctionID} | 
[**deleteProcurementRequest**](DefaultApi.md#deleteProcurementRequest) | **DELETE** /procurementrequests/{procurementRequestID} | 
[**download**](DefaultApi.md#download) | **GET** /files/{fileID} | 
[**endAuction**](DefaultApi.md#endAuction) | **POST** /auctions/end/{auctionID} | 
[**endAuctionStage**](DefaultApi.md#endAuctionStage) | **POST** /auctions/stages/end/{auctionID} | 
[**getAddresses**](DefaultApi.md#getAddresses) | **GET** /addresses | 
[**getAnnouncements**](DefaultApi.md#getAnnouncements) | **GET** /auctions/announcements/{auctionID} | 
[**getAuction**](DefaultApi.md#getAuction) | **GET** /auctions/{auctionID} | 
[**getAuctions**](DefaultApi.md#getAuctions) | **GET** /auctions | 
[**getBidder**](DefaultApi.md#getBidder) | **GET** /bidders/{bidderID} | 
[**getBidderGroup**](DefaultApi.md#getBidderGroup) | **GET** /bidders/groups/{groupID} | 
[**getBidderGroups**](DefaultApi.md#getBidderGroups) | **GET** /bidders/groups | 
[**getBidders**](DefaultApi.md#getBidders) | **GET** /bidders | 
[**getCategories**](DefaultApi.md#getCategories) | **GET** /categories | 
[**getCategory**](DefaultApi.md#getCategory) | **GET** /categories/{categoryID} | 
[**getCities**](DefaultApi.md#getCities) | **GET** /addresses/cities | 
[**getCountries**](DefaultApi.md#getCountries) | **GET** /addresses/countries | 
[**getExcelReport**](DefaultApi.md#getExcelReport) | **GET** /auctions/reports/excel/{auctionID} | 
[**getProcurementRequest**](DefaultApi.md#getProcurementRequest) | **GET** /procurementrequests/{procurementRequestID} | 
[**getProcurementRequests**](DefaultApi.md#getProcurementRequests) | **GET** /procurementrequests | 
[**newAddress**](DefaultApi.md#newAddress) | **POST** /addresses | 
[**newAuction**](DefaultApi.md#newAuction) | **POST** /auctions | 
[**newAuctionFile**](DefaultApi.md#newAuctionFile) | **POST** /auctions/files/{auctionID} | 
[**newAuctionStage**](DefaultApi.md#newAuctionStage) | **POST** /auctions/stages/{auctionID} | 
[**newBidder**](DefaultApi.md#newBidder) | **POST** /bidders | 
[**newBidderGroup**](DefaultApi.md#newBidderGroup) | **POST** /bidders/groups | 
[**newCategory**](DefaultApi.md#newCategory) | **POST** /categories | 
[**newProcurementRequest**](DefaultApi.md#newProcurementRequest) | **POST** /procurementrequests | 
[**publishAuction**](DefaultApi.md#publishAuction) | **POST** /auctions/publish/{auctionID} | 
[**rootGet**](DefaultApi.md#rootGet) | **GET** / | 
[**startAuction**](DefaultApi.md#startAuction) | **POST** /auctions/start/{auctionID} | 
[**startAuctionStage**](DefaultApi.md#startAuctionStage) | **POST** /auctions/stages/start/{auctionID} | 
[**updateAuction**](DefaultApi.md#updateAuction) | **PUT** /auctions/{auctionID} | 
[**updateAuctionParameters**](DefaultApi.md#updateAuctionParameters) | **PATCH** /auctions/{auctionID} | 
[**updateBidder**](DefaultApi.md#updateBidder) | **PUT** /bidders/{bidderID} | 
[**updateBidderGroup**](DefaultApi.md#updateBidderGroup) | **PUT** /bidders/groups/{groupID} | 
[**updateCategory**](DefaultApi.md#updateCategory) | **PUT** /categories/{categoryID} | 
[**upload**](DefaultApi.md#upload) | **POST** /files | 


# **addBidder**
> \Swagger\Client\Model\JStatus addBidder($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_bidder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_attach_bidder = new \Swagger\Client\Model\AuctionAttachBidder(); // \Swagger\Client\Model\AuctionAttachBidder | 

try {
    $result = $apiInstance->addBidder($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_bidder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->addBidder: ', $e->getMessage(), PHP_EOL;
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
 **auction_attach_bidder** | [**\Swagger\Client\Model\AuctionAttachBidder**](../Model/AuctionAttachBidder.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **auctionsBiddersAgreementsResetAuctionIDPost**
> \Swagger\Client\Model\JStatus auctionsBiddersAgreementsResetAuctionIDPost($user_id, $auction_id, $company_id, $x_api_key, $auction_bidder_agreement_reset)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_bidder_agreement_reset = new \Swagger\Client\Model\AuctionBidderAgreementReset(); // \Swagger\Client\Model\AuctionBidderAgreementReset | 

try {
    $result = $apiInstance->auctionsBiddersAgreementsResetAuctionIDPost($user_id, $auction_id, $company_id, $x_api_key, $auction_bidder_agreement_reset);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->auctionsBiddersAgreementsResetAuctionIDPost: ', $e->getMessage(), PHP_EOL;
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
 **auction_bidder_agreement_reset** | [**\Swagger\Client\Model\AuctionBidderAgreementReset**](../Model/AuctionBidderAgreementReset.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bidderAuctionsAuctionIDGet**
> \Swagger\Client\Model\BidderAuctionResponse bidderAuctionsAuctionIDGet($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->bidderAuctionsAuctionIDGet($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bidderAuctionsAuctionIDGet: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\BidderAuctionResponse**](../Model/BidderAuctionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **bidderAuctionsGet**
> \Swagger\Client\Model\BidderAuctionsResponse bidderAuctionsGet($user_id, $company_id, $x_api_key, $status, $type, $range)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$status = "status_example"; // string | 
$type = "type_example"; // string | 
$range = "range_example"; // string | 

try {
    $result = $apiInstance->bidderAuctionsGet($user_id, $company_id, $x_api_key, $status, $type, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->bidderAuctionsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **status** | **string**|  | [optional]
 **type** | **string**|  | [optional]
 **range** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\BidderAuctionsResponse**](../Model/BidderAuctionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **biddersBiddingPost**
> \Swagger\Client\Model\JStatus biddersBiddingPost($user_id, $company_id, $x_api_key, $bidding_permission_of_bidder)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$bidding_permission_of_bidder = new \Swagger\Client\Model\BiddingPermissionOfBidder(); // \Swagger\Client\Model\BiddingPermissionOfBidder | 

try {
    $result = $apiInstance->biddersBiddingPost($user_id, $company_id, $x_api_key, $bidding_permission_of_bidder);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->biddersBiddingPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **bidding_permission_of_bidder** | [**\Swagger\Client\Model\BiddingPermissionOfBidder**](../Model/BiddingPermissionOfBidder.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAuction**
> \Swagger\Client\Model\JStatus deleteAuction($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->deleteAuction($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAuction: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteAuctionFile**
> \Swagger\Client\Model\JStatus deleteAuctionFile($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_file)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->deleteAuctionFile: ', $e->getMessage(), PHP_EOL;
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

# **deleteAuctionStage**
> \Swagger\Client\Model\JStatus deleteAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_delete)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_stage_delete = new \Swagger\Client\Model\AuctionStageDelete(); // \Swagger\Client\Model\AuctionStageDelete | 

try {
    $result = $apiInstance->deleteAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_delete);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteAuctionStage: ', $e->getMessage(), PHP_EOL;
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
 **auction_stage_delete** | [**\Swagger\Client\Model\AuctionStageDelete**](../Model/AuctionStageDelete.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteBidder**
> \Swagger\Client\Model\JStatus deleteBidder($user_id, $bidder_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->deleteBidder: ', $e->getMessage(), PHP_EOL;
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

# **deleteBidderGroup**
> \Swagger\Client\Model\JStatus deleteBidderGroup($user_id, $company_id, $x_api_key, $group_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->deleteBidderGroup: ', $e->getMessage(), PHP_EOL;
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

# **deleteCategory**
> \Swagger\Client\Model\JStatus deleteCategory($user_id, $category_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$category_id = "category_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->deleteCategory($user_id, $category_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **category_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOffer**
> \Swagger\Client\Model\JStatus deleteOffer($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_offer)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_delete_offer = new \Swagger\Client\Model\AuctionDeleteOffer(); // \Swagger\Client\Model\AuctionDeleteOffer | 

try {
    $result = $apiInstance->deleteOffer($user_id, $auction_id, $company_id, $x_api_key, $auction_delete_offer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->deleteOffer: ', $e->getMessage(), PHP_EOL;
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
 **auction_delete_offer** | [**\Swagger\Client\Model\AuctionDeleteOffer**](../Model/AuctionDeleteOffer.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

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

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->deleteProcurementRequest: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->download: ', $e->getMessage(), PHP_EOL;
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

# **endAuction**
> \Swagger\Client\Model\JStatus endAuction($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->endAuction($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->endAuction: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **endAuctionStage**
> \Swagger\Client\Model\JStatus endAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_end)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_stage_end = new \Swagger\Client\Model\AuctionStageEnd(); // \Swagger\Client\Model\AuctionStageEnd | 

try {
    $result = $apiInstance->endAuctionStage($user_id, $auction_id, $company_id, $x_api_key, $auction_stage_end);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->endAuctionStage: ', $e->getMessage(), PHP_EOL;
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
 **auction_stage_end** | [**\Swagger\Client\Model\AuctionStageEnd**](../Model/AuctionStageEnd.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAddresses**
> \Swagger\Client\Model\AddressesResponse getAddresses($user_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getAddresses($user_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAddresses: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AddressesResponse**](../Model/AddressesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAnnouncements**
> \Swagger\Client\Model\AuctionAnnouncementsResponse getAnnouncements($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->getAnnouncements($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAnnouncements: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AuctionAnnouncementsResponse**](../Model/AuctionAnnouncementsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuction**
> \Swagger\Client\Model\AuctionResponse getAuction($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->getAuction($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAuction: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AuctionResponse**](../Model/AuctionResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAuctions**
> \Swagger\Client\Model\AuctionsResponse getAuctions($user_id, $status, $type, $company_id, $x_api_key, $range)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$status = "status_example"; // string | 
$type = "type_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$range = "range_example"; // string | 

try {
    $result = $apiInstance->getAuctions($user_id, $status, $type, $company_id, $x_api_key, $range);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getAuctions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **status** | **string**|  |
 **type** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **range** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\AuctionsResponse**](../Model/AuctionsResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBidder**
> \Swagger\Client\Model\BidderResponse getBidder($user_id, $bidder_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getBidder: ', $e->getMessage(), PHP_EOL;
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

# **getBidderGroup**
> \Swagger\Client\Model\BidderGroupResponse getBidderGroup($user_id, $company_id, $x_api_key, $group_id, $include_bidders)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getBidderGroup: ', $e->getMessage(), PHP_EOL;
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



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getBidderGroups: ', $e->getMessage(), PHP_EOL;
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

# **getBidders**
> \Swagger\Client\Model\BiddersResponse getBidders($user_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getBidders: ', $e->getMessage(), PHP_EOL;
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

# **getCategories**
> \Swagger\Client\Model\CategoriesResponse getCategories($user_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getCategories($user_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCategories: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\CategoriesResponse**](../Model/CategoriesResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCategory**
> \Swagger\Client\Model\CategoryResponse getCategory($user_id, $category_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$category_id = "category_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getCategory($user_id, $category_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **category_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\CategoryResponse**](../Model/CategoryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCities**
> \Swagger\Client\Model\AddressCityResponse getCities($user_id, $country_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$country_id = "country_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getCities($user_id, $country_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCities: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **country_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\AddressCityResponse**](../Model/AddressCityResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCountries**
> \Swagger\Client\Model\AddressCountryResponse getCountries($user_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->getCountries($user_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->getCountries: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\AddressCountryResponse**](../Model/AddressCountryResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getExcelReport**
> \Swagger\Client\Model\AuctionReportResponse getExcelReport($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getExcelReport: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getProcurementRequest: ', $e->getMessage(), PHP_EOL;
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

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->getProcurementRequests: ', $e->getMessage(), PHP_EOL;
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

# **newAddress**
> \Swagger\Client\Model\JResponseID newAddress($user_id, $company_id, $x_api_key, $address_new)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$address_new = new \Swagger\Client\Model\AddressNew(); // \Swagger\Client\Model\AddressNew | 

try {
    $result = $apiInstance->newAddress($user_id, $company_id, $x_api_key, $address_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->newAddress: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **address_new** | [**\Swagger\Client\Model\AddressNew**](../Model/AddressNew.md)|  |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAuction**
> \Swagger\Client\Model\AuctionNewResponse newAuction($user_id, $company_id, $x_api_key, $auction_new)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_new = new \Swagger\Client\Model\AuctionNew(); // \Swagger\Client\Model\AuctionNew | 

try {
    $result = $apiInstance->newAuction($user_id, $company_id, $x_api_key, $auction_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->newAuction: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **auction_new** | [**\Swagger\Client\Model\AuctionNew**](../Model/AuctionNew.md)|  |

### Return type

[**\Swagger\Client\Model\AuctionNewResponse**](../Model/AuctionNewResponse.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newAuctionFile**
> \Swagger\Client\Model\JStatus newAuctionFile($user_id, $auction_id, $company_id, $x_api_key, $auction_attach_files)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->newAuctionFile: ', $e->getMessage(), PHP_EOL;
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

# **newAuctionStage**
> \Swagger\Client\Model\JResponseID newAuctionStage($auction_id, $company_id)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 

try {
    $result = $apiInstance->newAuctionStage($auction_id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->newAuctionStage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auction_id** | **string**|  |
 **company_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **newBidder**
> \Swagger\Client\Model\BidderNewResponse newBidder($user_id, $company_id, $x_api_key, $bidder_new)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->newBidder: ', $e->getMessage(), PHP_EOL;
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

# **newBidderGroup**
> \Swagger\Client\Model\JResponseID newBidderGroup($user_id, $company_id, $x_api_key, $bidder_group_new)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->newBidderGroup: ', $e->getMessage(), PHP_EOL;
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

# **newCategory**
> \Swagger\Client\Model\JResponseID newCategory($user_id, $company_id, $x_api_key, $category_new)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$category_new = new \Swagger\Client\Model\CategoryNew(); // \Swagger\Client\Model\CategoryNew | 

try {
    $result = $apiInstance->newCategory($user_id, $company_id, $x_api_key, $category_new);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->newCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **category_new** | [**\Swagger\Client\Model\CategoryNew**](../Model/CategoryNew.md)|  |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

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

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->newProcurementRequest: ', $e->getMessage(), PHP_EOL;
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

# **publishAuction**
> \Swagger\Client\Model\JStatus publishAuction($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->publishAuction($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->publishAuction: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **rootGet**
> \Swagger\Client\Model\ModelEmpty rootGet($x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_api_key = "x_api_key_example"; // string | 

try {
    $result = $apiInstance->rootGet($x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->rootGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **x_api_key** | **string**|  |

### Return type

[**\Swagger\Client\Model\ModelEmpty**](../Model/ModelEmpty.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startAuction**
> \Swagger\Client\Model\JStatus startAuction($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->startAuction($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->startAuction: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **startAuctionStage**
> \Swagger\Client\Model\JStatus startAuctionStage($user_id, $auction_id, $company_id, $x_api_key)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    $result = $apiInstance->startAuctionStage($user_id, $auction_id, $company_id, $x_api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->startAuctionStage: ', $e->getMessage(), PHP_EOL;
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

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuction**
> \Swagger\Client\Model\JStatus updateAuction($user_id, $auction_id, $company_id, $x_api_key, $auction_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_update = new \Swagger\Client\Model\AuctionUpdate(); // \Swagger\Client\Model\AuctionUpdate | 

try {
    $result = $apiInstance->updateAuction($user_id, $auction_id, $company_id, $x_api_key, $auction_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAuction: ', $e->getMessage(), PHP_EOL;
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
 **auction_update** | [**\Swagger\Client\Model\AuctionUpdate**](../Model/AuctionUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateAuctionParameters**
> \Swagger\Client\Model\JStatus updateAuctionParameters($user_id, $auction_id, $company_id, $x_api_key, $auction_update_parameters)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$auction_id = "auction_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$auction_update_parameters = new \Swagger\Client\Model\AuctionUpdateParameters(); // \Swagger\Client\Model\AuctionUpdateParameters | 

try {
    $result = $apiInstance->updateAuctionParameters($user_id, $auction_id, $company_id, $x_api_key, $auction_update_parameters);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateAuctionParameters: ', $e->getMessage(), PHP_EOL;
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
 **auction_update_parameters** | [**\Swagger\Client\Model\AuctionUpdateParameters**](../Model/AuctionUpdateParameters.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateBidder**
> \Swagger\Client\Model\JStatus updateBidder($user_id, $bidder_id, $company_id, $x_api_key, $bidder_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->updateBidder: ', $e->getMessage(), PHP_EOL;
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

# **updateBidderGroup**
> \Swagger\Client\Model\JStatus updateBidderGroup($user_id, $company_id, $x_api_key, $group_id, $bidder_group_new)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
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
    echo 'Exception when calling DefaultApi->updateBidderGroup: ', $e->getMessage(), PHP_EOL;
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

# **updateCategory**
> \Swagger\Client\Model\JStatus updateCategory($user_id, $category_id, $company_id, $x_api_key, $category_update)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$category_id = "category_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$category_update = new \Swagger\Client\Model\CategoryUpdate(); // \Swagger\Client\Model\CategoryUpdate | 

try {
    $result = $apiInstance->updateCategory($user_id, $category_id, $company_id, $x_api_key, $category_update);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->updateCategory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **category_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **category_update** | [**\Swagger\Client\Model\CategoryUpdate**](../Model/CategoryUpdate.md)|  |

### Return type

[**\Swagger\Client\Model\JStatus**](../Model/JStatus.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **upload**
> \Swagger\Client\Model\JResponseID upload($user_id, $company_id, $x_api_key, $content_type)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: api_key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$user_id = "user_id_example"; // string | 
$company_id = "company_id_example"; // string | 
$x_api_key = "x_api_key_example"; // string | 
$content_type = "content_type_example"; // string | 

try {
    $result = $apiInstance->upload($user_id, $company_id, $x_api_key, $content_type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->upload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **user_id** | **string**|  |
 **company_id** | **string**|  |
 **x_api_key** | **string**|  |
 **content_type** | **string**|  |

### Return type

[**\Swagger\Client\Model\JResponseID**](../Model/JResponseID.md)

### Authorization

[api_key](../../README.md#api_key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

