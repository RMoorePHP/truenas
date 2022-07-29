# RMoore\Truenas\VmwareApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**vmwareDatasetHasVmsPost()**](VmwareApi.md#vmwareDatasetHasVmsPost) | **POST** /vmware/dataset_has_vms | 
[**vmwareGet()**](VmwareApi.md#vmwareGet) | **GET** /vmware | 
[**vmwareGetDatastoresPost()**](VmwareApi.md#vmwareGetDatastoresPost) | **POST** /vmware/get_datastores | 
[**vmwareGetVirtualMachinesPost()**](VmwareApi.md#vmwareGetVirtualMachinesPost) | **POST** /vmware/get_virtual_machines | 
[**vmwareIdIdDelete()**](VmwareApi.md#vmwareIdIdDelete) | **DELETE** /vmware/id/{id} | 
[**vmwareIdIdGet()**](VmwareApi.md#vmwareIdIdGet) | **GET** /vmware/id/{id} | 
[**vmwareIdIdPut()**](VmwareApi.md#vmwareIdIdPut) | **PUT** /vmware/id/{id} | 
[**vmwareMatchDatastoresWithDatasetsPost()**](VmwareApi.md#vmwareMatchDatastoresWithDatasetsPost) | **POST** /vmware/match_datastores_with_datasets | 
[**vmwarePost()**](VmwareApi.md#vmwarePost) | **POST** /vmware | 


## `vmwareDatasetHasVmsPost()`

```php
vmwareDatasetHasVmsPost($vmware_dataset_has_vms)
```



Returns \"true\" if `dataset` is configured with a VMWare snapshot

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vmware_dataset_has_vms = new \RMoore\Truenas\Model\VmwareDatasetHasVms(); // \RMoore\Truenas\Model\VmwareDatasetHasVms

try {
    $apiInstance->vmwareDatasetHasVmsPost($vmware_dataset_has_vms);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareDatasetHasVmsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vmware_dataset_has_vms** | [**\RMoore\Truenas\Model\VmwareDatasetHasVms**](../Model/VmwareDatasetHasVms.md)|  | [optional]

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

## `vmwareGet()`

```php
vmwareGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
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
    $apiInstance->vmwareGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareGet: ', $e->getMessage(), PHP_EOL;
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

## `vmwareGetDatastoresPost()`

```php
vmwareGetDatastoresPost($vmware_get_datastores0)
```



Get datastores from VMWare.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vmware_get_datastores0 = new \RMoore\Truenas\Model\VmwareGetDatastores0(); // \RMoore\Truenas\Model\VmwareGetDatastores0

try {
    $apiInstance->vmwareGetDatastoresPost($vmware_get_datastores0);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareGetDatastoresPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vmware_get_datastores0** | [**\RMoore\Truenas\Model\VmwareGetDatastores0**](../Model/VmwareGetDatastores0.md)|  | [optional]

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

## `vmwareGetVirtualMachinesPost()`

```php
vmwareGetVirtualMachinesPost($body)
```



Returns Virtual Machines on the VMWare host identified by `pk`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->vmwareGetVirtualMachinesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareGetVirtualMachinesPost: ', $e->getMessage(), PHP_EOL;
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

## `vmwareIdIdDelete()`

```php
vmwareIdIdDelete($id)
```



Delete VMWare snapshot of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmwareIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `vmwareIdIdGet()`

```php
vmwareIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmwareIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `vmwareIdIdPut()`

```php
vmwareIdIdPut($id)
```



Update VMWare snapshot of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmwareIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `vmwareMatchDatastoresWithDatasetsPost()`

```php
vmwareMatchDatastoresWithDatasetsPost($vmware_match_datastores_with_datasets0)
```



Requests datastores from vCenter server and tries to match them with local filesystems.  Returns a list of datastores, a list of local filesystems and guessed relationship between them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vmware_match_datastores_with_datasets0 = new \RMoore\Truenas\Model\VmwareMatchDatastoresWithDatasets0(); // \RMoore\Truenas\Model\VmwareMatchDatastoresWithDatasets0

try {
    $apiInstance->vmwareMatchDatastoresWithDatasetsPost($vmware_match_datastores_with_datasets0);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwareMatchDatastoresWithDatasetsPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vmware_match_datastores_with_datasets0** | [**\RMoore\Truenas\Model\VmwareMatchDatastoresWithDatasets0**](../Model/VmwareMatchDatastoresWithDatasets0.md)|  | [optional]

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

## `vmwarePost()`

```php
vmwarePost($vmware_create0)
```



Create VMWare snapshot.  `hostname` is a valid IP address / hostname of a VMWare host. When clustering, this is the vCenter server for the cluster.  `username` and `password` are the credentials used to authorize access to the VMWare host.  `datastore` is a valid datastore name which exists on the VMWare host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmwareApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vmware_create0 = new \RMoore\Truenas\Model\VmwareCreate0(); // \RMoore\Truenas\Model\VmwareCreate0

try {
    $apiInstance->vmwarePost($vmware_create0);
} catch (Exception $e) {
    echo 'Exception when calling VmwareApi->vmwarePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vmware_create0** | [**\RMoore\Truenas\Model\VmwareCreate0**](../Model/VmwareCreate0.md)|  | [optional]

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
