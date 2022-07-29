# # ChartReleaseRollback1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**force_rollback** | **bool** | &#x60;force_rollback&#x60; is a boolean which when set will force rollback operation to move forward even if no snapshots are found. This is only useful when &#x60;rollback_snapshot&#x60; is set. | [optional] [default to false]
**recreate_resources** | **bool** | &#x60;recreate_resources&#x60; is a boolean which will delete and then create the kubernetes resources on rollback of chart release. This should be used with caution as if chart release is consuming immutable objects like a PVC, the rollback operation can&#39;t be performed and will fail as helm tries to do a 3 way patch for rollback. | [optional] [default to false]
**rollback_snapshot** | **bool** | &#x60;rollback_snapshot&#x60; is a boolean value which when set will rollback snapshots of any PVC&#39;s or ix volumes being consumed by the chart release. &#x60;force_rollback&#x60; is a boolean which when set will force rollback operation to move forward even if no snapshots are found. This is only useful when &#x60;rollback_snapshot&#x60; is set. | [optional] [default to true]
**item_version** | **string** | &#x60;item_version&#x60; is version which we want to rollback a chart release to. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
