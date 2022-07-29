# RMoore\Truenas\MailApi

All URIs are relative to https://truenas.local/api/v2.0.

Method | HTTP request | Description
------------- | ------------- | -------------
[**mailGet()**](MailApi.md#mailGet) | **GET** /mail | 
[**mailPut()**](MailApi.md#mailPut) | **PUT** /mail | 
[**mailSendPost()**](MailApi.md#mailSendPost) | **POST** /mail/send | 


## `mailGet()`

```php
mailGet()
```





### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $apiInstance->mailGet();
} catch (Exception $e) {
    echo 'Exception when calling MailApi->mailGet: ', $e->getMessage(), PHP_EOL;
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

## `mailPut()`

```php
mailPut($mail_update0)
```



Update Mail Service Configuration.  `fromemail` is used as a sending address which the mail server will use for sending emails.  `outgoingserver` is the hostname or IP address of SMTP server used for sending an email.  `security` is type of encryption desired.  `smtp` is a boolean value which when set indicates that SMTP authentication has been enabled and `user`/`pass` are required attributes now.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_update0 = new \RMoore\Truenas\Model\MailUpdate0(); // \RMoore\Truenas\Model\MailUpdate0

try {
    $apiInstance->mailPut($mail_update0);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->mailPut: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mail_update0** | [**\RMoore\Truenas\Model\MailUpdate0**](../Model/MailUpdate0.md)|  | [optional]

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

## `mailSendPost()`

```php
mailSendPost($mail_send)
```



Sends mail using configured mail settings.  `text` will be formatted to HTML using Markdown and rendered using default E-Mail template. You can put your own HTML using `html`. If `html` is null, no HTML MIME part will be added to E-Mail.  If `attachments` is true, a list compromised of the following dict is required via HTTP upload:   - headers(list)     - name(str)     - value(str)     - params(dict)   - content (str)  [  {   \"headers\": [    {     \"name\": \"Content-Transfer-Encoding\",     \"value\": \"base64\"    },    {     \"name\": \"Content-Type\",     \"value\": \"application/octet-stream\",     \"params\": {      \"name\": \"test.txt\"     }    }   ],   \"content\": \"dGVzdAo=\"  } ]  A file might be uploaded to this endpoint. To upload a file, please send a multipart request with two parts. The first, named `data`, should contain a JSON-encoded payload, and the second, named `file`, should contain an uploaded file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure HTTP basic authorization: basic
$config = RMoore\Truenas\Configuration::getDefaultConfiguration()
              ->setUsername('YOUR_USERNAME')
              ->setPassword('YOUR_PASSWORD');


$apiInstance = new RMoore\Truenas\Api\MailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$mail_send = new \RMoore\Truenas\Model\MailSend(); // \RMoore\Truenas\Model\MailSend

try {
    $apiInstance->mailSendPost($mail_send);
} catch (Exception $e) {
    echo 'Exception when calling MailApi->mailSendPost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **mail_send** | [**\RMoore\Truenas\Model\MailSend**](../Model/MailSend.md)|  | [optional]

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
