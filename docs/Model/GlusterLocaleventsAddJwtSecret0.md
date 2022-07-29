# # GlusterLocaleventsAddJwtSecret0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**secret** | **string** | Add a &#x60;secret&#x60; key used to encode/decode JWT messages for sending/receiving gluster events. &#x60;secret&#x60; String representing the key to be used             to encode/decode JWT messages | [optional]
**force** | **bool** | &#x60;force&#x60; Boolean if set to True, will forcefully             wipe any existing jwt key for this             peer. Note, if forcefully adding a             new key, the other peers in the TSP             will also need to be sent this key. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
