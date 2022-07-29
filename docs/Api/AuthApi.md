# RMoore\Truenas\AuthApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**authCheckPasswordPost()**](AuthApi.md#authCheckPasswordPost) | **POST** /auth/check_password | 
[**authCheckUserPost()**](AuthApi.md#authCheckUserPost) | **POST** /auth/check_user | 
[**authGenerateTokenPost()**](AuthApi.md#authGenerateTokenPost) | **POST** /auth/generate_token | 
[**authSessionsGet()**](AuthApi.md#authSessionsGet) | **GET** /auth/sessions | 
[**authTwoFactorAuthGet()**](AuthApi.md#authTwoFactorAuthGet) | **GET** /auth/two_factor_auth | 


## `authCheckPasswordPost()`

```php
authCheckPasswordPost($auth_check_password)
```



Verify username and password

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_check_password = new \RMoore\Truenas\Model\AuthCheckPassword(); // \RMoore\Truenas\Model\AuthCheckPassword

try {
    $apiInstance->authCheckPasswordPost($auth_check_password);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authCheckPasswordPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_check_password** | [**\RMoore\Truenas\Model\AuthCheckPassword**](../Model/AuthCheckPassword.md)|  | [optional]

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

## `authCheckUserPost()`

```php
authCheckUserPost($auth_check_user)
```



Verify username and password (this will only validate root user's password and would return `false` for any other user)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_check_user = new \RMoore\Truenas\Model\AuthCheckUser(); // \RMoore\Truenas\Model\AuthCheckUser

try {
    $apiInstance->authCheckUserPost($auth_check_user);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authCheckUserPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_check_user** | [**\RMoore\Truenas\Model\AuthCheckUser**](../Model/AuthCheckUser.md)|  | [optional]

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

## `authGenerateTokenPost()`

```php
authGenerateTokenPost($auth_generate_token)
```



Generate a token to be used for authentication.  `ttl` stands for Time To Live, in seconds. The token will be invalidated if the connection has been inactive for a time greater than this.  `attrs` is a general purpose object/dictionary to hold information about the token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$auth_generate_token = new \RMoore\Truenas\Model\AuthGenerateToken(); // \RMoore\Truenas\Model\AuthGenerateToken

try {
    $apiInstance->authGenerateTokenPost($auth_generate_token);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authGenerateTokenPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **auth_generate_token** | [**\RMoore\Truenas\Model\AuthGenerateToken**](../Model/AuthGenerateToken.md)|  | [optional]

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

## `authSessionsGet()`

```php
authSessionsGet($limit, $offset, $count, $sort)
```



Returns list of active auth sessions.  Example of return value:  [     {         \"id\": \"NyhB1J5vjPjIV82yZ6caU12HLA1boDJcZNWuVQM4hQWuiyUWMGZTz2ElDp7Yk87d\",         \"origin\": \"192.168.0.3:40392\",         \"credentials\": \"TOKEN\",         \"internal\": False,         \"created_at\": {\"$date\": 1545842426070}     } ]  `credentials` can be `UNIX_SOCKET`, `ROOT_TCP_SOCKET`, `TRUENAS_NODE`, `LOGIN_PASSWORD` or `TOKEN`, depending on what authentication method was used.  If you want to exclude all internal connections from the list, call this method with following arguments:  [     [         [\"internal\", \"=\", True]     ] ]  `query-options.extra` can be specified as query parameters with prefixing them with `extra.` prefix. For example, `extra.retrieve_properties=false` will pass `retrieve_properties` as an extra argument to pool/dataset endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthApi(
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
    $apiInstance->authSessionsGet($limit, $offset, $count, $sort);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authSessionsGet: ', $e->getMessage(), PHP_EOL;
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

## `authTwoFactorAuthGet()`

```php
authTwoFactorAuthGet()
```



Returns true if two factor authorization is required for authorizing user's login.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->authTwoFactorAuthGet();
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->authTwoFactorAuthGet: ', $e->getMessage(), PHP_EOL;
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
