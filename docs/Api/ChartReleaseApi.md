# RMoore\Truenas\ChartReleaseApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**chartReleaseCertificateAuthorityChoicesGet()**](ChartReleaseApi.md#chartReleaseCertificateAuthorityChoicesGet) | **GET** /chart/release/certificate_authority_choices | 
[**chartReleaseCertificateChoicesGet()**](ChartReleaseApi.md#chartReleaseCertificateChoicesGet) | **GET** /chart/release/certificate_choices | 
[**chartReleaseEventsPost()**](ChartReleaseApi.md#chartReleaseEventsPost) | **POST** /chart/release/events | 
[**chartReleaseGet()**](ChartReleaseApi.md#chartReleaseGet) | **GET** /chart/release | 
[**chartReleaseIdIdDelete()**](ChartReleaseApi.md#chartReleaseIdIdDelete) | **DELETE** /chart/release/id/{id} | 
[**chartReleaseIdIdGet()**](ChartReleaseApi.md#chartReleaseIdIdGet) | **GET** /chart/release/id/{id} | 
[**chartReleaseIdIdPut()**](ChartReleaseApi.md#chartReleaseIdIdPut) | **PUT** /chart/release/id/{id} | 
[**chartReleaseNicChoicesGet()**](ChartReleaseApi.md#chartReleaseNicChoicesGet) | **GET** /chart/release/nic_choices | 
[**chartReleasePodConsoleChoicesPost()**](ChartReleaseApi.md#chartReleasePodConsoleChoicesPost) | **POST** /chart/release/pod_console_choices | 
[**chartReleasePodLogsChoicesPost()**](ChartReleaseApi.md#chartReleasePodLogsChoicesPost) | **POST** /chart/release/pod_logs_choices | 
[**chartReleasePodLogsPost()**](ChartReleaseApi.md#chartReleasePodLogsPost) | **POST** /chart/release/pod_logs | 
[**chartReleasePodStatusPost()**](ChartReleaseApi.md#chartReleasePodStatusPost) | **POST** /chart/release/pod_status | 
[**chartReleasePost()**](ChartReleaseApi.md#chartReleasePost) | **POST** /chart/release | 
[**chartReleasePullContainerImagesPost()**](ChartReleaseApi.md#chartReleasePullContainerImagesPost) | **POST** /chart/release/pull_container_images | 
[**chartReleaseRedeployPost()**](ChartReleaseApi.md#chartReleaseRedeployPost) | **POST** /chart/release/redeploy | 
[**chartReleaseRemoveIxVolumePost()**](ChartReleaseApi.md#chartReleaseRemoveIxVolumePost) | **POST** /chart/release/remove_ix_volume | 
[**chartReleaseRollbackPost()**](ChartReleaseApi.md#chartReleaseRollbackPost) | **POST** /chart/release/rollback | 
[**chartReleaseScalePost()**](ChartReleaseApi.md#chartReleaseScalePost) | **POST** /chart/release/scale | 
[**chartReleaseScaleWorkloadsPost()**](ChartReleaseApi.md#chartReleaseScaleWorkloadsPost) | **POST** /chart/release/scale_workloads | 
[**chartReleaseScaleableResourcesGet()**](ChartReleaseApi.md#chartReleaseScaleableResourcesGet) | **GET** /chart/release/scaleable_resources | 
[**chartReleaseUpgradePost()**](ChartReleaseApi.md#chartReleaseUpgradePost) | **POST** /chart/release/upgrade | 
[**chartReleaseUpgradeSummaryPost()**](ChartReleaseApi.md#chartReleaseUpgradeSummaryPost) | **POST** /chart/release/upgrade_summary | 
[**chartReleaseUsedPortsGet()**](ChartReleaseApi.md#chartReleaseUsedPortsGet) | **GET** /chart/release/used_ports | 


## `chartReleaseCertificateAuthorityChoicesGet()`

```php
chartReleaseCertificateAuthorityChoicesGet()
```



Returns certificate authorities which can be used by applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->chartReleaseCertificateAuthorityChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseCertificateAuthorityChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseCertificateChoicesGet()`

```php
chartReleaseCertificateChoicesGet()
```



Returns certificates which can be used by applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->chartReleaseCertificateChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseCertificateChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseEventsPost()`

```php
chartReleaseEventsPost($body)
```



Returns kubernetes events for `release_name` Chart Release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->chartReleaseEventsPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseEventsPost: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseGet()`

```php
chartReleaseGet($limit, $offset, $count, $sort)
```



Query available chart releases.  `query-options.extra.retrieve_resources` is a boolean when set will retrieve existing kubernetes resources in the chart namespace.  `query-options.extra.history` is a boolean when set will retrieve all chart version upgrades for a chart release.  `query-options.extra.include_chart_schema` is a boolean when set will retrieve the schema being used by the chart release in question.  `query-options.extra.resource_events` is a boolean when set will retrieve individual events of each resource. This only has effect if `query-options.extra.retrieve_resources` is set.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
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
    $apiInstance->chartReleaseGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseGet: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseIdIdDelete()`

```php
chartReleaseIdIdDelete($id)
```



Delete existing chart release.  This will delete the chart release from the kubernetes cluster and also remove any associated volumes / data. To clarify, host path volumes will not be deleted which live outside the chart release dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->chartReleaseIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseIdIdGet()`

```php
chartReleaseIdIdGet($id)
```



Query available chart releases.  `query-options.extra.retrieve_resources` is a boolean when set will retrieve existing kubernetes resources in the chart namespace.  `query-options.extra.history` is a boolean when set will retrieve all chart version upgrades for a chart release.  `query-options.extra.include_chart_schema` is a boolean when set will retrieve the schema being used by the chart release in question.  `query-options.extra.resource_events` is a boolean when set will retrieve individual events of each resource. This only has effect if `query-options.extra.retrieve_resources` is set.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->chartReleaseIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseIdIdPut()`

```php
chartReleaseIdIdPut($id)
```



Update an existing chart release.  `values` is configuration specified for the catalog item version in question which will be used to create the chart release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->chartReleaseIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseNicChoicesGet()`

```php
chartReleaseNicChoicesGet()
```



Available choices for NIC which can be added to a pod in a chart release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->chartReleaseNicChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseNicChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `chartReleasePodConsoleChoicesPost()`

```php
chartReleasePodConsoleChoicesPost($body)
```



Returns choices for console access to a chart release.  Output is a dictionary with names of pods as keys and containing names of containers which the pod comprises of.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->chartReleasePodConsoleChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleasePodConsoleChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `chartReleasePodLogsChoicesPost()`

```php
chartReleasePodLogsChoicesPost($body)
```



Returns choices for accessing logs of any container in any pod in a chart release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->chartReleasePodLogsChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleasePodLogsChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `chartReleasePodLogsPost()`

```php
chartReleasePodLogsPost($chart_release_pod_logs)
```



Export logs of `options.container_name` container in `options.pod_name` pod in `release_name` chart release.  `options.tail_lines` is an option to select how many lines of logs to retrieve for the said container. It defaults to 500. If set to `null`, it will retrieve complete logs of the container.  `options.limit_bytes` is an option to select how many bytes to retrieve from the tail lines selected. If set to null ( which is the default ), it will not limit the bytes returned. To clarify, `options.tail_lines` is applied first and the required number of lines are retrieved and then `options.limit_bytes` is applied.  Please refer to websocket documentation for downloading the file.  A file will be downloaded from this endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_pod_logs = new \RMoore\Truenas\Model\ChartReleasePodLogs(); // \RMoore\Truenas\Model\ChartReleasePodLogs

try {
    $apiInstance->chartReleasePodLogsPost($chart_release_pod_logs);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleasePodLogsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_pod_logs** | [**\RMoore\Truenas\Model\ChartReleasePodLogs**](../Model/ChartReleasePodLogs.md)|  | [optional]

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

## `chartReleasePodStatusPost()`

```php
chartReleasePodStatusPost($body)
```



Retrieve available/desired pods status for a chart release and it's current state.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->chartReleasePodStatusPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleasePodStatusPost: ', $e->getMessage(), PHP_EOL;
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

## `chartReleasePost()`

```php
chartReleasePost($chart_release_create0)
```



Create a chart release for a catalog item.  `release_name` is the name which will be used to identify the created chart release.  `catalog` is a valid catalog id where system will look for catalog `item` details.  `train` is which train to look for under `catalog` i.e stable / testing etc.  `version` specifies the catalog `item` version.  `values` is configuration specified for the catalog item version in question which will be used to create the chart release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_create0 = new \RMoore\Truenas\Model\ChartReleaseCreate0(); // \RMoore\Truenas\Model\ChartReleaseCreate0

try {
    $apiInstance->chartReleasePost($chart_release_create0);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleasePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_create0** | [**\RMoore\Truenas\Model\ChartReleaseCreate0**](../Model/ChartReleaseCreate0.md)|  | [optional]

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

## `chartReleasePullContainerImagesPost()`

```php
chartReleasePullContainerImagesPost($chart_release_pull_container_images)
```



Update container images being used by `release_name` chart release.  `redeploy` when set will redeploy pods which will result in chart release using newer updated versions of the container images.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_pull_container_images = new \RMoore\Truenas\Model\ChartReleasePullContainerImages(); // \RMoore\Truenas\Model\ChartReleasePullContainerImages

try {
    $apiInstance->chartReleasePullContainerImagesPost($chart_release_pull_container_images);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleasePullContainerImagesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_pull_container_images** | [**\RMoore\Truenas\Model\ChartReleasePullContainerImages**](../Model/ChartReleasePullContainerImages.md)|  | [optional]

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

## `chartReleaseRedeployPost()`

```php
chartReleaseRedeployPost($body)
```



Redeploy will initiate a new rollout of the Helm chart according to upgrade strategy defined by the chart release workloads. A good example for redeploying is updating kubernetes pods with an updated container image.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->chartReleaseRedeployPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseRedeployPost: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseRemoveIxVolumePost()`

```php
chartReleaseRemoveIxVolumePost($chart_release_remove_ix_volume)
```



Remove `volume_name` ix_volume from `release_name` chart release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_remove_ix_volume = new \RMoore\Truenas\Model\ChartReleaseRemoveIxVolume(); // \RMoore\Truenas\Model\ChartReleaseRemoveIxVolume

try {
    $apiInstance->chartReleaseRemoveIxVolumePost($chart_release_remove_ix_volume);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseRemoveIxVolumePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_remove_ix_volume** | [**\RMoore\Truenas\Model\ChartReleaseRemoveIxVolume**](../Model/ChartReleaseRemoveIxVolume.md)|  | [optional]

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

## `chartReleaseRollbackPost()`

```php
chartReleaseRollbackPost($chart_release_rollback)
```



Rollback a chart release to a previous chart version.  `item_version` is version which we want to rollback a chart release to.  `rollback_snapshot` is a boolean value which when set will rollback snapshots of any PVC's or ix volumes being consumed by the chart release.  `force_rollback` is a boolean which when set will force rollback operation to move forward even if no snapshots are found. This is only useful when `rollback_snapshot` is set.  `recreate_resources` is a boolean which will delete and then create the kubernetes resources on rollback of chart release. This should be used with caution as if chart release is consuming immutable objects like a PVC, the rollback operation can't be performed and will fail as helm tries to do a 3 way patch for rollback.  Rollback is functional for the actual configuration of the release at the `item_version` specified and any associated `ix_volumes` with any PVC's which were consuming chart release storage class.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_rollback = new \RMoore\Truenas\Model\ChartReleaseRollback(); // \RMoore\Truenas\Model\ChartReleaseRollback

try {
    $apiInstance->chartReleaseRollbackPost($chart_release_rollback);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseRollbackPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_rollback** | [**\RMoore\Truenas\Model\ChartReleaseRollback**](../Model/ChartReleaseRollback.md)|  | [optional]

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

## `chartReleaseScalePost()`

```php
chartReleaseScalePost($chart_release_scale)
```



Scale a `release_name` chart release to `scale_options.replica_count` specified.  This will scale deployments/statefulset to replica count specified.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_scale = new \RMoore\Truenas\Model\ChartReleaseScale(); // \RMoore\Truenas\Model\ChartReleaseScale

try {
    $apiInstance->chartReleaseScalePost($chart_release_scale);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseScalePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_scale** | [**\RMoore\Truenas\Model\ChartReleaseScale**](../Model/ChartReleaseScale.md)|  | [optional]

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

## `chartReleaseScaleWorkloadsPost()`

```php
chartReleaseScaleWorkloadsPost($chart_release_scale_workloads)
```



Scale workloads in a chart release to specified `replica_count`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_scale_workloads = new \RMoore\Truenas\Model\ChartReleaseScaleWorkloads(); // \RMoore\Truenas\Model\ChartReleaseScaleWorkloads

try {
    $apiInstance->chartReleaseScaleWorkloadsPost($chart_release_scale_workloads);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseScaleWorkloadsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_scale_workloads** | [**\RMoore\Truenas\Model\ChartReleaseScaleWorkloads**](../Model/ChartReleaseScaleWorkloads.md)|  | [optional]

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

## `chartReleaseScaleableResourcesGet()`

```php
chartReleaseScaleableResourcesGet()
```



Returns choices for types of workloads which can be scaled up/down.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->chartReleaseScaleableResourcesGet();
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseScaleableResourcesGet: ', $e->getMessage(), PHP_EOL;
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

## `chartReleaseUpgradePost()`

```php
chartReleaseUpgradePost($chart_release_upgrade)
```



Upgrade `release_name` chart release.  `upgrade_options.item_version` specifies to which item version chart release should be upgraded to.  System will update container images being used by `release_name` chart release as a chart release upgrade is not considered complete until the images in use have also been updated to latest versions.  During upgrade, `upgrade_options.values` can be specified to apply configuration changes for configuration changes for the chart release in question.  When chart version is upgraded, system will automatically take a snapshot of `ix_volumes` in question which can be used to rollback later on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_upgrade = new \RMoore\Truenas\Model\ChartReleaseUpgrade(); // \RMoore\Truenas\Model\ChartReleaseUpgrade

try {
    $apiInstance->chartReleaseUpgradePost($chart_release_upgrade);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseUpgradePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_upgrade** | [**\RMoore\Truenas\Model\ChartReleaseUpgrade**](../Model/ChartReleaseUpgrade.md)|  | [optional]

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

## `chartReleaseUpgradeSummaryPost()`

```php
chartReleaseUpgradeSummaryPost($chart_release_upgrade_summary)
```



Retrieve upgrade summary for `release_name` which will include which container images will be updated and changelog for `options.item_version` chart version specified if applicable. If only container images need to be updated, changelog will be `null`.  If chart release `release_name` does not require an upgrade, an error will be raised.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$chart_release_upgrade_summary = new \RMoore\Truenas\Model\ChartReleaseUpgradeSummary(); // \RMoore\Truenas\Model\ChartReleaseUpgradeSummary

try {
    $apiInstance->chartReleaseUpgradeSummaryPost($chart_release_upgrade_summary);
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseUpgradeSummaryPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **chart_release_upgrade_summary** | [**\RMoore\Truenas\Model\ChartReleaseUpgradeSummary**](../Model/ChartReleaseUpgradeSummary.md)|  | [optional]

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

## `chartReleaseUsedPortsGet()`

```php
chartReleaseUsedPortsGet()
```



Returns ports in use by applications.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ChartReleaseApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->chartReleaseUsedPortsGet();
} catch (Exception $e) {
    echo 'Exception when calling ChartReleaseApi->chartReleaseUsedPortsGet: ', $e->getMessage(), PHP_EOL;
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
