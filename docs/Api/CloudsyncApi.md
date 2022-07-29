# RMoore\Truenas\CloudsyncApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**cloudsyncGet()**](CloudsyncApi.md#cloudsyncGet) | **GET** /cloudsync | 
[**cloudsyncIdIdAbortPost()**](CloudsyncApi.md#cloudsyncIdIdAbortPost) | **POST** /cloudsync/id/{id}/abort | 
[**cloudsyncIdIdDelete()**](CloudsyncApi.md#cloudsyncIdIdDelete) | **DELETE** /cloudsync/id/{id} | 
[**cloudsyncIdIdGet()**](CloudsyncApi.md#cloudsyncIdIdGet) | **GET** /cloudsync/id/{id} | 
[**cloudsyncIdIdPut()**](CloudsyncApi.md#cloudsyncIdIdPut) | **PUT** /cloudsync/id/{id} | 
[**cloudsyncIdIdRestorePost()**](CloudsyncApi.md#cloudsyncIdIdRestorePost) | **POST** /cloudsync/id/{id}/restore | 
[**cloudsyncIdIdSyncPost()**](CloudsyncApi.md#cloudsyncIdIdSyncPost) | **POST** /cloudsync/id/{id}/sync | 
[**cloudsyncListBucketsPost()**](CloudsyncApi.md#cloudsyncListBucketsPost) | **POST** /cloudsync/list_buckets | 
[**cloudsyncListDirectoryPost()**](CloudsyncApi.md#cloudsyncListDirectoryPost) | **POST** /cloudsync/list_directory | 
[**cloudsyncOnedriveListDrivesPost()**](CloudsyncApi.md#cloudsyncOnedriveListDrivesPost) | **POST** /cloudsync/onedrive_list_drives | 
[**cloudsyncPost()**](CloudsyncApi.md#cloudsyncPost) | **POST** /cloudsync | 
[**cloudsyncProvidersGet()**](CloudsyncApi.md#cloudsyncProvidersGet) | **GET** /cloudsync/providers | 
[**cloudsyncSyncOnetimePost()**](CloudsyncApi.md#cloudsyncSyncOnetimePost) | **POST** /cloudsync/sync_onetime | 


## `cloudsyncGet()`

```php
cloudsyncGet($limit, $offset, $count, $sort)
```



Query all Cloud Sync Tasks with `query-filters` and `query-options`.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
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
    $apiInstance->cloudsyncGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncGet: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncIdIdAbortPost()`

```php
cloudsyncIdIdAbortPost($id)
```



Aborts cloud sync task.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncIdIdAbortPost($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncIdIdAbortPost: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncIdIdDelete()`

```php
cloudsyncIdIdDelete($id)
```



Deletes cloud_sync entry `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncIdIdGet()`

```php
cloudsyncIdIdGet($id)
```



Query all Cloud Sync Tasks with `query-filters` and `query-options`.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncIdIdPut()`

```php
cloudsyncIdIdPut($id)
```



Updates the cloud_sync entry `id` with `data`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncIdIdRestorePost()`

```php
cloudsyncIdIdRestorePost($id)
```



Create the opposite of cloud sync task `id` (PULL if it was PUSH and vice versa).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncIdIdRestorePost($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncIdIdRestorePost: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncIdIdSyncPost()`

```php
cloudsyncIdIdSyncPost($id)
```



Run the cloud_sync job `id`, syncing the local data to remote.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->cloudsyncIdIdSyncPost($id);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncIdIdSyncPost: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncListBucketsPost()`

```php
cloudsyncListBucketsPost($body)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->cloudsyncListBucketsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncListBucketsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**|  | [optional]

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

## `cloudsyncListDirectoryPost()`

```php
cloudsyncListDirectoryPost($cloudsync_list_directory0)
```



List contents of a remote bucket / directory.  If remote supports buckets, path is constructed by two keys \"bucket\"/\"folder\" in `attributes`. If remote does not support buckets, path is constructed using \"folder\" key only in `attributes`. \"folder\" is directory name and \"bucket\" is bucket name for remote.  Path examples:  S3 Service `bucketname/directory/name`  Dropbox Service `directory/name`  `credentials` is a valid id of a Cloud Sync Credential which will be used to connect to the provider.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudsync_list_directory0 = new \RMoore\Truenas\Model\CloudsyncListDirectory0(); // \RMoore\Truenas\Model\CloudsyncListDirectory0

try {
    $apiInstance->cloudsyncListDirectoryPost($cloudsync_list_directory0);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncListDirectoryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudsync_list_directory0** | [**\RMoore\Truenas\Model\CloudsyncListDirectory0**](../Model/CloudsyncListDirectory0.md)|  | [optional]

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

## `cloudsyncOnedriveListDrivesPost()`

```php
cloudsyncOnedriveListDrivesPost($cloudsync_onedrive_list_drives0)
```



Lists all available drives and their types for given Microsoft OneDrive credentials.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudsync_onedrive_list_drives0 = new \RMoore\Truenas\Model\CloudsyncOnedriveListDrives0(); // \RMoore\Truenas\Model\CloudsyncOnedriveListDrives0

try {
    $apiInstance->cloudsyncOnedriveListDrivesPost($cloudsync_onedrive_list_drives0);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncOnedriveListDrivesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudsync_onedrive_list_drives0** | [**\RMoore\Truenas\Model\CloudsyncOnedriveListDrives0**](../Model/CloudsyncOnedriveListDrives0.md)|  | [optional]

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

## `cloudsyncPost()`

```php
cloudsyncPost($cloudsync_create0)
```



Creates a new cloud_sync entry.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudsync_create0 = new \RMoore\Truenas\Model\CloudsyncCreate0(); // \RMoore\Truenas\Model\CloudsyncCreate0

try {
    $apiInstance->cloudsyncPost($cloudsync_create0);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudsync_create0** | [**\RMoore\Truenas\Model\CloudsyncCreate0**](../Model/CloudsyncCreate0.md)|  | [optional]

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

## `cloudsyncProvidersGet()`

```php
cloudsyncProvidersGet()
```



Returns a list of dictionaries of supported providers for Cloud Sync Tasks.  `credentials_schema` is JSON schema for credentials attributes.  `task_schema` is JSON schema for task attributes.  `buckets` is a boolean value which is set to \"true\" if provider supports buckets.  Example of a single provider:  [     {         \"name\": \"AMAZON_CLOUD_DRIVE\",         \"title\": \"Amazon Cloud Drive\",         \"credentials_schema\": [             {                 \"property\": \"client_id\",                 \"schema\": {                     \"title\": \"Amazon Application Client ID\",                     \"_required_\": true,                     \"type\": \"string\"                 }             },             {                 \"property\": \"client_secret\",                 \"schema\": {                     \"title\": \"Application Key\",                     \"_required_\": true,                     \"type\": \"string\"                 }             }         ],         \"credentials_oauth\": null,         \"buckets\": false,         \"bucket_title\": \"Bucket\",         \"task_schema\": []     } ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->cloudsyncProvidersGet();
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncProvidersGet: ', $e->getMessage(), PHP_EOL;
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

## `cloudsyncSyncOnetimePost()`

```php
cloudsyncSyncOnetimePost($cloudsync_sync_onetime)
```



Run cloud sync task without creating it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CloudsyncApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$cloudsync_sync_onetime = new \RMoore\Truenas\Model\CloudsyncSyncOnetime(); // \RMoore\Truenas\Model\CloudsyncSyncOnetime

try {
    $apiInstance->cloudsyncSyncOnetimePost($cloudsync_sync_onetime);
} catch (Exception $e) {
    echo 'Exception when calling CloudsyncApi->cloudsyncSyncOnetimePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **cloudsync_sync_onetime** | [**\RMoore\Truenas\Model\CloudsyncSyncOnetime**](../Model/CloudsyncSyncOnetime.md)|  | [optional]

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
