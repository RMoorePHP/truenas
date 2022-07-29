# RMoore\Truenas\ActivedirectoryApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**activedirectoryChangeTrustAccountPwGet()**](ActivedirectoryApi.md#activedirectoryChangeTrustAccountPwGet) | **GET** /activedirectory/change_trust_account_pw | 
[**activedirectoryDomainInfoPost()**](ActivedirectoryApi.md#activedirectoryDomainInfoPost) | **POST** /activedirectory/domain_info | 
[**activedirectoryGet()**](ActivedirectoryApi.md#activedirectoryGet) | **GET** /activedirectory | 
[**activedirectoryGetSpnListGet()**](ActivedirectoryApi.md#activedirectoryGetSpnListGet) | **GET** /activedirectory/get_spn_list | 
[**activedirectoryGetStateGet()**](ActivedirectoryApi.md#activedirectoryGetStateGet) | **GET** /activedirectory/get_state | 
[**activedirectoryLeavePost()**](ActivedirectoryApi.md#activedirectoryLeavePost) | **POST** /activedirectory/leave | 
[**activedirectoryNssInfoChoicesGet()**](ActivedirectoryApi.md#activedirectoryNssInfoChoicesGet) | **GET** /activedirectory/nss_info_choices | 
[**activedirectoryPut()**](ActivedirectoryApi.md#activedirectoryPut) | **PUT** /activedirectory | 
[**activedirectoryStartedGet()**](ActivedirectoryApi.md#activedirectoryStartedGet) | **GET** /activedirectory/started | 


## `activedirectoryChangeTrustAccountPwGet()`

```php
activedirectoryChangeTrustAccountPwGet()
```



Force an update of the AD machine account password. This can be used to refresh the Kerberos principals in the server's system keytab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->activedirectoryChangeTrustAccountPwGet();
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryChangeTrustAccountPwGet: ', $e->getMessage(), PHP_EOL;
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

## `activedirectoryDomainInfoPost()`

```php
activedirectoryDomainInfoPost($body)
```



Returns the following information about the currently joined domain:  `LDAP server` IP address of current LDAP server to which TrueNAS is connected.  `LDAP server name` DNS name of LDAP server to which TrueNAS is connected  `Realm` Kerberos realm  `LDAP port`  `Server time` timestamp.  `KDC server` Kerberos KDC to which TrueNAS is connected  `Server time offset` current time offset from DC.  `Last machine account password change`. timestamp

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 'body_example'; // string

try {
    $apiInstance->activedirectoryDomainInfoPost($body);
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryDomainInfoPost: ', $e->getMessage(), PHP_EOL;
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

## `activedirectoryGet()`

```php
activedirectoryGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->activedirectoryGet();
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryGet: ', $e->getMessage(), PHP_EOL;
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

## `activedirectoryGetSpnListGet()`

```php
activedirectoryGetSpnListGet()
```



Return list of kerberos SPN entries registered for the server's Active Directory computer account. This may not reflect the state of the server's current kerberos keytab.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->activedirectoryGetSpnListGet();
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryGetSpnListGet: ', $e->getMessage(), PHP_EOL;
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

## `activedirectoryGetStateGet()`

```php
activedirectoryGetStateGet()
```



Wrapper function for 'directoryservices.get_state'. Returns only the state of the Active Directory service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->activedirectoryGetStateGet();
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryGetStateGet: ', $e->getMessage(), PHP_EOL;
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

## `activedirectoryLeavePost()`

```php
activedirectoryLeavePost($activedirectory_leave0)
```



Leave Active Directory domain. This will remove computer object from AD and clear relevant configuration data from the NAS. This requires credentials for appropriately-privileged user. Credentials are used to obtain a kerberos ticket, which is used to perform the actual removal from the domain.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activedirectory_leave0 = new \RMoore\Truenas\Model\ActivedirectoryLeave0(); // \RMoore\Truenas\Model\ActivedirectoryLeave0

try {
    $apiInstance->activedirectoryLeavePost($activedirectory_leave0);
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryLeavePost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activedirectory_leave0** | [**\RMoore\Truenas\Model\ActivedirectoryLeave0**](../Model/ActivedirectoryLeave0.md)|  | [optional]

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

## `activedirectoryNssInfoChoicesGet()`

```php
activedirectoryNssInfoChoicesGet()
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


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->activedirectoryNssInfoChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryNssInfoChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `activedirectoryPut()`

```php
activedirectoryPut($activedirectory_update0)
```



Update active directory configuration. `domainname` full DNS domain name of the Active Directory domain.  `bindname` username used to perform the intial domain join.  `bindpw` password used to perform the initial domain join. User- provided credentials are used to obtain a kerberos ticket, which is used to perform the actual domain join.  `verbose_logging` increase logging during the domain join process.  `use_default_domain` controls whether domain users and groups have the pre-windows 2000 domain name prepended to the user account. When enabled, the user appears as \"administrator\" rather than \"EXAMPLEdministrator\"  `allow_trusted_doms` enable support for trusted domains. If this parameter is enabled, then separate idmap backends _must_ be configured for each trusted domain, and the idmap cache should be cleared.  `allow_dns_updates` during the domain join process, automatically generate DNS entries in the AD domain for the NAS. If this is disabled, then a domain administrator must manually add appropriate DNS entries for the NAS. This parameter is recommended for TrueNAS HA servers.  `disable_freenas_cache` disables active caching of AD users and groups. When disabled, only users cached in winbind's internal cache are visible in GUI dropdowns. Disabling active caching is recommended in environments with a large amount of users.  `site` AD site of which the NAS is a member. This parameter is auto- detected during the domain join process. If no AD site is configured for the subnet in which the NAS is configured, then this parameter appears as 'Default-First-Site-Name'. Auto-detection is only performed during the initial domain join.  `kerberos_realm` in which the server is located. This parameter is automatically populated during the initial domain join. If the NAS has an AD site configured and that site has multiple kerberos servers, then the kerberos realm is automatically updated with a site-specific configuration to use those servers. Auto-detection is only performed during initial domain join.  `kerberos_principal` kerberos principal to use for AD-related operations outside of Samba. After intial domain join, this field is updated with the kerberos principal associated with the AD machine account for the NAS.  `nss_info` controls how Winbind retrieves Name Service Information to construct a user's home directory and login shell. This parameter is only effective if the Active Directory Domain Controller supports the Microsoft Services for Unix (SFU) LDAP schema.  `timeout` timeout value for winbind-related operations. This value may need to be increased in  environments with high latencies for communications with domain controllers or a large number of domain controllers. Lowering the value may cause status checks to fail.  `dns_timeout` timeout value for DNS queries during the initial domain join. This value is also set as the NETWORK_TIMEOUT in the ldap config file.  `createcomputer` Active Directory Organizational Unit in which new computer accounts are created.  The OU string is read from top to bottom without RDNs. Slashes (\"/\") are used as delimiters, like `Computers/Servers/NAS`. The backslash (\"\\\") is used to escape characters but not as a separator. Backslashes are interpreted at multiple levels and might require doubling or even quadrupling to take effect.  When this field is blank, new computer accounts are created in the Active Directory default OU.  The Active Directory service is started after a configuration update if the service was initially disabled, and the updated configuration sets `enable` to `True`. The Active Directory service is stopped if `enable` is changed to `False`. If the configuration is updated, but the initial `enable` state is `True`, and remains unchanged, then the samba server is only restarted.  During the domain join, a kerberos keytab for the newly-created AD machine account is generated. It is used for all future LDAP / AD interaction and the user-provided credentials are removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activedirectory_update0 = new \RMoore\Truenas\Model\ActivedirectoryUpdate0(); // \RMoore\Truenas\Model\ActivedirectoryUpdate0

try {
    $apiInstance->activedirectoryPut($activedirectory_update0);
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **activedirectory_update0** | [**\RMoore\Truenas\Model\ActivedirectoryUpdate0**](../Model/ActivedirectoryUpdate0.md)|  | [optional]

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

## `activedirectoryStartedGet()`

```php
activedirectoryStartedGet()
```



Issue a no-effect command to our DC. This checks if our secure channel connection to our domain controller is still alive. It has much less impact than wbinfo -t. Default winbind request timeout is 60 seconds, and can be adjusted by the smb4.conf parameter 'winbind request timeout ='

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\ActivedirectoryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->activedirectoryStartedGet();
} catch (Exception $e) {
    echo 'Exception when calling ActivedirectoryApi->activedirectoryStartedGet: ', $e->getMessage(), PHP_EOL;
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
