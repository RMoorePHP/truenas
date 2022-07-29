# RMoore\Truenas\CoreApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**coreBulkPost()**](CoreApi.md#coreBulkPost) | **POST** /core/bulk | 
[**coreDebugModeEnabledGet()**](CoreApi.md#coreDebugModeEnabledGet) | **GET** /core/debug_mode_enabled | 
[**coreDebugPost()**](CoreApi.md#coreDebugPost) | **POST** /core/debug | 
[**coreDownloadPost()**](CoreApi.md#coreDownloadPost) | **POST** /core/download | 
[**coreGetEventsGet()**](CoreApi.md#coreGetEventsGet) | **GET** /core/get_events | 
[**coreGetJobsGet()**](CoreApi.md#coreGetJobsGet) | **GET** /core/get_jobs | 
[**coreGetWebsocketMessagesGet()**](CoreApi.md#coreGetWebsocketMessagesGet) | **GET** /core/get_websocket_messages | 
[**coreJobAbortPost()**](CoreApi.md#coreJobAbortPost) | **POST** /core/job_abort | 
[**coreJobUpdatePost()**](CoreApi.md#coreJobUpdatePost) | **POST** /core/job_update | 
[**coreJobWaitPost()**](CoreApi.md#coreJobWaitPost) | **POST** /core/job_wait | 
[**corePingGet()**](CoreApi.md#corePingGet) | **GET** /core/ping | 
[**corePingRemotePost()**](CoreApi.md#corePingRemotePost) | **POST** /core/ping_remote | 
[**coreResizeShellPost()**](CoreApi.md#coreResizeShellPost) | **POST** /core/resize_shell | 
[**coreSessionsGet()**](CoreApi.md#coreSessionsGet) | **GET** /core/sessions | 
[**coreSetDebugModePost()**](CoreApi.md#coreSetDebugModePost) | **POST** /core/set_debug_mode | 


## `coreBulkPost()`

```php
coreBulkPost($core_bulk)
```



Will loop on a list of items for the given method, returning a list of dicts containing a result and error key.  `description` contains format string for job progress (e.g. \"Deleting snapshot {0[dataset]}@{0[name]}\")  Result will be the message returned by the method being called, or a string of an error, in which case the error key will be the exception

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_bulk = new \RMoore\Truenas\Model\CoreBulk(); // \RMoore\Truenas\Model\CoreBulk

try {
    $apiInstance->coreBulkPost($core_bulk);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreBulkPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_bulk** | [**\RMoore\Truenas\Model\CoreBulk**](../Model/CoreBulk.md)|  | [optional]

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

## `coreDebugModeEnabledGet()`

```php
coreDebugModeEnabledGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->coreDebugModeEnabledGet();
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDebugModeEnabledGet: ', $e->getMessage(), PHP_EOL;
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

## `coreDebugPost()`

```php
coreDebugPost($core_debug)
```



Setup middlewared for remote debugging.  engines:   - PTVS: Python Visual Studio   - PYDEV: Python Dev (Eclipse/PyCharm)   - REMOTE_PDB: Remote vanilla PDB (over TCP sockets)  options:   - secret: password for PTVS   - host: required for PYDEV, hostname of local computer (developer workstation)   - local_path: required for PYDEV, path for middlewared source in local computer (e.g. /home/user/freenas/src/middlewared/middlewared   - threaded: run debugger in a new thread instead of event loop

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_debug = new \RMoore\Truenas\Model\CoreDebug(); // \RMoore\Truenas\Model\CoreDebug

try {
    $apiInstance->coreDebugPost($core_debug);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDebugPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_debug** | [**\RMoore\Truenas\Model\CoreDebug**](../Model/CoreDebug.md)|  | [optional]

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

## `coreDownloadPost()`

```php
coreDownloadPost($core_download)
```



Core helper to call a job marked for download.  Non-`buffered` downloads will allow job to write to pipe as soon as download URL is requested, job will stay blocked meanwhile. `buffered` downloads must wait for job to complete before requesting download URL, job's pipe output will be buffered to ramfs.  Returns the job id and the URL for download.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_download = new \RMoore\Truenas\Model\CoreDownload(); // \RMoore\Truenas\Model\CoreDownload

try {
    $apiInstance->coreDownloadPost($core_download);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreDownloadPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_download** | [**\RMoore\Truenas\Model\CoreDownload**](../Model/CoreDownload.md)|  | [optional]

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

## `coreGetEventsGet()`

```php
coreGetEventsGet()
```



Returns metadata for every possible event emitted from websocket server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->coreGetEventsGet();
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreGetEventsGet: ', $e->getMessage(), PHP_EOL;
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

## `coreGetJobsGet()`

```php
coreGetJobsGet($limit, $offset, $count, $sort)
```



Get the long running jobs.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
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
    $apiInstance->coreGetJobsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreGetJobsGet: ', $e->getMessage(), PHP_EOL;
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

## `coreGetWebsocketMessagesGet()`

```php
coreGetWebsocketMessagesGet()
```



Retrieve last 1000 incoming/outgoing message(s) logged over websocket.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->coreGetWebsocketMessagesGet();
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreGetWebsocketMessagesGet: ', $e->getMessage(), PHP_EOL;
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

## `coreJobAbortPost()`

```php
coreJobAbortPost($body)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->coreJobAbortPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreJobAbortPost: ', $e->getMessage(), PHP_EOL;
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

## `coreJobUpdatePost()`

```php
coreJobUpdatePost($core_job_update)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_job_update = new \RMoore\Truenas\Model\CoreJobUpdate(); // \RMoore\Truenas\Model\CoreJobUpdate

try {
    $apiInstance->coreJobUpdatePost($core_job_update);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreJobUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_job_update** | [**\RMoore\Truenas\Model\CoreJobUpdate**](../Model/CoreJobUpdate.md)|  | [optional]

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

## `coreJobWaitPost()`

```php
coreJobWaitPost($body)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->coreJobWaitPost($body);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreJobWaitPost: ', $e->getMessage(), PHP_EOL;
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

## `corePingGet()`

```php
corePingGet()
```



Utility method which just returns \"pong\". Can be used to keep connection/authtoken alive instead of using \"ping\" protocol message.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->corePingGet();
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->corePingGet: ', $e->getMessage(), PHP_EOL;
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

## `corePingRemotePost()`

```php
corePingRemotePost($core_ping_remote0)
```



Method that will send an ICMP echo request to \"hostname\" and will wait up to \"timeout\" for a reply.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_ping_remote0 = new \RMoore\Truenas\Model\CorePingRemote0(); // \RMoore\Truenas\Model\CorePingRemote0

try {
    $apiInstance->corePingRemotePost($core_ping_remote0);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->corePingRemotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_ping_remote0** | [**\RMoore\Truenas\Model\CorePingRemote0**](../Model/CorePingRemote0.md)|  | [optional]

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

## `coreResizeShellPost()`

```php
coreResizeShellPost($core_resize_shell)
```



Resize terminal session (/websocket/shell) to cols x rows

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$core_resize_shell = new \RMoore\Truenas\Model\CoreResizeShell(); // \RMoore\Truenas\Model\CoreResizeShell

try {
    $apiInstance->coreResizeShellPost($core_resize_shell);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreResizeShellPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **core_resize_shell** | [**\RMoore\Truenas\Model\CoreResizeShell**](../Model/CoreResizeShell.md)|  | [optional]

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

## `coreSessionsGet()`

```php
coreSessionsGet($limit, $offset, $count, $sort)
```



Get currently open websocket sessions.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
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
    $apiInstance->coreSessionsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreSessionsGet: ', $e->getMessage(), PHP_EOL;
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

## `coreSetDebugModePost()`

```php
coreSetDebugModePost($body)
```



Set `debug_mode` for middleware.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\CoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = True; // bool

try {
    $apiInstance->coreSetDebugModePost($body);
} catch (Exception $e) {
    echo 'Exception when calling CoreApi->coreSetDebugModePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **bool**|  | [optional]

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
