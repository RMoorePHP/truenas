<?php
/**
 * GlusterRebalanceApi
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
 * GlusterRebalanceApi Class Doc Comment
 *
 * @category Class
 * @package  RMoore\Truenas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class GlusterRebalanceApi
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
     * Operation glusterRebalanceFixLayoutPost
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceFixLayout0 $gluster_rebalance_fix_layout0 gluster_rebalance_fix_layout0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function glusterRebalanceFixLayoutPost($gluster_rebalance_fix_layout0 = null)
    {
        $this->glusterRebalanceFixLayoutPostWithHttpInfo($gluster_rebalance_fix_layout0);
    }

    /**
     * Operation glusterRebalanceFixLayoutPostWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceFixLayout0 $gluster_rebalance_fix_layout0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function glusterRebalanceFixLayoutPostWithHttpInfo($gluster_rebalance_fix_layout0 = null)
    {
        $request = $this->glusterRebalanceFixLayoutPostRequest($gluster_rebalance_fix_layout0);

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
     * Operation glusterRebalanceFixLayoutPostAsync
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceFixLayout0 $gluster_rebalance_fix_layout0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceFixLayoutPostAsync($gluster_rebalance_fix_layout0 = null)
    {
        return $this->glusterRebalanceFixLayoutPostAsyncWithHttpInfo($gluster_rebalance_fix_layout0)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation glusterRebalanceFixLayoutPostAsyncWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceFixLayout0 $gluster_rebalance_fix_layout0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceFixLayoutPostAsyncWithHttpInfo($gluster_rebalance_fix_layout0 = null)
    {
        $returnType = '';
        $request = $this->glusterRebalanceFixLayoutPostRequest($gluster_rebalance_fix_layout0);

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
     * Create request for operation 'glusterRebalanceFixLayoutPost'
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceFixLayout0 $gluster_rebalance_fix_layout0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function glusterRebalanceFixLayoutPostRequest($gluster_rebalance_fix_layout0 = null)
    {

        $resourcePath = '/gluster/rebalance/fix_layout';
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
        if (isset($gluster_rebalance_fix_layout0)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($gluster_rebalance_fix_layout0));
            } else {
                $httpBody = $gluster_rebalance_fix_layout0;
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
     * Operation glusterRebalanceStartPost
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStart0 $gluster_rebalance_start0 gluster_rebalance_start0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function glusterRebalanceStartPost($gluster_rebalance_start0 = null)
    {
        $this->glusterRebalanceStartPostWithHttpInfo($gluster_rebalance_start0);
    }

    /**
     * Operation glusterRebalanceStartPostWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStart0 $gluster_rebalance_start0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function glusterRebalanceStartPostWithHttpInfo($gluster_rebalance_start0 = null)
    {
        $request = $this->glusterRebalanceStartPostRequest($gluster_rebalance_start0);

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
     * Operation glusterRebalanceStartPostAsync
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStart0 $gluster_rebalance_start0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceStartPostAsync($gluster_rebalance_start0 = null)
    {
        return $this->glusterRebalanceStartPostAsyncWithHttpInfo($gluster_rebalance_start0)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation glusterRebalanceStartPostAsyncWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStart0 $gluster_rebalance_start0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceStartPostAsyncWithHttpInfo($gluster_rebalance_start0 = null)
    {
        $returnType = '';
        $request = $this->glusterRebalanceStartPostRequest($gluster_rebalance_start0);

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
     * Create request for operation 'glusterRebalanceStartPost'
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStart0 $gluster_rebalance_start0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function glusterRebalanceStartPostRequest($gluster_rebalance_start0 = null)
    {

        $resourcePath = '/gluster/rebalance/start';
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
        if (isset($gluster_rebalance_start0)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($gluster_rebalance_start0));
            } else {
                $httpBody = $gluster_rebalance_start0;
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
     * Operation glusterRebalanceStatusPost
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStatus0 $gluster_rebalance_status0 gluster_rebalance_status0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function glusterRebalanceStatusPost($gluster_rebalance_status0 = null)
    {
        $this->glusterRebalanceStatusPostWithHttpInfo($gluster_rebalance_status0);
    }

    /**
     * Operation glusterRebalanceStatusPostWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStatus0 $gluster_rebalance_status0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function glusterRebalanceStatusPostWithHttpInfo($gluster_rebalance_status0 = null)
    {
        $request = $this->glusterRebalanceStatusPostRequest($gluster_rebalance_status0);

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
     * Operation glusterRebalanceStatusPostAsync
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStatus0 $gluster_rebalance_status0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceStatusPostAsync($gluster_rebalance_status0 = null)
    {
        return $this->glusterRebalanceStatusPostAsyncWithHttpInfo($gluster_rebalance_status0)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation glusterRebalanceStatusPostAsyncWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStatus0 $gluster_rebalance_status0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceStatusPostAsyncWithHttpInfo($gluster_rebalance_status0 = null)
    {
        $returnType = '';
        $request = $this->glusterRebalanceStatusPostRequest($gluster_rebalance_status0);

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
     * Create request for operation 'glusterRebalanceStatusPost'
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStatus0 $gluster_rebalance_status0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function glusterRebalanceStatusPostRequest($gluster_rebalance_status0 = null)
    {

        $resourcePath = '/gluster/rebalance/status';
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
        if (isset($gluster_rebalance_status0)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($gluster_rebalance_status0));
            } else {
                $httpBody = $gluster_rebalance_status0;
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
     * Operation glusterRebalanceStopPost
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStop0 $gluster_rebalance_stop0 gluster_rebalance_stop0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return void
     */
    public function glusterRebalanceStopPost($gluster_rebalance_stop0 = null)
    {
        $this->glusterRebalanceStopPostWithHttpInfo($gluster_rebalance_stop0);
    }

    /**
     * Operation glusterRebalanceStopPostWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStop0 $gluster_rebalance_stop0 (optional)
     *
     * @throws \RMoore\Truenas\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of null, HTTP status code, HTTP response headers (array of strings)
     */
    public function glusterRebalanceStopPostWithHttpInfo($gluster_rebalance_stop0 = null)
    {
        $request = $this->glusterRebalanceStopPostRequest($gluster_rebalance_stop0);

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
     * Operation glusterRebalanceStopPostAsync
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStop0 $gluster_rebalance_stop0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceStopPostAsync($gluster_rebalance_stop0 = null)
    {
        return $this->glusterRebalanceStopPostAsyncWithHttpInfo($gluster_rebalance_stop0)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation glusterRebalanceStopPostAsyncWithHttpInfo
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStop0 $gluster_rebalance_stop0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function glusterRebalanceStopPostAsyncWithHttpInfo($gluster_rebalance_stop0 = null)
    {
        $returnType = '';
        $request = $this->glusterRebalanceStopPostRequest($gluster_rebalance_stop0);

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
     * Create request for operation 'glusterRebalanceStopPost'
     *
     * @param  \RMoore\Truenas\Model\GlusterRebalanceStop0 $gluster_rebalance_stop0 (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function glusterRebalanceStopPostRequest($gluster_rebalance_stop0 = null)
    {

        $resourcePath = '/gluster/rebalance/stop';
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
        if (isset($gluster_rebalance_stop0)) {
            if ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode(ObjectSerializer::sanitizeForSerialization($gluster_rebalance_stop0));
            } else {
                $httpBody = $gluster_rebalance_stop0;
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
