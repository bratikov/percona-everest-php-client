# Everest\MonitoringInstancesApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMonitoringInstance()**](MonitoringInstancesApi.md#createMonitoringInstance) | **POST** /monitoring-instances | Create a new monitoring instance object |
| [**deleteMonitoringInstance()**](MonitoringInstancesApi.md#deleteMonitoringInstance) | **DELETE** /monitoring-instances/{name} | Delete the specified Monitoring instance |
| [**getMonitoringInstance()**](MonitoringInstancesApi.md#getMonitoringInstance) | **GET** /monitoring-instances/{name} | Get the specified monitoring instance |
| [**listMonitoringInstances()**](MonitoringInstancesApi.md#listMonitoringInstances) | **GET** /monitoring-instances | List of the created monitoring instances |
| [**updateMonitoringInstance()**](MonitoringInstancesApi.md#updateMonitoringInstance) | **PATCH** /monitoring-instances/{name} | Update the specified Monitoring instance |


## `createMonitoringInstance()`

```php
createMonitoringInstance($monitoringInstanceCreateParams): \Everest\Model\MonitoringInstanceBaseWithName
```

Create a new monitoring instance object

A monitoring instance object requires `type` to be set. Based on the `type` the respective key with configuration needs to be set. Such as, if `type: pmm`, then `pmm` key needs to be provided with a configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\MonitoringInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$monitoringInstanceCreateParams = new \Everest\Model\MonitoringInstanceCreateParams(); // \Everest\Model\MonitoringInstanceCreateParams | The Monitoring instance object to be created

try {
    $result = $apiInstance->createMonitoringInstance($monitoringInstanceCreateParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringInstancesApi->createMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **monitoringInstanceCreateParams** | [**\Everest\Model\MonitoringInstanceCreateParams**](../Model/MonitoringInstanceCreateParams.md)| The Monitoring instance object to be created | |

### Return type

[**\Everest\Model\MonitoringInstanceBaseWithName**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMonitoringInstance()`

```php
deleteMonitoringInstance($name)
```

Delete the specified Monitoring instance

Delete the specified Monitoring instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\MonitoringInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the monitoring instance

try {
    $apiInstance->deleteMonitoringInstance($name);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringInstancesApi->deleteMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the monitoring instance | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonitoringInstance()`

```php
getMonitoringInstance($name): \Everest\Model\MonitoringInstanceBaseWithName
```

Get the specified monitoring instance

Get the specified monitoring instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\MonitoringInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the Monitoring instance

try {
    $result = $apiInstance->getMonitoringInstance($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringInstancesApi->getMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the Monitoring instance | |

### Return type

[**\Everest\Model\MonitoringInstanceBaseWithName**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMonitoringInstances()`

```php
listMonitoringInstances(): \Everest\Model\MonitoringInstance[]
```

List of the created monitoring instances

List of the created monitoring instances

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\MonitoringInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listMonitoringInstances();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringInstancesApi->listMonitoringInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\MonitoringInstance[]**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMonitoringInstance()`

```php
updateMonitoringInstance($name, $monitoringInstanceUpdateParams): \Everest\Model\MonitoringInstanceBaseWithName
```

Update the specified Monitoring instance

Update the specified Monitoring instance

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\MonitoringInstancesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the monitoring instance
$monitoringInstanceUpdateParams = new \Everest\Model\MonitoringInstanceUpdateParams(); // \Everest\Model\MonitoringInstanceUpdateParams | The monitoring instance object to be updated.

try {
    $result = $apiInstance->updateMonitoringInstance($name, $monitoringInstanceUpdateParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringInstancesApi->updateMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the monitoring instance | |
| **monitoringInstanceUpdateParams** | [**\Everest\Model\MonitoringInstanceUpdateParams**](../Model/MonitoringInstanceUpdateParams.md)| The monitoring instance object to be updated. | |

### Return type

[**\Everest\Model\MonitoringInstanceBaseWithName**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
