# # SystemGeneralUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**ui_httpsport** | **int** |  | [optional]
**ui_httpsredirect** | **bool** | &#x60;ui_httpsredirect&#x60; when set, makes sure that all HTTP requests are converted to HTTPS requests to better enhance security. | [optional]
**ui_httpsprotocols** | **string[]** |  | [optional]
**ui_port** | **int** |  | [optional]
**ui_address** | **string[]** | &#x60;ui_address&#x60; and &#x60;ui_v6address&#x60; are a list of valid ipv4/ipv6 addresses respectively which the system will listen on. | [optional]
**ui_v6address** | **string[]** | &#x60;ui_address&#x60; and &#x60;ui_v6address&#x60; are a list of valid ipv4/ipv6 addresses respectively which the system will listen on. | [optional]
**ui_consolemsg** | **bool** |  | [optional]
**ui_x_frame_options** | **string** |  | [optional]
**kbdmap** | **string** |  | [optional]
**language** | **string** |  | [optional]
**timezone** | **string** |  | [optional]
**crash_reporting** | **bool** |  | [optional]
**usage_collection** | **bool** |  | [optional]
**birthday** | **string** |  | [optional]
**sysloglevel** | **string** |  | [optional]
**syslogserver** | **string** |  | [optional]
**ui_certificate** | **int** | &#x60;ui_certificate&#x60; is used to enable HTTPS access to the system. If &#x60;ui_certificate&#x60; is not configured on boot, it is automatically created by the system. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
