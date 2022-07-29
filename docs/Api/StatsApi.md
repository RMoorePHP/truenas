# RMoore\Truenas\StatsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**statsGetDataPost()**](StatsApi.md#statsGetDataPost) | **POST** /stats/get_data | 
[**statsGetDatasetInfoPost()**](StatsApi.md#statsGetDatasetInfoPost) | **POST** /stats/get_dataset_info | 
[**statsGetSourcesGet()**](StatsApi.md#statsGetSourcesGet) | **GET** /stats/get_sources | 


## `statsGetDataPost()`

```php
statsGetDataPost($stats_get_data)
```



Get data points from rrd files.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stats_get_data = new \RMoore\Truenas\Model\StatsGetData(); // \RMoore\Truenas\Model\StatsGetData

try {
    $apiInstance->statsGetDataPost($stats_get_data);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stats_get_data** | [**\RMoore\Truenas\Model\StatsGetData**](../Model/StatsGetData.md)|  | [optional]

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

## `statsGetDatasetInfoPost()`

```php
statsGetDatasetInfoPost($stats_get_dataset_info)
```



Returns info about a given dataset from some source.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stats_get_dataset_info = new \RMoore\Truenas\Model\StatsGetDatasetInfo(); // \RMoore\Truenas\Model\StatsGetDatasetInfo

try {
    $apiInstance->statsGetDatasetInfoPost($stats_get_dataset_info);
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetDatasetInfoPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **stats_get_dataset_info** | [**\RMoore\Truenas\Model\StatsGetDatasetInfo**](../Model/StatsGetDatasetInfo.md)|  | [optional]

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

## `statsGetSourcesGet()`

```php
statsGetSourcesGet()
```



Returns an object with all available sources tried with metric datasets.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\StatsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->statsGetSourcesGet();
} catch (Exception $e) {
    echo 'Exception when calling StatsApi->statsGetSourcesGet: ', $e->getMessage(), PHP_EOL;
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
