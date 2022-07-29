# # PoolSnapshottaskCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**dataset** | **string** | Create a Periodic Snapshot Task that will take snapshots of specified &#x60;dataset&#x60; at specified &#x60;schedule&#x60;. | [optional]
**recursive** | **bool** | Recursive snapshots can be created if &#x60;recursive&#x60; flag is enabled. You can &#x60;exclude&#x60; specific child datasets or zvols from the snapshot. Snapshots will be automatically destroyed after a certain amount of time, specified by | [optional]
**exclude** | **string[]** | Recursive snapshots can be created if &#x60;recursive&#x60; flag is enabled. You can &#x60;exclude&#x60; specific child datasets or zvols from the snapshot. Snapshots will be automatically destroyed after a certain amount of time, specified by | [optional]
**lifetime_value** | **int** | &#x60;lifetime_value&#x60; and &#x60;lifetime_unit&#x60;. If multiple periodic tasks create snapshots at the same time (for example hourly and daily at 00:00) the snapshot will be kept until the last of these tasks reaches its expiry time. | [optional]
**lifetime_unit** | **string** | &#x60;lifetime_value&#x60; and &#x60;lifetime_unit&#x60;. If multiple periodic tasks create snapshots at the same time (for example hourly and daily at 00:00) the snapshot will be kept until the last of these tasks reaches its expiry time. | [optional]
**naming_schema** | **string** | Snapshots will be named according to &#x60;naming_schema&#x60; which is a &#x60;strftime&#x60;-like template for snapshot name and must contain &#x60;%Y&#x60;, &#x60;%m&#x60;, &#x60;%d&#x60;, &#x60;%H&#x60; and &#x60;%M&#x60;. | [optional]
**schedule** | [**\RMoore\Truenas\Model\Schedule2**](Schedule2.md) |  | [optional]
**allow_empty** | **bool** |  | [optional] [default to true]
**enabled** | **bool** |  | [optional] [default to true]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
