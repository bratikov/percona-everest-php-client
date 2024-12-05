# Everest\DatabaseClusterBackupApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDatabaseClusterBackup()**](DatabaseClusterBackupApi.md#createDatabaseClusterBackup) | **POST** /namespaces/{namespace}/database-cluster-backups | Create a database cluster backup |
| [**deleteDatabaseClusterBackup()**](DatabaseClusterBackupApi.md#deleteDatabaseClusterBackup) | **DELETE** /namespaces/{namespace}/database-cluster-backups/{name} | Delete the specified cluster backup |
| [**getDatabaseClusterBackup()**](DatabaseClusterBackupApi.md#getDatabaseClusterBackup) | **GET** /namespaces/{namespace}/database-cluster-backups/{name} | Returns the specified cluster backup |
| [**listDatabaseClusterBackups()**](DatabaseClusterBackupApi.md#listDatabaseClusterBackups) | **GET** /namespaces/{namespace}/database-clusters/{name}/backups | List of the created database cluster backups |


## `createDatabaseClusterBackup()`

```php
createDatabaseClusterBackup($namespace, $databaseClusterBackup): \Everest\Model\DatabaseClusterBackup
```

Create a database cluster backup

Create a database cluster backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$databaseClusterBackup = new \Everest\Model\DatabaseClusterBackup(); // \Everest\Model\DatabaseClusterBackup | The database cluster backup object to be created

try {
    $result = $apiInstance->createDatabaseClusterBackup($namespace, $databaseClusterBackup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterBackupApi->createDatabaseClusterBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **databaseClusterBackup** | [**\Everest\Model\DatabaseClusterBackup**](../Model/DatabaseClusterBackup.md)| The database cluster backup object to be created | |

### Return type

[**\Everest\Model\DatabaseClusterBackup**](../Model/DatabaseClusterBackup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDatabaseClusterBackup()`

```php
deleteDatabaseClusterBackup($namespace, $name, $cleanupBackupStorage): \Everest\Model\IoK8sApimachineryPkgApisMetaV1StatusV2
```

Delete the specified cluster backup

Delete the specified cluster backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster backup. Can be found under Metadata[\"name\"] of the DatabaseClusterBackup object.
$cleanupBackupStorage = True; // bool | If set, remove the backed up data from storage

try {
    $result = $apiInstance->deleteDatabaseClusterBackup($namespace, $name, $cleanupBackupStorage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterBackupApi->deleteDatabaseClusterBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster backup. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseClusterBackup object. | |
| **cleanupBackupStorage** | **bool**| If set, remove the backed up data from storage | [optional] |

### Return type

[**\Everest\Model\IoK8sApimachineryPkgApisMetaV1StatusV2**](../Model/IoK8sApimachineryPkgApisMetaV1StatusV2.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatabaseClusterBackup()`

```php
getDatabaseClusterBackup($namespace, $name): \Everest\Model\DatabaseClusterBackup
```

Returns the specified cluster backup

Returns the specified cluster backup

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster backup. Can be found under Metadata[\"name\"] of the DatabaseClusterBackup object.

try {
    $result = $apiInstance->getDatabaseClusterBackup($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterBackupApi->getDatabaseClusterBackup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster backup. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseClusterBackup object. | |

### Return type

[**\Everest\Model\DatabaseClusterBackup**](../Model/DatabaseClusterBackup.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabaseClusterBackups()`

```php
listDatabaseClusterBackups($namespace, $name): \Everest\Model\DatabaseClusterBackupList
```

List of the created database cluster backups

List of the created database cluster backups

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterBackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->listDatabaseClusterBackups($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterBackupApi->listDatabaseClusterBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterBackupList**](../Model/DatabaseClusterBackupList.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
