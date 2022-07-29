# # PoolResilverUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**begin** | **string** | If &#x60;begin&#x60; time is greater than &#x60;end&#x60; time it means it will rollover the day, e.g. begin &#x3D; \&quot;19:00\&quot;, end &#x3D; \&quot;05:00\&quot; will increase pool resilver priority from 19:00 of one day until 05:00 of the next day. | [optional]
**end** | **string** | If &#x60;begin&#x60; time is greater than &#x60;end&#x60; time it means it will rollover the day, e.g. begin &#x3D; \&quot;19:00\&quot;, end &#x3D; \&quot;05:00\&quot; will increase pool resilver priority from 19:00 of one day until 05:00 of the next day. | [optional]
**enabled** | **bool** |  | [optional]
**weekday** | **int[]** | &#x60;weekday&#x60; follows crontab(5) values 0-7 (0 or 7 is Sun). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
