# RMoore\Truenas\KmipApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**kmipClearSyncPendingKeysGet()**](KmipApi.md#kmipClearSyncPendingKeysGet) | **GET** /kmip/clear_sync_pending_keys | 
[**kmipGet()**](KmipApi.md#kmipGet) | **GET** /kmip | 
[**kmipKmipSyncPendingGet()**](KmipApi.md#kmipKmipSyncPendingGet) | **GET** /kmip/kmip_sync_pending | 
[**kmipPut()**](KmipApi.md#kmipPut) | **PUT** /kmip | 
[**kmipSslVersionChoicesGet()**](KmipApi.md#kmipSslVersionChoicesGet) | **GET** /kmip/ssl_version_choices | 
[**kmipSyncKeysGet()**](KmipApi.md#kmipSyncKeysGet) | **GET** /kmip/sync_keys | 


## `kmipClearSyncPendingKeysGet()`

```php
kmipClearSyncPendingKeysGet()
```



Clear all keys which are pending to be synced between KMIP server and TN database.  For ZFS/SED keys, we remove the UID from local database with which we are able to retrieve ZFS/SED keys. It should be used with caution.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KmipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kmipClearSyncPendingKeysGet();
} catch (Exception $e) {
    echo 'Exception when calling KmipApi->kmipClearSyncPendingKeysGet: ', $e->getMessage(), PHP_EOL;
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

## `kmipGet()`

```php
kmipGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KmipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kmipGet();
} catch (Exception $e) {
    echo 'Exception when calling KmipApi->kmipGet: ', $e->getMessage(), PHP_EOL;
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

## `kmipKmipSyncPendingGet()`

```php
kmipKmipSyncPendingGet()
```



Returns true or false based on if there are keys which are to be synced from local database to remote KMIP server or vice versa.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KmipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kmipKmipSyncPendingGet();
} catch (Exception $e) {
    echo 'Exception when calling KmipApi->kmipKmipSyncPendingGet: ', $e->getMessage(), PHP_EOL;
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

## `kmipPut()`

```php
kmipPut($kmip_update0)
```



Update KMIP Server Configuration.  System currently authenticates connection with remote KMIP Server with a TLS handshake. `certificate` and `certificate_authority` determine the certs which will be used to initiate the TLS handshake with `server`.  `validate` is enabled by default. When enabled, system will test connection to `server` making sure it's reachable.  `manage_zfs_keys`/`manage_sed_disks` when enabled will sync keys from local database to remote KMIP server. When disabled, if there are any keys left to be retrieved from the KMIP server, it will sync them back to local database.  `enabled` if true, cannot be set to disabled if there are existing keys pending to be synced. However users can still perform this action by enabling `force_clear`.  `ssl_version` can be specified to match the ssl configuration being used by KMIP server.  `change_server` is a boolean field which allows users to migrate data between two KMIP servers. System will first migrate keys from old KMIP server to local database and then migrate the keys from local database to new KMIP server. If it is unable to retrieve all the keys from old server, this will fail. Users can bypass this by enabling `force_clear`.  `force_clear` is a boolean option which when enabled will in this case remove all pending keys to be synced from database. It should be used with extreme caution as users may end up with not having ZFS dataset or SED disks keys leaving them locked forever. It is disabled by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KmipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$kmip_update0 = new \RMoore\Truenas\Model\KmipUpdate0(); // \RMoore\Truenas\Model\KmipUpdate0

try {
    $apiInstance->kmipPut($kmip_update0);
} catch (Exception $e) {
    echo 'Exception when calling KmipApi->kmipPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kmip_update0** | [**\RMoore\Truenas\Model\KmipUpdate0**](../Model/KmipUpdate0.md)|  | [optional]

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

## `kmipSslVersionChoicesGet()`

```php
kmipSslVersionChoicesGet()
```



Retrieve valid SSL version choices to be used when configuring kmip service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KmipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kmipSslVersionChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling KmipApi->kmipSslVersionChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `kmipSyncKeysGet()`

```php
kmipSyncKeysGet()
```



Sync ZFS/SED keys between KMIP Server and TN database.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KmipApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->kmipSyncKeysGet();
} catch (Exception $e) {
    echo 'Exception when calling KmipApi->kmipSyncKeysGet: ', $e->getMessage(), PHP_EOL;
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
