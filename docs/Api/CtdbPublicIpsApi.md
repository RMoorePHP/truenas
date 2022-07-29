# RMoore\Truenas\CtdbPublicIpsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ctdbPublicIpsGet()**](CtdbPublicIpsApi.md#ctdbPublicIpsGet) | **GET** /ctdb/public/ips | 
[**ctdbPublicIpsIdIdGet()**](CtdbPublicIpsApi.md#ctdbPublicIpsIdIdGet) | **GET** /ctdb/public/ips/id/{id} | 
[**ctdbPublicIpsIdIdPut()**](CtdbPublicIpsApi.md#ctdbPublicIpsIdIdPut) | **PUT** /ctdb/public/ips/id/{id} | 
[**ctdbPublicIpsInterfaceChoicesPost()**](CtdbPublicIpsApi.md#ctdbPublicIpsInterfaceChoicesPost) | **POST** /ctdb/public/ips/interface_choices | 
[**ctdbPublicIpsPost()**](CtdbPublicIpsApi.md#ctdbPublicIpsPost) | **POST** /ctdb/public/ips | 


## `ctdbPublicIpsGet()`

```php
ctdbPublicIpsGet($limit, $offset, $count, $sort)
```



Retrieve information about configured public IP addresses for the ctdb cluster. This call raise a CallError with errno set to ENXIO if this node is not in a state where it can provide accurate information about cluster. Examples problematic states are:  - ctdb or glusterd are not running on this node  - ctdb shared volume is not mounted  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPublicIpsApi(
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
    $apiInstance->ctdbPublicIpsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPublicIpsApi->ctdbPublicIpsGet: ', $e->getMessage(), PHP_EOL;
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

## `ctdbPublicIpsIdIdGet()`

```php
ctdbPublicIpsIdIdGet($id)
```



Retrieve information about configured public IP addresses for the ctdb cluster. This call raise a CallError with errno set to ENXIO if this node is not in a state where it can provide accurate information about cluster. Examples problematic states are:  - ctdb or glusterd are not running on this node  - ctdb shared volume is not mounted  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPublicIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->ctdbPublicIpsIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPublicIpsApi->ctdbPublicIpsIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `ctdbPublicIpsIdIdPut()`

```php
ctdbPublicIpsIdIdPut($id)
```



Update Public IP address in the ctdb cluster. `pnn` - cluster node number `ip` string representing the public ip address `enable` boolean. When True, enable the node else disable the node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPublicIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->ctdbPublicIpsIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPublicIpsApi->ctdbPublicIpsIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `ctdbPublicIpsInterfaceChoicesPost()`

```php
ctdbPublicIpsInterfaceChoicesPost($request_body)
```



Retrieve list of available interface choices that can be used for assigning a ctdbd public ip.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPublicIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->ctdbPublicIpsInterfaceChoicesPost($request_body);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPublicIpsApi->ctdbPublicIpsInterfaceChoicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request_body** | [**string[]**](../Model/string.md)|  | [optional]

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

## `ctdbPublicIpsPost()`

```php
ctdbPublicIpsPost($ctdb_public_ips_create0)
```



Add a ctdb public address to the cluster  `pnn` node number of record to adjust `ip` string representing an IP v4/v6 address `netmask` integer representing a cidr notated netmask (i.e. 16/24/48/64 etc) `interface` string representing a network interface to apply the `ip`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CtdbPublicIpsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ctdb_public_ips_create0 = new \RMoore\Truenas\Model\CtdbPublicIpsCreate0(); // \RMoore\Truenas\Model\CtdbPublicIpsCreate0

try {
    $apiInstance->ctdbPublicIpsPost($ctdb_public_ips_create0);
} catch (Exception $e) {
    echo 'Exception when calling CtdbPublicIpsApi->ctdbPublicIpsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ctdb_public_ips_create0** | [**\RMoore\Truenas\Model\CtdbPublicIpsCreate0**](../Model/CtdbPublicIpsCreate0.md)|  | [optional]

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
