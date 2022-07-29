# RMoore\Truenas\LdapApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ldapGet()**](LdapApi.md#ldapGet) | **GET** /ldap | 
[**ldapGetStateGet()**](LdapApi.md#ldapGetStateGet) | **GET** /ldap/get_state | 
[**ldapPut()**](LdapApi.md#ldapPut) | **PUT** /ldap | 
[**ldapSchemaChoicesGet()**](LdapApi.md#ldapSchemaChoicesGet) | **GET** /ldap/schema_choices | 
[**ldapSslChoicesGet()**](LdapApi.md#ldapSslChoicesGet) | **GET** /ldap/ssl_choices | 


## `ldapGet()`

```php
ldapGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\LdapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ldapGet();
} catch (Exception $e) {
    echo 'Exception when calling LdapApi->ldapGet: ', $e->getMessage(), PHP_EOL;
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

## `ldapGetStateGet()`

```php
ldapGetStateGet()
```



Wrapper function for 'directoryservices.get_state'. Returns only the state of the LDAP service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\LdapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ldapGetStateGet();
} catch (Exception $e) {
    echo 'Exception when calling LdapApi->ldapGetStateGet: ', $e->getMessage(), PHP_EOL;
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

## `ldapPut()`

```php
ldapPut($ldap_update0)
```



`hostname` list of ip addresses or hostnames of LDAP servers with which to communicate in order of preference. Failover only occurs if the current LDAP server is unresponsive.  `basedn` specifies the default base DN to use when performing ldap operations. The base must be specified as a Distinguished Name in LDAP format.  `binddn` specifies the default bind DN to use when performing ldap operations. The bind DN must be specified as a Distinguished Name in LDAP format.  `anonbind` use anonymous authentication.  `ssl` establish SSL/TLS-protected connections to the LDAP server(s). GSSAPI signing is disabled on SSL/TLS-protected connections if kerberos authentication is used.  `certificate` LDAPs client certificate to be used for certificate- based authentication.  `validate_certificates` specifies whether to perform checks on server certificates in a TLS session. If enabled, TLS_REQCERT demand is set. The server certificate is requested. If no certificate is provided or if a bad certificate is provided, the session is immediately terminated. If disabled, TLS_REQCERT allow is set. The server certificate is requested, but all errors are ignored.  `kerberos_realm` in which the server is located. This parameter is only required for SASL GSSAPI authentication to the remote LDAP server.  `kerberos_principal` kerberos principal to use for SASL GSSAPI authentication to the remote server. If `kerberos_realm` is specified without a keytab, then the `binddn` and `bindpw` are used to perform to obtain the ticket necessary for GSSAPI authentication.  `timeout` specifies  a  timeout  (in  seconds) after which calls to synchronous LDAP APIs will abort if no response is received.  `dns_timeout` specifies the timeout (in seconds) after which the poll(2)/select(2) following a connect(2) returns in case of no activity for openldap. For nslcd this specifies the time limit (in seconds) to use when connecting to the directory server. This directly impacts the length of time that the LDAP service tries before failing over to a secondary LDAP URI.  `has_samba_schema` determines whether to configure samba to use the ldapsam passdb backend to provide SMB access to LDAP users. This feature requires the presence of Samba LDAP schema extensions on the remote LDAP server.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\LdapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ldap_update0 = new \RMoore\Truenas\Model\LdapUpdate0(); // \RMoore\Truenas\Model\LdapUpdate0

try {
    $apiInstance->ldapPut($ldap_update0);
} catch (Exception $e) {
    echo 'Exception when calling LdapApi->ldapPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ldap_update0** | [**\RMoore\Truenas\Model\LdapUpdate0**](../Model/LdapUpdate0.md)|  | [optional]

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

## `ldapSchemaChoicesGet()`

```php
ldapSchemaChoicesGet()
```



Returns list of available LDAP schema choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\LdapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ldapSchemaChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling LdapApi->ldapSchemaChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `ldapSslChoicesGet()`

```php
ldapSslChoicesGet()
```



Returns list of SSL choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\LdapApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ldapSslChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling LdapApi->ldapSslChoicesGet: ', $e->getMessage(), PHP_EOL;
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
