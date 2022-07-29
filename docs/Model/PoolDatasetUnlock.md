# # PoolDatasetUnlock

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unlock &#x60;id&#x60; dataset. If &#x60;id&#x60; dataset is not encrypted an exception will be raised. There is one exception: when &#x60;id&#x60; is a root dataset and &#x60;unlock_options.recursive&#x60; is specified, encryption validation will not be performed for &#x60;id&#x60;. This allow unlocking encrypted children the &#x60;id&#x60; pool. | [optional]
**unlock_options** | [**\RMoore\Truenas\Model\PoolDatasetUnlock1**](PoolDatasetUnlock1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
