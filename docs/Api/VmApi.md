# RMoore\Truenas\VmApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**vmBootloaderOptionsGet()**](VmApi.md#vmBootloaderOptionsGet) | **GET** /vm/bootloader_options | 
[**vmCpuModelChoicesGet()**](VmApi.md#vmCpuModelChoicesGet) | **GET** /vm/cpu_model_choices | 
[**vmFlagsGet()**](VmApi.md#vmFlagsGet) | **GET** /vm/flags | 
[**vmGet()**](VmApi.md#vmGet) | **GET** /vm | 
[**vmGetAvailableMemoryPost()**](VmApi.md#vmGetAvailableMemoryPost) | **POST** /vm/get_available_memory | 
[**vmGetConsolePost()**](VmApi.md#vmGetConsolePost) | **POST** /vm/get_console | 
[**vmGetDisplayDevicesPost()**](VmApi.md#vmGetDisplayDevicesPost) | **POST** /vm/get_display_devices | 
[**vmGetMemoryUsagePost()**](VmApi.md#vmGetMemoryUsagePost) | **POST** /vm/get_memory_usage | 
[**vmGetVmemoryInUseGet()**](VmApi.md#vmGetVmemoryInUseGet) | **GET** /vm/get_vmemory_in_use | 
[**vmGuestArchitectureAndMachineChoicesGet()**](VmApi.md#vmGuestArchitectureAndMachineChoicesGet) | **GET** /vm/guest_architecture_and_machine_choices | 
[**vmIdIdClonePost()**](VmApi.md#vmIdIdClonePost) | **POST** /vm/id/{id}/clone | 
[**vmIdIdDelete()**](VmApi.md#vmIdIdDelete) | **DELETE** /vm/id/{id} | 
[**vmIdIdGet()**](VmApi.md#vmIdIdGet) | **GET** /vm/id/{id} | 
[**vmIdIdPoweroffPost()**](VmApi.md#vmIdIdPoweroffPost) | **POST** /vm/id/{id}/poweroff | 
[**vmIdIdPut()**](VmApi.md#vmIdIdPut) | **PUT** /vm/id/{id} | 
[**vmIdIdRestartPost()**](VmApi.md#vmIdIdRestartPost) | **POST** /vm/id/{id}/restart | 
[**vmIdIdStartPost()**](VmApi.md#vmIdIdStartPost) | **POST** /vm/id/{id}/start | 
[**vmIdIdStatusPost()**](VmApi.md#vmIdIdStatusPost) | **POST** /vm/id/{id}/status | 
[**vmIdIdStopPost()**](VmApi.md#vmIdIdStopPost) | **POST** /vm/id/{id}/stop | 
[**vmMaximumSupportedVcpusGet()**](VmApi.md#vmMaximumSupportedVcpusGet) | **GET** /vm/maximum_supported_vcpus | 
[**vmPortWizardGet()**](VmApi.md#vmPortWizardGet) | **GET** /vm/port_wizard | 
[**vmPost()**](VmApi.md#vmPost) | **POST** /vm | 
[**vmRandomMacGet()**](VmApi.md#vmRandomMacGet) | **GET** /vm/random_mac | 
[**vmResolutionChoicesGet()**](VmApi.md#vmResolutionChoicesGet) | **GET** /vm/resolution_choices | 
[**vmSupportsVirtualizationGet()**](VmApi.md#vmSupportsVirtualizationGet) | **GET** /vm/supports_virtualization | 
[**vmVirtualizationDetailsGet()**](VmApi.md#vmVirtualizationDetailsGet) | **GET** /vm/virtualization_details | 


## `vmBootloaderOptionsGet()`

```php
vmBootloaderOptionsGet()
```



Supported motherboard firmware options.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmBootloaderOptionsGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmBootloaderOptionsGet: ', $e->getMessage(), PHP_EOL;
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

## `vmCpuModelChoicesGet()`

```php
vmCpuModelChoicesGet()
```



Retrieve CPU Model choices which can be used with a VM guest to emulate the CPU in the guest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmCpuModelChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmCpuModelChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `vmFlagsGet()`

```php
vmFlagsGet()
```



Returns a dictionary with CPU flags for the hypervisor.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmFlagsGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmFlagsGet: ', $e->getMessage(), PHP_EOL;
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

## `vmGet()`

```php
vmGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\VmApi(
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
    $apiInstance->vmGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGet: ', $e->getMessage(), PHP_EOL;
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

## `vmGetAvailableMemoryPost()`

```php
vmGetAvailableMemoryPost($body)
```



Get the current maximum amount of available memory to be allocated for VMs.  If `overcommit` is true only the current used memory of running VMs will be accounted for. If false all memory (including unused) of runnings VMs will be accounted for.  This will include memory shrinking ZFS ARC to the minimum.  Memory is of course a very \"volatile\" resource, values may change abruptly between a second but I deem it good enough to give the user a clue about how much memory is available at the current moment and if a VM should be allowed to be launched.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = True; // bool

try {
    $apiInstance->vmGetAvailableMemoryPost($body);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGetAvailableMemoryPost: ', $e->getMessage(), PHP_EOL;
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

## `vmGetConsolePost()`

```php
vmGetConsolePost($body)
```



Get the console device from a given guest.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->vmGetConsolePost($body);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGetConsolePost: ', $e->getMessage(), PHP_EOL;
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

## `vmGetDisplayDevicesPost()`

```php
vmGetDisplayDevicesPost($body)
```



Get the display devices from a given guest. If a display device has password configured, `attributes.password_configured` will be set to `true`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->vmGetDisplayDevicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGetDisplayDevicesPost: ', $e->getMessage(), PHP_EOL;
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

## `vmGetMemoryUsagePost()`

```php
vmGetMemoryUsagePost($body)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->vmGetMemoryUsagePost($body);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGetMemoryUsagePost: ', $e->getMessage(), PHP_EOL;
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

## `vmGetVmemoryInUseGet()`

```php
vmGetVmemoryInUseGet()
```



The total amount of virtual memory in MB used by guests      Returns a dict with the following information:         RNP - Running but not provisioned         PRD - Provisioned but not running         RPRD - Running and provisioned

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmGetVmemoryInUseGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGetVmemoryInUseGet: ', $e->getMessage(), PHP_EOL;
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

## `vmGuestArchitectureAndMachineChoicesGet()`

```php
vmGuestArchitectureAndMachineChoicesGet()
```



Retrieve choices for supported guest architecture types and machine choices.  Keys in the response would be supported guest architecture(s) on the host and their respective values would be supported machine type(s) for the specific architecture on the host.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmGuestArchitectureAndMachineChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmGuestArchitectureAndMachineChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdClonePost()`

```php
vmIdIdClonePost($id)
```



Clone the VM `id`.  `name` is an optional parameter for the cloned VM. If not provided it will append the next number available to the VM name.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdClonePost($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdClonePost: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdDelete()`

```php
vmIdIdDelete($id)
```



Delete a VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdGet()`

```php
vmIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdPoweroffPost()`

```php
vmIdIdPoweroffPost($id)
```



Poweroff a VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdPoweroffPost($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdPoweroffPost: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdPut()`

```php
vmIdIdPut($id)
```



Update all information of a specific VM.  `devices` is a list of virtualized hardware to attach to the virtual machine. If `devices` is not present, no change is made to devices. If either the device list order or data stored by the device changes when the attribute is passed, these actions are taken:  1) If there is no device in the `devices` list which was previously attached to the VM, that device is    removed from the virtual machine. 2) Devices are updated in the `devices` list when they contain a valid `id` attribute that corresponds to    an existing device. 3) Devices that do not have an `id` attribute are created and attached to `id` VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdRestartPost()`

```php
vmIdIdRestartPost($id)
```



Restart a VM.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdRestartPost($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdRestartPost: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdStartPost()`

```php
vmIdIdStartPost($id)
```



Start a VM.  options.overcommit defaults to false, meaning VMs are not allowed to start if there is not enough available memory to hold all configured VMs. If true, VM starts even if there is not enough memory for all configured VMs.  Error codes:      ENOMEM(12): not enough free memory to run the VM without overcommit

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdStartPost($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdStartPost: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdStatusPost()`

```php
vmIdIdStatusPost($id)
```



Get the status of `id` VM.  Returns a dict:     - state, RUNNING or STOPPED     - pid, process id if RUNNING

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdStatusPost($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdStatusPost: ', $e->getMessage(), PHP_EOL;
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

## `vmIdIdStopPost()`

```php
vmIdIdStopPost($id)
```



Stops a VM.  For unresponsive guests who have exceeded the `shutdown_timeout` defined by the user and have become unresponsive, they required to be powered down using `vm.poweroff`. `vm.stop` is only going to send a shutdown signal to the guest and wait the desired `shutdown_timeout` value before tearing down guest vmemory.  `force_after_timeout` when supplied, it will initiate poweroff for the VM forcing it to exit if it has not already stopped within the specified `shutdown_timeout`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->vmIdIdStopPost($id);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmIdIdStopPost: ', $e->getMessage(), PHP_EOL;
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

## `vmMaximumSupportedVcpusGet()`

```php
vmMaximumSupportedVcpusGet()
```



Returns maximum supported VCPU's

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmMaximumSupportedVcpusGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmMaximumSupportedVcpusGet: ', $e->getMessage(), PHP_EOL;
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

## `vmPortWizardGet()`

```php
vmPortWizardGet()
```



It returns the next available Display Server Port and Web Port.  Returns a dict with two keys `port` and `web`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmPortWizardGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmPortWizardGet: ', $e->getMessage(), PHP_EOL;
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

## `vmPost()`

```php
vmPost($vm_create0)
```



Create a Virtual Machine (VM).  `devices` is a list of virtualized hardware to add to the newly created Virtual Machine. Failure to attach a device destroys the VM and any resources allocated by the VM devices.  Maximum of 16 guest virtual CPUs are allowed. By default, every virtual CPU is configured as a separate package. Multiple cores can be configured per CPU by specifying `cores` attributes. `vcpus` specifies total number of CPU sockets. `cores` specifies number of cores per socket. `threads` specifies number of threads per core.  `ensure_display_device` when set ( the default ) will ensure that the guest always has access to a video device. For headless installations like ubuntu server this is required for the guest to operate properly. However for cases where consumer would like to use GPU passthrough and does not want a display device added should set this to `false`.  `arch_type` refers to architecture type and can be specified for the guest. By default the value is `null` and system in this case will choose a reasonable default based on host.  `machine_type` refers to machine type of the guest based on the architecture type selected with `arch_type`. By default the value is `null` and system in this case will choose a reasonable default based on `arch_type` configuration.  `shutdown_timeout` indicates the time in seconds the system waits for the VM to cleanly shutdown. During system shutdown, if the VM hasn't exited after a hardware shutdown signal has been sent by the system within `shutdown_timeout` seconds, system initiates poweroff for the VM to stop it.  `hide_from_msr` is a boolean which when set will hide the KVM hypervisor from standard MSR based discovery and is useful to enable when doing GPU passthrough.  SCALE Angelfish: Specifying `devices` is deprecated and will be removed in next major release.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$vm_create0 = new \RMoore\Truenas\Model\VmCreate0(); // \RMoore\Truenas\Model\VmCreate0

try {
    $apiInstance->vmPost($vm_create0);
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **vm_create0** | [**\RMoore\Truenas\Model\VmCreate0**](../Model/VmCreate0.md)|  | [optional]

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

## `vmRandomMacGet()`

```php
vmRandomMacGet()
```



Create a random mac address.  Returns:     str: with six groups of two hexadecimal digits

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmRandomMacGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmRandomMacGet: ', $e->getMessage(), PHP_EOL;
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

## `vmResolutionChoicesGet()`

```php
vmResolutionChoicesGet()
```



Retrieve supported resolution choices for VM Display devices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmResolutionChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmResolutionChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `vmSupportsVirtualizationGet()`

```php
vmSupportsVirtualizationGet()
```



Returns \"true\" if system supports virtualization, \"false\" otherwise

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmSupportsVirtualizationGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmSupportsVirtualizationGet: ', $e->getMessage(), PHP_EOL;
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

## `vmVirtualizationDetailsGet()`

```php
vmVirtualizationDetailsGet()
```



Retrieve details if virtualization is supported on the system and in case why it's not supported if it isn't.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\VmApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->vmVirtualizationDetailsGet();
} catch (Exception $e) {
    echo 'Exception when calling VmApi->vmVirtualizationDetailsGet: ', $e->getMessage(), PHP_EOL;
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
