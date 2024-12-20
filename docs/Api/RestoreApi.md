# Everest\RestoreApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDatabaseClusterRestore()**](RestoreApi.md#createDatabaseClusterRestore) | **POST** /namespaces/{namespace}/database-cluster-restores | Create database cluster restore |
| [**deleteDatabaseClusterRestore()**](RestoreApi.md#deleteDatabaseClusterRestore) | **DELETE** /namespaces/{namespace}/database-cluster-restores/{name} | Delete database cluster restore |
| [**getDatabaseClusterRestore()**](RestoreApi.md#getDatabaseClusterRestore) | **GET** /namespaces/{namespace}/database-cluster-restores/{name} | Get database cluster restore |
| [**listDatabaseClusterRestores()**](RestoreApi.md#listDatabaseClusterRestores) | **GET** /namespaces/{namespace}/database-clusters/{cluster-name}/restores | List database cluster restores |
| [**updateDatabaseClusterRestore()**](RestoreApi.md#updateDatabaseClusterRestore) | **PUT** /namespaces/{namespace}/database-cluster-restores/{name} | Update database cluster restore |


## `createDatabaseClusterRestore()`

```php
createDatabaseClusterRestore($namespace, $databaseClusterRestore): \Everest\Model\DatabaseClusterRestore
```

Create database cluster restore

This API creates a new database cluster restore in the specified `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$databaseClusterRestore = new \Everest\Model\DatabaseClusterRestore(); // \Everest\Model\DatabaseClusterRestore | The database cluster restore object to be created

try {
    $result = $apiInstance->createDatabaseClusterRestore($namespace, $databaseClusterRestore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->createDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **databaseClusterRestore** | [**\Everest\Model\DatabaseClusterRestore**](../Model/DatabaseClusterRestore.md)| The database cluster restore object to be created | |

### Return type

[**\Everest\Model\DatabaseClusterRestore**](../Model/DatabaseClusterRestore.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDatabaseClusterRestore()`

```php
deleteDatabaseClusterRestore($namespace, $name): \Everest\Model\IoK8sApimachineryPkgApisMetaV1StatusV2
```

Delete database cluster restore

This API deletes the database cluster restore specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster restore. Can be found under Metadata[\"name\"] of the DatabaseClusterRestore object.

try {
    $result = $apiInstance->deleteDatabaseClusterRestore($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->deleteDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster restore. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseClusterRestore object. | |

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

## `getDatabaseClusterRestore()`

```php
getDatabaseClusterRestore($namespace, $name): \Everest\Model\DatabaseClusterRestore
```

Get database cluster restore

This API gets the database cluster restore specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster restore. Can be found under Metadata[\"name\"] of the DatabaseClusterRestore object.

try {
    $result = $apiInstance->getDatabaseClusterRestore($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->getDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster restore. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseClusterRestore object. | |

### Return type

[**\Everest\Model\DatabaseClusterRestore**](../Model/DatabaseClusterRestore.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabaseClusterRestores()`

```php
listDatabaseClusterRestores($namespace, $clusterName): \Everest\Model\DatabaseClusterRestoreList
```

List database cluster restores

This API lists all database cluster restores for a database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$clusterName = 'clusterName_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->listDatabaseClusterRestores($namespace, $clusterName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->listDatabaseClusterRestores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **clusterName** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterRestoreList**](../Model/DatabaseClusterRestoreList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDatabaseClusterRestore()`

```php
updateDatabaseClusterRestore($namespace, $name, $databaseClusterRestore): \Everest\Model\DatabaseClusterRestore
```

Update database cluster restore

This API updates the database cluster restore specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\RestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster restore. Can be found under Metadata[\"name\"] of the DatabaseClusterRestore object.
$databaseClusterRestore = new \Everest\Model\DatabaseClusterRestore(); // \Everest\Model\DatabaseClusterRestore | The database cluster restore object to be updated

try {
    $result = $apiInstance->updateDatabaseClusterRestore($namespace, $name, $databaseClusterRestore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RestoreApi->updateDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster restore. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseClusterRestore object. | |
| **databaseClusterRestore** | [**\Everest\Model\DatabaseClusterRestore**](../Model/DatabaseClusterRestore.md)| The database cluster restore object to be updated | |

### Return type

[**\Everest\Model\DatabaseClusterRestore**](../Model/DatabaseClusterRestore.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
