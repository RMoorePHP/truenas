# RMoore\Truenas\FailoverApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**failoverBecomePassiveGet()**](FailoverApi.md#failoverBecomePassiveGet) | **GET** /failover/become_passive | 
[**failoverCallRemotePost()**](FailoverApi.md#failoverCallRemotePost) | **POST** /failover/call_remote | 
[**failoverControlPost()**](FailoverApi.md#failoverControlPost) | **POST** /failover/control | 
[**failoverForceMasterGet()**](FailoverApi.md#failoverForceMasterGet) | **GET** /failover/force_master | 
[**failoverGet()**](FailoverApi.md#failoverGet) | **GET** /failover | 
[**failoverHardwareGet()**](FailoverApi.md#failoverHardwareGet) | **GET** /failover/hardware | 
[**failoverInProgressGet()**](FailoverApi.md#failoverInProgressGet) | **GET** /failover/in_progress | 
[**failoverLicensedGet()**](FailoverApi.md#failoverLicensedGet) | **GET** /failover/licensed | 
[**failoverNodeGet()**](FailoverApi.md#failoverNodeGet) | **GET** /failover/node | 
[**failoverPut()**](FailoverApi.md#failoverPut) | **PUT** /failover | 
[**failoverStatusGet()**](FailoverApi.md#failoverStatusGet) | **GET** /failover/status | 
[**failoverSyncFromPeerGet()**](FailoverApi.md#failoverSyncFromPeerGet) | **GET** /failover/sync_from_peer | 
[**failoverSyncToPeerPost()**](FailoverApi.md#failoverSyncToPeerPost) | **POST** /failover/sync_to_peer | 
[**failoverUnlockPost()**](FailoverApi.md#failoverUnlockPost) | **POST** /failover/unlock | 
[**failoverUpgradeFinishGet()**](FailoverApi.md#failoverUpgradeFinishGet) | **GET** /failover/upgrade_finish | 
[**failoverUpgradePendingGet()**](FailoverApi.md#failoverUpgradePendingGet) | **GET** /failover/upgrade_pending | 
[**failoverUpgradePost()**](FailoverApi.md#failoverUpgradePost) | **POST** /failover/upgrade | 


## `failoverBecomePassiveGet()`

```php
failoverBecomePassiveGet()
```



Restart the keepavlived service which will cause any VIP addresses on this controller to be migrated to the other controller. This will cause a failover event if run on the master controller. If this is run on the passive controller it will do 1 of 2 things:  1: if there are no VIP(s) on the passive controller, then this will     do nothing. 2: if there are VIP(s) on the passive controller, then the VIP(s)     will be migrated to the active controller. A failover event     will be triggered but it will do nothing since the active will     already have the zpool(s) imported.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverBecomePassiveGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverBecomePassiveGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverCallRemotePost()`

```php
failoverCallRemotePost($failover_call_remote)
```



Call a method in the other node.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failover_call_remote = new \RMoore\Truenas\Model\FailoverCallRemote(); // \RMoore\Truenas\Model\FailoverCallRemote

try {
    $apiInstance->failoverCallRemotePost($failover_call_remote);
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverCallRemotePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failover_call_remote** | [**\RMoore\Truenas\Model\FailoverCallRemote**](../Model/FailoverCallRemote.md)|  | [optional]

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

## `failoverControlPost()`

```php
failoverControlPost($failover_control)
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failover_control = new \RMoore\Truenas\Model\FailoverControl(); // \RMoore\Truenas\Model\FailoverControl

try {
    $apiInstance->failoverControlPost($failover_control);
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverControlPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failover_control** | [**\RMoore\Truenas\Model\FailoverControl**](../Model/FailoverControl.md)|  | [optional]

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

## `failoverForceMasterGet()`

```php
failoverForceMasterGet()
```



Force this controller to become MASTER, if it's not already.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverForceMasterGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverForceMasterGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverGet()`

```php
failoverGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverHardwareGet()`

```php
failoverHardwareGet()
```



Returns the hardware type for an HA system.   ECHOSTREAM   ECHOWARP   PUMA   BHYVE   MANUAL

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverHardwareGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverHardwareGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverInProgressGet()`

```php
failoverInProgressGet()
```



Returns True if there is an ongoing failover event.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverInProgressGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverInProgressGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverLicensedGet()`

```php
failoverLicensedGet()
```



Checks whether this instance is licensed as a HA unit.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverLicensedGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverLicensedGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverNodeGet()`

```php
failoverNodeGet()
```



Returns the slot position in the chassis that the controller is located.   A - First node   B - Seconde Node   MANUAL - slot position in chassis could not be determined

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverNodeGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverNodeGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverPut()`

```php
failoverPut($failover_update0)
```



Update failover state.  `disabled` When true indicates that HA will be disabled. `master`  Marks the particular node in the chassis as the master node.             The standby node will have the opposite value.  `timeout` is the time to WAIT until a failover occurs when a network     event occurs on an interface that is marked critical for failover AND     HA is enabled and working appropriately.      The default time to wait is 2 seconds.     **NOTE**         This setting does NOT effect the `disabled` or `master` parameters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failover_update0 = new \RMoore\Truenas\Model\FailoverUpdate0(); // \RMoore\Truenas\Model\FailoverUpdate0

try {
    $apiInstance->failoverPut($failover_update0);
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failover_update0** | [**\RMoore\Truenas\Model\FailoverUpdate0**](../Model/FailoverUpdate0.md)|  | [optional]

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

## `failoverStatusGet()`

```php
failoverStatusGet()
```



Get the current HA status.  Returns:     MASTER     BACKUP     ELECTING     IMPORTING     ERROR     SINGLE

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverStatusGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverStatusGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverSyncFromPeerGet()`

```php
failoverSyncFromPeerGet()
```



Sync database and files from the other controller.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverSyncFromPeerGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverSyncFromPeerGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverSyncToPeerPost()`

```php
failoverSyncToPeerPost($failover_sync_to_peer0)
```



Sync database and files to the other controller.  `reboot` as true will reboot the other controller after syncing.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failover_sync_to_peer0 = new \RMoore\Truenas\Model\FailoverSyncToPeer0(); // \RMoore\Truenas\Model\FailoverSyncToPeer0

try {
    $apiInstance->failoverSyncToPeerPost($failover_sync_to_peer0);
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverSyncToPeerPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failover_sync_to_peer0** | [**\RMoore\Truenas\Model\FailoverSyncToPeer0**](../Model/FailoverSyncToPeer0.md)|  | [optional]

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

## `failoverUnlockPost()`

```php
failoverUnlockPost($failover_unlock0)
```



Unlock datasets in HA, syncing passphrase between controllers and forcing this controller to be MASTER importing the pools.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failover_unlock0 = new \RMoore\Truenas\Model\FailoverUnlock0(); // \RMoore\Truenas\Model\FailoverUnlock0

try {
    $apiInstance->failoverUnlockPost($failover_unlock0);
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverUnlockPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failover_unlock0** | [**\RMoore\Truenas\Model\FailoverUnlock0**](../Model/FailoverUnlock0.md)|  | [optional]

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

## `failoverUpgradeFinishGet()`

```php
failoverUpgradeFinishGet()
```



Perform the last stage of an HA upgrade.  This will activate the new boot environment on the Standby Controller and reboot it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverUpgradeFinishGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverUpgradeFinishGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverUpgradePendingGet()`

```php
failoverUpgradePendingGet()
```



Verify if HA upgrade is pending.  `upgrade_finish` needs to be called to finish the HA upgrade process if this method returns true.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->failoverUpgradePendingGet();
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverUpgradePendingGet: ', $e->getMessage(), PHP_EOL;
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

## `failoverUpgradePost()`

```php
failoverUpgradePost($failover_upgrade0)
```



Upgrades both controllers.  Files will be downloaded to the Active Controller and then transferred to the Standby Controller.  Upgrade process will start concurrently on both nodes.  Once both upgrades are applied, the Standby Controller will reboot. This job will wait for that job to complete before finalizing.  A file might be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FailoverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$failover_upgrade0 = new \RMoore\Truenas\Model\FailoverUpgrade0(); // \RMoore\Truenas\Model\FailoverUpgrade0

try {
    $apiInstance->failoverUpgradePost($failover_upgrade0);
} catch (Exception $e) {
    echo 'Exception when calling FailoverApi->failoverUpgradePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **failover_upgrade0** | [**\RMoore\Truenas\Model\FailoverUpgrade0**](../Model/FailoverUpgrade0.md)|  | [optional]

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
