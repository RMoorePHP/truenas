# RMoore\Truenas\ZfsSnapshotApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**zfsSnapshotClonePost()**](ZfsSnapshotApi.md#zfsSnapshotClonePost) | **POST** /zfs/snapshot/clone | 
[**zfsSnapshotGet()**](ZfsSnapshotApi.md#zfsSnapshotGet) | **GET** /zfs/snapshot | 
[**zfsSnapshotIdIdDelete()**](ZfsSnapshotApi.md#zfsSnapshotIdIdDelete) | **DELETE** /zfs/snapshot/id/{id} | 
[**zfsSnapshotIdIdGet()**](ZfsSnapshotApi.md#zfsSnapshotIdIdGet) | **GET** /zfs/snapshot/id/{id} | 
[**zfsSnapshotIdIdPut()**](ZfsSnapshotApi.md#zfsSnapshotIdIdPut) | **PUT** /zfs/snapshot/id/{id} | 
[**zfsSnapshotPost()**](ZfsSnapshotApi.md#zfsSnapshotPost) | **POST** /zfs/snapshot | 
[**zfsSnapshotRemovePost()**](ZfsSnapshotApi.md#zfsSnapshotRemovePost) | **POST** /zfs/snapshot/remove | 
[**zfsSnapshotRollbackPost()**](ZfsSnapshotApi.md#zfsSnapshotRollbackPost) | **POST** /zfs/snapshot/rollback | 


## `zfsSnapshotClonePost()`

```php
zfsSnapshotClonePost($zfs_snapshot_clone0)
```



Clone a given snapshot to a new dataset.  Returns:     bool: True if succeed otherwise False.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zfs_snapshot_clone0 = new \RMoore\Truenas\Model\ZfsSnapshotClone0(); // \RMoore\Truenas\Model\ZfsSnapshotClone0

try {
    $apiInstance->zfsSnapshotClonePost($zfs_snapshot_clone0);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotClonePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zfs_snapshot_clone0** | [**\RMoore\Truenas\Model\ZfsSnapshotClone0**](../Model/ZfsSnapshotClone0.md)|  | [optional]

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

## `zfsSnapshotGet()`

```php
zfsSnapshotGet($limit, $offset, $count, $sort)
```



Query all ZFS Snapshots with `query-filters` and `query-options`.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
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
    $apiInstance->zfsSnapshotGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotGet: ', $e->getMessage(), PHP_EOL;
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

## `zfsSnapshotIdIdDelete()`

```php
zfsSnapshotIdIdDelete($id)
```



Delete snapshot of name `id`.  `options.defer` will defer the deletion of snapshot.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->zfsSnapshotIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `zfsSnapshotIdIdGet()`

```php
zfsSnapshotIdIdGet($id)
```



Query all ZFS Snapshots with `query-filters` and `query-options`.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->zfsSnapshotIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `zfsSnapshotIdIdPut()`

```php
zfsSnapshotIdIdPut($id)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->zfsSnapshotIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `zfsSnapshotPost()`

```php
zfsSnapshotPost($zfs_snapshot_create0)
```



Take a snapshot from a given dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zfs_snapshot_create0 = new \RMoore\Truenas\Model\ZfsSnapshotCreate0(); // \RMoore\Truenas\Model\ZfsSnapshotCreate0

try {
    $apiInstance->zfsSnapshotPost($zfs_snapshot_create0);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zfs_snapshot_create0** | [**\RMoore\Truenas\Model\ZfsSnapshotCreate0**](../Model/ZfsSnapshotCreate0.md)|  | [optional]

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

## `zfsSnapshotRemovePost()`

```php
zfsSnapshotRemovePost($zfs_snapshot_remove0)
```



Remove a snapshot from a given dataset.  Returns:     bool: True if succeed otherwise False.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zfs_snapshot_remove0 = new \RMoore\Truenas\Model\ZfsSnapshotRemove0(); // \RMoore\Truenas\Model\ZfsSnapshotRemove0

try {
    $apiInstance->zfsSnapshotRemovePost($zfs_snapshot_remove0);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotRemovePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zfs_snapshot_remove0** | [**\RMoore\Truenas\Model\ZfsSnapshotRemove0**](../Model/ZfsSnapshotRemove0.md)|  | [optional]

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

## `zfsSnapshotRollbackPost()`

```php
zfsSnapshotRollbackPost($zfs_snapshot_rollback)
```



Rollback to a given snapshot `id`.  `options.recursive` will destroy any snapshots and bookmarks more recent than the one specified.  `options.recursive_clones` is just like `recursive` but will also destroy any clones.  `options.force` will force unmount of any clones.  `options.recursive_rollback` will do a complete recursive rollback of each child snapshots for `id`. If any child does not have specified snapshot, this operation will fail.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ZfsSnapshotApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$zfs_snapshot_rollback = new \RMoore\Truenas\Model\ZfsSnapshotRollback(); // \RMoore\Truenas\Model\ZfsSnapshotRollback

try {
    $apiInstance->zfsSnapshotRollbackPost($zfs_snapshot_rollback);
} catch (Exception $e) {
    echo 'Exception when calling ZfsSnapshotApi->zfsSnapshotRollbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **zfs_snapshot_rollback** | [**\RMoore\Truenas\Model\ZfsSnapshotRollback**](../Model/ZfsSnapshotRollback.md)|  | [optional]

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
