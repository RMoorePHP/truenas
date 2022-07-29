# RMoore\Truenas\PoolApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolAttachPost()**](PoolApi.md#poolAttachPost) | **POST** /pool/attach | 
[**poolFilesystemChoicesPost()**](PoolApi.md#poolFilesystemChoicesPost) | **POST** /pool/filesystem_choices | 
[**poolGet()**](PoolApi.md#poolGet) | **GET** /pool | 
[**poolGetInstanceByNamePost()**](PoolApi.md#poolGetInstanceByNamePost) | **POST** /pool/get_instance_by_name | 
[**poolIdIdAttachmentsPost()**](PoolApi.md#poolIdIdAttachmentsPost) | **POST** /pool/id/{id}/attachments | 
[**poolIdIdDetachPost()**](PoolApi.md#poolIdIdDetachPost) | **POST** /pool/id/{id}/detach | 
[**poolIdIdExpandPost()**](PoolApi.md#poolIdIdExpandPost) | **POST** /pool/id/{id}/expand | 
[**poolIdIdExportPost()**](PoolApi.md#poolIdIdExportPost) | **POST** /pool/id/{id}/export | 
[**poolIdIdGet()**](PoolApi.md#poolIdIdGet) | **GET** /pool/id/{id} | 
[**poolIdIdGetDisksPost()**](PoolApi.md#poolIdIdGetDisksPost) | **POST** /pool/id/{id}/get_disks | 
[**poolIdIdIsUpgradedPost()**](PoolApi.md#poolIdIdIsUpgradedPost) | **POST** /pool/id/{id}/is_upgraded | 
[**poolIdIdOfflinePost()**](PoolApi.md#poolIdIdOfflinePost) | **POST** /pool/id/{id}/offline | 
[**poolIdIdOnlinePost()**](PoolApi.md#poolIdIdOnlinePost) | **POST** /pool/id/{id}/online | 
[**poolIdIdProcessesPost()**](PoolApi.md#poolIdIdProcessesPost) | **POST** /pool/id/{id}/processes | 
[**poolIdIdPut()**](PoolApi.md#poolIdIdPut) | **PUT** /pool/id/{id} | 
[**poolIdIdRemovePost()**](PoolApi.md#poolIdIdRemovePost) | **POST** /pool/id/{id}/remove | 
[**poolIdIdReplacePost()**](PoolApi.md#poolIdIdReplacePost) | **POST** /pool/id/{id}/replace | 
[**poolIdIdScrubPost()**](PoolApi.md#poolIdIdScrubPost) | **POST** /pool/id/{id}/scrub | 
[**poolIdIdUpgradePost()**](PoolApi.md#poolIdIdUpgradePost) | **POST** /pool/id/{id}/upgrade | 
[**poolImportDiskAutodetectFsTypePost()**](PoolApi.md#poolImportDiskAutodetectFsTypePost) | **POST** /pool/import_disk_autodetect_fs_type | 
[**poolImportDiskMsdosfsLocalesGet()**](PoolApi.md#poolImportDiskMsdosfsLocalesGet) | **GET** /pool/import_disk_msdosfs_locales | 
[**poolImportDiskPost()**](PoolApi.md#poolImportDiskPost) | **POST** /pool/import_disk | 
[**poolImportFindGet()**](PoolApi.md#poolImportFindGet) | **GET** /pool/import_find | 
[**poolImportPoolPost()**](PoolApi.md#poolImportPoolPost) | **POST** /pool/import_pool | 
[**poolPost()**](PoolApi.md#poolPost) | **POST** /pool | 


## `poolAttachPost()`

```php
poolAttachPost($pool_attach)
```



For TrueNAS Core/Enterprise platform, if the `oid` pool is passphrase GELI encrypted, `passphrase` must be specified for this operation to succeed.  `target_vdev` is the GUID of the vdev where the disk needs to be attached. In case of STRIPED vdev, this is the STRIPED disk GUID which will be converted to mirror. If `target_vdev` is mirror, it will be converted into a n-way mirror.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_attach = new \RMoore\Truenas\Model\PoolAttach(); // \RMoore\Truenas\Model\PoolAttach

try {
    $apiInstance->poolAttachPost($pool_attach);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolAttachPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_attach** | [**\RMoore\Truenas\Model\PoolAttach**](../Model/PoolAttach.md)|  | [optional]

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

## `poolFilesystemChoicesPost()`

```php
poolFilesystemChoicesPost($request_body)
```



Returns all available datasets, except the following:     1. system datasets     2. glusterfs datasets     3. application(s) internal datasets

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_body = array('request_body_example'); // string[]

try {
    $apiInstance->poolFilesystemChoicesPost($request_body);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolFilesystemChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `poolGet()`

```php
poolGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\PoolApi(
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
    $apiInstance->poolGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolGet: ', $e->getMessage(), PHP_EOL;
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

## `poolGetInstanceByNamePost()`

```php
poolGetInstanceByNamePost($body)
```



Returns pool with name `name`. If `name` is not found, Validation error is raised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->poolGetInstanceByNamePost($body);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolGetInstanceByNamePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

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

## `poolIdIdAttachmentsPost()`

```php
poolIdIdAttachmentsPost($id)
```



Return a list of services dependent of this pool.  Responsible for telling the user whether there is a related share, asking for confirmation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdAttachmentsPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdAttachmentsPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdDetachPost()`

```php
poolIdIdDetachPost($id)
```



Detach a disk from pool of id `id`.  `label` is the vdev guid or device name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdDetachPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdDetachPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdExpandPost()`

```php
poolIdIdExpandPost($id)
```



Expand pool to fit all available disk space.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdExpandPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdExpandPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdExportPost()`

```php
poolIdIdExportPost($id)
```



Export pool of `id`.  `cascade` will delete all attachments of the given pool (`pool.attachments`). `restart_services` will restart services that have open files on given pool. `destroy` will also PERMANENTLY destroy the pool/data.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdExportPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdExportPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdGet()`

```php
poolIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdGetDisksPost()`

```php
poolIdIdGetDisksPost($id)
```



Get all disks in use by pools. If `id` is provided only the disks from the given pool `id` will be returned.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdGetDisksPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdGetDisksPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdIsUpgradedPost()`

```php
poolIdIdIsUpgradedPost($id)
```



Returns whether or not the pool of `id` is on the latest version and with all feature flags enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdIsUpgradedPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdIsUpgradedPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdOfflinePost()`

```php
poolIdIdOfflinePost($id)
```



Offline a disk from pool of id `id`.  `label` is the vdev guid or device name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdOfflinePost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdOfflinePost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdOnlinePost()`

```php
poolIdIdOnlinePost($id)
```



Online a disk from pool of id `id`.  `label` is the vdev guid or device name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdOnlinePost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdOnlinePost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdProcessesPost()`

```php
poolIdIdProcessesPost($id)
```



Returns a list of running processes using this pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdProcessesPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdProcessesPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdPut()`

```php
poolIdIdPut($id)
```



Update pool of `id`, adding the new topology.  The `type` of `data` must be the same of existing vdevs.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdRemovePost()`

```php
poolIdIdRemovePost($id)
```



Remove a disk from pool of id `id`.  `label` is the vdev guid or device name.  Error codes:      EZFS_NOSPC(2032): out of space to remove a device     EZFS_NODEVICE(2017): no such device in pool     EZFS_NOREPLICAS(2019): no valid replicas

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdRemovePost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdRemovePost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdReplacePost()`

```php
poolIdIdReplacePost($id)
```



Replace a disk on a pool.  `label` is the ZFS guid or a device name `disk` is the identifier of a disk If `preserve_settings` is true, then settings (power management, S.M.A.R.T., etc.) of a disk being replaced will be applied to a new disk.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdReplacePost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdReplacePost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdScrubPost()`

```php
poolIdIdScrubPost($id)
```



Performs a scrub action to pool of `id`.  `action` can be either of \"START\", \"STOP\" or \"PAUSE\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdScrubPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdScrubPost: ', $e->getMessage(), PHP_EOL;
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

## `poolIdIdUpgradePost()`

```php
poolIdIdUpgradePost($id)
```



Upgrade pool of `id` to latest version with all feature flags.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->poolIdIdUpgradePost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolIdIdUpgradePost: ', $e->getMessage(), PHP_EOL;
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

## `poolImportDiskAutodetectFsTypePost()`

```php
poolImportDiskAutodetectFsTypePost($body)
```



Autodetect filesystem type for `pool.import_disk`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->poolImportDiskAutodetectFsTypePost($body);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolImportDiskAutodetectFsTypePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **string**|  | [optional]

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

## `poolImportDiskMsdosfsLocalesGet()`

```php
poolImportDiskMsdosfsLocalesGet()
```



Get a list of locales for msdosfs type to be used in `pool.import_disk`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolImportDiskMsdosfsLocalesGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolImportDiskMsdosfsLocalesGet: ', $e->getMessage(), PHP_EOL;
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

## `poolImportDiskPost()`

```php
poolImportDiskPost($pool_import_disk)
```



Import a disk, by copying its content to a pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_import_disk = new \RMoore\Truenas\Model\PoolImportDisk(); // \RMoore\Truenas\Model\PoolImportDisk

try {
    $apiInstance->poolImportDiskPost($pool_import_disk);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolImportDiskPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_import_disk** | [**\RMoore\Truenas\Model\PoolImportDisk**](../Model/PoolImportDisk.md)|  | [optional]

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

## `poolImportFindGet()`

```php
poolImportFindGet()
```



Returns a job id which can be used to retrieve a list of pools available for import with the following details as a result of the job: name, guid, status, hostname.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolImportFindGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolImportFindGet: ', $e->getMessage(), PHP_EOL;
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

## `poolImportPoolPost()`

```php
poolImportPoolPost($pool_import_pool0)
```



Import a pool found with `pool.import_find`.  If a `name` is specified the pool will be imported using that new name.  `passphrase` DEPRECATED. GELI not supported on SCALE.  If `enable_attachments` is set to true, attachments that were disabled during pool export will be re-enabled.  Errors:     ENOENT - Pool not found

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_import_pool0 = new \RMoore\Truenas\Model\PoolImportPool0(); // \RMoore\Truenas\Model\PoolImportPool0

try {
    $apiInstance->poolImportPoolPost($pool_import_pool0);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolImportPoolPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_import_pool0** | [**\RMoore\Truenas\Model\PoolImportPool0**](../Model/PoolImportPool0.md)|  | [optional]

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

## `poolPost()`

```php
poolPost($pool_create0)
```



Create a new ZFS Pool.  `topology` is a object which requires at least one `data` entry. All of `data` entries (vdevs) require to be of the same type.  `deduplication` when set to ON or VERIFY makes sure that no block of data is duplicated in the pool. When VERIFY is specified, if two blocks have similar signatures, byte to byte comparison is performed to ensure that the blocks are identical. This should be used in special circumstances as it carries a significant overhead.  `encryption` when enabled will create an ZFS encrypted root dataset for `name` pool.  `encryption_options` specifies configuration for encryption of root dataset for `name` pool. `encryption_options.passphrase` must be specified if encryption for root dataset is desired with a passphrase as a key. Otherwise a hex encoded key can be specified by providing `encryption_options.key`. `encryption_options.generate_key` when enabled automatically generates the key to be used for dataset encryption.  It should be noted that keys are stored by the system for automatic locking/unlocking on import/export of encrypted datasets. If that is not desired, dataset should be created with a passphrase as a key.  Example of `topology`:      {         \"data\": [             {\"type\": \"RAIDZ1\", \"disks\": [\"da1\", \"da2\", \"da3\"]}         ],         \"cache\": [             {\"type\": \"STRIPE\", \"disks\": [\"da4\"]}         ],         \"log\": [             {\"type\": \"STRIPE\", \"disks\": [\"da5\"]}         ],         \"spares\": [\"da6\"]     }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_create0 = new \RMoore\Truenas\Model\PoolCreate0(); // \RMoore\Truenas\Model\PoolCreate0

try {
    $apiInstance->poolPost($pool_create0);
} catch (Exception $e) {
    echo 'Exception when calling PoolApi->poolPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_create0** | [**\RMoore\Truenas\Model\PoolCreate0**](../Model/PoolCreate0.md)|  | [optional]

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
