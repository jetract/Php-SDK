<?php
/**
 * BiddersAuctionsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * JETRACT
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 0.9.8
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.19
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * BiddersAuctionsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class BiddersAuctionsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation bidderAuctionsAuctionIDGet
     *
     * @param  string $user_id user_id (required)
     * @param  string $auction_id auction_id (required)
     * @param  string $company_id company_id (required)
     * @param  string $x_api_key x_api_key (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\BidderAuctionResponse
     */
    public function bidderAuctionsAuctionIDGet($user_id, $auction_id, $company_id, $x_api_key)
    {
        list($response) = $this->bidderAuctionsAuctionIDGetWithHttpInfo($user_id, $auction_id, $company_id, $x_api_key);
        return $response;
    }

    /**
     * Operation bidderAuctionsAuctionIDGetWithHttpInfo
     *
     * @param  string $user_id (required)
     * @param  string $auction_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\BidderAuctionResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function bidderAuctionsAuctionIDGetWithHttpInfo($user_id, $auction_id, $company_id, $x_api_key)
    {
        $returnType = '\Swagger\Client\Model\BidderAuctionResponse';
        $request = $this->bidderAuctionsAuctionIDGetRequest($user_id, $auction_id, $company_id, $x_api_key);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\BidderAuctionResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bidderAuctionsAuctionIDGetAsync
     *
     * 
     *
     * @param  string $user_id (required)
     * @param  string $auction_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bidderAuctionsAuctionIDGetAsync($user_id, $auction_id, $company_id, $x_api_key)
    {
        return $this->bidderAuctionsAuctionIDGetAsyncWithHttpInfo($user_id, $auction_id, $company_id, $x_api_key)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bidderAuctionsAuctionIDGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $user_id (required)
     * @param  string $auction_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bidderAuctionsAuctionIDGetAsyncWithHttpInfo($user_id, $auction_id, $company_id, $x_api_key)
    {
        $returnType = '\Swagger\Client\Model\BidderAuctionResponse';
        $request = $this->bidderAuctionsAuctionIDGetRequest($user_id, $auction_id, $company_id, $x_api_key);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bidderAuctionsAuctionIDGet'
     *
     * @param  string $user_id (required)
     * @param  string $auction_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bidderAuctionsAuctionIDGetRequest($user_id, $auction_id, $company_id, $x_api_key)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling bidderAuctionsAuctionIDGet'
            );
        }
        // verify the required parameter 'auction_id' is set
        if ($auction_id === null || (is_array($auction_id) && count($auction_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $auction_id when calling bidderAuctionsAuctionIDGet'
            );
        }
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling bidderAuctionsAuctionIDGet'
            );
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling bidderAuctionsAuctionIDGet'
            );
        }

        $resourcePath = '/bidder/auctions/{auctionID}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($user_id !== null) {
            $headerParams['userID'] = ObjectSerializer::toHeaderValue($user_id);
        }
        // header params
        if ($company_id !== null) {
            $headerParams['companyID'] = ObjectSerializer::toHeaderValue($company_id);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }

        // path params
        if ($auction_id !== null) {
            $resourcePath = str_replace(
                '{' . 'auctionID' . '}',
                ObjectSerializer::toPathValue($auction_id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation bidderAuctionsGet
     *
     * @param  string $user_id user_id (required)
     * @param  string $company_id company_id (required)
     * @param  string $x_api_key x_api_key (required)
     * @param  string $status Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. (optional)
     * @param  string $type Type of the Auction. (optional)
     * @param  string $range Auction Date Range. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\BidderAuctionsResponse
     */
    public function bidderAuctionsGet($user_id, $company_id, $x_api_key, $status = null, $type = null, $range = null)
    {
        list($response) = $this->bidderAuctionsGetWithHttpInfo($user_id, $company_id, $x_api_key, $status, $type, $range);
        return $response;
    }

    /**
     * Operation bidderAuctionsGetWithHttpInfo
     *
     * @param  string $user_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     * @param  string $status Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. (optional)
     * @param  string $type Type of the Auction. (optional)
     * @param  string $range Auction Date Range. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\BidderAuctionsResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function bidderAuctionsGetWithHttpInfo($user_id, $company_id, $x_api_key, $status = null, $type = null, $range = null)
    {
        $returnType = '\Swagger\Client\Model\BidderAuctionsResponse';
        $request = $this->bidderAuctionsGetRequest($user_id, $company_id, $x_api_key, $status, $type, $range);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if ($returnType !== 'string') {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\BidderAuctionsResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation bidderAuctionsGetAsync
     *
     * 
     *
     * @param  string $user_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     * @param  string $status Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. (optional)
     * @param  string $type Type of the Auction. (optional)
     * @param  string $range Auction Date Range. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bidderAuctionsGetAsync($user_id, $company_id, $x_api_key, $status = null, $type = null, $range = null)
    {
        return $this->bidderAuctionsGetAsyncWithHttpInfo($user_id, $company_id, $x_api_key, $status, $type, $range)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation bidderAuctionsGetAsyncWithHttpInfo
     *
     * 
     *
     * @param  string $user_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     * @param  string $status Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. (optional)
     * @param  string $type Type of the Auction. (optional)
     * @param  string $range Auction Date Range. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function bidderAuctionsGetAsyncWithHttpInfo($user_id, $company_id, $x_api_key, $status = null, $type = null, $range = null)
    {
        $returnType = '\Swagger\Client\Model\BidderAuctionsResponse';
        $request = $this->bidderAuctionsGetRequest($user_id, $company_id, $x_api_key, $status, $type, $range);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'bidderAuctionsGet'
     *
     * @param  string $user_id (required)
     * @param  string $company_id (required)
     * @param  string $x_api_key (required)
     * @param  string $status Status of the Auction.&lt;br&gt;ONGOING: ACTIVE + WAITING&lt;br&gt;FINISHED:FLOW+COMPLETE&lt;br&gt;Note: When an auction is marked with auctions/end Call, auction will be ready for approval procedure.&lt;br&gt;Therefore, the status will be FLOW. Auctions with status COMPLETE means, FLOW (approval procedure) is completed. (optional)
     * @param  string $type Type of the Auction. (optional)
     * @param  string $range Auction Date Range. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function bidderAuctionsGetRequest($user_id, $company_id, $x_api_key, $status = null, $type = null, $range = null)
    {
        // verify the required parameter 'user_id' is set
        if ($user_id === null || (is_array($user_id) && count($user_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $user_id when calling bidderAuctionsGet'
            );
        }
        // verify the required parameter 'company_id' is set
        if ($company_id === null || (is_array($company_id) && count($company_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $company_id when calling bidderAuctionsGet'
            );
        }
        // verify the required parameter 'x_api_key' is set
        if ($x_api_key === null || (is_array($x_api_key) && count($x_api_key) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $x_api_key when calling bidderAuctionsGet'
            );
        }

        $resourcePath = '/bidder/auctions';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // header params
        if ($user_id !== null) {
            $headerParams['userID'] = ObjectSerializer::toHeaderValue($user_id);
        }
        // header params
        if ($status !== null) {
            $headerParams['status'] = ObjectSerializer::toHeaderValue($status);
        }
        // header params
        if ($type !== null) {
            $headerParams['type'] = ObjectSerializer::toHeaderValue($type);
        }
        // header params
        if ($company_id !== null) {
            $headerParams['companyID'] = ObjectSerializer::toHeaderValue($company_id);
        }
        // header params
        if ($x_api_key !== null) {
            $headerParams['x-api-key'] = ObjectSerializer::toHeaderValue($x_api_key);
        }
        // header params
        if ($range !== null) {
            $headerParams['range'] = ObjectSerializer::toHeaderValue($range);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            
            if($headers['Content-Type'] === 'application/json') {
                // \stdClass has no __toString(), so we should encode it manually
                if ($httpBody instanceof \stdClass) {
                    $httpBody = \GuzzleHttp\json_encode($httpBody);
                }
                // array has no __toString(), so we should encode it manually
                if(is_array($httpBody)) {
                    $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($httpBody));
                }
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\build_query($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\build_query($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
