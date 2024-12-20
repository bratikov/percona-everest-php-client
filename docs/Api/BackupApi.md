# Everest\BackupApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDatabaseClusterBackup()**](BackupApi.md#createDatabaseClusterBackup) | **POST** /namespaces/{namespace}/database-cluster-backups | Create database cluster backup |
| [**deleteDatabaseClusterBackup()**](BackupApi.md#deleteDatabaseClusterBackup) | **DELETE** /namespaces/{namespace}/database-cluster-backups/{name} | Delete database cluster backup |
| [**getDatabaseClusterBackup()**](BackupApi.md#getDatabaseClusterBackup) | **GET** /namespaces/{namespace}/database-cluster-backups/{name} | Get database cluster backup |
| [**listDatabaseClusterBackups()**](BackupApi.md#listDatabaseClusterBackups) | **GET** /namespaces/{namespace}/database-clusters/{cluster-name}/backups | List database cluster backups |


## `createDatabaseClusterBackup()`

```php
createDatabaseClusterBackup($namespace, $databaseClusterBackup): \Everest\Model\DatabaseClusterBackup
```

Create database cluster backup

This API creates a new database cluster backup in the specified `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$databaseClusterBackup = new \Everest\Model\DatabaseClusterBackup(); // \Everest\Model\DatabaseClusterBackup | The database cluster backup object to be created

try {
    $result = $apiInstance->createDatabaseClusterBackup($namespace, $databaseClusterBackup);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->createDatabaseClusterBackup: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

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

Delete database cluster backup

This API deletes the database cluster backup specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster backup. Can be found under Metadata[\"name\"] of the DatabaseClusterBackup object.
$cleanupBackupStorage = True; // bool | If set, remove the backed up data from storage

try {
    $result = $apiInstance->deleteDatabaseClusterBackup($namespace, $name, $cleanupBackupStorage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->deleteDatabaseClusterBackup: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

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

Get database cluster backup

This API gets the database cluster backup specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster backup. Can be found under Metadata[\"name\"] of the DatabaseClusterBackup object.

try {
    $result = $apiInstance->getDatabaseClusterBackup($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->getDatabaseClusterBackup: ', $e->getMessage(), PHP_EOL;
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

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabaseClusterBackups()`

```php
listDatabaseClusterBackups($namespace, $clusterName): \Everest\Model\DatabaseClusterBackupList
```

List database cluster backups

This API lists all database cluster backups in the specified `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$clusterName = 'clusterName_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->listDatabaseClusterBackups($namespace, $clusterName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupApi->listDatabaseClusterBackups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **clusterName** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterBackupList**](../Model/DatabaseClusterBackupList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
