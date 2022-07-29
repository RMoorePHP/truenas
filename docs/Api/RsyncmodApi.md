# RMoore\Truenas\RsyncmodApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**rsyncmodGet()**](RsyncmodApi.md#rsyncmodGet) | **GET** /rsyncmod | 
[**rsyncmodIdIdDelete()**](RsyncmodApi.md#rsyncmodIdIdDelete) | **DELETE** /rsyncmod/id/{id} | 
[**rsyncmodIdIdGet()**](RsyncmodApi.md#rsyncmodIdIdGet) | **GET** /rsyncmod/id/{id} | 
[**rsyncmodIdIdPut()**](RsyncmodApi.md#rsyncmodIdIdPut) | **PUT** /rsyncmod/id/{id} | 
[**rsyncmodPost()**](RsyncmodApi.md#rsyncmodPost) | **POST** /rsyncmod | 


## `rsyncmodGet()`

```php
rsyncmodGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\RsyncmodApi(
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
    $apiInstance->rsyncmodGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling RsyncmodApi->rsyncmodGet: ', $e->getMessage(), PHP_EOL;
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

## `rsyncmodIdIdDelete()`

```php
rsyncmodIdIdDelete($id)
```



Delete Rsyncmod module of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsyncmodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsyncmodIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RsyncmodApi->rsyncmodIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `rsyncmodIdIdGet()`

```php
rsyncmodIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\RsyncmodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsyncmodIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling RsyncmodApi->rsyncmodIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `rsyncmodIdIdPut()`

```php
rsyncmodIdIdPut($id)
```



Update Rsyncmod module of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsyncmodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsyncmodIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling RsyncmodApi->rsyncmodIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `rsyncmodPost()`

```php
rsyncmodPost($rsyncmod_create0)
```



Create a Rsyncmod module.  `path` represents the path to a dataset. Path length is limited to 1023 characters maximum as per the limit enforced by FreeBSD. It is possible that we reach this max length recursively while transferring data. In that case, the user must ensure the maximum path will not be too long or modify the recursed path to shorter than the limit.  `maxconn` is an integer value representing the maximum number of simultaneous connections. Zero represents unlimited.  `hostsallow` is a list of patterns to match hostname/ip address of a connecting client. If list is empty, all hosts are allowed.  `hostsdeny` is a list of patterns to match hostname/ip address of a connecting client. If the pattern is matched, access is denied to the client. If no client should be denied, this should be left empty.  `auxiliary` attribute can be used to pass on any additional parameters from rsyncd.conf(5).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsyncmodApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rsyncmod_create0 = new \RMoore\Truenas\Model\RsyncmodCreate0(); // \RMoore\Truenas\Model\RsyncmodCreate0

try {
    $apiInstance->rsyncmodPost($rsyncmod_create0);
} catch (Exception $e) {
    echo 'Exception when calling RsyncmodApi->rsyncmodPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rsyncmod_create0** | [**\RMoore\Truenas\Model\RsyncmodCreate0**](../Model/RsyncmodCreate0.md)|  | [optional]

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
