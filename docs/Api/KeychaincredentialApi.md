# RMoore\Truenas\KeychaincredentialApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**keychaincredentialGenerateSshKeyPairGet()**](KeychaincredentialApi.md#keychaincredentialGenerateSshKeyPairGet) | **GET** /keychaincredential/generate_ssh_key_pair | 
[**keychaincredentialGet()**](KeychaincredentialApi.md#keychaincredentialGet) | **GET** /keychaincredential | 
[**keychaincredentialIdIdDelete()**](KeychaincredentialApi.md#keychaincredentialIdIdDelete) | **DELETE** /keychaincredential/id/{id} | 
[**keychaincredentialIdIdGet()**](KeychaincredentialApi.md#keychaincredentialIdIdGet) | **GET** /keychaincredential/id/{id} | 
[**keychaincredentialIdIdPut()**](KeychaincredentialApi.md#keychaincredentialIdIdPut) | **PUT** /keychaincredential/id/{id} | 
[**keychaincredentialPost()**](KeychaincredentialApi.md#keychaincredentialPost) | **POST** /keychaincredential | 
[**keychaincredentialRemoteSshHostKeyScanPost()**](KeychaincredentialApi.md#keychaincredentialRemoteSshHostKeyScanPost) | **POST** /keychaincredential/remote_ssh_host_key_scan | 
[**keychaincredentialRemoteSshSemiautomaticSetupPost()**](KeychaincredentialApi.md#keychaincredentialRemoteSshSemiautomaticSetupPost) | **POST** /keychaincredential/remote_ssh_semiautomatic_setup | 
[**keychaincredentialSetupSshConnectionPost()**](KeychaincredentialApi.md#keychaincredentialSetupSshConnectionPost) | **POST** /keychaincredential/setup_ssh_connection | 
[**keychaincredentialUsedByPost()**](KeychaincredentialApi.md#keychaincredentialUsedByPost) | **POST** /keychaincredential/used_by | 


## `keychaincredentialGenerateSshKeyPairGet()`

```php
keychaincredentialGenerateSshKeyPairGet()
```



Generate a public/private key pair  Generate a public/private key pair (useful for `SSH_KEY_PAIR` type)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->keychaincredentialGenerateSshKeyPairGet();
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialGenerateSshKeyPairGet: ', $e->getMessage(), PHP_EOL;
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

## `keychaincredentialGet()`

```php
keychaincredentialGet($limit, $offset, $count, $sort)
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


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
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
    $apiInstance->keychaincredentialGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialGet: ', $e->getMessage(), PHP_EOL;
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

## `keychaincredentialIdIdDelete()`

```php
keychaincredentialIdIdDelete($id)
```



Delete Keychain Credential with specific `id`

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->keychaincredentialIdIdDelete($id);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialIdIdDelete: ', $e->getMessage(), PHP_EOL;
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

## `keychaincredentialIdIdGet()`

```php
keychaincredentialIdIdGet($id)
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


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->keychaincredentialIdIdGet($id);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialIdIdGet: ', $e->getMessage(), PHP_EOL;
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

## `keychaincredentialIdIdPut()`

```php
keychaincredentialIdIdPut($id)
```



Update a Keychain Credential with specific `id`  Please note that you can't change `type`  Also you must specify full `attributes` value  See the documentation for `create` method for information on payload contents

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int

try {
    $apiInstance->keychaincredentialIdIdPut($id);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialIdIdPut: ', $e->getMessage(), PHP_EOL;
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

## `keychaincredentialPost()`

```php
keychaincredentialPost($keychaincredential_create0)
```



Create a Keychain Credential  Create a Keychain Credential of any type. Every Keychain Credential has a `name` which is used to distinguish it from others. The following `type`s are supported:  * `SSH_KEY_PAIR`    Which `attributes` are:    * `private_key`    * `public_key` (which can be omitted and thus automatically derived from private key)    At least one attribute is required.   * `SSH_CREDENTIALS`    Which `attributes` are:    * `host`    * `port` (default 22)    * `username` (default root)    * `private_key` (Keychain Credential ID)    * `remote_host_key` (you can use `keychaincredential.remote_ssh_host_key_scan` do discover it)    * `cipher`: one of `STANDARD`, `FAST`, or `DISABLED` (last requires special support from both SSH server and      client)    * `connect_timeout` (default 10)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keychaincredential_create0 = new \RMoore\Truenas\Model\KeychaincredentialCreate0(); // \RMoore\Truenas\Model\KeychaincredentialCreate0

try {
    $apiInstance->keychaincredentialPost($keychaincredential_create0);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keychaincredential_create0** | [**\RMoore\Truenas\Model\KeychaincredentialCreate0**](../Model/KeychaincredentialCreate0.md)|  | [optional]

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

## `keychaincredentialRemoteSshHostKeyScanPost()`

```php
keychaincredentialRemoteSshHostKeyScanPost($keychaincredential_remote_ssh_host_key_scan0)
```



Discover a remote host key  Discover a remote host key (useful for `SSH_CREDENTIALS`)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keychaincredential_remote_ssh_host_key_scan0 = new \RMoore\Truenas\Model\KeychaincredentialRemoteSshHostKeyScan0(); // \RMoore\Truenas\Model\KeychaincredentialRemoteSshHostKeyScan0

try {
    $apiInstance->keychaincredentialRemoteSshHostKeyScanPost($keychaincredential_remote_ssh_host_key_scan0);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialRemoteSshHostKeyScanPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keychaincredential_remote_ssh_host_key_scan0** | [**\RMoore\Truenas\Model\KeychaincredentialRemoteSshHostKeyScan0**](../Model/KeychaincredentialRemoteSshHostKeyScan0.md)|  | [optional]

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

## `keychaincredentialRemoteSshSemiautomaticSetupPost()`

```php
keychaincredentialRemoteSshSemiautomaticSetupPost($keychaincredential_remote_ssh_semiautomatic_setup0)
```



Perform semi-automatic SSH connection setup with other FreeNAS machine  Perform semi-automatic SSH connection setup with other FreeNAS machine. It creates a `SSH_CREDENTIALS` credential with specified `name` that can be used to connect to FreeNAS machine with specified `url` and temporary auth `token`. Other FreeNAS machine adds `private_key` to allowed `username`'s private keys. Other `SSH_CREDENTIALS` attributes such as `cipher` and `connect_timeout` can be specified as well.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keychaincredential_remote_ssh_semiautomatic_setup0 = new \RMoore\Truenas\Model\KeychaincredentialRemoteSshSemiautomaticSetup0(); // \RMoore\Truenas\Model\KeychaincredentialRemoteSshSemiautomaticSetup0

try {
    $apiInstance->keychaincredentialRemoteSshSemiautomaticSetupPost($keychaincredential_remote_ssh_semiautomatic_setup0);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialRemoteSshSemiautomaticSetupPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keychaincredential_remote_ssh_semiautomatic_setup0** | [**\RMoore\Truenas\Model\KeychaincredentialRemoteSshSemiautomaticSetup0**](../Model/KeychaincredentialRemoteSshSemiautomaticSetup0.md)|  | [optional]

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

## `keychaincredentialSetupSshConnectionPost()`

```php
keychaincredentialSetupSshConnectionPost($keychaincredential_setup_ssh_connection0)
```



Creates a SSH Connection performing the following steps:  1) Generating SSH Key Pair if required 2) Setting up SSH Credentials based on `setup_type`  In case (2) fails, it will be ensured that SSH Key Pair generated ( if applicable ) in the process is removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$keychaincredential_setup_ssh_connection0 = new \RMoore\Truenas\Model\KeychaincredentialSetupSshConnection0(); // \RMoore\Truenas\Model\KeychaincredentialSetupSshConnection0

try {
    $apiInstance->keychaincredentialSetupSshConnectionPost($keychaincredential_setup_ssh_connection0);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialSetupSshConnectionPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **keychaincredential_setup_ssh_connection0** | [**\RMoore\Truenas\Model\KeychaincredentialSetupSshConnection0**](../Model/KeychaincredentialSetupSshConnection0.md)|  | [optional]

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

## `keychaincredentialUsedByPost()`

```php
keychaincredentialUsedByPost($body)
```



Returns list of objects that use this credential.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\KeychaincredentialApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = 56; // int

try {
    $apiInstance->keychaincredentialUsedByPost($body);
} catch (Exception $e) {
    echo 'Exception when calling KeychaincredentialApi->keychaincredentialUsedByPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | **int**|  | [optional]

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
