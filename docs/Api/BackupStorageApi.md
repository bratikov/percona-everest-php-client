# Everest\BackupStorageApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackupStorage()**](BackupStorageApi.md#createBackupStorage) | **POST** /namespaces/{namespace}/backup-storages | Create backup storage |
| [**deleteBackupStorage()**](BackupStorageApi.md#deleteBackupStorage) | **DELETE** /namespaces/{namespace}/backup-storages/{name} | Delete backup storage |
| [**getBackupStorage()**](BackupStorageApi.md#getBackupStorage) | **GET** /namespaces/{namespace}/backup-storages/{name} | Get backup storage |
| [**listBackupStorages()**](BackupStorageApi.md#listBackupStorages) | **GET** /namespaces/{namespace}/backup-storages | List backup storages |
| [**updateBackupStorage()**](BackupStorageApi.md#updateBackupStorage) | **PATCH** /namespaces/{namespace}/backup-storages/{name} | Update backup storage |


## `createBackupStorage()`

```php
createBackupStorage($namespace, $createBackupStorageParams): \Everest\Model\BackupStorage
```

Create backup storage

This API creates a new backup storage.  **Examples**:   ```   {     \"metadata\": {       \"name\": \"s3-storage\",       \"namespace\": \"everest\",     },     \"spec\": {       \"type\": \"s3\",       \"bucketName\": \"bucket1\",       \"accessKey\": \"access_key\",       \"secretKey\": \"secret_key\",       \"region\": \"eu-central-1\"     },   }   ```    ```   {     \"metadata\": {       \"name\": \"azure-storage\",       \"namespace\": \"everest\",     },     \"spec\": {       \"type\": \"azure\",       \"bucketName\": \"container1\",       \"accessKey\": \"storage_account_name\",       \"secretKey\": \"storage_account_key\",     },   }   ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Namespace of the backup storage
$createBackupStorageParams = new \Everest\Model\CreateBackupStorageParams(); // \Everest\Model\CreateBackupStorageParams | The backup storage object to be created

try {
    $result = $apiInstance->createBackupStorage($namespace, $createBackupStorageParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->createBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Namespace of the backup storage | |
| **createBackupStorageParams** | [**\Everest\Model\CreateBackupStorageParams**](../Model/CreateBackupStorageParams.md)| The backup storage object to be created | |

### Return type

[**\Everest\Model\BackupStorage**](../Model/BackupStorage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackupStorage()`

```php
deleteBackupStorage($name, $namespace)
```

Delete backup storage

This API deletes the backup storage specified by the `name`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the backup storage
$namespace = 'namespace_example'; // string | Namespace of the backup storage

try {
    $apiInstance->deleteBackupStorage($name, $namespace);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->deleteBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the backup storage | |
| **namespace** | **string**| Namespace of the backup storage | |

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

## `getBackupStorage()`

```php
getBackupStorage($name, $namespace): \Everest\Model\BackupStorage
```

Get backup storage

This API gets the backup storage speciciied by the `name` in the given `namespace`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the backup storage
$namespace = 'namespace_example'; // string | Namespace of the backup storage

try {
    $result = $apiInstance->getBackupStorage($name, $namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->getBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the backup storage | |
| **namespace** | **string**| Namespace of the backup storage | |

### Return type

[**\Everest\Model\BackupStorage**](../Model/BackupStorage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackupStorages()`

```php
listBackupStorages($namespace): \Everest\Model\BackupStorage[]
```

List backup storages

This API lists all backup storages.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$namespace = 'namespace_example'; // string | Namespace of the backup storage

try {
    $result = $apiInstance->listBackupStorages($namespace);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->listBackupStorages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **namespace** | **string**| Namespace of the backup storage | |

### Return type

[**\Everest\Model\BackupStorage[]**](../Model/BackupStorage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBackupStorage()`

```php
updateBackupStorage($name, $namespace, $updateBackupStorageParams): \Everest\Model\BackupStorage
```

Update backup storage

This API updates the backup storage specified by the `name`. Only the specified fields will be updated.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: BearerAuth
$config = Everest\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$name = 'name_example'; // string | Name of the backup storage
$namespace = 'namespace_example'; // string | Namespace of the backup storage
$updateBackupStorageParams = new \Everest\Model\UpdateBackupStorageParams(); // \Everest\Model\UpdateBackupStorageParams | The backup storage params. Only the specified fields will be updated.

try {
    $result = $apiInstance->updateBackupStorage($name, $namespace, $updateBackupStorageParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->updateBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the backup storage | |
| **namespace** | **string**| Namespace of the backup storage | |
| **updateBackupStorageParams** | [**\Everest\Model\UpdateBackupStorageParams**](../Model/UpdateBackupStorageParams.md)| The backup storage params. Only the specified fields will be updated. | |

### Return type

[**\Everest\Model\BackupStorage**](../Model/BackupStorage.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
