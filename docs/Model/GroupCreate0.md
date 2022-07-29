# # GroupCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**gid** | **int** | If &#x60;gid&#x60; is not provided it is automatically filled with the next one available. | [optional]
**name** | **string** |  | [optional]
**smb** | **bool** |  | [optional] [default to true]
**sudo** | **bool** |  | [optional] [default to false]
**sudo_nopasswd** | **bool** |  | [optional] [default to false]
**sudo_commands** | **string[]** |  | [optional]
**allow_duplicate_gid** | **bool** | &#x60;allow_duplicate_gid&#x60; allows distinct group names to share the same gid. | [optional] [default to false]
**users** | **int[]** | &#x60;users&#x60; is a list of user ids (&#x60;id&#x60; attribute from &#x60;user.query&#x60;). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
