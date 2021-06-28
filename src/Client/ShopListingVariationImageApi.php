<?php
/**
 * ShopListingVariationImageApi
 * PHP version 7.2
 *
 * @category Class
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Etsy OpenAPI
 *
 * <div class=\"wt-text-body-01\"><p class=\"wt-pt-xs-2 wt-pb-xs-2\">Etsy's Open API provides a simple RESTful interface for various Etsy.com features. The API reference documents endpoints are meant to replace <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://www.etsy.com/developers/documentation\">Etsy's current Open API</a> this year. Use of the API is subject to the <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://www.etsy.com/legal/api\">API Terms of Use</a>.</p><p class=\"wt-pb-xs-5 wt-text-title-01\">If you would like to make requests to the Open API v3 endpoints, please fill out <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://docs.google.com/forms/d/e/1FAIpQLSc4qzVlgjkzEkaQvpgX00xvJLjlomRoS-60G9ob_FqCfmbCrA/viewform\">the intake form</a>.</p><p class=\"wt-pb-xs-2\">The API is currently in an experimental, alpha phase meant to validate feature and functionality requirements. During this phase, endpoints may have significant design changes but developers will have an opportunity to preview endpoints and provide feedback that will help shape Etsy's Open API functionality. The alpha API design is not stable and will likely change in response to feedback but we'll communicate changes as they are made.</p><p class=\"wt-pb-xs-2\">All of the endpoints are callable, but many endpoints are currently interface stubs and will return a \"501 Not Implemented\" response code when called; the documentation for each of these stub endpoints includes an alert calling this out.</p><p class=\"wt-pb-xs-2\">If you'd like to report an issue or provide feedback on the API design, <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://github.com/etsy/open-api/issues/new/choose\">please add an issue in Github</a>. You grant us a license to use your feedback as described in Etsy's primary <a target=\"_blank\" class=\"wt-text-link wt-p-xs-0\" href=\"https://www.etsy.com/legal/terms-of-use\">Terms of Use.</a></p></div>&copy; 2021 Etsy, Inc. All Rights Reserved. Use of this code is subject to Etsy's <a class='wt-text-link wt-p-xs-0' target='_blank' href='https://www.etsy.com/legal/api'>API Developer Terms of Use</a>.
 *
 * The version of the OpenAPI document: 3.0.0
 * Contact: developers@etsy.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.1-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace EtsyApi\Client;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use EtsyApi\ApiException;
use EtsyApi\Configuration;
use EtsyApi\HeaderSelector;
use EtsyApi\ObjectSerializer;

/**
 * ShopListingVariationImageApi Class Doc Comment
 *
 * @category Class
 * @package  EtsyApi
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ShopListingVariationImageApi
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
     * @var int Host index
     */
    protected $hostIndex;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     * @param int             $hostIndex (Optional) host index to select the list of hosts if defined in the OpenAPI spec
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null,
        $hostIndex = 0
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
        $this->hostIndex = $hostIndex;
    }

    /**
     * Set the host index
     *
     * @param int $hostIndex Host index (required)
     */
    public function setHostIndex($hostIndex)
    {
        $this->hostIndex = $hostIndex;
    }

    /**
     * Get the host index
     *
     * @return int Host index
     */
    public function getHostIndex()
    {
        return $this->hostIndex;
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation getListingVariationImages
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     *
     * @throws \EtsyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EtsyApi\Model\ListingVariationImages|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema
     */
    public function getListingVariationImages($shop_id, $listing_id)
    {
        list($response) = $this->getListingVariationImagesWithHttpInfo($shop_id, $listing_id);
        return $response;
    }

    /**
     * Operation getListingVariationImagesWithHttpInfo
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     *
     * @throws \EtsyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EtsyApi\Model\ListingVariationImages|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function getListingVariationImagesWithHttpInfo($shop_id, $listing_id)
    {
        $request = $this->getListingVariationImagesRequest($shop_id, $listing_id);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\EtsyApi\Model\ListingVariationImages' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ListingVariationImages', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EtsyApi\Model\ListingVariationImages';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\EtsyApi\Model\ListingVariationImages',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation getListingVariationImagesAsync
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingVariationImagesAsync($shop_id, $listing_id)
    {
        return $this->getListingVariationImagesAsyncWithHttpInfo($shop_id, $listing_id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation getListingVariationImagesAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function getListingVariationImagesAsyncWithHttpInfo($shop_id, $listing_id)
    {
        $returnType = '\EtsyApi\Model\ListingVariationImages';
        $request = $this->getListingVariationImagesRequest($shop_id, $listing_id);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'getListingVariationImages'
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function getListingVariationImagesRequest($shop_id, $listing_id)
    {
        // verify the required parameter 'shop_id' is set
        if ($shop_id === null || (is_array($shop_id) && count($shop_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shop_id when calling getListingVariationImages'
            );
        }
        if ($shop_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$shop_id" when calling ShopListingVariationImageApi.getListingVariationImages, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'listing_id' is set
        if ($listing_id === null || (is_array($listing_id) && count($listing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $listing_id when calling getListingVariationImages'
            );
        }
        if ($listing_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$listing_id" when calling ShopListingVariationImageApi.getListingVariationImages, must be bigger than or equal to 1.');
        }


        $resourcePath = '/v3/application/shops/{shop_id}/listings/{listing_id}/variation-images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($shop_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shop_id' . '}',
                ObjectSerializer::toPathValue($shop_id),
                $resourcePath
            );
        }
        // path params
        if ($listing_id !== null) {
            $resourcePath = str_replace(
                '{' . 'listing_id' . '}',
                ObjectSerializer::toPathValue($listing_id),
                $resourcePath
            );
        }


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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
     * Operation updateVariationImages
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     * @param  \EtsyApi\Model\InlineObject14 $inline_object14 inline_object14 (optional)
     *
     * @throws \EtsyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \EtsyApi\Model\ListingVariationImages|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema
     */
    public function updateVariationImages($shop_id, $listing_id, $inline_object14 = null)
    {
        list($response) = $this->updateVariationImagesWithHttpInfo($shop_id, $listing_id, $inline_object14);
        return $response;
    }

    /**
     * Operation updateVariationImagesWithHttpInfo
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     * @param  \EtsyApi\Model\InlineObject14 $inline_object14 (optional)
     *
     * @throws \EtsyApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \EtsyApi\Model\ListingVariationImages|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema|\EtsyApi\Model\ErrorSchema, HTTP status code, HTTP response headers (array of strings)
     */
    public function updateVariationImagesWithHttpInfo($shop_id, $listing_id, $inline_object14 = null)
    {
        $request = $this->updateVariationImagesRequest($shop_id, $listing_id, $inline_object14);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
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
            switch($statusCode) {
                case 200:
                    if ('\EtsyApi\Model\ListingVariationImages' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ListingVariationImages', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 404:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 400:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 409:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 403:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                case 500:
                    if ('\EtsyApi\Model\ErrorSchema' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return [
                        ObjectSerializer::deserialize($content, '\EtsyApi\Model\ErrorSchema', []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
            }

            $returnType = '\EtsyApi\Model\ListingVariationImages';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
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
                        '\EtsyApi\Model\ListingVariationImages',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\EtsyApi\Model\ErrorSchema',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation updateVariationImagesAsync
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     * @param  \EtsyApi\Model\InlineObject14 $inline_object14 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVariationImagesAsync($shop_id, $listing_id, $inline_object14 = null)
    {
        return $this->updateVariationImagesAsyncWithHttpInfo($shop_id, $listing_id, $inline_object14)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation updateVariationImagesAsyncWithHttpInfo
     *
     * 
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     * @param  \EtsyApi\Model\InlineObject14 $inline_object14 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function updateVariationImagesAsyncWithHttpInfo($shop_id, $listing_id, $inline_object14 = null)
    {
        $returnType = '\EtsyApi\Model\ListingVariationImages';
        $request = $this->updateVariationImagesRequest($shop_id, $listing_id, $inline_object14);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
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
     * Create request for operation 'updateVariationImages'
     *
     * @param  int $shop_id The unique positive non-zero numeric ID for an Etsy Shop. (required)
     * @param  int $listing_id The unique numeric ID for a listing in a specific [shop](/documentation/reference#tag/Shop). (required)
     * @param  \EtsyApi\Model\InlineObject14 $inline_object14 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function updateVariationImagesRequest($shop_id, $listing_id, $inline_object14 = null)
    {
        // verify the required parameter 'shop_id' is set
        if ($shop_id === null || (is_array($shop_id) && count($shop_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $shop_id when calling updateVariationImages'
            );
        }
        if ($shop_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$shop_id" when calling ShopListingVariationImageApi.updateVariationImages, must be bigger than or equal to 1.');
        }

        // verify the required parameter 'listing_id' is set
        if ($listing_id === null || (is_array($listing_id) && count($listing_id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $listing_id when calling updateVariationImages'
            );
        }
        if ($listing_id < 1) {
            throw new \InvalidArgumentException('invalid value for "$listing_id" when calling ShopListingVariationImageApi.updateVariationImages, must be bigger than or equal to 1.');
        }


        $resourcePath = '/v3/application/shops/{shop_id}/listings/{listing_id}/variation-images';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // path params
        if ($shop_id !== null) {
            $resourcePath = str_replace(
                '{' . 'shop_id' . '}',
                ObjectSerializer::toPathValue($shop_id),
                $resourcePath
            );
        }
        // path params
        if ($listing_id !== null) {
            $resourcePath = str_replace(
                '{' . 'listing_id' . '}',
                ObjectSerializer::toPathValue($listing_id),
                $resourcePath
            );
        }


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
        if (isset($inline_object14)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($inline_object14));
            } else {
                $httpBody = $inline_object14;
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
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
            'POST',
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
