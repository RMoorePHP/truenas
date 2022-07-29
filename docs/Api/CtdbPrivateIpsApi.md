# RMoore\Truenas\CtdbPrivateIpsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ctdbPrivateIpsGet()**](CtdbPrivateIpsApi.md#ctdbPrivateIpsGet) | **GET** /ctdb/private/ips | 
[**ctdbPrivateIpsIdIdGet()**](CtdbPrivateIpsApi.md#ctdbPrivateIpsIdIdGet) | **GET** /ctdb/private/ips/id/{id} | 
[**ctdbPrivateIpsIdIdPut()**](CtdbPrivateIpsApi.md#ctdbPrivateIpsIdIdPut) | **PUT** /ctdb/private/ips/id/{id} | 
[**ctdbPrivateIpsPost()**](CtdbPrivateIpsApi.md#ctdbPrivateIpsPost) | **POST** /ctdb/private/ips | 


## `ctdbPrivateIpsGet()`

```php
ctdbPrivateIpsGet($limit, $offset, $count, $sort)
```



`query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPrivateIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$limit = 56; // int
$offset = 56; // int
$count = True; // bool
$sort = 'sort_example'; // string

try {
    $apiInstance->ctdbPrivateIpsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPrivateIpsApi->ctdbPrivateIpsGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **limit** | **int**|  | [optional]
 **offset** | **int**|  | [optional]
 **count** | **bool**|  | [optional]
 **sort** | **string**|  | [optional]

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

## `ctdbPrivateIpsIdIdGet()`

```php
ctdbPrivateIpsIdIdGet($id)
```



`query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPrivateIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->ctdbPrivateIpsIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPrivateIpsApi->ctdbPrivateIpsIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `ctdbPrivateIpsIdIdPut()`

```php
ctdbPrivateIpsIdIdPut($id)
```



Update Private IP address from the ctdb cluster with pnn value of `id`.  `id` integer representing the PNN value for the node. `enable` boolean. When True, enable the node else disable the node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPrivateIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->ctdbPrivateIpsIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPrivateIpsApi->ctdbPrivateIpsIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**|  |

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

## `ctdbPrivateIpsPost()`

```php
ctdbPrivateIpsPost($ctdb_private_ips_create0)
```



Add a ctdb private address to the cluster  `ip` string representing an IP v4/v6 address

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPrivateIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctdb_private_ips_create0 = new \RMoore\Truenas\Model\CtdbPrivateIpsCreate0(); // \RMoore\Truenas\Model\CtdbPrivateIpsCreate0

try {
    $apiInstance->ctdbPrivateIpsPost($ctdb_private_ips_create0);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPrivateIpsApi->ctdbPrivateIpsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctdb_private_ips_create0** | [**\RMoore\Truenas\Model\CtdbPrivateIpsCreate0**](../Model/CtdbPrivateIpsCreate0.md)|  | [optional]

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
