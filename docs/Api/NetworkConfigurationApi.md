# RMoore\Truenas\NetworkConfigurationApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**networkConfigurationActivityChoicesGet()**](NetworkConfigurationApi.md#networkConfigurationActivityChoicesGet) | **GET** /network/configuration/activity_choices | 
[**networkConfigurationGet()**](NetworkConfigurationApi.md#networkConfigurationGet) | **GET** /network/configuration | 
[**networkConfigurationPut()**](NetworkConfigurationApi.md#networkConfigurationPut) | **PUT** /network/configuration | 


## `networkConfigurationActivityChoicesGet()`

```php
networkConfigurationActivityChoicesGet()
```



Returns allowed/forbidden network activity choices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NetworkConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->networkConfigurationActivityChoicesGet();
} catch (Exception $e) {
    echo 'Exception when calling NetworkConfigurationApi->networkConfigurationActivityChoicesGet: ', $e->getMessage(), PHP_EOL;
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

## `networkConfigurationGet()`

```php
networkConfigurationGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NetworkConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->networkConfigurationGet();
} catch (Exception $e) {
    echo 'Exception when calling NetworkConfigurationApi->networkConfigurationGet: ', $e->getMessage(), PHP_EOL;
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

## `networkConfigurationPut()`

```php
networkConfigurationPut($network_configuration_update0)
```



Update Network Configuration Service configuration.  `ipv4gateway` if set is used instead of the default gateway provided by DHCP.  `nameserver1` is primary DNS server.  `nameserver2` is secondary DNS server.  `nameserver3` is tertiary DNS server.  `httpproxy` attribute must be provided if a proxy is to be used for network operations.  `netwait_enabled` is a boolean attribute which when set indicates that network services will not start at boot unless they are able to ping the addresses listed in `netwait_ip` list.  `service_announcement` determines the broadcast protocols that will be used to advertise the server. `netbios` enables the NetBIOS name server (NBNS), which starts concurrently with the SMB service. SMB clients will only perform NBNS lookups if SMB1 is enabled. NBNS may be required for legacy SMB clients. `mdns` enables multicast DNS service announcements for enabled services. `wsd` enables Web Service Discovery support.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\NetworkConfigurationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$network_configuration_update0 = new \RMoore\Truenas\Model\NetworkConfigurationUpdate0(); // \RMoore\Truenas\Model\NetworkConfigurationUpdate0

try {
    $apiInstance->networkConfigurationPut($network_configuration_update0);
} catch (Exception $e) {
    echo 'Exception when calling NetworkConfigurationApi->networkConfigurationPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **network_configuration_update0** | [**\RMoore\Truenas\Model\NetworkConfigurationUpdate0**](../Model/NetworkConfigurationUpdate0.md)|  | [optional]

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
