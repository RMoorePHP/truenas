# RMoore\Truenas\RsynctaskApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**rsynctaskGet()**](RsynctaskApi.md#rsynctaskGet) | **GET** /rsynctask | 
[**rsynctaskIdIdDelete()**](RsynctaskApi.md#rsynctaskIdIdDelete) | **DELETE** /rsynctask/id/{id} | 
[**rsynctaskIdIdGet()**](RsynctaskApi.md#rsynctaskIdIdGet) | **GET** /rsynctask/id/{id} | 
[**rsynctaskIdIdPut()**](RsynctaskApi.md#rsynctaskIdIdPut) | **PUT** /rsynctask/id/{id} | 
[**rsynctaskIdIdRunPost()**](RsynctaskApi.md#rsynctaskIdIdRunPost) | **POST** /rsynctask/id/{id}/run | 
[**rsynctaskPost()**](RsynctaskApi.md#rsynctaskPost) | **POST** /rsynctask | 


## `rsynctaskGet()`

```php
rsynctaskGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\RsynctaskApi(
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
    $apiInstance->rsynctaskGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling RsynctaskApi->rsynctaskGet: ', $e->getMessage(), PHP_EOL;
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

## `rsynctaskIdIdDelete()`

```php
rsynctaskIdIdDelete($id)
```



Delete Rsync Task of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsynctaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsynctaskIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling RsynctaskApi->rsynctaskIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `rsynctaskIdIdGet()`

```php
rsynctaskIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\RsynctaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsynctaskIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling RsynctaskApi->rsynctaskIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `rsynctaskIdIdPut()`

```php
rsynctaskIdIdPut($id)
```



Update Rsync Task of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsynctaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsynctaskIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling RsynctaskApi->rsynctaskIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `rsynctaskIdIdRunPost()`

```php
rsynctaskIdIdRunPost($id)
```



Job to run rsync task of `id`.  Output is saved to job log excerpt (not syslog).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsynctaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->rsynctaskIdIdRunPost($id);
} catch (Exception $e) {
    echo 'Exception when calling RsynctaskApi->rsynctaskIdIdRunPost: ', $e->getMessage(), PHP_EOL;
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

## `rsynctaskPost()`

```php
rsynctaskPost($rsynctask_create0)
```



Create a Rsync Task.  See the comment in Rsyncmod about `path` length limits.  `remotehost` is ip address or hostname of the remote system. If username differs on the remote host, \"username@remote_host\" format should be used.  `mode` represents different operating mechanisms for Rsync i.e Rsync Module mode / Rsync SSH mode.  `remotemodule` is the name of remote module, this attribute should be specified when `mode` is set to MODULE.  `remotepath` specifies the path on the remote system.  `validate_rpath` is a boolean which when sets validates the existence of the remote path.  `direction` specifies if data should be PULLED or PUSHED from the remote system.  `compress` when set reduces the size of the data which is to be transmitted.  `archive` when set makes rsync run recursively, preserving symlinks, permissions, modification times, group, and special files.  `delete` when set deletes files in the destination directory which do not exist in the source directory.  `preserveperm` when set preserves original file permissions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\RsynctaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$rsynctask_create0 = new \RMoore\Truenas\Model\RsynctaskCreate0(); // \RMoore\Truenas\Model\RsynctaskCreate0

try {
    $apiInstance->rsynctaskPost($rsynctask_create0);
} catch (Exception $e) {
    echo 'Exception when calling RsynctaskApi->rsynctaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **rsynctask_create0** | [**\RMoore\Truenas\Model\RsynctaskCreate0**](../Model/RsynctaskCreate0.md)|  | [optional]

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
