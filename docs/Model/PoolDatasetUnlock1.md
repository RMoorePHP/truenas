# # PoolDatasetUnlock1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**force** | **bool** |  | [optional] [default to false]
**key_file** | **bool** |  | [optional] [default to false]
**recursive** | **bool** |  | [optional] [default to false]
**toggle_attachments** | **bool** | &#x60;toggle_attachments&#x60; controls whether attachments  should be put in action after unlocking dataset(s). Toggling attachments can theoretically lead to service interruption when daemons configurations are reloaded (this should not happen,  and if this happens it should be considered a bug). As TrueNAS does not have a state for resources that should be unlocked but are still locked, disabling this option will put the system into an inconsistent state so it should really never be disabled. | [optional] [default to true]
**datasets** | [**\RMoore\Truenas\Model\Dataset[]**](Dataset.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
