# RMoore\Truenas\UpdateApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateCheckAvailablePost()**](UpdateApi.md#updateCheckAvailablePost) | **POST** /update/check_available | 
[**updateDownloadGet()**](UpdateApi.md#updateDownloadGet) | **GET** /update/download | 
[**updateFilePost()**](UpdateApi.md#updateFilePost) | **POST** /update/file | 
[**updateGetAutoDownloadGet()**](UpdateApi.md#updateGetAutoDownloadGet) | **GET** /update/get_auto_download | 
[**updateGetPendingPost()**](UpdateApi.md#updateGetPendingPost) | **POST** /update/get_pending | 
[**updateGetTrainsGet()**](UpdateApi.md#updateGetTrainsGet) | **GET** /update/get_trains | 
[**updateManualPost()**](UpdateApi.md#updateManualPost) | **POST** /update/manual | 
[**updateSetAutoDownloadPost()**](UpdateApi.md#updateSetAutoDownloadPost) | **POST** /update/set_auto_download | 
[**updateSetTrainPost()**](UpdateApi.md#updateSetTrainPost) | **POST** /update/set_train | 
[**updateUpdatePost()**](UpdateApi.md#updateUpdatePost) | **POST** /update/update | 


## `updateCheckAvailablePost()`

```php
updateCheckAvailablePost($update_check_available0)
```



Checks if there is an update available from update server.  status:   - REBOOT_REQUIRED: an update has already been applied   - AVAILABLE: an update is available   - UNAVAILABLE: no update available   - HA_UNAVAILABLE: HA is non-functional

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_check_available0 = new \RMoore\Truenas\Model\UpdateCheckAvailable0(); // \RMoore\Truenas\Model\UpdateCheckAvailable0

try {
    $apiInstance->updateCheckAvailablePost($update_check_available0);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateCheckAvailablePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_check_available0** | [**\RMoore\Truenas\Model\UpdateCheckAvailable0**](../Model/UpdateCheckAvailable0.md)|  | [optional]

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

## `updateDownloadGet()`

```php
updateDownloadGet()
```



Download updates using selected train.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->updateDownloadGet();
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateDownloadGet: ', $e->getMessage(), PHP_EOL;
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

## `updateFilePost()`

```php
updateFilePost($update_file0)
```



Updates the system using the uploaded .tar file.  Use null `destination` to create a temporary location.  A file must be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_file0 = new \RMoore\Truenas\Model\UpdateFile0(); // \RMoore\Truenas\Model\UpdateFile0

try {
    $apiInstance->updateFilePost($update_file0);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateFilePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_file0** | [**\RMoore\Truenas\Model\UpdateFile0**](../Model/UpdateFile0.md)|  | [optional]

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

## `updateGetAutoDownloadGet()`

```php
updateGetAutoDownloadGet()
```



Returns if update auto-download is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->updateGetAutoDownloadGet();
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateGetAutoDownloadGet: ', $e->getMessage(), PHP_EOL;
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

## `updateGetPendingPost()`

```php
updateGetPendingPost($body)
```



Gets a list of packages already downloaded and ready to be applied. Each entry of the lists consists of type of operation and name of it, e.g.    {     \"operation\": \"upgrade\",     \"name\": \"baseos-11.0 -> baseos-11.1\"   }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->updateGetPendingPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateGetPendingPost: ', $e->getMessage(), PHP_EOL;
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

## `updateGetTrainsGet()`

```php
updateGetTrainsGet()
```



Returns available trains dict and the currently configured train as well as the train of currently booted environment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->updateGetTrainsGet();
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateGetTrainsGet: ', $e->getMessage(), PHP_EOL;
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

## `updateManualPost()`

```php
updateManualPost($update_manual)
```



Update the system using a manual update file.  `path` must be the absolute path to the update file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_manual = new \RMoore\Truenas\Model\UpdateManual(); // \RMoore\Truenas\Model\UpdateManual

try {
    $apiInstance->updateManualPost($update_manual);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateManualPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_manual** | [**\RMoore\Truenas\Model\UpdateManual**](../Model/UpdateManual.md)|  | [optional]

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

## `updateSetAutoDownloadPost()`

```php
updateSetAutoDownloadPost($body)
```



Sets if update auto-download is enabled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = True; // bool

try {
    $apiInstance->updateSetAutoDownloadPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateSetAutoDownloadPost: ', $e->getMessage(), PHP_EOL;
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

## `updateSetTrainPost()`

```php
updateSetTrainPost($body)
```



Set an update train to be used by default in updates.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->updateSetTrainPost($body);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateSetTrainPost: ', $e->getMessage(), PHP_EOL;
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

## `updateUpdatePost()`

```php
updateUpdatePost($update_update0)
```



Downloads (if not already in cache) and apply an update.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\UpdateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$update_update0 = new \RMoore\Truenas\Model\UpdateUpdate0(); // \RMoore\Truenas\Model\UpdateUpdate0

try {
    $apiInstance->updateUpdatePost($update_update0);
} catch (Exception $e) {
    echo 'Exception when calling UpdateApi->updateUpdatePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **update_update0** | [**\RMoore\Truenas\Model\UpdateUpdate0**](../Model/UpdateUpdate0.md)|  | [optional]

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
