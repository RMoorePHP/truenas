# RMoore\Truenas\PoolSnapshottaskApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolSnapshottaskForeseenCountPost()**](PoolSnapshottaskApi.md#poolSnapshottaskForeseenCountPost) | **POST** /pool/snapshottask/foreseen_count | 
[**poolSnapshottaskGet()**](PoolSnapshottaskApi.md#poolSnapshottaskGet) | **GET** /pool/snapshottask | 
[**poolSnapshottaskIdIdDelete()**](PoolSnapshottaskApi.md#poolSnapshottaskIdIdDelete) | **DELETE** /pool/snapshottask/id/{id} | 
[**poolSnapshottaskIdIdDeleteWillChangeRetentionForPost()**](PoolSnapshottaskApi.md#poolSnapshottaskIdIdDeleteWillChangeRetentionForPost) | **POST** /pool/snapshottask/id/{id}/delete_will_change_retention_for | 
[**poolSnapshottaskIdIdGet()**](PoolSnapshottaskApi.md#poolSnapshottaskIdIdGet) | **GET** /pool/snapshottask/id/{id} | 
[**poolSnapshottaskIdIdPut()**](PoolSnapshottaskApi.md#poolSnapshottaskIdIdPut) | **PUT** /pool/snapshottask/id/{id} | 
[**poolSnapshottaskIdIdRunPost()**](PoolSnapshottaskApi.md#poolSnapshottaskIdIdRunPost) | **POST** /pool/snapshottask/id/{id}/run | 
[**poolSnapshottaskIdIdUpdateWillChangeRetentionForPost()**](PoolSnapshottaskApi.md#poolSnapshottaskIdIdUpdateWillChangeRetentionForPost) | **POST** /pool/snapshottask/id/{id}/update_will_change_retention_for | 
[**poolSnapshottaskMaxCountGet()**](PoolSnapshottaskApi.md#poolSnapshottaskMaxCountGet) | **GET** /pool/snapshottask/max_count | 
[**poolSnapshottaskMaxTotalCountGet()**](PoolSnapshottaskApi.md#poolSnapshottaskMaxTotalCountGet) | **GET** /pool/snapshottask/max_total_count | 
[**poolSnapshottaskPost()**](PoolSnapshottaskApi.md#poolSnapshottaskPost) | **POST** /pool/snapshottask | 


## `poolSnapshottaskForeseenCountPost()`

```php
poolSnapshottaskForeseenCountPost($pool_snapshottask_foreseen_count0)
```



Returns a number of snapshots (per-dataset) being retained if a periodic snapshot task with specific parameters is created.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_snapshottask_foreseen_count0 = new \RMoore\Truenas\Model\PoolSnapshottaskForeseenCount0(); // \RMoore\Truenas\Model\PoolSnapshottaskForeseenCount0

try {
    $apiInstance->poolSnapshottaskForeseenCountPost($pool_snapshottask_foreseen_count0);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskForeseenCountPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_snapshottask_foreseen_count0** | [**\RMoore\Truenas\Model\PoolSnapshottaskForeseenCount0**](../Model/PoolSnapshottaskForeseenCount0.md)|  | [optional]

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

## `poolSnapshottaskGet()`

```php
poolSnapshottaskGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
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
    $apiInstance->poolSnapshottaskGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskGet: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskIdIdDelete()`

```php
poolSnapshottaskIdIdDelete($id)
```



Delete a Periodic Snapshot Task with specific `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolSnapshottaskIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskIdIdDeleteWillChangeRetentionForPost()`

```php
poolSnapshottaskIdIdDeleteWillChangeRetentionForPost($id)
```



Returns a list of snapshots which will change the retention if periodic snapshot task `id` is deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolSnapshottaskIdIdDeleteWillChangeRetentionForPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskIdIdDeleteWillChangeRetentionForPost: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskIdIdGet()`

```php
poolSnapshottaskIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolSnapshottaskIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskIdIdPut()`

```php
poolSnapshottaskIdIdPut($id)
```



Update a Periodic Snapshot Task with specific `id`  See the documentation for `create` method for information on payload contents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolSnapshottaskIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskIdIdRunPost()`

```php
poolSnapshottaskIdIdRunPost($id)
```



Execute a Periodic Snapshot Task of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolSnapshottaskIdIdRunPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskIdIdRunPost: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskIdIdUpdateWillChangeRetentionForPost()`

```php
poolSnapshottaskIdIdUpdateWillChangeRetentionForPost($id)
```



Returns a list of snapshots which will change the retention if periodic snapshot task `id` is updated with `data`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolSnapshottaskIdIdUpdateWillChangeRetentionForPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskIdIdUpdateWillChangeRetentionForPost: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskMaxCountGet()`

```php
poolSnapshottaskMaxCountGet()
```



Returns a maximum amount of snapshots (per-dataset) the system can sustain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolSnapshottaskMaxCountGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskMaxCountGet: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskMaxTotalCountGet()`

```php
poolSnapshottaskMaxTotalCountGet()
```



Returns a maximum amount of snapshots (total) the system can sustain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolSnapshottaskMaxTotalCountGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskMaxTotalCountGet: ', $e->getMessage(), PHP_EOL;
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

## `poolSnapshottaskPost()`

```php
poolSnapshottaskPost($pool_snapshottask_create0)
```



Create a Periodic Snapshot Task  Create a Periodic Snapshot Task that will take snapshots of specified `dataset` at specified `schedule`. Recursive snapshots can be created if `recursive` flag is enabled. You can `exclude` specific child datasets or zvols from the snapshot. Snapshots will be automatically destroyed after a certain amount of time, specified by `lifetime_value` and `lifetime_unit`. If multiple periodic tasks create snapshots at the same time (for example hourly and daily at 00:00) the snapshot will be kept until the last of these tasks reaches its expiry time. Snapshots will be named according to `naming_schema` which is a `strftime`-like template for snapshot name and must contain `%Y`, `%m`, `%d`, `%H` and `%M`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolSnapshottaskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_snapshottask_create0 = new \RMoore\Truenas\Model\PoolSnapshottaskCreate0(); // \RMoore\Truenas\Model\PoolSnapshottaskCreate0

try {
    $apiInstance->poolSnapshottaskPost($pool_snapshottask_create0);
} catch (Exception $e) {
    echo 'Exception when calling PoolSnapshottaskApi->poolSnapshottaskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_snapshottask_create0** | [**\RMoore\Truenas\Model\PoolSnapshottaskCreate0**](../Model/PoolSnapshottaskCreate0.md)|  | [optional]

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
