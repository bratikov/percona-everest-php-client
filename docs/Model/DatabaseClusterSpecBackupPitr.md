# # DatabaseClusterSpecBackupPitr

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backupStorageName** | **string** | BackupStorageName is the name of the BackupStorage where the PITR is enabled The BackupStorage must be created in the same namespace as the DatabaseCluster. | [optional]
**enabled** | **bool** | Enabled is a flag to enable PITR |
**uploadIntervalSec** | **int** | UploadIntervalSec number of seconds between the binlogs uploads | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
