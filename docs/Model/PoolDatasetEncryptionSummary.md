# # PoolDatasetEncryptionSummary

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Retrieve summary of all encrypted roots under &#x60;id&#x60;. It should be noted that there are 2 keys which show if a recursive unlock operation is done for &#x60;id&#x60;, which dataset will be unlocked and if not why it won&#39;t be unlocked. The keys namely are \&quot;unlock_successful\&quot; and \&quot;unlock_error\&quot;. The former is a boolean value showing if unlock would succeed/fail. The latter is description why it failed if it failed. | [optional]
**encryption_root_summary_options** | [**\RMoore\Truenas\Model\PoolDatasetEncryptionSummary1**](PoolDatasetEncryptionSummary1.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
