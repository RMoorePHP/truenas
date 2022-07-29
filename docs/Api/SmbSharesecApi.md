# RMoore\Truenas\SmbSharesecApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**smbSharesecGet()**](SmbSharesecApi.md#smbSharesecGet) | **GET** /smb/sharesec | 
[**smbSharesecGetaclPost()**](SmbSharesecApi.md#smbSharesecGetaclPost) | **POST** /smb/sharesec/getacl | 
[**smbSharesecIdIdDelete()**](SmbSharesecApi.md#smbSharesecIdIdDelete) | **DELETE** /smb/sharesec/id/{id} | 
[**smbSharesecIdIdGet()**](SmbSharesecApi.md#smbSharesecIdIdGet) | **GET** /smb/sharesec/id/{id} | 
[**smbSharesecIdIdPut()**](SmbSharesecApi.md#smbSharesecIdIdPut) | **PUT** /smb/sharesec/id/{id} | 
[**smbSharesecPost()**](SmbSharesecApi.md#smbSharesecPost) | **POST** /smb/sharesec | 
[**smbSharesecSynchronizeAclsGet()**](SmbSharesecApi.md#smbSharesecSynchronizeAclsGet) | **GET** /smb/sharesec/synchronize_acls | 


## `smbSharesecGet()`

```php
smbSharesecGet($limit, $offset, $count, $sort)
```



Use query-filters to search the SMB share ACLs present on server.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
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
    $apiInstance->smbSharesecGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecGet: ', $e->getMessage(), PHP_EOL;
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

## `smbSharesecGetaclPost()`

```php
smbSharesecGetaclPost($smb_sharesec_getacl)
```



View the ACL information for `share_name`. The share ACL is distinct from filesystem ACLs which can be viewed by calling `filesystem.getacl`. `ae_who_name` will appear as `None` if the SMB service is stopped or if winbind is unable  to resolve the SID to a name.  If the `option` `resolve_sids` is set to `False` then the returned ACL will not contain names.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smb_sharesec_getacl = new \RMoore\Truenas\Model\SmbSharesecGetacl(); // \RMoore\Truenas\Model\SmbSharesecGetacl

try {
    $apiInstance->smbSharesecGetaclPost($smb_sharesec_getacl);
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecGetaclPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smb_sharesec_getacl** | [**\RMoore\Truenas\Model\SmbSharesecGetacl**](../Model/SmbSharesecGetacl.md)|  | [optional]

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

## `smbSharesecIdIdDelete()`

```php
smbSharesecIdIdDelete($id)
```



Replace share ACL for the specified SMB share with the samba default ACL of S-1-1-0/FULL (Everyone - Full Control). In this case, access will be fully determined by the underlying filesystem ACLs and smb4.conf parameters governing access control and permissions. Share can be deleted by name or numerical by numerical index.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->smbSharesecIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `smbSharesecIdIdGet()`

```php
smbSharesecIdIdGet($id)
```



Use query-filters to search the SMB share ACLs present on server.  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->smbSharesecIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `smbSharesecIdIdPut()`

```php
smbSharesecIdIdPut($id)
```



Update the ACL on the share specified by the numerical index `id`. Will write changes to both /var/db/system/samba4/share_info.tdb and the configuration file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->smbSharesecIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `smbSharesecPost()`

```php
smbSharesecPost($smb_sharesec_create0)
```



Update the ACL on a given SMB share. Will write changes to both /var/db/system/samba4/share_info.tdb and the configuration file. Since an SMB share will _always_ have an ACL present, there is little distinction between the `create` and `update` methods apart from arguments.  `share_name` - name of SMB share.  `share_acl` a list of ACL entries (dictionaries) with the following keys:  `ae_who_sid` who the ACL entry applies to expressed as a Windows SID  `ae_who_name` who the ACL entry applies to expressed as a name. `ae_who_name` is a dictionary containing the following keys: `domain` that the user is a member of, `name` username in the domain. The domain for local users is the netbios name of the FreeNAS server.  `ae_perm` string representation of the permissions granted to the user or group. `FULL` grants read, write, execute, delete, write acl, and change owner. `CHANGE` grants read, write, execute, and delete. `READ` grants read and execute.  `ae_type` can be ALLOWED or DENIED.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$smb_sharesec_create0 = new \RMoore\Truenas\Model\SmbSharesecCreate0(); // \RMoore\Truenas\Model\SmbSharesecCreate0

try {
    $apiInstance->smbSharesecPost($smb_sharesec_create0);
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **smb_sharesec_create0** | [**\RMoore\Truenas\Model\SmbSharesecCreate0**](../Model/SmbSharesecCreate0.md)|  | [optional]

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

## `smbSharesecSynchronizeAclsGet()`

```php
smbSharesecSynchronizeAclsGet()
```



Synchronize the share ACL stored in the config database with Samba's running configuration as reflected in the share_info.tdb file.  The only situation in which the configuration stored in the database will overwrite samba's running configuration is if share_info.tdb is empty. Samba fakes a single S-1-1-0:ALLOW/0x0/FULL entry in the absence of an entry for a share in share_info.tdb.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\SmbSharesecApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->smbSharesecSynchronizeAclsGet();
} catch (Exception $e) {
    echo 'Exception when calling SmbSharesecApi->smbSharesecSynchronizeAclsGet: ', $e->getMessage(), PHP_EOL;
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
