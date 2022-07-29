# # FilesystemGetacl

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** |  | [optional]
**simplified** | **bool** | &#x60;simplified&#x60; - effect of this depends on ACL type on underlying filesystem. In the case of NFSv4 ACLs simplified permissions and flags are returned for ACL entries where applicable. NFSv4 errata below. In the case of POSIX1E ACls, this setting has no impact on returned ACL. &#x60;simplified&#x60; returns a shortened form of the ACL permset and flags where applicable. If permissions have been simplified, then the &#x60;perms&#x60; object will contain only a single &#x60;BASIC&#x60; key with a string describing the underlying permissions set. | [optional] [default to true]
**resolve_ids** | **bool** | &#x60;resolve_ids&#x60; - adds additional &#x60;who&#x60; key to each ACL entry, that converts the numeric id to a user name or group name. In the case of owner@ and group@ (NFSv4) or USER_OBJ and GROUP_OBJ (POSIX1E), st_uid or st_gid will be converted from stat() return for file. In the case of MASK (POSIX1E), OTHER (POSIX1E), everyone@ (NFSv4), key &#x60;who&#x60; will be included, but set to null. In case of failure to resolve the id to a name, &#x60;who&#x60; will be set to null. This option should only be used if resolving ids to names is required. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
