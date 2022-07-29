# RMoore\Truenas\PoolDatasetApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**poolDatasetChangeKeyPost()**](PoolDatasetApi.md#poolDatasetChangeKeyPost) | **POST** /pool/dataset/change_key | 
[**poolDatasetChecksumChoicesGet()**](PoolDatasetApi.md#poolDatasetChecksumChoicesGet) | **GET** /pool/dataset/checksum_choices | 
[**poolDatasetCompressionChoicesGet()**](PoolDatasetApi.md#poolDatasetCompressionChoicesGet) | **GET** /pool/dataset/compression_choices | 
[**poolDatasetDestroySnapshotsPost()**](PoolDatasetApi.md#poolDatasetDestroySnapshotsPost) | **POST** /pool/dataset/destroy_snapshots | 
[**poolDatasetEncryptionAlgorithmChoicesGet()**](PoolDatasetApi.md#poolDatasetEncryptionAlgorithmChoicesGet) | **GET** /pool/dataset/encryption_algorithm_choices | 
[**poolDatasetEncryptionSummaryPost()**](PoolDatasetApi.md#poolDatasetEncryptionSummaryPost) | **POST** /pool/dataset/encryption_summary | 
[**poolDatasetExportKeyPost()**](PoolDatasetApi.md#poolDatasetExportKeyPost) | **POST** /pool/dataset/export_key | 
[**poolDatasetExportKeysPost()**](PoolDatasetApi.md#poolDatasetExportKeysPost) | **POST** /pool/dataset/export_keys | 
[**poolDatasetGet()**](PoolDatasetApi.md#poolDatasetGet) | **GET** /pool/dataset | 
[**poolDatasetIdIdAttachmentsPost()**](PoolDatasetApi.md#poolDatasetIdIdAttachmentsPost) | **POST** /pool/dataset/id/{id}/attachments | 
[**poolDatasetIdIdDelete()**](PoolDatasetApi.md#poolDatasetIdIdDelete) | **DELETE** /pool/dataset/id/{id} | 
[**poolDatasetIdIdGet()**](PoolDatasetApi.md#poolDatasetIdIdGet) | **GET** /pool/dataset/id/{id} | 
[**poolDatasetIdIdGetQuotaPost()**](PoolDatasetApi.md#poolDatasetIdIdGetQuotaPost) | **POST** /pool/dataset/id/{id}/get_quota | 
[**poolDatasetIdIdPermissionPost()**](PoolDatasetApi.md#poolDatasetIdIdPermissionPost) | **POST** /pool/dataset/id/{id}/permission | 
[**poolDatasetIdIdProcessesPost()**](PoolDatasetApi.md#poolDatasetIdIdProcessesPost) | **POST** /pool/dataset/id/{id}/processes | 
[**poolDatasetIdIdPromotePost()**](PoolDatasetApi.md#poolDatasetIdIdPromotePost) | **POST** /pool/dataset/id/{id}/promote | 
[**poolDatasetIdIdPut()**](PoolDatasetApi.md#poolDatasetIdIdPut) | **PUT** /pool/dataset/id/{id} | 
[**poolDatasetIdIdSetQuotaPost()**](PoolDatasetApi.md#poolDatasetIdIdSetQuotaPost) | **POST** /pool/dataset/id/{id}/set_quota | 
[**poolDatasetInheritParentEncryptionPropertiesPost()**](PoolDatasetApi.md#poolDatasetInheritParentEncryptionPropertiesPost) | **POST** /pool/dataset/inherit_parent_encryption_properties | 
[**poolDatasetLockPost()**](PoolDatasetApi.md#poolDatasetLockPost) | **POST** /pool/dataset/lock | 
[**poolDatasetPost()**](PoolDatasetApi.md#poolDatasetPost) | **POST** /pool/dataset | 
[**poolDatasetRecommendedZvolBlocksizePost()**](PoolDatasetApi.md#poolDatasetRecommendedZvolBlocksizePost) | **POST** /pool/dataset/recommended_zvol_blocksize | 
[**poolDatasetRecordsizeChoicesGet()**](PoolDatasetApi.md#poolDatasetRecordsizeChoicesGet) | **GET** /pool/dataset/recordsize_choices | 
[**poolDatasetUnlockPost()**](PoolDatasetApi.md#poolDatasetUnlockPost) | **POST** /pool/dataset/unlock | 
[**poolDatasetUnlockServicesRestartChoicesPost()**](PoolDatasetApi.md#poolDatasetUnlockServicesRestartChoicesPost) | **POST** /pool/dataset/unlock_services_restart_choices | 


## `poolDatasetChangeKeyPost()`

```php
poolDatasetChangeKeyPost($pool_dataset_change_key)
```



Change encryption properties for `id` encrypted dataset.  Changing dataset encryption to use passphrase instead of a key is not allowed if:  1) It has encrypted roots as children which are encrypted with a key 2) If it is a root dataset where the system dataset is located  A file might be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_change_key = new \RMoore\Truenas\Model\PoolDatasetChangeKey(); // \RMoore\Truenas\Model\PoolDatasetChangeKey

try {
    $apiInstance->poolDatasetChangeKeyPost($pool_dataset_change_key);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetChangeKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_change_key** | [**\RMoore\Truenas\Model\PoolDatasetChangeKey**](../Model/PoolDatasetChangeKey.md)|  | [optional]

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

## `poolDatasetChecksumChoicesGet()`

```php
poolDatasetChecksumChoicesGet()
```



Retrieve checksums supported for ZFS dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolDatasetChecksumChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetChecksumChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetCompressionChoicesGet()`

```php
poolDatasetCompressionChoicesGet()
```



Retrieve compression algorithm supported by ZFS.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolDatasetCompressionChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetCompressionChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetDestroySnapshotsPost()`

```php
poolDatasetDestroySnapshotsPost($pool_dataset_destroy_snapshots)
```



Destroy specified snapshots of a given dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_destroy_snapshots = new \RMoore\Truenas\Model\PoolDatasetDestroySnapshots(); // \RMoore\Truenas\Model\PoolDatasetDestroySnapshots

try {
    $apiInstance->poolDatasetDestroySnapshotsPost($pool_dataset_destroy_snapshots);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetDestroySnapshotsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_destroy_snapshots** | [**\RMoore\Truenas\Model\PoolDatasetDestroySnapshots**](../Model/PoolDatasetDestroySnapshots.md)|  | [optional]

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

## `poolDatasetEncryptionAlgorithmChoicesGet()`

```php
poolDatasetEncryptionAlgorithmChoicesGet()
```



Retrieve encryption algorithms supported for ZFS dataset encryption.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolDatasetEncryptionAlgorithmChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetEncryptionAlgorithmChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetEncryptionSummaryPost()`

```php
poolDatasetEncryptionSummaryPost($pool_dataset_encryption_summary)
```



Retrieve summary of all encrypted roots under `id`.  Keys/passphrase can be supplied to check if the keys are valid.  It should be noted that there are 2 keys which show if a recursive unlock operation is done for `id`, which dataset will be unlocked and if not why it won't be unlocked. The keys namely are \"unlock_successful\" and \"unlock_error\". The former is a boolean value showing if unlock would succeed/fail. The latter is description why it failed if it failed.  In some cases it's possible that the provided key/passphrase is valid but the path where the dataset is supposed to be mounted after being unlocked already exists and is not empty. In this case, unlock operation would fail and `unlock_error` will reflect this error appropriately. This can be overridden by setting `encryption_root_summary_options.datasets.X.force` boolean flag or by setting `encryption_root_summary_options.force` flag. In practice, when the dataset is going to be unlocked and these flags have been provided to `pool.dataset.unlock`, system will rename the directory/file path where the dataset should be mounted resulting in successful unlock of the dataset.  If a dataset is already unlocked, it will show up as true for \"unlock_successful\" regardless of what key user provided as the unlock keys in the output are to reflect what a real unlock operation would behave. If user is interested in seeing if a provided key is valid or not, then the key to look out for in the output is \"valid_key\" which based on what system has in database or if a user provided one, validates the key and sets a boolean value for the dataset.  Example output: [     {         \"name\": \"vol\",         \"key_format\": \"PASSPHRASE\",         \"key_present_in_database\": false,         \"valid_key\": true,         \"locked\": true,         \"unlock_error\": null,         \"unlock_successful\": true     },     {         \"name\": \"vol/c1/d1\",         \"key_format\": \"PASSPHRASE\",         \"key_present_in_database\": false,         \"valid_key\": false,         \"locked\": true,         \"unlock_error\": \"Provided key is invalid\",         \"unlock_successful\": false     },     {         \"name\": \"vol/c\",         \"key_format\": \"PASSPHRASE\",         \"key_present_in_database\": false,         \"valid_key\": false,         \"locked\": true,         \"unlock_error\": \"Key not provided\",         \"unlock_successful\": false     },     {         \"name\": \"vol/c/d2\",         \"key_format\": \"PASSPHRASE\",         \"key_present_in_database\": false,         \"valid_key\": false,         \"locked\": true,         \"unlock_error\": \"Child cannot be unlocked when parent \"vol/c\" is locked and provided key is invalid\",         \"unlock_successful\": false     } ]  A file might be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_encryption_summary = new \RMoore\Truenas\Model\PoolDatasetEncryptionSummary(); // \RMoore\Truenas\Model\PoolDatasetEncryptionSummary

try {
    $apiInstance->poolDatasetEncryptionSummaryPost($pool_dataset_encryption_summary);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetEncryptionSummaryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_encryption_summary** | [**\RMoore\Truenas\Model\PoolDatasetEncryptionSummary**](../Model/PoolDatasetEncryptionSummary.md)|  | [optional]

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

## `poolDatasetExportKeyPost()`

```php
poolDatasetExportKeyPost($pool_dataset_export_key)
```



Export own encryption key for dataset `id`. If `download` is `true`, key will be downloaded in a json file where the same file can be used to unlock the dataset, otherwise it will be returned as string.  Please refer to websocket documentation for downloading the file.  A file might be downloaded from this endpoint. Please specify `?download=0` to fetch a method call result instead.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_export_key = new \RMoore\Truenas\Model\PoolDatasetExportKey(); // \RMoore\Truenas\Model\PoolDatasetExportKey

try {
    $apiInstance->poolDatasetExportKeyPost($pool_dataset_export_key);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetExportKeyPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_export_key** | [**\RMoore\Truenas\Model\PoolDatasetExportKey**](../Model/PoolDatasetExportKey.md)|  | [optional]

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

## `poolDatasetExportKeysPost()`

```php
poolDatasetExportKeysPost($body)
```



Export keys for `id` and its children which are stored in the system. The exported file is a JSON file which has a dictionary containing dataset names as keys and their keys as the value.  Please refer to websocket documentation for downloading the file.  A file will be downloaded from this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->poolDatasetExportKeysPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetExportKeysPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetGet()`

```php
poolDatasetGet($limit, $offset, $count, $sort)
```



Query Pool Datasets with `query-filters` and `query-options`.  We provide two ways to retrieve datasets. The first is a flat structure (default), where all datasets in the system are returned as separate objects which contain all data there is for their children. This retrieval type is slightly slower because of duplicates in each object. The second type is hierarchical, where only top level datasets are returned in the list. They contain all the children in the `children` key. This retrieval type is slightly faster. These options are controlled by the `query-options.extra.flat` attribute (default true).  In some cases it might be desirable to only retrieve details of a dataset itself and not it's children, in this case `query-options.extra.retrieve_children` should be explicitly specified and set to `false` which will result in children not being retrieved.  In case only some properties are desired to be retrieved for datasets, consumer should specify `query-options.extra.properties` which when `null` ( which is the default ) will retrieve all properties and otherwise a list can be specified like `[\"type\", \"used\", \"available\"]` to retrieve selective properties. If no properties are desired, in that case an empty list should be sent.  `query-options.extra.snapshots` can be set to retrieve snapshot(s) of dataset in question.  `query-options.extra.snapshots_recursive` can be set to retrieve snapshot(s) recursively of dataset in question. If `query-options.extra.snapshots_recursive` and `query-options.extra.snapshots` are set, snapshot(s) will be retrieved recursively.  `query-options.extra.snapshots_properties` can be specified to list out properties which should be retrieved for snapshot(s) related to each dataset. By default only name of the snapshot would be retrieved, however if `null` is specified all properties of the snapshot would be retrieved in this case.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
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
    $apiInstance->poolDatasetGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdAttachmentsPost()`

```php
poolDatasetIdIdAttachmentsPost($id)
```



Return a list of services dependent of this dataset.  Responsible for telling the user whether there is a related share, asking for confirmation.  Example return value: [   {     \"type\": \"NFS Share\",     \"service\": \"nfs\",     \"attachments\": [\"/mnt/tank/work\"]   } ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdAttachmentsPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdAttachmentsPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdDelete()`

```php
poolDatasetIdIdDelete($id)
```



Delete dataset/zvol `id`.  `recursive` will also delete/destroy all children datasets. `force` will force delete busy datasets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdGet()`

```php
poolDatasetIdIdGet($id)
```



Query Pool Datasets with `query-filters` and `query-options`.  We provide two ways to retrieve datasets. The first is a flat structure (default), where all datasets in the system are returned as separate objects which contain all data there is for their children. This retrieval type is slightly slower because of duplicates in each object. The second type is hierarchical, where only top level datasets are returned in the list. They contain all the children in the `children` key. This retrieval type is slightly faster. These options are controlled by the `query-options.extra.flat` attribute (default true).  In some cases it might be desirable to only retrieve details of a dataset itself and not it's children, in this case `query-options.extra.retrieve_children` should be explicitly specified and set to `false` which will result in children not being retrieved.  In case only some properties are desired to be retrieved for datasets, consumer should specify `query-options.extra.properties` which when `null` ( which is the default ) will retrieve all properties and otherwise a list can be specified like `[\"type\", \"used\", \"available\"]` to retrieve selective properties. If no properties are desired, in that case an empty list should be sent.  `query-options.extra.snapshots` can be set to retrieve snapshot(s) of dataset in question.  `query-options.extra.snapshots_recursive` can be set to retrieve snapshot(s) recursively of dataset in question. If `query-options.extra.snapshots_recursive` and `query-options.extra.snapshots` are set, snapshot(s) will be retrieved recursively.  `query-options.extra.snapshots_properties` can be specified to list out properties which should be retrieved for snapshot(s) related to each dataset. By default only name of the snapshot would be retrieved, however if `null` is specified all properties of the snapshot would be retrieved in this case.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdGetQuotaPost()`

```php
poolDatasetIdIdGetQuotaPost($id)
```



Return a list of the specified `quota_type` of  quotas on the ZFS dataset `ds`. Support `query-filters` and `query-options`. used_bytes and used_percentage may not instantly update as space is used.  When quota_type is not DATASET, each quota entry has these fields:  `id` - the uid or gid to which the quota applies.  `name` - the user or group name to which the quota applies. Value is null if the id in the quota cannot be resolved to a user or group. This indicates that the user or group does not exist on the server.  `quota` - the quota size in bytes.  `used_bytes` - the amount of bytes the user has written to the dataset. A value of zero means unlimited.  `used_percentage` - the percentage of the user or group quota consumed.  `obj_quota` - the number of objects that may be owned by `id`. A value of zero means unlimited.  'obj_used` - the nubmer of objects currently owned by `id`.  `obj_used_percent` - the percentage of the `obj_quota` currently used.  Note: SMB client requests to set a quota granting no space will result in an on-disk quota of 1 KiB.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdGetQuotaPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdGetQuotaPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdPermissionPost()`

```php
poolDatasetIdIdPermissionPost($id)
```



Set permissions for a dataset `id`. Permissions may be specified as either a posix `mode` or an `acl`. This method is a wrapper around `filesystem.setperm`, `filesystem.setacl`, and `filesystem.chown`  `filesystem.setperm` is called if `mode` is specified. `filesystem.setacl` is called if `acl` is specified or if the option `set_default_acl` is selected. `filesystem.chown` is called if neither `mode` nor `acl` is specified.  The following `options` are supported:  `set_default_acl` - apply a default ACL appropriate for specified dataset. Default ACL is `NFS4_RESTRICTED` or `POSIX_RESTRICTED` ACL template builtin with additional entries builtin_users group and builtin_administrators group. See documentation for `filesystem.acltemplate` for more details.  `stripacl` - this option must be set in order to apply a POSIX mode to a dataset that has a non-trivial ACL. The effect will be to remove existing ACL and replace with specified mode.  `recursive` - apply permissions recursively to dataset (all files and directories will be impacted.  `traverse` - permit recursive job to traverse filesystem boundaries (child datasets).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdPermissionPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdPermissionPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdProcessesPost()`

```php
poolDatasetIdIdProcessesPost($id)
```



Return a list of processes using this dataset.  Example return value:  [   {     \"pid\": 2520,     \"name\": \"smbd\",     \"service\": \"cifs\"   },   {     \"pid\": 97778,     \"name\": \"minio\",     \"cmdline\": \"/usr/local/bin/minio -C /usr/local/etc/minio server --address=0.0.0.0:9000 --quiet /mnt/tank/wk\"   } ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdProcessesPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdProcessesPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdPromotePost()`

```php
poolDatasetIdIdPromotePost($id)
```



Promote the cloned dataset `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdPromotePost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdPromotePost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdPut()`

```php
poolDatasetIdIdPut($id)
```



Updates a dataset/zvol `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetIdIdSetQuotaPost()`

```php
poolDatasetIdIdSetQuotaPost($id)
```



There are three over-arching types of quotas for ZFS datasets. 1) dataset quotas and refquotas. If a DATASET quota type is specified in this API call, then the API acts as a wrapper for `pool.dataset.update`.  2) User and group quotas. These limit the amount of disk space consumed by files that are owned by the specified users or groups. If the respective \"object quota\" type is specfied, then the quota limits the number of objects that may be owned by the specified user or group.  3) Project quotas. These limit the amount of disk space consumed by files that are owned by the specified project. Project quotas are not yet implemended.  This API allows users to set multiple quotas simultaneously by submitting a list of quotas. The list may contain all supported quota types.  `ds` the name of the target ZFS dataset.  `quotas` specifies a list of `quota_entry` entries to apply to dataset.  `quota_entry` entries have these required parameters:  `quota_type`: specifies the type of quota to apply to the dataset. Possible values are USER, USEROBJ, GROUP, GROUPOBJ, and DATASET. USEROBJ and GROUPOBJ quotas limit the number of objects consumed by the specified user or group.  `id`: the uid, gid, or name to which the quota applies. If quota_type is 'DATASET', then `id` must be either `QUOTA` or `REFQUOTA`.  `quota_value`: the quota size in bytes. Setting a value of `0` removes the user or group quota.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->poolDatasetIdIdSetQuotaPost($id);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetIdIdSetQuotaPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetInheritParentEncryptionPropertiesPost()`

```php
poolDatasetInheritParentEncryptionPropertiesPost($body)
```



Allows inheriting parent's encryption root discarding its current encryption settings. This can only be done where `id` has an encrypted parent and `id` itself is an encryption root.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->poolDatasetInheritParentEncryptionPropertiesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetInheritParentEncryptionPropertiesPost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetLockPost()`

```php
poolDatasetLockPost($pool_dataset_lock)
```



Locks `id` dataset. It will unmount the dataset and its children before locking.  After the dataset has been unmounted, system will set immutable flag on the dataset's mountpoint where the dataset was mounted before it was locked making sure that the path cannot be modified. Once the dataset is unlocked, it will not be affected by this change and consumers can continue consuming it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_lock = new \RMoore\Truenas\Model\PoolDatasetLock(); // \RMoore\Truenas\Model\PoolDatasetLock

try {
    $apiInstance->poolDatasetLockPost($pool_dataset_lock);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetLockPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_lock** | [**\RMoore\Truenas\Model\PoolDatasetLock**](../Model/PoolDatasetLock.md)|  | [optional]

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

## `poolDatasetPost()`

```php
poolDatasetPost($pool_dataset_create0)
```



Creates a dataset/zvol.  `volsize` is required for type=VOLUME and is supposed to be a multiple of the block size. `sparse` and `volblocksize` are only used for type=VOLUME.  `encryption` when enabled will create an ZFS encrypted root dataset for `name` pool. There are 2 cases where ZFS encryption is not allowed for a dataset: 1) Pool in question is GELI encrypted. 2) If the parent dataset is encrypted with a passphrase and `name` is being created    with a key for encrypting the dataset.  `encryption_options` specifies configuration for encryption of dataset for `name` pool. `encryption_options.passphrase` must be specified if encryption for dataset is desired with a passphrase as a key. Otherwise a hex encoded key can be specified by providing `encryption_options.key`. `encryption_options.generate_key` when enabled automatically generates the key to be used for dataset encryption.  It should be noted that keys are stored by the system for automatic locking/unlocking on import/export of encrypted datasets. If that is not desired, dataset should be created with a passphrase as a key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_create0 = new \RMoore\Truenas\Model\PoolDatasetCreate0(); // \RMoore\Truenas\Model\PoolDatasetCreate0

try {
    $apiInstance->poolDatasetPost($pool_dataset_create0);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_create0** | [**\RMoore\Truenas\Model\PoolDatasetCreate0**](../Model/PoolDatasetCreate0.md)|  | [optional]

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

## `poolDatasetRecommendedZvolBlocksizePost()`

```php
poolDatasetRecommendedZvolBlocksizePost($body)
```



Helper method to get recommended size for a new zvol (dataset of type VOLUME).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->poolDatasetRecommendedZvolBlocksizePost($body);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetRecommendedZvolBlocksizePost: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetRecordsizeChoicesGet()`

```php
poolDatasetRecordsizeChoicesGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->poolDatasetRecordsizeChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetRecordsizeChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `poolDatasetUnlockPost()`

```php
poolDatasetUnlockPost($pool_dataset_unlock)
```



Unlock `id` dataset.  If `id` dataset is not encrypted an exception will be raised. There is one exception: when `id` is a root dataset and `unlock_options.recursive` is specified, encryption validation will not be performed for `id`. This allow unlocking encrypted children the `id` pool.  For datasets which are encrypted with a passphrase, include the passphrase with `unlock_options.datasets`.  Uploading a json file which contains encrypted dataset keys can be specified with `unlock_options.key_file`. The format is similar to that used for exporting encrypted dataset keys.  `toggle_attachments` controls whether attachments  should be put in action after unlocking dataset(s). Toggling attachments can theoretically lead to service interruption when daemons configurations are reloaded (this should not happen,  and if this happens it should be considered a bug). As TrueNAS does not have a state for resources that should be unlocked but are still locked, disabling this option will put the system into an inconsistent state so it should really never be disabled.  In some cases it's possible that the provided key/passphrase is valid but the path where the dataset is supposed to be mounted after being unlocked already exists and is not empty. In this case, unlock operation would fail. This can be overridden by setting `unlock_options.datasets.X.force` boolean flag or by setting `unlock_options.force` flag. When any of these flags are set, system will rename the existing directory/file path where the dataset should be mounted resulting in successful unlock of the dataset.  A file might be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pool_dataset_unlock = new \RMoore\Truenas\Model\PoolDatasetUnlock(); // \RMoore\Truenas\Model\PoolDatasetUnlock

try {
    $apiInstance->poolDatasetUnlockPost($pool_dataset_unlock);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetUnlockPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **pool_dataset_unlock** | [**\RMoore\Truenas\Model\PoolDatasetUnlock**](../Model/PoolDatasetUnlock.md)|  | [optional]

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

## `poolDatasetUnlockServicesRestartChoicesPost()`

```php
poolDatasetUnlockServicesRestartChoicesPost($body)
```



Get a mapping of services identifiers and labels that can be restart on dataset unlock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\PoolDatasetApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->poolDatasetUnlockServicesRestartChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling PoolDatasetApi->poolDatasetUnlockServicesRestartChoicesPost: ', $e->getMessage(), PHP_EOL;
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
