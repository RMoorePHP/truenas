# # SystemAdvancedUpdate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**advancedmode** | **bool** |  | [optional]
**autotune** | **bool** | &#x60;autotune&#x60; when enabled executes autotune script which attempts to optimize the system based on the installed hardware. | [optional]
**kdump_enabled** | **bool** |  | [optional]
**boot_scrub** | **int** |  | [optional]
**consolemenu** | **bool** | &#x60;consolemenu&#x60; should be disabled if the menu at console is not desired. It will default to standard login in the console if disabled. | [optional]
**consolemsg** | **bool** | &#x60;consolemsg&#x60; is a deprecated attribute and will be removed in further releases. Please, use &#x60;consolemsg&#x60; attribute in the &#x60;system.general&#x60; plugin. | [optional]
**debugkernel** | **bool** |  | [optional]
**fqdn_syslog** | **bool** |  | [optional]
**motd** | **string** |  | [optional]
**powerdaemon** | **bool** |  | [optional]
**serialconsole** | **bool** |  | [optional]
**serialport** | **string** |  | [optional]
**serialspeed** | **string** |  | [optional]
**swapondrive** | **int** |  | [optional]
**overprovision** | **int** |  | [optional]
**traceback** | **bool** |  | [optional]
**uploadcrash** | **bool** |  | [optional]
**anonstats** | **bool** |  | [optional]
**sed_user** | **string** |  | [optional]
**sysloglevel** | **string** | When &#x60;syslogserver&#x60; is defined, logs of &#x60;sysloglevel&#x60; or above are sent. | [optional]
**syslogserver** | **string** | When &#x60;syslogserver&#x60; is defined, logs of &#x60;sysloglevel&#x60; or above are sent. | [optional]
**syslog_transport** | **string** |  | [optional]
**syslog_tls_certificate** | **int** |  | [optional]
**syslog_tls_certificate_authority** | **int** |  | [optional]
**isolated_gpu_pci_ids** | **string[]** |  | [optional]
**kernel_extra_options** | **string** |  | [optional]
**sed_passwd** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
