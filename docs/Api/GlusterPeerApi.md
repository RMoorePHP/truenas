# RMoore\Truenas\GlusterPeerApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**glusterPeerGet()**](GlusterPeerApi.md#glusterPeerGet) | **GET** /gluster/peer | 
[**glusterPeerIdIdDelete()**](GlusterPeerApi.md#glusterPeerIdIdDelete) | **DELETE** /gluster/peer/id/{id} | 
[**glusterPeerIdIdGet()**](GlusterPeerApi.md#glusterPeerIdIdGet) | **GET** /gluster/peer/id/{id} | 
[**glusterPeerIpsAvailableGet()**](GlusterPeerApi.md#glusterPeerIpsAvailableGet) | **GET** /gluster/peer/ips_available | 
[**glusterPeerPost()**](GlusterPeerApi.md#glusterPeerPost) | **POST** /gluster/peer | 
[**glusterPeerStatusPost()**](GlusterPeerApi.md#glusterPeerStatusPost) | **POST** /gluster/peer/status | 


## `glusterPeerGet()`

```php
glusterPeerGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\GlusterPeerApi(
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
    $apiInstance->glusterPeerGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling GlusterPeerApi->glusterPeerGet: ', $e->getMessage(), PHP_EOL;
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

## `glusterPeerIdIdDelete()`

```php
glusterPeerIdIdDelete($id)
```



Remove peer of `id` from the Trusted Storage Pool.  `id` String representing the uuid of the peer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterPeerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->glusterPeerIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling GlusterPeerApi->glusterPeerIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `glusterPeerIdIdGet()`

```php
glusterPeerIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\GlusterPeerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->glusterPeerIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling GlusterPeerApi->glusterPeerIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `glusterPeerIpsAvailableGet()`

```php
glusterPeerIpsAvailableGet()
```



Return list of VIP(v4/v6) addresses available on the system

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterPeerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->glusterPeerIpsAvailableGet();
} catch (Exception $e) {
    echo 'Exception when calling GlusterPeerApi->glusterPeerIpsAvailableGet: ', $e->getMessage(), PHP_EOL;
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

## `glusterPeerPost()`

```php
glusterPeerPost($gluster_peer_create0)
```



Add peer to the Trusted Storage Pool.  `hostname` String representing an IP(v4/v6) address or DNS name

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterPeerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_peer_create0 = new \RMoore\Truenas\Model\GlusterPeerCreate0(); // \RMoore\Truenas\Model\GlusterPeerCreate0

try {
    $apiInstance->glusterPeerPost($gluster_peer_create0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterPeerApi->glusterPeerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_peer_create0** | [**\RMoore\Truenas\Model\GlusterPeerCreate0**](../Model/GlusterPeerCreate0.md)|  | [optional]

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

## `glusterPeerStatusPost()`

```php
glusterPeerStatusPost($gluster_peer_status0)
```



List the status of peers in the Trusted Storage Pool.  `localhost` Boolean if True, include localhost else exclude localhost

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\GlusterPeerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$gluster_peer_status0 = new \RMoore\Truenas\Model\GlusterPeerStatus0(); // \RMoore\Truenas\Model\GlusterPeerStatus0

try {
    $apiInstance->glusterPeerStatusPost($gluster_peer_status0);
} catch (Exception $e) {
    echo 'Exception when calling GlusterPeerApi->glusterPeerStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **gluster_peer_status0** | [**\RMoore\Truenas\Model\GlusterPeerStatus0**](../Model/GlusterPeerStatus0.md)|  | [optional]

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
