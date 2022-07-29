# # ReportingUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpu_in_percentage** | **bool** | If &#x60;cpu_in_percentage&#x60; is &#x60;true&#x60;, collectd reports CPU usage in percentage instead of \&quot;jiffies\&quot;. | [optional]
**graphite** | **string** | &#x60;graphite&#x60; specifies a destination hostname or IP for collectd data sent by the Graphite plugin.. | [optional]
**graphite_separateinstances** | **bool** | &#x60;graphite_separateinstances&#x60; corresponds to collectd SeparateInstances option. | [optional]
**graph_age** | **int** | &#x60;graph_age&#x60; specifies the maximum age of stored graphs in months. &#x60;graph_points&#x60; is the number of points for each hourly, daily, weekly, etc. graph. Changing these requires destroying the current reporting database, so when these fields are changed, an additional &#x60;confirm_rrd_destroy: true&#x60; flag must be present. | [optional]
**graph_points** | **int** | &#x60;graph_age&#x60; specifies the maximum age of stored graphs in months. &#x60;graph_points&#x60; is the number of points for each hourly, daily, weekly, etc. graph. Changing these requires destroying the current reporting database, so when these fields are changed, an additional &#x60;confirm_rrd_destroy: true&#x60; flag must be present. | [optional]
**confirm_rrd_destroy** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
