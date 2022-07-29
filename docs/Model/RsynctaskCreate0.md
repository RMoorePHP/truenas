# # RsynctaskCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**path** | **string** | See the comment in Rsyncmod about &#x60;path&#x60; length limits. | [optional]
**user** | **string** |  | [optional]
**remotehost** | **string** | &#x60;remotehost&#x60; is ip address or hostname of the remote system. If username differs on the remote host, \&quot;username@remote_host\&quot; format should be used. | [optional]
**remoteport** | **int** |  | [optional]
**mode** | **string** | &#x60;mode&#x60; represents different operating mechanisms for Rsync i.e Rsync Module mode / Rsync SSH mode. &#x60;remotemodule&#x60; is the name of remote module, this attribute should be specified when &#x60;mode&#x60; is set to MODULE. | [optional] [default to 'MODULE']
**remotemodule** | **string** | &#x60;remotemodule&#x60; is the name of remote module, this attribute should be specified when &#x60;mode&#x60; is set to MODULE. | [optional]
**remotepath** | **string** | &#x60;remotepath&#x60; specifies the path on the remote system. | [optional]
**validate_rpath** | **bool** | &#x60;validate_rpath&#x60; is a boolean which when sets validates the existence of the remote path. | [optional] [default to true]
**direction** | **string** | &#x60;direction&#x60; specifies if data should be PULLED or PUSHED from the remote system. | [optional] [default to 'PUSH']
**desc** | **string** |  | [optional]
**schedule** | [**\RMoore\Truenas\Model\Schedule**](Schedule.md) |  | [optional]
**recursive** | **bool** |  | [optional]
**times** | **bool** |  | [optional]
**compress** | **bool** | &#x60;compress&#x60; when set reduces the size of the data which is to be transmitted. | [optional]
**archive** | **bool** | &#x60;archive&#x60; when set makes rsync run recursively, preserving symlinks, permissions, modification times, group, and special files. | [optional]
**delete** | **bool** | &#x60;delete&#x60; when set deletes files in the destination directory which do not exist in the source directory. | [optional]
**quiet** | **bool** |  | [optional]
**preserveperm** | **bool** | &#x60;preserveperm&#x60; when set preserves original file permissions. | [optional]
**preserveattr** | **bool** |  | [optional]
**delayupdates** | **bool** |  | [optional]
**extra** | **string[]** |  | [optional]
**enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
