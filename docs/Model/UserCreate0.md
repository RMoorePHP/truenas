# # UserCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**uid** | **int** | If &#x60;uid&#x60; is not provided it is automatically filled with the next one available. | [optional]
**username** | **string** |  | [optional]
**group** | **int** | &#x60;group&#x60; is required if &#x60;group_create&#x60; is false. | [optional]
**group_create** | **bool** | &#x60;group&#x60; is required if &#x60;group_create&#x60; is false. | [optional] [default to false]
**home** | **string** |  | [optional] [default to '/nonexistent']
**home_mode** | **string** |  | [optional] [default to '755']
**shell** | **string** | Available choices for &#x60;shell&#x60; can be retrieved with &#x60;user.shell_choices&#x60;. | [optional] [default to '/usr/bin/zsh']
**full_name** | **string** |  | [optional]
**email** | **string** |  | [optional]
**password** | **string** | &#x60;password&#x60; is required if &#x60;password_disabled&#x60; is false. | [optional]
**password_disabled** | **bool** | &#x60;password&#x60; is required if &#x60;password_disabled&#x60; is false. | [optional] [default to false]
**locked** | **bool** |  | [optional] [default to false]
**microsoft_account** | **bool** |  | [optional] [default to false]
**smb** | **bool** |  | [optional] [default to true]
**sudo** | **bool** |  | [optional] [default to false]
**sudo_nopasswd** | **bool** |  | [optional] [default to false]
**sudo_commands** | **string[]** |  | [optional]
**sshpubkey** | **string** |  | [optional]
**groups** | **mixed[]** |  | [optional]
**attributes** | **array<string,mixed>** | &#x60;attributes&#x60; is a general-purpose object for storing arbitrary user information. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
