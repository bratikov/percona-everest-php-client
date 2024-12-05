# Everest\BackupStorageApi

All URIs are relative to /v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBackupStorage()**](BackupStorageApi.md#createBackupStorage) | **POST** /backup-storages | Create a new backup storage object |
| [**deleteBackupStorage()**](BackupStorageApi.md#deleteBackupStorage) | **DELETE** /backup-storages/{name} | Delete the specified backup storage |
| [**getBackupStorage()**](BackupStorageApi.md#getBackupStorage) | **GET** /backup-storages/{name} | Get the specified backup storage |
| [**listBackupStorages()**](BackupStorageApi.md#listBackupStorages) | **GET** /backup-storages | List of the created backup storages |
| [**updateBackupStorage()**](BackupStorageApi.md#updateBackupStorage) | **PATCH** /backup-storages/{name} | Partial update of the specified backup storage |


## `createBackupStorage()`

```php
createBackupStorage($createBackupStorageParams): \Everest\Model\BackupStorage
```

Create a new backup storage object

Create a new backup storage object.  **Examples**:   ```   {     \"name\": \"s3-storage\",     \"type\": \"s3\",     \"bucketName\": \"bucket1\",     \"accessKey\": \"access_key\",     \"secretKey\": \"secret_key\",     \"region\": \"eu-central-1\"   }   ```    ```   {     \"name\": \"azure-storage\",     \"type\": \"azure\",     \"bucketName\": \"container1\",     \"accessKey\": \"storage_account_name\",     \"secretKey\": \"storage_account_key\",   }   ```

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$createBackupStorageParams = new \Everest\Model\CreateBackupStorageParams(); // \Everest\Model\CreateBackupStorageParams | The backup storage object to be created

try {
    $result = $apiInstance->createBackupStorage($createBackupStorageParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->createBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createBackupStorageParams** | [**\Everest\Model\CreateBackupStorageParams**](../Model/CreateBackupStorageParams.md)| The backup storage object to be created | |

### Return type

[**\Everest\Model\BackupStorage**](../Model/BackupStorage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteBackupStorage()`

```php
deleteBackupStorage($name)
```

Delete the specified backup storage

Delete the specified backup storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the backup storage

try {
    $apiInstance->deleteBackupStorage($name);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->deleteBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the backup storage | |

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

## `getBackupStorage()`

```php
getBackupStorage($name): \Everest\Model\BackupStorage
```

Get the specified backup storage

Get the specified backup storage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the backup storage

try {
    $result = $apiInstance->getBackupStorage($name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->getBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the backup storage | |

### Return type

[**\Everest\Model\BackupStorage**](../Model/BackupStorage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBackupStorages()`

```php
listBackupStorages(): \Everest\Model\BackupStorage[]
```

List of the created backup storages

List of the created backup storages

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->listBackupStorages();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->listBackupStorages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Everest\Model\BackupStorage[]**](../Model/BackupStorage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBackupStorage()`

```php
updateBackupStorage($name, $updateBackupStorageParams): \Everest\Model\BackupStorage
```

Partial update of the specified backup storage

Partial update of the specified backup storage. Updates only the specified fields.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



$apiInstance = new Everest\Api\BackupStorageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$name = 'name_example'; // string | Name of the backup storage
$updateBackupStorageParams = new \Everest\Model\UpdateBackupStorageParams(); // \Everest\Model\UpdateBackupStorageParams | The backup storage params. Only the specified fields will be updated.

try {
    $result = $apiInstance->updateBackupStorage($name, $updateBackupStorageParams);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BackupStorageApi->updateBackupStorage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **name** | **string**| Name of the backup storage | |
| **updateBackupStorageParams** | [**\Everest\Model\UpdateBackupStorageParams**](../Model/UpdateBackupStorageParams.md)| The backup storage params. Only the specified fields will be updated. | |

### Return type

[**\Everest\Model\BackupStorage**](../Model/BackupStorage.md)

### Authorization

No authorization required

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
