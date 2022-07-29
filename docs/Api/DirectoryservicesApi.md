# RMoore\Truenas\DirectoryservicesApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**directoryservicesCacheRefreshGet()**](DirectoryservicesApi.md#directoryservicesCacheRefreshGet) | **GET** /directoryservices/cache_refresh | 
[**directoryservicesGetStateGet()**](DirectoryservicesApi.md#directoryservicesGetStateGet) | **GET** /directoryservices/get_state | 


## `directoryservicesCacheRefreshGet()`

```php
directoryservicesCacheRefreshGet()
```



This method refreshes the directory services cache for users and groups that is used as a backing for `user.query` and `group.query` methods. The first cache fill in an Active Directory domain may take a significant amount of time to complete and so it is performed as within a job. The most likely situation in which a user may desire to refresh the directory services cache is after new users or groups  to a remote directory server with the intention to have said users or groups appear in the results of the aforementioned account-related methods.  A cache refresh is not required in order to use newly-added users and groups for in permissions and ACL related methods. Likewise, a cache refresh will not resolve issues with users being unable to authenticate to shares.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DirectoryservicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->directoryservicesCacheRefreshGet();
} catch (Exception $e) {
    echo 'Exception when calling DirectoryservicesApi->directoryservicesCacheRefreshGet: ', $e->getMessage(), PHP_EOL;
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

## `directoryservicesGetStateGet()`

```php
directoryservicesGetStateGet()
```



`DISABLED` Directory Service is disabled.  `FAULTED` Directory Service is enabled, but not HEALTHY. Review logs and generated alert messages to debug the issue causing the service to be in a FAULTED state.  `LEAVING` Directory Service is in process of stopping.  `JOINING` Directory Service is in process of starting.  `HEALTHY` Directory Service is enabled, and last status check has passed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\DirectoryservicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->directoryservicesGetStateGet();
} catch (Exception $e) {
    echo 'Exception when calling DirectoryservicesApi->directoryservicesGetStateGet: ', $e->getMessage(), PHP_EOL;
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
