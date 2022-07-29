# RMoore\Truenas\ReportingApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportingClearGet()**](ReportingApi.md#reportingClearGet) | **GET** /reporting/clear | 
[**reportingGet()**](ReportingApi.md#reportingGet) | **GET** /reporting | 
[**reportingGetDataPost()**](ReportingApi.md#reportingGetDataPost) | **POST** /reporting/get_data | 
[**reportingGraphsGet()**](ReportingApi.md#reportingGraphsGet) | **GET** /reporting/graphs | 
[**reportingPut()**](ReportingApi.md#reportingPut) | **PUT** /reporting | 


## `reportingClearGet()`

```php
reportingClearGet()
```



Clear reporting database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->reportingClearGet();
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->reportingClearGet: ', $e->getMessage(), PHP_EOL;
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

## `reportingGet()`

```php
reportingGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->reportingGet();
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->reportingGet: ', $e->getMessage(), PHP_EOL;
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

## `reportingGetDataPost()`

```php
reportingGetDataPost($reporting_get_data)
```



Get reporting data for given graphs.  List of possible graphs can be retrieved using `reporting.graphs` call.  For the time period of the graph either `unit` and `page` OR `start` and `end` should be used, not both.  `aggregate` will return aggregate available data for each graph (e.g. min, max, mean).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reporting_get_data = new \RMoore\Truenas\Model\ReportingGetData(); // \RMoore\Truenas\Model\ReportingGetData

try {
    $apiInstance->reportingGetDataPost($reporting_get_data);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->reportingGetDataPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reporting_get_data** | [**\RMoore\Truenas\Model\ReportingGetData**](../Model/ReportingGetData.md)|  | [optional]

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

## `reportingGraphsGet()`

```php
reportingGraphsGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\ReportingApi(
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
    $apiInstance->reportingGraphsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->reportingGraphsGet: ', $e->getMessage(), PHP_EOL;
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

## `reportingPut()`

```php
reportingPut($reporting_update0)
```



Configure Reporting Database settings.  If `cpu_in_percentage` is `true`, collectd reports CPU usage in percentage instead of \"jiffies\".  `graphite` specifies a destination hostname or IP for collectd data sent by the Graphite plugin..  `graphite_separateinstances` corresponds to collectd SeparateInstances option.  `graph_age` specifies the maximum age of stored graphs in months. `graph_points` is the number of points for each hourly, daily, weekly, etc. graph. Changing these requires destroying the current reporting database, so when these fields are changed, an additional `confirm_rrd_destroy: true` flag must be present.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ReportingApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reporting_update0 = new \RMoore\Truenas\Model\ReportingUpdate0(); // \RMoore\Truenas\Model\ReportingUpdate0

try {
    $apiInstance->reportingPut($reporting_update0);
} catch (Exception $e) {
    echo 'Exception when calling ReportingApi->reportingPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **reporting_update0** | [**\RMoore\Truenas\Model\ReportingUpdate0**](../Model/ReportingUpdate0.md)|  | [optional]

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
