# # VmCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**cpu_mode** | **string** |  | [optional] [default to 'CUSTOM']
**cpu_model** | **string** |  | [optional]
**name** | **string** |  | [optional]
**description** | **string** |  | [optional]
**vcpus** | **int** | Maximum of 16 guest virtual CPUs are allowed. By default, every virtual CPU is configured as a separate package. Multiple cores can be configured per CPU by specifying &#x60;cores&#x60; attributes. &#x60;vcpus&#x60; specifies total number of CPU sockets. &#x60;cores&#x60; specifies number of cores per socket. &#x60;threads&#x60; specifies number of threads per core. | [optional] [default to 1]
**cores** | **int** | Maximum of 16 guest virtual CPUs are allowed. By default, every virtual CPU is configured as a separate package. Multiple cores can be configured per CPU by specifying &#x60;cores&#x60; attributes. &#x60;vcpus&#x60; specifies total number of CPU sockets. &#x60;cores&#x60; specifies number of cores per socket. &#x60;threads&#x60; specifies number of threads per core. | [optional] [default to 1]
**threads** | **int** | Maximum of 16 guest virtual CPUs are allowed. By default, every virtual CPU is configured as a separate package. Multiple cores can be configured per CPU by specifying &#x60;cores&#x60; attributes. &#x60;vcpus&#x60; specifies total number of CPU sockets. &#x60;cores&#x60; specifies number of cores per socket. &#x60;threads&#x60; specifies number of threads per core. | [optional] [default to 1]
**memory** | **int** |  | [optional]
**bootloader** | **string** |  | [optional] [default to 'UEFI']
**devices** | [**\RMoore\Truenas\Model\VmdeviceCreate[]**](VmdeviceCreate.md) | &#x60;devices&#x60; is a list of virtualized hardware to add to the newly created Virtual Machine. Failure to attach a device destroys the VM and any resources allocated by the VM devices. | [optional]
**autostart** | **bool** |  | [optional] [default to true]
**hide_from_msr** | **bool** | &#x60;hide_from_msr&#x60; is a boolean which when set will hide the KVM hypervisor from standard MSR based discovery and is useful to enable when doing GPU passthrough. | [optional] [default to false]
**ensure_display_device** | **bool** | &#x60;ensure_display_device&#x60; when set ( the default ) will ensure that the guest always has access to a video device. For headless installations like ubuntu server this is required for the guest to operate properly. However for cases where consumer would like to use GPU passthrough and does not want a display device added should set this to &#x60;false&#x60;. | [optional] [default to true]
**time** | **string** |  | [optional] [default to 'LOCAL']
**shutdown_timeout** | **int** | &#x60;shutdown_timeout&#x60; indicates the time in seconds the system waits for the VM to cleanly shutdown. During system shutdown, if the VM hasn&#39;t exited after a hardware shutdown signal has been sent by the system within &#x60;shutdown_timeout&#x60; seconds, system initiates poweroff for the VM to stop it. | [optional] [default to 90]
**arch_type** | **string** | &#x60;arch_type&#x60; refers to architecture type and can be specified for the guest. By default the value is &#x60;null&#x60; and system in this case will choose a reasonable default based on host. &#x60;machine_type&#x60; refers to machine type of the guest based on the architecture type selected with &#x60;arch_type&#x60;. By default the value is &#x60;null&#x60; and system in this case will choose a reasonable default based on &#x60;arch_type&#x60; configuration. | [optional]
**machine_type** | **string** | &#x60;machine_type&#x60; refers to machine type of the guest based on the architecture type selected with &#x60;arch_type&#x60;. By default the value is &#x60;null&#x60; and system in this case will choose a reasonable default based on &#x60;arch_type&#x60; configuration. | [optional]
**uuid** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
