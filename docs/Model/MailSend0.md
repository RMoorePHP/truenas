# # MailSend0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**subject** | **string** |  | [optional]
**text** | **string** | &#x60;text&#x60; will be formatted to HTML using Markdown and rendered using default E-Mail template. | [optional]
**html** | **string** | You can put your own HTML using &#x60;html&#x60;. If &#x60;html&#x60; is null, no HTML MIME part will be added to E-Mail. | [optional]
**to** | **string[]** |  | [optional]
**cc** | **string[]** |  | [optional]
**interval** | **int** |  | [optional]
**channel** | **string** |  | [optional]
**timeout** | **int** |  | [optional] [default to 300]
**attachments** | **bool** | If &#x60;attachments&#x60; is true, a list compromised of the following dict is required via HTTP upload:   - headers(list)     - name(str)     - value(str)     - params(dict)   - content (str) | [optional] [default to false]
**queue** | **bool** |  | [optional] [default to true]
**extra_headers** | **array<string,mixed>** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
