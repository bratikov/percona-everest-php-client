# Everest\DatabaseClusterRestoreApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDatabaseClusterRestore()**](DatabaseClusterRestoreApi.md#createDatabaseClusterRestore) | **POST** /namespaces/{namespace}/database-cluster-restores | Create a database cluster restore |
| [**deleteDatabaseClusterRestore()**](DatabaseClusterRestoreApi.md#deleteDatabaseClusterRestore) | **DELETE** /namespaces/{namespace}/database-cluster-restores/{name} | Delete the specified cluster restore |
| [**getDatabaseClusterRestore()**](DatabaseClusterRestoreApi.md#getDatabaseClusterRestore) | **GET** /namespaces/{namespace}/database-cluster-restores/{name} | Returns the specified cluster restore |
| [**listDatabaseClusterRestores()**](DatabaseClusterRestoreApi.md#listDatabaseClusterRestores) | **GET** /namespaces/{namespace}/database-clusters/{name}/restores | List of the created database cluster restores |
| [**updateDatabaseClusterRestore()**](DatabaseClusterRestoreApi.md#updateDatabaseClusterRestore) | **PUT** /namespaces/{namespace}/database-cluster-restores/{name} | Replace the specified cluster restore |


## `createDatabaseClusterRestore()`

```php
createDatabaseClusterRestore($namespace, $databaseClusterRestore): \Everest\Model\DatabaseClusterRestore
```

Create a database cluster restore

Create a database cluster restore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$databaseClusterRestore = new \Everest\Model\DatabaseClusterRestore(); // \Everest\Model\DatabaseClusterRestore | The database cluster restore object to be created

try {
    $result = $apiInstance->createDatabaseClusterRestore($namespace, $databaseClusterRestore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterRestoreApi->createDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
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

No authorization required

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

Delete the specified cluster restore

Delete the specified cluster restore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster restore. Can be found under Metadata[\"name\"] of the DatabaseClusterRestore object.

try {
    $result = $apiInstance->deleteDatabaseClusterRestore($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterRestoreApi->deleteDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
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

No authorization required

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

Returns the specified cluster restore

Returns the specified cluster restore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster restore. Can be found under Metadata[\"name\"] of the DatabaseClusterRestore object.

try {
    $result = $apiInstance->getDatabaseClusterRestore($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterRestoreApi->getDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabaseClusterRestores()`

```php
listDatabaseClusterRestores($namespace, $name): \Everest\Model\DatabaseClusterRestoreList
```

List of the created database cluster restores

List of the created database cluster restores

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->listDatabaseClusterRestores($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterRestoreApi->listDatabaseClusterRestores: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterRestoreList**](../Model/DatabaseClusterRestoreList.md)

### Authorization

No authorization required

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

Replace the specified cluster restore

Replace the specified cluster restore

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\DatabaseClusterRestoreApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster restore. Can be found under Metadata[\"name\"] of the DatabaseClusterRestore object.
$databaseClusterRestore = new \Everest\Model\DatabaseClusterRestore(); // \Everest\Model\DatabaseClusterRestore | The database cluster restore object to be updated

try {
    $result = $apiInstance->updateDatabaseClusterRestore($namespace, $name, $databaseClusterRestore);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterRestoreApi->updateDatabaseClusterRestore: ', $e->getMessage(), PHP_EOL;
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

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
