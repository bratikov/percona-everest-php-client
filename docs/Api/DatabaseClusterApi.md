# Everest\DatabaseClusterApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createDatabaseCluster()**](DatabaseClusterApi.md#createDatabaseCluster) | **POST** /namespaces/{namespace}/database-clusters | Create database cluster |
| [**deleteDatabaseCluster()**](DatabaseClusterApi.md#deleteDatabaseCluster) | **DELETE** /namespaces/{namespace}/database-clusters/{name} | Delete database cluster |
| [**getDatabaseCluster()**](DatabaseClusterApi.md#getDatabaseCluster) | **GET** /namespaces/{namespace}/database-clusters/{name} | Get database cluster |
| [**getDatabaseClusterComponents()**](DatabaseClusterApi.md#getDatabaseClusterComponents) | **GET** /namespaces/{namespace}/database-clusters/{name}/components | Get database cluster components |
| [**getDatabaseClusterCredentials()**](DatabaseClusterApi.md#getDatabaseClusterCredentials) | **GET** /namespaces/{namespace}/database-clusters/{name}/credentials | Get database cluster credentials |
| [**getDatabaseClusterPitr()**](DatabaseClusterApi.md#getDatabaseClusterPitr) | **GET** /namespaces/{namespace}/database-clusters/{name}/pitr | Get the Point-in-Time recovery info |
| [**listDatabaseClusters()**](DatabaseClusterApi.md#listDatabaseClusters) | **GET** /namespaces/{namespace}/database-clusters | List database clusters |
| [**updateDatabaseCluster()**](DatabaseClusterApi.md#updateDatabaseCluster) | **PUT** /namespaces/{namespace}/database-clusters/{name} | Update database cluster |


## `createDatabaseCluster()`

```php
createDatabaseCluster($namespace, $databaseCluster): \Everest\Model\DatabaseCluster
```

Create database cluster

This API creates a new database cluster in the specified namespace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$databaseCluster = new \Everest\Model\DatabaseCluster(); // \Everest\Model\DatabaseCluster | The database cluster object to be created

try {
    $result = $apiInstance->createDatabaseCluster($namespace, $databaseCluster);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->createDatabaseCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **databaseCluster** | [**\Everest\Model\DatabaseCluster**](../Model/DatabaseCluster.md)| The database cluster object to be created | |

### Return type

[**\Everest\Model\DatabaseCluster**](../Model/DatabaseCluster.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteDatabaseCluster()`

```php
deleteDatabaseCluster($namespace, $name, $cleanupBackupStorage): \Everest\Model\IoK8sApimachineryPkgApisMetaV1StatusV2
```

Delete database cluster

This API deletes the database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.
$cleanupBackupStorage = True; // bool | If set, remove the backed up data from storage

try {
    $result = $apiInstance->deleteDatabaseCluster($namespace, $name, $cleanupBackupStorage);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->deleteDatabaseCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |
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

## `getDatabaseCluster()`

```php
getDatabaseCluster($namespace, $name): \Everest\Model\DatabaseCluster
```

Get database cluster

This API gets the database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->getDatabaseCluster($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->getDatabaseCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseCluster**](../Model/DatabaseCluster.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatabaseClusterComponents()`

```php
getDatabaseClusterComponents($namespace, $name): \Everest\Model\DatabaseClusterComponentsInner[]
```

Get database cluster components

This API gets the various components of the database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->getDatabaseClusterComponents($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->getDatabaseClusterComponents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterComponentsInner[]**](../Model/DatabaseClusterComponentsInner.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatabaseClusterCredentials()`

```php
getDatabaseClusterCredentials($namespace, $name): \Everest\Model\DatabaseClusterCredential
```

Get database cluster credentials

This API gets the credentials for the database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->getDatabaseClusterCredentials($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->getDatabaseClusterCredentials: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterCredential**](../Model/DatabaseClusterCredential.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getDatabaseClusterPitr()`

```php
getDatabaseClusterPitr($namespace, $name): \Everest\Model\DatabaseClusterPitr
```

Get the Point-in-Time recovery info

This API gets the Point-in-Time recovery info for the database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.

try {
    $result = $apiInstance->getDatabaseClusterPitr($namespace, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->getDatabaseClusterPitr: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |

### Return type

[**\Everest\Model\DatabaseClusterPitr**](../Model/DatabaseClusterPitr.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listDatabaseClusters()`

```php
listDatabaseClusters($namespace): \Everest\Model\DatabaseClusterList
```

List database clusters

This API lists all database clusters in the specified namespace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace

try {
    $result = $apiInstance->listDatabaseClusters($namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->listDatabaseClusters: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |

### Return type

[**\Everest\Model\DatabaseClusterList**](../Model/DatabaseClusterList.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateDatabaseCluster()`

```php
updateDatabaseCluster($namespace, $name, $databaseCluster): \Everest\Model\DatabaseCluster
```

Update database cluster

This API updates a database cluster specified by the `name` and `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\DatabaseClusterApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Name of the namespace
$name = 'name_example'; // string | Name of the database cluster. Can be found under Metadata[\"name\"] of the DatabaseCluster object.
$databaseCluster = new \Everest\Model\DatabaseCluster(); // \Everest\Model\DatabaseCluster | The database cluster object to be updated

try {
    $result = $apiInstance->updateDatabaseCluster($namespace, $name, $databaseCluster);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DatabaseClusterApi->updateDatabaseCluster: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Name of the namespace | |
| **name** | **string**| Name of the database cluster. Can be found under Metadata[\&quot;name\&quot;] of the DatabaseCluster object. | |
| **databaseCluster** | [**\Everest\Model\DatabaseCluster**](../Model/DatabaseCluster.md)| The database cluster object to be updated | |

### Return type

[**\Everest\Model\DatabaseCluster**](../Model/DatabaseCluster.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
