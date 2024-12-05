# Everest\DatabaseEngineApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getDatabaseEngine()**](DatabaseEngineApi.md#getDatabaseEngine) | **GET** /namespaces/{namespace}/database-engines/{name} | Get the specified database engine |
| [**listDatabaseEngines()**](DatabaseEngineApi.md#listDatabaseEngines) | **GET** /namespaces/{namespace}/database-engines | List of the available database engines |
| [**updateDatabaseEngine()**](DatabaseEngineApi.md#updateDatabaseEngine) | **PUT** /namespaces/{namespace}/database-engines/{name} | Update the specified database engine |


## `getDatabaseEngine()`

```php
getDatabaseEngine($namespace, $name): \Everest\Model\DatabaseEngine
```

Get the specified database engine

Get the specified database engine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database engine

try {
    $result = $apiInstance->getDatabaseEngine($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseEngineApi->getDatabaseEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database engine | |

### Return type

[**\Everest\Model\DatabaseEngine**](../Model/DatabaseEngine.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabaseEngines()`

```php
listDatabaseEngines($namespace): \Everest\Model\DatabaseEngineList
```

List of the available database engines

List of available database engines

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace

try {
    $result = $apiInstance->listDatabaseEngines($namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseEngineApi->listDatabaseEngines: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |

### Return type

[**\Everest\Model\DatabaseEngineList**](../Model/DatabaseEngineList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDatabaseEngine()`

```php
updateDatabaseEngine($namespace, $name, $databaseEngine): \Everest\Model\DatabaseEngine
```

Update the specified database engine

Update the specified database engine

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database engine
$databaseEngine = new \Everest\Model\DatabaseEngine(); // \Everest\Model\DatabaseEngine | The database cluster object to be updated

try {
    $result = $apiInstance->updateDatabaseEngine($namespace, $name, $databaseEngine);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseEngineApi->updateDatabaseEngine: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database engine | |
| **databaseEngine** | [**\Everest\Model\DatabaseEngine**](../Model/DatabaseEngine.md)| The database cluster object to be updated | |

### Return type

[**\Everest\Model\DatabaseEngine**](../Model/DatabaseEngine.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
