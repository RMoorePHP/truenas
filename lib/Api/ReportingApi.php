<?php
/**
 * ReportingApi
 * PHP version 7.4
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * TrueNAS RESTful API
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
 *
 * The version of the OpenAPI document: v2.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.1.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace RMoore\Truenas\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use RMoore\Truenas\ApiException;
use RMoore\Truenas\Configuration;
use RMoore\Truenas\HeaderSelector;
use RMoore\Truenas\ObjectSerializer;

/**
 * ReportingApi Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportingApi
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
    public function setHostIndex($hostIndex): void
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
     * Operation reportingClearGet
     *
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function reportingClearGet()
    {
        $this->reportingClearGetWithHttpInfo();
    }

    /**
     * Operation reportingClearGetWithHttpInfo
     *
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportingClearGetWithHttpInfo()
    {
        $request = $this->reportingClearGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation reportingClearGetAsync
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingClearGetAsync()
    {
        return $this->reportingClearGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportingClearGetAsyncWithHttpInfo
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingClearGetAsyncWithHttpInfo()
    {
        $returnType = '';
        $request = $this->reportingClearGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportingClearGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportingClearGetRequest()
    {

        $resourcePath = '/reporting/clear';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportingGet
     *
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function reportingGet()
    {
        $this->reportingGetWithHttpInfo();
    }

    /**
     * Operation reportingGetWithHttpInfo
     *
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportingGetWithHttpInfo()
    {
        $request = $this->reportingGetRequest();

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation reportingGetAsync
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingGetAsync()
    {
        return $this->reportingGetAsyncWithHttpInfo()
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportingGetAsyncWithHttpInfo
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingGetAsyncWithHttpInfo()
    {
        $returnType = '';
        $request = $this->reportingGetRequest();

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportingGet'
     *
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportingGetRequest()
    {

        $resourcePath = '/reporting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportingGetDataPost
     *
     * @param  \RMoore\Truenas\Model\ReportingGetData $reporting_get_data reporting_get_data (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function reportingGetDataPost($reporting_get_data = null)
    {
        $this->reportingGetDataPostWithHttpInfo($reporting_get_data);
    }

    /**
     * Operation reportingGetDataPostWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\ReportingGetData $reporting_get_data (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportingGetDataPostWithHttpInfo($reporting_get_data = null)
    {
        $request = $this->reportingGetDataPostRequest($reporting_get_data);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation reportingGetDataPostAsync
     *
     * @param  \RMoore\Truenas\Model\ReportingGetData $reporting_get_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingGetDataPostAsync($reporting_get_data = null)
    {
        return $this->reportingGetDataPostAsyncWithHttpInfo($reporting_get_data)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportingGetDataPostAsyncWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\ReportingGetData $reporting_get_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingGetDataPostAsyncWithHttpInfo($reporting_get_data = null)
    {
        $returnType = '';
        $request = $this->reportingGetDataPostRequest($reporting_get_data);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportingGetDataPost'
     *
     * @param  \RMoore\Truenas\Model\ReportingGetData $reporting_get_data (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportingGetDataPostRequest($reporting_get_data = null)
    {

        $resourcePath = '/reporting/get_data';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($reporting_get_data)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($reporting_get_data));
            } else {
                $httpBody = $reporting_get_data;
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
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'POST',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportingGraphsGet
     *
     * @param  int $limit limit (optional)
     * @param  int $offset offset (optional)
     * @param  bool $count count (optional)
     * @param  string $sort sort (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function reportingGraphsGet($limit = null, $offset = null, $count = null, $sort = null)
    {
        $this->reportingGraphsGetWithHttpInfo($limit, $offset, $count, $sort);
    }

    /**
     * Operation reportingGraphsGetWithHttpInfo
     *
     * @param  int $limit (optional)
     * @param  int $offset (optional)
     * @param  bool $count (optional)
     * @param  string $sort (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportingGraphsGetWithHttpInfo($limit = null, $offset = null, $count = null, $sort = null)
    {
        $request = $this->reportingGraphsGetRequest($limit, $offset, $count, $sort);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation reportingGraphsGetAsync
     *
     * @param  int $limit (optional)
     * @param  int $offset (optional)
     * @param  bool $count (optional)
     * @param  string $sort (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingGraphsGetAsync($limit = null, $offset = null, $count = null, $sort = null)
    {
        return $this->reportingGraphsGetAsyncWithHttpInfo($limit, $offset, $count, $sort)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportingGraphsGetAsyncWithHttpInfo
     *
     * @param  int $limit (optional)
     * @param  int $offset (optional)
     * @param  bool $count (optional)
     * @param  string $sort (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingGraphsGetAsyncWithHttpInfo($limit = null, $offset = null, $count = null, $sort = null)
    {
        $returnType = '';
        $request = $this->reportingGraphsGetRequest($limit, $offset, $count, $sort);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportingGraphsGet'
     *
     * @param  int $limit (optional)
     * @param  int $offset (optional)
     * @param  bool $count (optional)
     * @param  string $sort (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportingGraphsGetRequest($limit = null, $offset = null, $count = null, $sort = null)
    {

        $resourcePath = '/reporting/graphs';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $limit,
            'limit', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $offset,
            'offset', // param base name
            'integer', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $count,
            'count', // param base name
            'boolean', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);
        // query params
        $queryParams = array_merge($queryParams, ObjectSerializer::toQueryValue(
            $sort,
            'sort', // param base name
            'string', // openApiType
            'form', // style
            true, // explode
            false // required
        ) ?? []);




        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
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
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation reportingPut
     *
     * @param  \RMoore\Truenas\Model\ReportingUpdate0 $reporting_update0 reporting_update0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function reportingPut($reporting_update0 = null)
    {
        $this->reportingPutWithHttpInfo($reporting_update0);
    }

    /**
     * Operation reportingPutWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\ReportingUpdate0 $reporting_update0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function reportingPutWithHttpInfo($reporting_update0 = null)
    {
        $request = $this->reportingPutRequest($reporting_update0);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? (string) $e->getResponse()->getBody() : null
                );
            } catch (ConnectException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    (int) $e->getCode(),
                    null,
                    null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        (string) $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    (string) $response->getBody()
                );
            }

            return [null, $statusCode, $response->getHeaders()];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
            }
            throw $e;
        }
    }

    /**
     * Operation reportingPutAsync
     *
     * @param  \RMoore\Truenas\Model\ReportingUpdate0 $reporting_update0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingPutAsync($reporting_update0 = null)
    {
        return $this->reportingPutAsyncWithHttpInfo($reporting_update0)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation reportingPutAsyncWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\ReportingUpdate0 $reporting_update0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function reportingPutAsyncWithHttpInfo($reporting_update0 = null)
    {
        $returnType = '';
        $request = $this->reportingPutRequest($reporting_update0);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    return [null, $response->getStatusCode(), $response->getHeaders()];
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
                        (string) $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'reportingPut'
     *
     * @param  \RMoore\Truenas\Model\ReportingUpdate0 $reporting_update0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function reportingPutRequest($reporting_update0 = null)
    {

        $resourcePath = '/reporting';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;





        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                []
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                [],
                ['application/json']
            );
        }

        // for model (json/xml)
        if (isset($reporting_update0)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($reporting_update0));
            } else {
                $httpBody = $reporting_update0;
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
                $httpBody = ObjectSerializer::buildQuery($formParams);
            }
        }

        // this endpoint requires HTTP basic authentication
        if (!empty($this->config->getUsername()) || !(empty($this->config->getPassword()))) {
            $headers['Authorization'] = 'Basic ' . base64_encode($this->config->getUsername() . ":" . $this->config->getPassword());
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

        $query = ObjectSerializer::buildQuery($queryParams);
        return new Request(
            'PUT',
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
