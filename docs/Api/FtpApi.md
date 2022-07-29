# RMoore\Truenas\FtpApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**ftpGet()**](FtpApi.md#ftpGet) | **GET** /ftp | 
[**ftpPut()**](FtpApi.md#ftpPut) | **PUT** /ftp | 


## `ftpGet()`

```php
ftpGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->ftpGet();
} catch (Exception $e) {
    echo 'Exception when calling FtpApi->ftpGet: ', $e->getMessage(), PHP_EOL;
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

## `ftpPut()`

```php
ftpPut($ftp_update0)
```



Update ftp service configuration.  `clients` is an integer value which sets the maximum number of simultaneous clients allowed. It defaults to 32.  `ipconnections` is an integer value which shows the maximum number of connections per IP address. It defaults to 0 which equals to unlimited.  `timeout` is the maximum number of seconds that proftpd will allow clients to stay connected without receiving any data on either the control or data connection.  `timeout_notransfer` is the maximum number of seconds a client is allowed to spend connected, after authentication, without issuing a command which results in creating an active or passive data connection (i.e. sending/receiving a file, or receiving a directory listing).  `rootlogin` is a boolean value which when configured to true enables login as root. This is generally discouraged because of the security risks.  `onlyanonymous` allows anonymous FTP logins with access to the directory specified by `anonpath`.  `banner` is a message displayed to local login users after they successfully authenticate. It is not displayed to anonymous login users.  `filemask` sets the default permissions for newly created files which by default are 077.  `dirmask` sets the default permissions for newly created directories which by default are 077.  `resume` if set allows FTP clients to resume interrupted transfers.  `fxp` if set to true indicates that File eXchange Protocol is enabled. Generally it is discouraged as it makes the server vulnerable to FTP bounce attacks.  `defaultroot` when set ensures that for local users, home directory access is only granted if the user is a member of group wheel.  `ident` is a boolean value which when set to true indicates that IDENT authentication is required. If identd is not running on the client, this can result in timeouts.  `masqaddress` is the public IP address or hostname which is set if FTP clients cannot connect through a NAT device.  `localuserbw` is a positive integer value which indicates maximum upload bandwidth in KB/s for local user. Default of zero indicates unlimited upload bandwidth ( from the FTP server configuration ).  `localuserdlbw` is a positive integer value which indicates maximum download bandwidth in KB/s for local user. Default of zero indicates unlimited download bandwidth ( from the FTP server configuration ).  `anonuserbw` is a positive integer value which indicates maximum upload bandwidth in KB/s for anonymous user. Default of zero indicates unlimited upload bandwidth ( from the FTP server configuration ).  `anonuserdlbw` is a positive integer value which indicates maximum download bandwidth in KB/s for anonymous user. Default of zero indicates unlimited download bandwidth ( from the FTP server configuration ).  `tls` is a boolean value which when set indicates that encrypted connections are enabled. This requires a certificate to be configured first with the certificate service and the id of certificate is passed on in `ssltls_certificate`.  `tls_policy` defines whether the control channel, data channel, both channels, or neither channel of an FTP session must occur over SSL/TLS.  `tls_opt_enable_diags` is a boolean value when set, logs verbosely. This is helpful when troubleshooting a connection.  `options` is a string used to add proftpd(8) parameters not covered by ftp service.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\FtpApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$ftp_update0 = new \RMoore\Truenas\Model\FtpUpdate0(); // \RMoore\Truenas\Model\FtpUpdate0

try {
    $apiInstance->ftpPut($ftp_update0);
} catch (Exception $e) {
    echo 'Exception when calling FtpApi->ftpPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **ftp_update0** | [**\RMoore\Truenas\Model\FtpUpdate0**](../Model/FtpUpdate0.md)|  | [optional]

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
