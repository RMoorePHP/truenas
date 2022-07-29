# RMoore\Truenas\IdmapApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**idmapBackendChoicesGet()**](IdmapApi.md#idmapBackendChoicesGet) | **GET** /idmap/backend_choices | 
[**idmapBackendOptionsGet()**](IdmapApi.md#idmapBackendOptionsGet) | **GET** /idmap/backend_options | 
[**idmapClearIdmapCacheGet()**](IdmapApi.md#idmapClearIdmapCacheGet) | **GET** /idmap/clear_idmap_cache | 
[**idmapGet()**](IdmapApi.md#idmapGet) | **GET** /idmap | 
[**idmapIdIdDelete()**](IdmapApi.md#idmapIdIdDelete) | **DELETE** /idmap/id/{id} | 
[**idmapIdIdGet()**](IdmapApi.md#idmapIdIdGet) | **GET** /idmap/id/{id} | 
[**idmapIdIdPut()**](IdmapApi.md#idmapIdIdPut) | **PUT** /idmap/id/{id} | 
[**idmapOptionsChoicesPost()**](IdmapApi.md#idmapOptionsChoicesPost) | **POST** /idmap/options_choices | 
[**idmapPost()**](IdmapApi.md#idmapPost) | **POST** /idmap | 


## `idmapBackendChoicesGet()`

```php
idmapBackendChoicesGet()
```



Returns array of valid idmap backend choices per directory service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->idmapBackendChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapBackendChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `idmapBackendOptionsGet()`

```php
idmapBackendOptionsGet()
```



This returns full information about idmap backend options. Not all `options` are valid for every backend.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->idmapBackendOptionsGet();
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapBackendOptionsGet: ', $e->getMessage(), PHP_EOL;
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

## `idmapClearIdmapCacheGet()`

```php
idmapClearIdmapCacheGet()
```



Stop samba, remove the winbindd_cache.tdb file, start samba, flush samba's cache. This should be performed after finalizing idmap changes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->idmapClearIdmapCacheGet();
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapClearIdmapCacheGet: ', $e->getMessage(), PHP_EOL;
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

## `idmapGet()`

```php
idmapGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
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
    $apiInstance->idmapGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapGet: ', $e->getMessage(), PHP_EOL;
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

## `idmapIdIdDelete()`

```php
idmapIdIdDelete($id)
```



Delete a domain by id. Deletion of default system domains is not permitted. In case of registry config for clustered server, this will remove all smb4.conf entries for the domain associated with the id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->idmapIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `idmapIdIdGet()`

```php
idmapIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->idmapIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `idmapIdIdPut()`

```php
idmapIdIdPut($id)
```



Update a domain by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->idmapIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `idmapOptionsChoicesPost()`

```php
idmapOptionsChoicesPost($body)
```



Returns a list of supported keys for the specified idmap backend.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->idmapOptionsChoicesPost($body);
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapOptionsChoicesPost: ', $e->getMessage(), PHP_EOL;
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

## `idmapPost()`

```php
idmapPost($idmap_create0)
```



Create a new IDMAP domain. These domains must be unique. This table will be automatically populated after joining an Active Directory domain if \"allow trusted domains\" is set to True in the AD service configuration. There are three default system domains: DS_TYPE_ACTIVEDIRECTORY, DS_TYPE_LDAP, DS_TYPE_DEFAULT_DOMAIN. The system domains correspond with the idmap settings under Active Directory, LDAP, and SMB respectively.  `name` the pre-windows 2000 domain name.  `DNS_domain_name` DNS name of the domain.  `idmap_backend` provides a plugin interface for Winbind to use varying backends to store SID/uid/gid mapping tables. The correct setting depends on the environment in which the NAS is deployed.  `range_low` and `range_high` specify the UID and GID range for which this backend is authoritative.  `certificate_id` references the certificate ID of the SSL certificate to use for certificate-based authentication to a remote LDAP server. This parameter is not supported for all idmap backends as some backends will generate SID to ID mappings algorithmically without causing network traffic.  `options` are additional parameters that are backend-dependent:  `AD` idmap backend options: `unix_primary_group` If True, the primary group membership is fetched from the LDAP attributes (gidNumber). If False, the primary group membership is calculated via the \"primaryGroupID\" LDAP attribute.  `unix_nss_info` if True winbind will retrieve the login shell and home directory from the LDAP attributes. If False or if the AD LDAP entry lacks the SFU attributes the smb4.conf parameters `template shell` and `template homedir` are used.  `schema_mode` Defines the schema that idmap_ad should use when querying Active Directory regarding user and group information. This can be either the RFC2307 schema support included in Windows 2003 R2 or the Service for Unix (SFU) schema. For SFU 3.0 or 3.5 please choose \"SFU\", for SFU 2.0 please choose \"SFU20\". The behavior of primary group membership is controlled by the unix_primary_group option.  `AUTORID` idmap backend options: `readonly` sets the module to read-only mode. No new ranges will be allocated and new mappings will not be created in the idmap pool.  `ignore_builtin` ignores mapping requests for the BUILTIN domain.  `LDAP` idmap backend options: `ldap_base_dn` defines the directory base suffix to use for SID/uid/gid mapping entries.  `ldap_user_dn` defines the user DN to be used for authentication.  `ldap_url` specifies the LDAP server to use for SID/uid/gid map entries.  `ssl` specifies whether to encrypt the LDAP transport for the idmap backend.  `NSS` idmap backend options: `linked_service` specifies the auxiliary directory service ID provider.  `RFC2307` idmap backend options: `domain` specifies the domain for which the idmap backend is being created. Numeric id, short-form domain name, or long-form DNS domain name of the domain may be specified. Entry must be entered as it appears in `idmap.domain`.  `range_low` and `range_high` specify the UID and GID range for which this backend is authoritative.  `ldap_server` defines the type of LDAP server to use. This can either be an LDAP server provided by the Active Directory Domain (ad) or a stand-alone LDAP server.  `bind_path_user` specfies the search base where user objects can be found in the LDAP server.  `bind_path_group` specifies the search base where group objects can be found in the LDAP server.  `user_cn` query cn attribute instead of uid attribute for the user name in LDAP.  `realm` append @realm to cn for groups (and users if user_cn is set) in LDAP queries.  `ldmap_domain` when using the LDAP server in the Active Directory server, this allows one to specify the domain where to access the Active Directory server. This allows using trust relationships while keeping all RFC 2307 records in one place. This parameter is optional, the default is to access the AD server in the current domain to query LDAP records.  `ldap_url` when using a stand-alone LDAP server, this parameter specifies the LDAP URL for accessing the LDAP server.  `ldap_user_dn` defines the user DN to be used for authentication.  `ldap_user_dn_password` is the password to be used for LDAP authentication.  `realm` defines the realm to use in the user and group names. This is only required when using cn_realm together with  a stand-alone ldap server.  `RID` backend options: `sssd_compat` generate idmap low range based on same algorithm that SSSD uses by default.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\IdmapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$idmap_create0 = new \RMoore\Truenas\Model\IdmapCreate0(); // \RMoore\Truenas\Model\IdmapCreate0

try {
    $apiInstance->idmapPost($idmap_create0);
} catch (Exception $e) {
    echo 'Exception when calling IdmapApi->idmapPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **idmap_create0** | [**\RMoore\Truenas\Model\IdmapCreate0**](../Model/IdmapCreate0.md)|  | [optional]

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
