# RMoore\Truenas\KubernetesApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**kubernetesBackupChartReleasesPost()**](KubernetesApi.md#kubernetesBackupChartReleasesPost) | **POST** /kubernetes/backup_chart_releases | 
[**kubernetesBindipChoicesGet()**](KubernetesApi.md#kubernetesBindipChoicesGet) | **GET** /kubernetes/bindip_choices | 
[**kubernetesDeleteBackupPost()**](KubernetesApi.md#kubernetesDeleteBackupPost) | **POST** /kubernetes/delete_backup | 
[**kubernetesEventsGet()**](KubernetesApi.md#kubernetesEventsGet) | **GET** /kubernetes/events | 
[**kubernetesGet()**](KubernetesApi.md#kubernetesGet) | **GET** /kubernetes | 
[**kubernetesListBackupsGet()**](KubernetesApi.md#kubernetesListBackupsGet) | **GET** /kubernetes/list_backups | 
[**kubernetesNodeIpGet()**](KubernetesApi.md#kubernetesNodeIpGet) | **GET** /kubernetes/node_ip | 
[**kubernetesPut()**](KubernetesApi.md#kubernetesPut) | **PUT** /kubernetes | 
[**kubernetesRestoreBackupPost()**](KubernetesApi.md#kubernetesRestoreBackupPost) | **POST** /kubernetes/restore_backup | 
[**kubernetesRouteInterfaceChoicesGet()**](KubernetesApi.md#kubernetesRouteInterfaceChoicesGet) | **GET** /kubernetes/route_interface_choices | 


## `kubernetesBackupChartReleasesPost()`

```php
kubernetesBackupChartReleasesPost($body)
```



Create a backup of existing chart releases.  The backup will save helm configuration with history for each chart release and then take a snapshot of `ix-applications` dataset.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->kubernetesBackupChartReleasesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesBackupChartReleasesPost: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesBindipChoicesGet()`

```php
kubernetesBindipChoicesGet()
```



Returns ip choices for Kubernetes service to use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kubernetesBindipChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesBindipChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesDeleteBackupPost()`

```php
kubernetesDeleteBackupPost($body)
```



Delete `backup_name` chart releases backup.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->kubernetesDeleteBackupPost($body);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesDeleteBackupPost: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesEventsGet()`

```php
kubernetesEventsGet()
```



Returns events for kubernetes node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kubernetesEventsGet();
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesEventsGet: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesGet()`

```php
kubernetesGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kubernetesGet();
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesGet: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesListBackupsGet()`

```php
kubernetesListBackupsGet()
```



List existing chart releases backups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kubernetesListBackupsGet();
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesListBackupsGet: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesNodeIpGet()`

```php
kubernetesNodeIpGet()
```



Returns IP used by kubernetes which kubernetes uses to allow incoming connections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kubernetesNodeIpGet();
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesNodeIpGet: ', $e->getMessage(), PHP_EOL;
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

## `kubernetesPut()`

```php
kubernetesPut($kubernetes_update0)
```



`pool` must be a valid ZFS pool configured in the system. Kubernetes service will initialise the pool by creating datasets under `pool_name/ix-applications`.  `configure_gpus` is a boolean to enable or disable to prevent automatically loading any GPU Support into kubernetes. This includes not loading any daemonsets for Intel and NVIDIA support.  `servicelb` is a boolean to enable or disable the integrated k3s Service Loadbalancer called \"Klipper\". This can be set to disabled to enable the user to run another LoadBalancer or no LoadBalancer at all.  `cluster_cidr` is the CIDR to be used for default NAT network between workloads.  `service_cidr` is the CIDR to be used for kubernetes services which are an abstraction and refer to a logically set of kubernetes pods.  `cluster_dns_ip` is the IP of the DNS server running for the kubernetes cluster. It must be in the range of `service_cidr`.  Specifying values for `cluster_cidr`, `service_cidr` and `cluster_dns_ip` are permanent and a subsequent change requires re-initialisation of the applications. To clarify, system will destroy old `ix-applications` dataset and any data within it when any of the values for the above configuration change.  `node_ip` is the IP address which the kubernetes cluster will assign to the TrueNAS node. It defaults to 0.0.0.0 and the cluster in this case will automatically manage which IP address to use for managing traffic for default NAT network.  By default kubernetes pods will be using default gateway of the system for outward traffic. This might not be desirable for certain users who want to separate NAT traffic over a specific interface / route. System will create a L3 network which will be routing the traffic towards default gateway for NAT.  If users want to restrict traffic over a certain gateway / interface, they can specify a default route for the NAT traffic. `route_v4_interface` and `route_v4_gateway` will set a default route for the kubernetes cluster IPv4 traffic. Similarly `route_v6_interface` and 'route_v6_gateway` can be used to specify default route for IPv6 traffic.  In case user is switching pools and the new desired pool has not been configured for kubernetes before, it is possible to replicate data from old pool to new pool with setting `migrate_applications` attribute. This will replicate contents of old pool's ix-applications dataset to the new pool.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kubernetes_update0 = new \RMoore\Truenas\Model\KubernetesUpdate0(); // \RMoore\Truenas\Model\KubernetesUpdate0

try {
    $apiInstance->kubernetesPut($kubernetes_update0);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kubernetes_update0** | [**\RMoore\Truenas\Model\KubernetesUpdate0**](../Model/KubernetesUpdate0.md)|  | [optional]

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

## `kubernetesRestoreBackupPost()`

```php
kubernetesRestoreBackupPost($kubernetes_restore_backup)
```



Restore `backup_name` chart releases backup.  It should be noted that a rollback will be initiated which will destroy any newer snapshots/clones of `ix-applications` dataset then the snapshot in question of `backup_name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kubernetes_restore_backup = new \RMoore\Truenas\Model\KubernetesRestoreBackup(); // \RMoore\Truenas\Model\KubernetesRestoreBackup

try {
    $apiInstance->kubernetesRestoreBackupPost($kubernetes_restore_backup);
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesRestoreBackupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kubernetes_restore_backup** | [**\RMoore\Truenas\Model\KubernetesRestoreBackup**](../Model/KubernetesRestoreBackup.md)|  | [optional]

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

## `kubernetesRouteInterfaceChoicesGet()`

```php
kubernetesRouteInterfaceChoicesGet()
```



Returns Interface choices for Kubernetes service to use for ipv4 connections.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KubernetesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kubernetesRouteInterfaceChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling KubernetesApi->kubernetesRouteInterfaceChoicesGet: ', $e->getMessage(), PHP_EOL;
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
