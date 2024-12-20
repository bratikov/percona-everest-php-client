# Everest\MonitoringApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createMonitoringInstance()**](MonitoringApi.md#createMonitoringInstance) | **POST** /namespaces/{namespace}/monitoring-instances | Create monitoring instance |
| [**deleteMonitoringInstance()**](MonitoringApi.md#deleteMonitoringInstance) | **DELETE** /namespaces/{namespace}/monitoring-instances/{name} | Delete monitoring instnace |
| [**getMonitoringInstance()**](MonitoringApi.md#getMonitoringInstance) | **GET** /namespaces/{namespace}/monitoring-instances/{name} | Get monitoring instance |
| [**listMonitoringInstances()**](MonitoringApi.md#listMonitoringInstances) | **GET** /namespaces/{namespace}/monitoring-instances | List monitoring instances |
| [**updateMonitoringInstance()**](MonitoringApi.md#updateMonitoringInstance) | **PATCH** /namespaces/{namespace}/monitoring-instances/{name} | Update monitoring instance |


## `createMonitoringInstance()`

```php
createMonitoringInstance($namespace, $monitoringInstanceCreateParams): \Everest\Model\MonitoringInstanceBaseWithName
```

Create monitoring instance

This API creates a new monitoring instance.  A monitoring instance object requires `type` to be set. Based on the `type` the respective key with configuration needs to be set. Such as, if `type: pmm`, then `pmm` key needs to be provided with a configuration.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Namespace of the backup storage
$monitoringInstanceCreateParams = new \Everest\Model\MonitoringInstanceCreateParams(); // \Everest\Model\MonitoringInstanceCreateParams | The Monitoring instance object to be created

try {
    $result = $apiInstance->createMonitoringInstance($namespace, $monitoringInstanceCreateParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->createMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Namespace of the backup storage | |
| **monitoringInstanceCreateParams** | [**\Everest\Model\MonitoringInstanceCreateParams**](../Model/MonitoringInstanceCreateParams.md)| The Monitoring instance object to be created | |

### Return type

[**\Everest\Model\MonitoringInstanceBaseWithName**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteMonitoringInstance()`

```php
deleteMonitoringInstance($name, $namespace)
```

Delete monitoring instnace

This API deletes the monitoring instance specified by the `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the monitoring instance
$namespace = 'namespace_example'; // string | Namespace of the Monitoring instance

try {
    $apiInstance->deleteMonitoringInstance($name, $namespace);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->deleteMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the monitoring instance | |
| **namespace** | **string**| Namespace of the Monitoring instance | |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMonitoringInstance()`

```php
getMonitoringInstance($name, $namespace): \Everest\Model\MonitoringInstanceBaseWithName
```

Get monitoring instance

This API gets the monitoring instance specified by the `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the Monitoring instance
$namespace = 'namespace_example'; // string | Namespace of the Monitoring instance

try {
    $result = $apiInstance->getMonitoringInstance($name, $namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->getMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the Monitoring instance | |
| **namespace** | **string**| Namespace of the Monitoring instance | |

### Return type

[**\Everest\Model\MonitoringInstanceBaseWithName**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listMonitoringInstances()`

```php
listMonitoringInstances($namespace): \Everest\Model\MonitoringInstance[]
```

List monitoring instances

This API lists all monitoring instances in a given namespace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Namespace of the backup storage

try {
    $result = $apiInstance->listMonitoringInstances($namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->listMonitoringInstances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Namespace of the backup storage | |

### Return type

[**\Everest\Model\MonitoringInstance[]**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMonitoringInstance()`

```php
updateMonitoringInstance($name, $namespace, $monitoringInstanceUpdateParams): \Everest\Model\MonitoringInstanceBaseWithName
```

Update monitoring instance

This API updates the monitoring instance specified by the `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\MonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the monitoring instance
$namespace = 'namespace_example'; // string | Namespace of the Monitoring instance
$monitoringInstanceUpdateParams = new \Everest\Model\MonitoringInstanceUpdateParams(); // \Everest\Model\MonitoringInstanceUpdateParams | The monitoring instance object to be updated.

try {
    $result = $apiInstance->updateMonitoringInstance($name, $namespace, $monitoringInstanceUpdateParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MonitoringApi->updateMonitoringInstance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the monitoring instance | |
| **namespace** | **string**| Namespace of the Monitoring instance | |
| **monitoringInstanceUpdateParams** | [**\Everest\Model\MonitoringInstanceUpdateParams**](../Model/MonitoringInstanceUpdateParams.md)| The monitoring instance object to be updated. | |

### Return type

[**\Everest\Model\MonitoringInstanceBaseWithName**](../Model/MonitoringInstanceBaseWithName.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
