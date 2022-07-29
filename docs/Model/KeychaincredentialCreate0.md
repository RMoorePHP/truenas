# # KeychaincredentialCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Every Keychain Credential has a &#x60;name&#x60; which is used to distinguish it from others. | [optional]
**type** | **string** | The following &#x60;type&#x60;s are supported:  * &#x60;SSH_KEY_PAIR&#x60;    Which &#x60;attributes&#x60; are:    * &#x60;private_key&#x60;    * &#x60;public_key&#x60; (which can be omitted and thus automatically derived from private key)    At least one attribute is required. | [optional]
**attributes** | **array<string,mixed>** | The following &#x60;type&#x60;s are supported:  * &#x60;SSH_KEY_PAIR&#x60;    Which &#x60;attributes&#x60; are:    * &#x60;private_key&#x60;    * &#x60;public_key&#x60; (which can be omitted and thus automatically derived from private key)    At least one attribute is required.  * &#x60;SSH_CREDENTIALS&#x60;    Which &#x60;attributes&#x60; are:    * &#x60;host&#x60;    * &#x60;port&#x60; (default 22)    * &#x60;username&#x60; (default root)    * &#x60;private_key&#x60; (Keychain Credential ID)    * &#x60;remote_host_key&#x60; (you can use &#x60;keychaincredential.remote_ssh_host_key_scan&#x60; do discover it)    * &#x60;cipher&#x60;: one of &#x60;STANDARD&#x60;, &#x60;FAST&#x60;, or &#x60;DISABLED&#x60; (last requires special support from both SSH server and      client)    * &#x60;connect_timeout&#x60; (default 10) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
