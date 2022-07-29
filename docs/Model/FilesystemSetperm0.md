# # FilesystemSetperm0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | Set unix permissions on given &#x60;path&#x60;. &#x60;stripacl&#x60; setperm will fail if an extended ACL is present on &#x60;path&#x60;, unless &#x60;stripacl&#x60; is set to True. | [optional]
**mode** | **string** | If &#x60;mode&#x60; is specified then the mode will be applied to the path and files and subdirectories depending on which &#x60;options&#x60; are selected. Mode should be formatted as string representation of octal permissions bits. | [optional]
**uid** | **int** | &#x60;uid&#x60; the desired UID of the file user. If set to None (the default), then user is not changed. | [optional]
**gid** | **int** | &#x60;gid&#x60; the desired GID of the file group. If set to None (the default), then group is not changed. | [optional]
**options** | [**\RMoore\Truenas\Model\Options2**](Options2.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
