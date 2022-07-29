# # SystemNtpserverCreate0

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address** | **string** | &#x60;address&#x60; specifies the hostname/IP address of the NTP server. | [optional]
**burst** | **bool** | &#x60;burst&#x60; when enabled makes sure that if server is reachable, sends a burst of eight packets instead of one. This is designed to improve timekeeping quality with the server command. | [optional] [default to false]
**iburst** | **bool** | &#x60;iburst&#x60; when enabled speeds up the initial synchronization, taking seconds rather than minutes. | [optional] [default to true]
**prefer** | **bool** | &#x60;prefer&#x60; marks the specified server as preferred. When all other things are equal, this host is chosen for synchronization acquisition with the server command. It is recommended that they be used for servers with time monitoring hardware. | [optional] [default to false]
**minpoll** | **int** | &#x60;minpoll&#x60; is minimum polling time in seconds. It must be a power of 2 and less than &#x60;maxpoll&#x60;. &#x60;maxpoll&#x60; is maximum polling time in seconds. It must be a power of 2 and greater than &#x60;minpoll&#x60;. | [optional] [default to 6]
**maxpoll** | **int** | &#x60;minpoll&#x60; is minimum polling time in seconds. It must be a power of 2 and less than &#x60;maxpoll&#x60;. &#x60;maxpoll&#x60; is maximum polling time in seconds. It must be a power of 2 and greater than &#x60;minpoll&#x60;. | [optional] [default to 10]
**force** | **bool** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
