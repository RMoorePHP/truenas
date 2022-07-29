# # SharingSmbCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**purpose** | **string** | &#x60;purpose&#x60; applies common configuration presets depending on intended purpose. | [optional] [default to 'DEFAULT_SHARE']
**path** | **string** | &#x60;path&#x60; path to export over the SMB protocol. If server is clustered, then this path will be relative to the &#x60;cluster_volname&#x60;. | [optional]
**path_suffix** | **string** |  | [optional] [default to '']
**home** | **bool** |  | [optional] [default to false]
**name** | **string** |  | [optional]
**comment** | **string** |  | [optional] [default to '']
**ro** | **bool** | &#x60;ro&#x60; when enabled, prohibits write access to the share. | [optional] [default to false]
**browsable** | **bool** |  | [optional] [default to true]
**timemachine** | **bool** | &#x60;timemachine&#x60; when set, enables Time Machine backups for this share. | [optional] [default to false]
**timemachine_quota** | **int** |  | [optional] [default to 0]
**recyclebin** | **bool** |  | [optional] [default to false]
**guestok** | **bool** | &#x60;guestok&#x60; when enabled, allows access to this share without a password. | [optional] [default to false]
**abe** | **bool** |  | [optional] [default to false]
**hostsallow** | **mixed[]** | &#x60;hostsallow&#x60; is a list of hostnames / IP addresses which have access to this share. &#x60;hostsdeny&#x60; is a list of hostnames / IP addresses which are not allowed access to this share. If a handful of hostnames are to be only allowed access, &#x60;hostsdeny&#x60; can be passed \&quot;ALL\&quot; which means that it will deny access to ALL hostnames except for the ones which have been listed in &#x60;hostsallow&#x60;. | [optional]
**hostsdeny** | **mixed[]** | &#x60;hostsdeny&#x60; is a list of hostnames / IP addresses which are not allowed access to this share. If a handful of hostnames are to be only allowed access, &#x60;hostsdeny&#x60; can be passed \&quot;ALL\&quot; which means that it will deny access to ALL hostnames except for the ones which have been listed in &#x60;hostsallow&#x60;. | [optional]
**aapl_name_mangling** | **bool** |  | [optional] [default to false]
**acl** | **bool** | &#x60;acl&#x60; enables support for storing the SMB Security Descriptor as a Filesystem ACL. | [optional] [default to true]
**durablehandle** | **bool** |  | [optional] [default to true]
**shadowcopy** | **bool** | &#x60;shadowcopy&#x60; enables support for the volume shadow copy service. | [optional] [default to true]
**streams** | **bool** | &#x60;streams&#x60; enables support for storing alternate datastreams as filesystem extended attributes. | [optional] [default to true]
**fsrvp** | **bool** | &#x60;fsrvp&#x60; enables support for the filesystem remote VSS protocol. This allows clients to create ZFS snapshots through RPC. | [optional] [default to false]
**auxsmbconf** | **string** |  | [optional] [default to '']
**enabled** | **bool** |  | [optional] [default to true]
**cluster_volname** | **string** | &#x60;path&#x60; path to export over the SMB protocol. If server is clustered, then this path will be relative to the &#x60;cluster_volname&#x60;. | [optional] [default to '']
**afp** | **bool** |  | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
