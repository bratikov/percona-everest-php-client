# Everest\UpgradeDatabaseEngineOperatorApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**upgradeDatabaseEngineOperator()**](UpgradeDatabaseEngineOperatorApi.md#upgradeDatabaseEngineOperator) | **PUT** /namespaces/{namespace}/database-engines/{name}/operator-version | Update the specified database engine |


## `upgradeDatabaseEngineOperator()`

```php
upgradeDatabaseEngineOperator($namespace, $name, $databaseEngineOperatorUpgradeParams)
```

Update the specified database engine

Upgrade the specified database engine to a desired version

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\UpgradeDatabaseEngineOperatorApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database engine
$databaseEngineOperatorUpgradeParams = new \Everest\Model\DatabaseEngineOperatorUpgradeParams(); // \Everest\Model\DatabaseEngineOperatorUpgradeParams | Request for upgrading the database engine operator

try {
    $apiInstance->upgradeDatabaseEngineOperator($namespace, $name, $databaseEngineOperatorUpgradeParams);
} catch (Exception $e) {
    echo 'Exception when calling UpgradeDatabaseEngineOperatorApi->upgradeDatabaseEngineOperator: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database engine | |
| **databaseEngineOperatorUpgradeParams** | [**\Everest\Model\DatabaseEngineOperatorUpgradeParams**](../Model/DatabaseEngineOperatorUpgradeParams.md)| Request for upgrading the database engine operator | |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
