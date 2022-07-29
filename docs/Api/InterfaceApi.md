# RMoore\Truenas\InterfaceApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**interfaceBridgeMembersChoicesPost()**](InterfaceApi.md#interfaceBridgeMembersChoicesPost) | **POST** /interface/bridge_members_choices | 
[**interfaceCheckinGet()**](InterfaceApi.md#interfaceCheckinGet) | **GET** /interface/checkin | 
[**interfaceCheckinWaitingGet()**](InterfaceApi.md#interfaceCheckinWaitingGet) | **GET** /interface/checkin_waiting | 
[**interfaceChoicesPost()**](InterfaceApi.md#interfaceChoicesPost) | **POST** /interface/choices | 
[**interfaceCommitPost()**](InterfaceApi.md#interfaceCommitPost) | **POST** /interface/commit | 
[**interfaceGet()**](InterfaceApi.md#interfaceGet) | **GET** /interface | 
[**interfaceHasPendingChangesGet()**](InterfaceApi.md#interfaceHasPendingChangesGet) | **GET** /interface/has_pending_changes | 
[**interfaceIdIdDelete()**](InterfaceApi.md#interfaceIdIdDelete) | **DELETE** /interface/id/{id} | 
[**interfaceIdIdGet()**](InterfaceApi.md#interfaceIdIdGet) | **GET** /interface/id/{id} | 
[**interfaceIdIdPut()**](InterfaceApi.md#interfaceIdIdPut) | **PUT** /interface/id/{id} | 
[**interfaceIpInUsePost()**](InterfaceApi.md#interfaceIpInUsePost) | **POST** /interface/ip_in_use | 
[**interfaceLacpduRateChoicesGet()**](InterfaceApi.md#interfaceLacpduRateChoicesGet) | **GET** /interface/lacpdu_rate_choices | 
[**interfaceLagPortsChoicesPost()**](InterfaceApi.md#interfaceLagPortsChoicesPost) | **POST** /interface/lag_ports_choices | 
[**interfacePost()**](InterfaceApi.md#interfacePost) | **POST** /interface | 
[**interfaceRollbackGet()**](InterfaceApi.md#interfaceRollbackGet) | **GET** /interface/rollback | 
[**interfaceServicesRestartedOnSyncGet()**](InterfaceApi.md#interfaceServicesRestartedOnSyncGet) | **GET** /interface/services_restarted_on_sync | 
[**interfaceVlanParentInterfaceChoicesGet()**](InterfaceApi.md#interfaceVlanParentInterfaceChoicesGet) | **GET** /interface/vlan_parent_interface_choices | 
[**interfaceXmitHashPolicyChoicesGet()**](InterfaceApi.md#interfaceXmitHashPolicyChoicesGet) | **GET** /interface/xmit_hash_policy_choices | 


## `interfaceBridgeMembersChoicesPost()`

```php
interfaceBridgeMembersChoicesPost($body)
```



Return available interface choices that can be added to a `br` (bridge) interface.  `id` is name of existing bridge interface on the system that will have its member         interfaces included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->interfaceBridgeMembersChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceBridgeMembersChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `interfaceCheckinGet()`

```php
interfaceCheckinGet()
```



After interfaces changes are committed with checkin timeout this method needs to be called within that timeout limit to prevent reverting the changes.  This is to ensure user verifies the changes went as planned and its working.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceCheckinGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceCheckinGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceCheckinWaitingGet()`

```php
interfaceCheckinWaitingGet()
```



Returns whether or not we are waiting user to checkin the applied network changes before they are rolled back. Value is in number of seconds or null.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceCheckinWaitingGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceCheckinWaitingGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceChoicesPost()`

```php
interfaceChoicesPost($interface_choices0)
```



Choices of available network interfaces.  `bridge_members` will include BRIDGE members. `lag_ports` will include LINK_AGGREGATION ports. `vlan_parent` will include VLAN parent interface. `exclude` is a list of interfaces prefix to remove. `include` is a list of interfaces that should not be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interface_choices0 = new \RMoore\Truenas\Model\InterfaceChoices0(); // \RMoore\Truenas\Model\InterfaceChoices0

try {
    $apiInstance->interfaceChoicesPost($interface_choices0);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceChoicesPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interface_choices0** | [**\RMoore\Truenas\Model\InterfaceChoices0**](../Model/InterfaceChoices0.md)|  | [optional]

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

## `interfaceCommitPost()`

```php
interfaceCommitPost($interface_commit0)
```



Commit/apply pending interfaces changes.  `rollback` as true (default) will rollback changes in case they fail to apply. `checkin_timeout` is the time in seconds it will wait for the checkin call to acknowledge the interfaces changes happened as planned from the user. If checkin does not happen within this period of time the changes will get reverted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interface_commit0 = new \RMoore\Truenas\Model\InterfaceCommit0(); // \RMoore\Truenas\Model\InterfaceCommit0

try {
    $apiInstance->interfaceCommitPost($interface_commit0);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceCommitPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interface_commit0** | [**\RMoore\Truenas\Model\InterfaceCommit0**](../Model/InterfaceCommit0.md)|  | [optional]

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

## `interfaceGet()`

```php
interfaceGet($limit, $offset, $count, $sort)
```



Query Interfaces with `query-filters` and `query-options`  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
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
    $apiInstance->interfaceGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceHasPendingChangesGet()`

```php
interfaceHasPendingChangesGet()
```



Returns whether there are pending interfaces changes to be applied or not.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceHasPendingChangesGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceHasPendingChangesGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceIdIdDelete()`

```php
interfaceIdIdDelete($id)
```



Delete Interface of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->interfaceIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `interfaceIdIdGet()`

```php
interfaceIdIdGet($id)
```



Query Interfaces with `query-filters` and `query-options`  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->interfaceIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceIdIdPut()`

```php
interfaceIdIdPut($id)
```



Update Interface of `id`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->interfaceIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `interfaceIpInUsePost()`

```php
interfaceIpInUsePost($interface_ip_in_use0)
```



Get all IPv4 / Ipv6 from all valid interfaces, excluding tap and epair.  `loopback` will return loopback interface addresses.  `any` will return wildcard addresses (0.0.0.0 and ::).  `static` when enabled will ensure we only return static ip's configured.  Returns a list of dicts - eg -  [     {         \"type\": \"INET6\",         \"address\": \"fe80::5054:ff:fe16:4aac\",         \"netmask\": 64     },     {         \"type\": \"INET\",         \"address\": \"192.168.122.148\",         \"netmask\": 24,         \"broadcast\": \"192.168.122.255\"     }, ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interface_ip_in_use0 = new \RMoore\Truenas\Model\InterfaceIpInUse0(); // \RMoore\Truenas\Model\InterfaceIpInUse0

try {
    $apiInstance->interfaceIpInUsePost($interface_ip_in_use0);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceIpInUsePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interface_ip_in_use0** | [**\RMoore\Truenas\Model\InterfaceIpInUse0**](../Model/InterfaceIpInUse0.md)|  | [optional]

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

## `interfaceLacpduRateChoicesGet()`

```php
interfaceLacpduRateChoicesGet()
```



Available lacpdu rate policies for the LACP lagg type interfaces.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceLacpduRateChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceLacpduRateChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceLagPortsChoicesPost()`

```php
interfaceLagPortsChoicesPost($body)
```



Return available interface choices that can be added to a `bond` (lag) interface.  `id` is name of existing bond interface on the system that will have its member         interfaces included.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->interfaceLagPortsChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceLagPortsChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `interfacePost()`

```php
interfacePost($interface_create0)
```



Create virtual interfaces (Link Aggregation, VLAN)  For BRIDGE `type` the following attribute is required: bridge_members.  For LINK_AGGREGATION `type` the following attributes are required: lag_ports, lag_protocol.  For VLAN `type` the following attributes are required: vlan_parent_interface, vlan_tag and vlan_pcp.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$interface_create0 = new \RMoore\Truenas\Model\InterfaceCreate0(); // \RMoore\Truenas\Model\InterfaceCreate0

try {
    $apiInstance->interfacePost($interface_create0);
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfacePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **interface_create0** | [**\RMoore\Truenas\Model\InterfaceCreate0**](../Model/InterfaceCreate0.md)|  | [optional]

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

## `interfaceRollbackGet()`

```php
interfaceRollbackGet()
```



Rollback pending interfaces changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceRollbackGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceRollbackGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceServicesRestartedOnSyncGet()`

```php
interfaceServicesRestartedOnSyncGet()
```



Returns which services will be set to listen on 0.0.0.0 (and, thus, restarted) on sync.  Example result: [     // Samba service will be set ot listen on 0.0.0.0 and restarted because it was set up to listen on     // 192.168.0.1 which is being removed.     {\"type\": \"SYSTEM_SERVICE\", \"service\": \"cifs\", \"ips\": [\"192.168.0.1\"]}, ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceServicesRestartedOnSyncGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceServicesRestartedOnSyncGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceVlanParentInterfaceChoicesGet()`

```php
interfaceVlanParentInterfaceChoicesGet()
```



Return available interface choices for `vlan_parent_interface` attribute.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceVlanParentInterfaceChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceVlanParentInterfaceChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `interfaceXmitHashPolicyChoicesGet()`

```php
interfaceXmitHashPolicyChoicesGet()
```



Available transmit hash policies for the LACP or LOADBALANCE lagg type interfaces.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\InterfaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->interfaceXmitHashPolicyChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling InterfaceApi->interfaceXmitHashPolicyChoicesGet: ', $e->getMessage(), PHP_EOL;
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
