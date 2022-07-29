# RMoore\Truenas\DiskApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**diskGet()**](DiskApi.md#diskGet) | **GET** /disk | 
[**diskGetUnusedPost()**](DiskApi.md#diskGetUnusedPost) | **POST** /disk/get_unused | 
[**diskIdIdGet()**](DiskApi.md#diskIdIdGet) | **GET** /disk/id/{id} | 
[**diskIdIdPut()**](DiskApi.md#diskIdIdPut) | **PUT** /disk/id/{id} | 
[**diskSmartAttributesPost()**](DiskApi.md#diskSmartAttributesPost) | **POST** /disk/smart_attributes | 
[**diskTemperaturePost()**](DiskApi.md#diskTemperaturePost) | **POST** /disk/temperature | 
[**diskTemperaturesPost()**](DiskApi.md#diskTemperaturesPost) | **POST** /disk/temperatures | 
[**diskWipePost()**](DiskApi.md#diskWipePost) | **POST** /disk/wipe | 


## `diskGet()`

```php
diskGet($limit, $offset, $count, $sort)
```



Query disks.  The following extra options are supported:       include_expired: true - will also include expired disks (default: false)      passwords: true - will not hide KMIP password for the disks (default: false)      pools: true - will join pool name for each disk (default: false)  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
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
    $apiInstance->diskGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskGet: ', $e->getMessage(), PHP_EOL;
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

## `diskGetUnusedPost()`

```php
diskGetUnusedPost($body)
```



Helper method to get all disks that are not in use, either by the boot pool or the user pools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = True; // bool

try {
    $apiInstance->diskGetUnusedPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskGetUnusedPost: ', $e->getMessage(), PHP_EOL;
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

## `diskIdIdGet()`

```php
diskIdIdGet($id)
```



Query disks.  The following extra options are supported:       include_expired: true - will also include expired disks (default: false)      passwords: true - will not hide KMIP password for the disks (default: false)      pools: true - will join pool name for each disk (default: false)  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->diskIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `diskIdIdPut()`

```php
diskIdIdPut($id)
```



Update disk of `id`.  If extra options need to be passed to SMART which we don't already support, they can be passed by `smartoptions`.  `critical`, `informational` and `difference` are integer values on which alerts for SMART are configured if the disk temperature crosses the assigned threshold for each respective attribute. If they are set to null, then SMARTD config values are used as defaults.  Email of log level LOG_CRIT is issued when disk temperature crosses `critical`.  Email of log level LOG_INFO is issued when disk temperature crosses `informational`.  If temperature of a disk changes by `difference` degree Celsius since the last report, SMART reports this.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->diskIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `diskSmartAttributesPost()`

```php
diskSmartAttributesPost($body)
```



Returns S.M.A.R.T. attributes values for specified disk name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->diskSmartAttributesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskSmartAttributesPost: ', $e->getMessage(), PHP_EOL;
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

## `diskTemperaturePost()`

```php
diskTemperaturePost($disk_temperature)
```



Returns temperature for device `name` using specified S.M.A.R.T. `powermode`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$disk_temperature = new \RMoore\Truenas\Model\DiskTemperature(); // \RMoore\Truenas\Model\DiskTemperature

try {
    $apiInstance->diskTemperaturePost($disk_temperature);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskTemperaturePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disk_temperature** | [**\RMoore\Truenas\Model\DiskTemperature**](../Model/DiskTemperature.md)|  | [optional]

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

## `diskTemperaturesPost()`

```php
diskTemperaturesPost($disk_temperatures)
```



Returns temperatures for a list of devices (runs in parallel). See `disk.temperature` documentation for more details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$disk_temperatures = new \RMoore\Truenas\Model\DiskTemperatures(); // \RMoore\Truenas\Model\DiskTemperatures

try {
    $apiInstance->diskTemperaturesPost($disk_temperatures);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskTemperaturesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disk_temperatures** | [**\RMoore\Truenas\Model\DiskTemperatures**](../Model/DiskTemperatures.md)|  | [optional]

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

## `diskWipePost()`

```php
diskWipePost($disk_wipe)
```



Performs a wipe of a disk `dev`. It can be of the following modes:   - QUICK: clean the first and last 32 megabytes on `dev`   - FULL: write whole disk with zero's   - FULL_RANDOM: write whole disk with random bytes

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DiskApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$disk_wipe = new \RMoore\Truenas\Model\DiskWipe(); // \RMoore\Truenas\Model\DiskWipe

try {
    $apiInstance->diskWipePost($disk_wipe);
} catch (Exception $e) {
    echo 'Exception when calling DiskApi->diskWipePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **disk_wipe** | [**\RMoore\Truenas\Model\DiskWipe**](../Model/DiskWipe.md)|  | [optional]

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
