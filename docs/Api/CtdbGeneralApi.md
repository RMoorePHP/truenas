# RMoore\Truenas\CtdbGeneralApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ctdbGeneralHealthyGet()**](CtdbGeneralApi.md#ctdbGeneralHealthyGet) | **GET** /ctdb/general/healthy | 
[**ctdbGeneralIpsPost()**](CtdbGeneralApi.md#ctdbGeneralIpsPost) | **POST** /ctdb/general/ips | 
[**ctdbGeneralListnodesGet()**](CtdbGeneralApi.md#ctdbGeneralListnodesGet) | **GET** /ctdb/general/listnodes | 
[**ctdbGeneralPnnGet()**](CtdbGeneralApi.md#ctdbGeneralPnnGet) | **GET** /ctdb/general/pnn | 
[**ctdbGeneralStatusPost()**](CtdbGeneralApi.md#ctdbGeneralStatusPost) | **POST** /ctdb/general/status | 


## `ctdbGeneralHealthyGet()`

```php
ctdbGeneralHealthyGet()
```



Returns a boolean if the ctdb cluster is healthy.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ctdbGeneralHealthyGet();
} catch (Exception $e) {
    echo 'Exception when calling CtdbGeneralApi->ctdbGeneralHealthyGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ctdbGeneralIpsPost()`

```php
ctdbGeneralIpsPost($ctdb_general_ips0)
```



Return a list of public ip addresses in the ctdb cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctdb_general_ips0 = new \RMoore\Truenas\Model\CtdbGeneralIps0(); // \RMoore\Truenas\Model\CtdbGeneralIps0

try {
    $apiInstance->ctdbGeneralIpsPost($ctdb_general_ips0);
} catch (Exception $e) {
    echo 'Exception when calling CtdbGeneralApi->ctdbGeneralIpsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctdb_general_ips0** | [**\RMoore\Truenas\Model\CtdbGeneralIps0**](../Model/CtdbGeneralIps0.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ctdbGeneralListnodesGet()`

```php
ctdbGeneralListnodesGet()
```



Return a list of nodes in the ctdb cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ctdbGeneralListnodesGet();
} catch (Exception $e) {
    echo 'Exception when calling CtdbGeneralApi->ctdbGeneralListnodesGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ctdbGeneralPnnGet()`

```php
ctdbGeneralPnnGet()
```



Return node number for this node. This value should be static for life of cluster.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ctdbGeneralPnnGet();
} catch (Exception $e) {
    echo 'Exception when calling CtdbGeneralApi->ctdbGeneralPnnGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `ctdbGeneralStatusPost()`

```php
ctdbGeneralStatusPost($ctdb_general_status0)
```



List the status of nodes in the ctdb cluster.  `all_nodes`: Boolean if True, return status     for all nodes in the cluster else return     status of this node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbGeneralApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctdb_general_status0 = new \RMoore\Truenas\Model\CtdbGeneralStatus0(); // \RMoore\Truenas\Model\CtdbGeneralStatus0

try {
    $apiInstance->ctdbGeneralStatusPost($ctdb_general_status0);
} catch (Exception $e) {
    echo 'Exception when calling CtdbGeneralApi->ctdbGeneralStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctdb_general_status0** | [**\RMoore\Truenas\Model\CtdbGeneralStatus0**](../Model/CtdbGeneralStatus0.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[basic](../../README.md#basic)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
