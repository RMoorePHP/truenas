# RMoore\Truenas\NfsApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**nfsAddPrincipalPost()**](NfsApi.md#nfsAddPrincipalPost) | **POST** /nfs/add_principal | 
[**nfsBindipChoicesGet()**](NfsApi.md#nfsBindipChoicesGet) | **GET** /nfs/bindip_choices | 
[**nfsClientCountGet()**](NfsApi.md#nfsClientCountGet) | **GET** /nfs/client_count | 
[**nfsGet()**](NfsApi.md#nfsGet) | **GET** /nfs | 
[**nfsGetNfs3ClientsGet()**](NfsApi.md#nfsGetNfs3ClientsGet) | **GET** /nfs/get_nfs3_clients | 
[**nfsGetNfs4ClientsGet()**](NfsApi.md#nfsGetNfs4ClientsGet) | **GET** /nfs/get_nfs4_clients | 
[**nfsPut()**](NfsApi.md#nfsPut) | **PUT** /nfs | 


## `nfsAddPrincipalPost()`

```php
nfsAddPrincipalPost($nfs_add_principal0)
```



Use user-provided admin credentials to kinit, add NFS SPN entries to the remote kerberos server, and then append the new entries to our system keytab.  Currently this is only supported in AD environments.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nfs_add_principal0 = new \RMoore\Truenas\Model\NfsAddPrincipal0(); // \RMoore\Truenas\Model\NfsAddPrincipal0

try {
    $apiInstance->nfsAddPrincipalPost($nfs_add_principal0);
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsAddPrincipalPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nfs_add_principal0** | [**\RMoore\Truenas\Model\NfsAddPrincipal0**](../Model/NfsAddPrincipal0.md)|  | [optional]

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

## `nfsBindipChoicesGet()`

```php
nfsBindipChoicesGet()
```



Returns ip choices for NFS service to use

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->nfsBindipChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsBindipChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `nfsClientCountGet()`

```php
nfsClientCountGet()
```



Return currently connected clients count. Count may not be accurate if NFSv3 protocol is in use due to potentially stale rmtab entries.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->nfsClientCountGet();
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsClientCountGet: ', $e->getMessage(), PHP_EOL;
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

## `nfsGet()`

```php
nfsGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->nfsGet();
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsGet: ', $e->getMessage(), PHP_EOL;
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

## `nfsGetNfs3ClientsGet()`

```php
nfsGetNfs3ClientsGet($limit, $offset, $count, $sort)
```



Read contents of rmtab. This information may not be accurate due to stale entries. This is ultimately a limitation of the NFSv3 protocol.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
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
    $apiInstance->nfsGetNfs3ClientsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsGetNfs3ClientsGet: ', $e->getMessage(), PHP_EOL;
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

## `nfsGetNfs4ClientsGet()`

```php
nfsGetNfs4ClientsGet($limit, $offset, $count, $sort)
```



Read information about NFSv4 clients from /proc/fs/nfsd/clients  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
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
    $apiInstance->nfsGetNfs4ClientsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsGetNfs4ClientsGet: ', $e->getMessage(), PHP_EOL;
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

## `nfsPut()`

```php
nfsPut($nfs_update0)
```



Update NFS Service Configuration.  `servers` represents number of servers to create.  When `allow_nonroot` is set, it allows non-root mount requests to be served.  `bindip` is a list of IP's on which NFS will listen for requests. When it is unset/empty, NFS listens on all available addresses.  `v4` when set means that we switch from NFSv3 to NFSv4.  `v4_v3owner` when set means that system will use NFSv3 ownership model for NFSv4.  `v4_krb` will force NFS shares to fail if the Kerberos ticket is unavailable.  `v4_domain` overrides the default DNS domain name for NFSv4.  `mountd_port` specifies the port mountd(8) binds to.  `rpcstatd_port` specifies the port rpc.statd(8) binds to.  `rpclockd_port` specifies the port rpclockd_port(8) binds to.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NfsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$nfs_update0 = new \RMoore\Truenas\Model\NfsUpdate0(); // \RMoore\Truenas\Model\NfsUpdate0

try {
    $apiInstance->nfsPut($nfs_update0);
} catch (Exception $e) {
    echo 'Exception when calling NfsApi->nfsPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **nfs_update0** | [**\RMoore\Truenas\Model\NfsUpdate0**](../Model/NfsUpdate0.md)|  | [optional]

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
