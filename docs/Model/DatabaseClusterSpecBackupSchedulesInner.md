# # DatabaseClusterSpecBackupSchedulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**backupStorageName** | **string** | BackupStorageName is the name of the BackupStorage CR that defines the storage location |
**enabled** | **bool** | Enabled is a flag to enable the schedule |
**name** | **string** | Name is the name of the schedule |
**retentionCopies** | **int** | RetentionCopies is the number of backup copies to retain | [optional]
**schedule** | **string** | Schedule is the cron schedule |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
