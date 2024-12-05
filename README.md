# OpenAPIClient-php

# Authentication
All requests to Everest API require `Authorization: Bearer <token>` header with a valid token in plain-text.

The token can be obtained by using `everestctl token reset` which resets the token and prints it to the screen.



## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to */v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*BackupStorageApi* | [**createBackupStorage**](docs/Api/BackupStorageApi.md#createbackupstorage) | **POST** /backup-storages | Create a new backup storage object
*BackupStorageApi* | [**deleteBackupStorage**](docs/Api/BackupStorageApi.md#deletebackupstorage) | **DELETE** /backup-storages/{name} | Delete the specified backup storage
*BackupStorageApi* | [**getBackupStorage**](docs/Api/BackupStorageApi.md#getbackupstorage) | **GET** /backup-storages/{name} | Get the specified backup storage
*BackupStorageApi* | [**listBackupStorages**](docs/Api/BackupStorageApi.md#listbackupstorages) | **GET** /backup-storages | List of the created backup storages
*BackupStorageApi* | [**updateBackupStorage**](docs/Api/BackupStorageApi.md#updatebackupstorage) | **PATCH** /backup-storages/{name} | Partial update of the specified backup storage
*DatabaseClusterApi* | [**createDatabaseCluster**](docs/Api/DatabaseClusterApi.md#createdatabasecluster) | **POST** /namespaces/{namespace}/database-clusters | Create a database cluster
*DatabaseClusterApi* | [**deleteDatabaseCluster**](docs/Api/DatabaseClusterApi.md#deletedatabasecluster) | **DELETE** /namespaces/{namespace}/database-clusters/{name} | Delete the specified database cluster
*DatabaseClusterApi* | [**getDatabaseCluster**](docs/Api/DatabaseClusterApi.md#getdatabasecluster) | **GET** /namespaces/{namespace}/database-clusters/{name} | Get the specified database cluster
*DatabaseClusterApi* | [**getDatabaseClusterCredentials**](docs/Api/DatabaseClusterApi.md#getdatabaseclustercredentials) | **GET** /namespaces/{namespace}/database-clusters/{name}/credentials | Get the specified database cluster credentials
*DatabaseClusterApi* | [**getDatabaseClusterPitr**](docs/Api/DatabaseClusterApi.md#getdatabaseclusterpitr) | **GET** /namespaces/{namespace}/database-clusters/{name}/pitr | Get the Point-in-Time related data for the specified database cluster
*DatabaseClusterApi* | [**listDatabaseClusters**](docs/Api/DatabaseClusterApi.md#listdatabaseclusters) | **GET** /namespaces/{namespace}/database-clusters | List of the created database clusters
*DatabaseClusterApi* | [**updateDatabaseCluster**](docs/Api/DatabaseClusterApi.md#updatedatabasecluster) | **PUT** /namespaces/{namespace}/database-clusters/{name} | Replace the specified database cluster
*DatabaseClusterBackupApi* | [**createDatabaseClusterBackup**](docs/Api/DatabaseClusterBackupApi.md#createdatabaseclusterbackup) | **POST** /namespaces/{namespace}/database-cluster-backups | Create a database cluster backup
*DatabaseClusterBackupApi* | [**deleteDatabaseClusterBackup**](docs/Api/DatabaseClusterBackupApi.md#deletedatabaseclusterbackup) | **DELETE** /namespaces/{namespace}/database-cluster-backups/{name} | Delete the specified cluster backup
*DatabaseClusterBackupApi* | [**getDatabaseClusterBackup**](docs/Api/DatabaseClusterBackupApi.md#getdatabaseclusterbackup) | **GET** /namespaces/{namespace}/database-cluster-backups/{name} | Returns the specified cluster backup
*DatabaseClusterBackupApi* | [**listDatabaseClusterBackups**](docs/Api/DatabaseClusterBackupApi.md#listdatabaseclusterbackups) | **GET** /namespaces/{namespace}/database-clusters/{name}/backups | List of the created database cluster backups
*DatabaseClusterRestoreApi* | [**createDatabaseClusterRestore**](docs/Api/DatabaseClusterRestoreApi.md#createdatabaseclusterrestore) | **POST** /namespaces/{namespace}/database-cluster-restores | Create a database cluster restore
*DatabaseClusterRestoreApi* | [**deleteDatabaseClusterRestore**](docs/Api/DatabaseClusterRestoreApi.md#deletedatabaseclusterrestore) | **DELETE** /namespaces/{namespace}/database-cluster-restores/{name} | Delete the specified cluster restore
*DatabaseClusterRestoreApi* | [**getDatabaseClusterRestore**](docs/Api/DatabaseClusterRestoreApi.md#getdatabaseclusterrestore) | **GET** /namespaces/{namespace}/database-cluster-restores/{name} | Returns the specified cluster restore
*DatabaseClusterRestoreApi* | [**listDatabaseClusterRestores**](docs/Api/DatabaseClusterRestoreApi.md#listdatabaseclusterrestores) | **GET** /namespaces/{namespace}/database-clusters/{name}/restores | List of the created database cluster restores
*DatabaseClusterRestoreApi* | [**updateDatabaseClusterRestore**](docs/Api/DatabaseClusterRestoreApi.md#updatedatabaseclusterrestore) | **PUT** /namespaces/{namespace}/database-cluster-restores/{name} | Replace the specified cluster restore
*DatabaseEngineApi* | [**getDatabaseEngine**](docs/Api/DatabaseEngineApi.md#getdatabaseengine) | **GET** /namespaces/{namespace}/database-engines/{name} | Get the specified database engine
*DatabaseEngineApi* | [**listDatabaseEngines**](docs/Api/DatabaseEngineApi.md#listdatabaseengines) | **GET** /namespaces/{namespace}/database-engines | List of the available database engines
*DatabaseEngineApi* | [**updateDatabaseEngine**](docs/Api/DatabaseEngineApi.md#updatedatabaseengine) | **PUT** /namespaces/{namespace}/database-engines/{name} | Update the specified database engine
*DefaultApi* | [**listNamespaces**](docs/Api/DefaultApi.md#listnamespaces) | **GET** /namespaces | Get all namespaces managed by Everest
*DefaultApi* | [**versionInfo**](docs/Api/DefaultApi.md#versioninfo) | **GET** /version | Get Everest API Server version info
*K8sApi* | [**getKubernetesClusterInfo**](docs/Api/K8sApi.md#getkubernetesclusterinfo) | **GET** /cluster-info | Get the cluster type and storage classes of a kubernetes cluster
*K8sApi* | [**getKubernetesClusterResources**](docs/Api/K8sApi.md#getkubernetesclusterresources) | **GET** /resources | Get the capacity and available resources of a kubernetes cluster
*MonitoringInstancesApi* | [**createMonitoringInstance**](docs/Api/MonitoringInstancesApi.md#createmonitoringinstance) | **POST** /monitoring-instances | Create a new monitoring instance object
*MonitoringInstancesApi* | [**deleteMonitoringInstance**](docs/Api/MonitoringInstancesApi.md#deletemonitoringinstance) | **DELETE** /monitoring-instances/{name} | Delete the specified Monitoring instance
*MonitoringInstancesApi* | [**getMonitoringInstance**](docs/Api/MonitoringInstancesApi.md#getmonitoringinstance) | **GET** /monitoring-instances/{name} | Get the specified monitoring instance
*MonitoringInstancesApi* | [**listMonitoringInstances**](docs/Api/MonitoringInstancesApi.md#listmonitoringinstances) | **GET** /monitoring-instances | List of the created monitoring instances
*MonitoringInstancesApi* | [**updateMonitoringInstance**](docs/Api/MonitoringInstancesApi.md#updatemonitoringinstance) | **PATCH** /monitoring-instances/{name} | Update the specified Monitoring instance
*UpgradeDatabaseEngineOperatorApi* | [**upgradeDatabaseEngineOperator**](docs/Api/UpgradeDatabaseEngineOperatorApi.md#upgradedatabaseengineoperator) | **PUT** /namespaces/{namespace}/database-engines/{name}/operator-version | Update the specified database engine

## Models

- [BackupStorage](docs/Model/BackupStorage.md)
- [CreateBackupStorageParams](docs/Model/CreateBackupStorageParams.md)
- [DatabaseCluster](docs/Model/DatabaseCluster.md)
- [DatabaseClusterBackup](docs/Model/DatabaseClusterBackup.md)
- [DatabaseClusterBackupList](docs/Model/DatabaseClusterBackupList.md)
- [DatabaseClusterBackupSpec](docs/Model/DatabaseClusterBackupSpec.md)
- [DatabaseClusterBackupStatus](docs/Model/DatabaseClusterBackupStatus.md)
- [DatabaseClusterCredential](docs/Model/DatabaseClusterCredential.md)
- [DatabaseClusterList](docs/Model/DatabaseClusterList.md)
- [DatabaseClusterPitr](docs/Model/DatabaseClusterPitr.md)
- [DatabaseClusterRestore](docs/Model/DatabaseClusterRestore.md)
- [DatabaseClusterRestoreList](docs/Model/DatabaseClusterRestoreList.md)
- [DatabaseClusterRestoreSpec](docs/Model/DatabaseClusterRestoreSpec.md)
- [DatabaseClusterRestoreSpecDataSource](docs/Model/DatabaseClusterRestoreSpecDataSource.md)
- [DatabaseClusterRestoreStatus](docs/Model/DatabaseClusterRestoreStatus.md)
- [DatabaseClusterSpec](docs/Model/DatabaseClusterSpec.md)
- [DatabaseClusterSpecBackup](docs/Model/DatabaseClusterSpecBackup.md)
- [DatabaseClusterSpecBackupPitr](docs/Model/DatabaseClusterSpecBackupPitr.md)
- [DatabaseClusterSpecBackupSchedulesInner](docs/Model/DatabaseClusterSpecBackupSchedulesInner.md)
- [DatabaseClusterSpecDataSource](docs/Model/DatabaseClusterSpecDataSource.md)
- [DatabaseClusterSpecDataSourceBackupSource](docs/Model/DatabaseClusterSpecDataSourceBackupSource.md)
- [DatabaseClusterSpecDataSourcePitr](docs/Model/DatabaseClusterSpecDataSourcePitr.md)
- [DatabaseClusterSpecEngine](docs/Model/DatabaseClusterSpecEngine.md)
- [DatabaseClusterSpecEngineResources](docs/Model/DatabaseClusterSpecEngineResources.md)
- [DatabaseClusterSpecEngineResourcesCpu](docs/Model/DatabaseClusterSpecEngineResourcesCpu.md)
- [DatabaseClusterSpecEngineResourcesMemory](docs/Model/DatabaseClusterSpecEngineResourcesMemory.md)
- [DatabaseClusterSpecEngineStorage](docs/Model/DatabaseClusterSpecEngineStorage.md)
- [DatabaseClusterSpecEngineStorageSize](docs/Model/DatabaseClusterSpecEngineStorageSize.md)
- [DatabaseClusterSpecMonitoring](docs/Model/DatabaseClusterSpecMonitoring.md)
- [DatabaseClusterSpecMonitoringResources](docs/Model/DatabaseClusterSpecMonitoringResources.md)
- [DatabaseClusterSpecMonitoringResourcesClaimsInner](docs/Model/DatabaseClusterSpecMonitoringResourcesClaimsInner.md)
- [DatabaseClusterSpecMonitoringResourcesLimitsValue](docs/Model/DatabaseClusterSpecMonitoringResourcesLimitsValue.md)
- [DatabaseClusterSpecProxy](docs/Model/DatabaseClusterSpecProxy.md)
- [DatabaseClusterSpecProxyExpose](docs/Model/DatabaseClusterSpecProxyExpose.md)
- [DatabaseClusterSpecProxyResources](docs/Model/DatabaseClusterSpecProxyResources.md)
- [DatabaseClusterStatus](docs/Model/DatabaseClusterStatus.md)
- [DatabaseEngine](docs/Model/DatabaseEngine.md)
- [DatabaseEngineList](docs/Model/DatabaseEngineList.md)
- [DatabaseEngineOperatorUpgradeParams](docs/Model/DatabaseEngineOperatorUpgradeParams.md)
- [DatabaseEngineSpec](docs/Model/DatabaseEngineSpec.md)
- [DatabaseEngineStatus](docs/Model/DatabaseEngineStatus.md)
- [DatabaseEngineStatusAvailableVersions](docs/Model/DatabaseEngineStatusAvailableVersions.md)
- [DatabaseEngineStatusAvailableVersionsBackupValue](docs/Model/DatabaseEngineStatusAvailableVersionsBackupValue.md)
- [DatabaseEngineStatusOperatorUpgrade](docs/Model/DatabaseEngineStatusOperatorUpgrade.md)
- [DatabaseEngineStatusOperatorUpgradeInstallPlanRef](docs/Model/DatabaseEngineStatusOperatorUpgradeInstallPlanRef.md)
- [DatabaseEngineStatusPendingOperatorUpgradesInner](docs/Model/DatabaseEngineStatusPendingOperatorUpgradesInner.md)
- [Error](docs/Model/Error.md)
- [IoK8sApimachineryPkgApisMetaV1ListMeta](docs/Model/IoK8sApimachineryPkgApisMetaV1ListMeta.md)
- [IoK8sApimachineryPkgApisMetaV1StatusCause](docs/Model/IoK8sApimachineryPkgApisMetaV1StatusCause.md)
- [IoK8sApimachineryPkgApisMetaV1StatusDetailsV2](docs/Model/IoK8sApimachineryPkgApisMetaV1StatusDetailsV2.md)
- [IoK8sApimachineryPkgApisMetaV1StatusV2](docs/Model/IoK8sApimachineryPkgApisMetaV1StatusV2.md)
- [KubernetesClusterInfo](docs/Model/KubernetesClusterInfo.md)
- [KubernetesClusterResources](docs/Model/KubernetesClusterResources.md)
- [KubernetesClusterResourcesAvailable](docs/Model/KubernetesClusterResourcesAvailable.md)
- [KubernetesClusterResourcesCapacity](docs/Model/KubernetesClusterResourcesCapacity.md)
- [MonitoringInstance](docs/Model/MonitoringInstance.md)
- [MonitoringInstanceBase](docs/Model/MonitoringInstanceBase.md)
- [MonitoringInstanceBaseWithName](docs/Model/MonitoringInstanceBaseWithName.md)
- [MonitoringInstanceCreateParams](docs/Model/MonitoringInstanceCreateParams.md)
- [MonitoringInstancePMM](docs/Model/MonitoringInstancePMM.md)
- [MonitoringInstancePMMPmm](docs/Model/MonitoringInstancePMMPmm.md)
- [MonitoringInstanceUpdateParams](docs/Model/MonitoringInstanceUpdateParams.md)
- [SizeLimit](docs/Model/SizeLimit.md)
- [UpdateBackupStorageParams](docs/Model/UpdateBackupStorageParams.md)
- [Version](docs/Model/Version.md)

## Authorization
Endpoints do not require authorization.

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
    - Package version: `1.3.0`
    - Generator version: `7.10.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
