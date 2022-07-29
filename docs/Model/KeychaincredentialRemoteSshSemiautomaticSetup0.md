# # KeychaincredentialRemoteSshSemiautomaticSetup0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Perform semi-automatic SSH connection setup with other FreeNAS machine. It creates a &#x60;SSH_CREDENTIALS&#x60; credential with specified &#x60;name&#x60; that can be used to connect to FreeNAS machine with specified &#x60;url&#x60; and temporary auth &#x60;token&#x60;. Other FreeNAS machine adds &#x60;private_key&#x60; to allowed &#x60;username&#x60;&#39;s private keys. Other | [optional]
**url** | **string** | Perform semi-automatic SSH connection setup with other FreeNAS machine. It creates a &#x60;SSH_CREDENTIALS&#x60; credential with specified &#x60;name&#x60; that can be used to connect to FreeNAS machine with specified &#x60;url&#x60; and temporary auth &#x60;token&#x60;. Other FreeNAS machine adds &#x60;private_key&#x60; to allowed &#x60;username&#x60;&#39;s private keys. Other | [optional]
**token** | **string** | Perform semi-automatic SSH connection setup with other FreeNAS machine. It creates a &#x60;SSH_CREDENTIALS&#x60; credential with specified &#x60;name&#x60; that can be used to connect to FreeNAS machine with specified &#x60;url&#x60; and temporary auth &#x60;token&#x60;. Other FreeNAS machine adds &#x60;private_key&#x60; to allowed &#x60;username&#x60;&#39;s private keys. Other | [optional]
**password** | **string** |  | [optional]
**username** | **string** | Perform semi-automatic SSH connection setup with other FreeNAS machine. It creates a &#x60;SSH_CREDENTIALS&#x60; credential with specified &#x60;name&#x60; that can be used to connect to FreeNAS machine with specified &#x60;url&#x60; and temporary auth &#x60;token&#x60;. Other FreeNAS machine adds &#x60;private_key&#x60; to allowed &#x60;username&#x60;&#39;s private keys. Other | [optional] [default to 'root']
**private_key** | **int** | Perform semi-automatic SSH connection setup with other FreeNAS machine. It creates a &#x60;SSH_CREDENTIALS&#x60; credential with specified &#x60;name&#x60; that can be used to connect to FreeNAS machine with specified &#x60;url&#x60; and temporary auth &#x60;token&#x60;. Other FreeNAS machine adds &#x60;private_key&#x60; to allowed &#x60;username&#x60;&#39;s private keys. Other | [optional]
**cipher** | **string** | &#x60;SSH_CREDENTIALS&#x60; attributes such as &#x60;cipher&#x60; and &#x60;connect_timeout&#x60; can be specified as well. | [optional] [default to 'STANDARD']
**connect_timeout** | **int** | &#x60;SSH_CREDENTIALS&#x60; attributes such as &#x60;cipher&#x60; and &#x60;connect_timeout&#x60; can be specified as well. | [optional] [default to 10]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
