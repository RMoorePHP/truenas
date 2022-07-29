# RMoore\Truenas\PoolDatasetUserpropApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolDatasetUserpropGet()**](PoolDatasetUserpropApi.md#poolDatasetUserpropGet) | **GET** /pool/dataset/userprop | 
[**poolDatasetUserpropIdIdDelete()**](PoolDatasetUserpropApi.md#poolDatasetUserpropIdIdDelete) | **DELETE** /pool/dataset/userprop/id/{id} | 
[**poolDatasetUserpropIdIdGet()**](PoolDatasetUserpropApi.md#poolDatasetUserpropIdIdGet) | **GET** /pool/dataset/userprop/id/{id} | 
[**poolDatasetUserpropIdIdPut()**](PoolDatasetUserpropApi.md#poolDatasetUserpropIdIdPut) | **PUT** /pool/dataset/userprop/id/{id} | 
[**poolDatasetUserpropPost()**](PoolDatasetUserpropApi.md#poolDatasetUserpropPost) | **POST** /pool/dataset/userprop | 


## `poolDatasetUserpropGet()`

```php
poolDatasetUserpropGet($limit, $offset, $count, $sort)
```



Query all user properties for ZFS datasets.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetUserpropApi(
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
    $apiInstance->poolDatasetUserpropGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetUserpropApi->poolDatasetUserpropGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetUserpropIdIdDelete()`

```php
poolDatasetUserpropIdIdDelete($id)
```



Delete user property `dataset_user_prop_delete.name` for `id` dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetUserpropApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetUserpropIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetUserpropApi->poolDatasetUserpropIdIdDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `poolDatasetUserpropIdIdGet()`

```php
poolDatasetUserpropIdIdGet($id)
```



Query all user properties for ZFS datasets.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetUserpropApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetUserpropIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetUserpropApi->poolDatasetUserpropIdIdGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `poolDatasetUserpropIdIdPut()`

```php
poolDatasetUserpropIdIdPut($id)
```



Update `dataset_user_prop_update.name` user property for `id` dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetUserpropApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetUserpropIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetUserpropApi->poolDatasetUserpropIdIdPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |

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

## `poolDatasetUserpropPost()`

```php
poolDatasetUserpropPost($pool_dataset_userprop_create0)
```



Create a user property for a given `id` dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetUserpropApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_userprop_create0 = new \RMoore\Truenas\Model\PoolDatasetUserpropCreate0(); // \RMoore\Truenas\Model\PoolDatasetUserpropCreate0

try {
    $apiInstance->poolDatasetUserpropPost($pool_dataset_userprop_create0);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetUserpropApi->poolDatasetUserpropPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_userprop_create0** | [**\RMoore\Truenas\Model\PoolDatasetUserpropCreate0**](../Model/PoolDatasetUserpropCreate0.md)|  | [optional]

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
