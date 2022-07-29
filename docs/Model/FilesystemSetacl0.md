# # FilesystemSetacl0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | &#x60;path&#x60; full path to directory or file. | [optional]
**uid** | **int** | &#x60;uid&#x60; the desired UID of the file user. If set to None (the default), then user is not changed. | [optional]
**gid** | **int** | &#x60;gid&#x60; the desired GID of the file group. If set to None (the default), then group is not changed. | [optional]
**dacl** | [**\RMoore\Truenas\Model\FilesystemSetacl0Dacl**](FilesystemSetacl0Dacl.md) |  | [optional]
**nfs41_flags** | [**\RMoore\Truenas\Model\Nfs41Flags**](Nfs41Flags.md) |  | [optional]
**acltype** | **string** | &#x60;dacl&#x60; ACL entries. Formatting depends on the underlying &#x60;acltype&#x60;. NFS4ACL requires NFSv4 entries. POSIX1e requires POSIX1e entries. | [optional]
**options** | [**\RMoore\Truenas\Model\Options1**](Options1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
