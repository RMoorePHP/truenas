# RMoore\Truenas\SmbApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**smbBindipChoicesGet()**](SmbApi.md#smbBindipChoicesGet) | **GET** /smb/bindip_choices | 
[**smbClientCountGet()**](SmbApi.md#smbClientCountGet) | **GET** /smb/client_count | 
[**smbDomainChoicesGet()**](SmbApi.md#smbDomainChoicesGet) | **GET** /smb/domain_choices | 
[**smbGet()**](SmbApi.md#smbGet) | **GET** /smb | 
[**smbGetRemoteAclPost()**](SmbApi.md#smbGetRemoteAclPost) | **POST** /smb/get_remote_acl | 
[**smbPut()**](SmbApi.md#smbPut) | **PUT** /smb | 
[**smbStatusPost()**](SmbApi.md#smbStatusPost) | **POST** /smb/status | 
[**smbUnixcharsetChoicesGet()**](SmbApi.md#smbUnixcharsetChoicesGet) | **GET** /smb/unixcharset_choices | 


## `smbBindipChoicesGet()`

```php
smbBindipChoicesGet()
```



List of valid choices for IP addresses to which to bind the SMB service. Addresses assigned by DHCP are excluded from the results.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smbBindipChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbBindipChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `smbClientCountGet()`

```php
smbClientCountGet()
```



Return currently connected clients count.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smbClientCountGet();
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbClientCountGet: ', $e->getMessage(), PHP_EOL;
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

## `smbDomainChoicesGet()`

```php
smbDomainChoicesGet()
```



List of domains visible to winbindd. Returns empty list if winbindd is stopped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smbDomainChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbDomainChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `smbGet()`

```php
smbGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smbGet();
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbGet: ', $e->getMessage(), PHP_EOL;
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

## `smbGetRemoteAclPost()`

```php
smbGetRemoteAclPost($smb_get_remote_acl0)
```



Retrieves an ACL from a remote SMB server.  `server` IP Address or hostname of the remote server  `share` Share name  `path` path on the remote SMB server. Use \"\" to separate path components  `username` username to use for authentication  `password` password to use for authentication  `use_kerberos` use credentials to get a kerberos ticket for authentication. AD only.  `output_format` format for resulting ACL data. Choices are either 'SMB', which will present the information as a Windows SD or 'LOCAL', which formats the ACL information according local filesystem of the TrueNAS server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smb_get_remote_acl0 = new \RMoore\Truenas\Model\SmbGetRemoteAcl0(); // \RMoore\Truenas\Model\SmbGetRemoteAcl0

try {
    $apiInstance->smbGetRemoteAclPost($smb_get_remote_acl0);
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbGetRemoteAclPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smb_get_remote_acl0** | [**\RMoore\Truenas\Model\SmbGetRemoteAcl0**](../Model/SmbGetRemoteAcl0.md)|  | [optional]

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

## `smbPut()`

```php
smbPut($smb_update0)
```



Update SMB Service Configuration.  `netbiosname` defaults to the original hostname of the system.  `netbiosalias` a list of netbios aliases. If Server is joined to an AD domain, additional Kerberos Service Principal Names will be generated for these aliases.  `workgroup` specifies the NetBIOS workgroup to which the TrueNAS server belongs. This will be automatically set to the correct value during the process of joining an AD domain. `workgroup` and `netbiosname` should have different values.  `enable_smb1` allows legacy SMB clients to connect to the server when enabled.  `aapl_extensions` enables support for SMB2 protocol extensions for MacOS clients. This is not a requirement for MacOS support, but is currently a requirement for time machine support.  `localmaster` when set, determines if the system participates in a browser election.  `guest` attribute is specified to select the account to be used for guest access. It defaults to \"nobody\".  The group specified as the SMB `admin_group` will be automatically added as a foreign group member of S-1-5-32-544 (builtindmins). This will afford the group all privileges granted to a local admin. Any SMB group may be selected (including AD groups).  `ntlmv1_auth` enables a legacy and insecure authentication method, which may be required for legacy or poorly-implemented SMB clients.  `smb_options` smb.conf parameters that are not covered by the above supported configuration options may be added as an smb_option. Not all options are tested or supported, and behavior of smb_options may change between releases. Stability of smb.conf options is not guaranteed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smb_update0 = new \RMoore\Truenas\Model\SmbUpdate0(); // \RMoore\Truenas\Model\SmbUpdate0

try {
    $apiInstance->smbPut($smb_update0);
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smb_update0** | [**\RMoore\Truenas\Model\SmbUpdate0**](../Model/SmbUpdate0.md)|  | [optional]

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

## `smbStatusPost()`

```php
smbStatusPost($smb_status)
```



Returns SMB server status (sessions, open files, locks, notifications).  `info_level` type of information requests. Defaults to ALL.  `status_options` additional options to filter query results. Supported values are as follows: `verbose` gives more verbose status output `fast` causes smbstatus to not check if the status data is valid by checking if the processes that the status data refer to all still exist. This speeds up execution on busy systems and clusters but might display stale data of processes that died without cleaning up properly. `restrict_user` specifies the limits results to the specified user.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smb_status = new \RMoore\Truenas\Model\SmbStatus(); // \RMoore\Truenas\Model\SmbStatus

try {
    $apiInstance->smbStatusPost($smb_status);
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbStatusPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smb_status** | [**\RMoore\Truenas\Model\SmbStatus**](../Model/SmbStatus.md)|  | [optional]

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

## `smbUnixcharsetChoicesGet()`

```php
smbUnixcharsetChoicesGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smbUnixcharsetChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling SmbApi->smbUnixcharsetChoicesGet: ', $e->getMessage(), PHP_EOL;
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
