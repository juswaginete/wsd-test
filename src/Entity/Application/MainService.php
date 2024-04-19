<?php

namespace WSD\BrightSignApi\Entity\Application;

class MainService extends \WSD\BrightSignApi\SoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'CheckBrightWallName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallName',
      'CheckBrightWallNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallNameResponse',
      'CreateBrightWall' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWall',
      'CreateBrightWallResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallResponse',
      'UpdateBrightWall' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWall',
      'UpdateBrightWallResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallResponse',
      'ReassignBrightWalls' => 'WSD\\BrightSignApi\\Entity\\Application\\ReassignBrightWalls',
      'ReassignBrightWallsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ReassignBrightWallsResponse',
      'DeleteBrightWall' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWall',
      'DeleteBrightWallResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallResponse',
      'GetAllDevices' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllDevices',
      'GetAllDevicesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllDevicesResponse',
      'GetSpecifiedDevices' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedDevices',
      'GetSpecifiedDevicesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedDevicesResponse',
      'FindDevices' => 'WSD\\BrightSignApi\\Entity\\Application\\FindDevices',
      'FindDevicesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindDevicesResponse',
      'GetDevice' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDevice',
      'GetDeviceResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceResponse',
      'GetDeviceBySerial' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceBySerial',
      'GetDeviceBySerialResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceBySerialResponse',
      'GetDeviceErrors' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceErrors',
      'GetDeviceErrorsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceErrorsResponse',
      'GetDeviceDownloads' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceDownloads',
      'GetDeviceDownloadsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceDownloadsResponse',
      'GetDeviceScreenShots' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceScreenShots',
      'GetDeviceScreenShotsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceScreenShotsResponse',
      'GetDeviceLogReports' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceLogReports',
      'GetDeviceLogReportsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDeviceLogReportsResponse',
      'GenerateDeviceSetupPackage' => 'WSD\\BrightSignApi\\Entity\\Application\\GenerateDeviceSetupPackage',
      'GenerateDeviceSetupPackageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GenerateDeviceSetupPackageResponse',
      'UpdateDevice' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDevice',
      'UpdateDeviceResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceResponse',
      'RenameDevice' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameDevice',
      'RenameDeviceResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameDeviceResponse',
      'UpdateDeviceNetworkSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceNetworkSettings',
      'UpdateDeviceNetworkSettingsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceNetworkSettingsResponse',
      'UpdateDeviceRemoteSnapshotSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceRemoteSnapshotSettings',
      'UpdateDeviceRemoteSnapshotSettingsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceRemoteSnapshotSettingsResponse',
      'UpdateDeviceLogsSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceLogsSettings',
      'UpdateDeviceLogsSettingsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDeviceLogsSettingsResponse',
      'ReassignDevices' => 'WSD\\BrightSignApi\\Entity\\Application\\ReassignDevices',
      'ReassignDevicesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ReassignDevicesResponse',
      'ForceDevicesReboot' => 'WSD\\BrightSignApi\\Entity\\Application\\ForceDevicesReboot',
      'ForceDevicesRebootResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ForceDevicesRebootResponse',
      'CancelDevicesReboot' => 'WSD\\BrightSignApi\\Entity\\Application\\CancelDevicesReboot',
      'CancelDevicesRebootResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CancelDevicesRebootResponse',
      'ForceDevicesRecovery' => 'WSD\\BrightSignApi\\Entity\\Application\\ForceDevicesRecovery',
      'ForceDevicesRecoveryResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ForceDevicesRecoveryResponse',
      'CancelDevicesRecovery' => 'WSD\\BrightSignApi\\Entity\\Application\\CancelDevicesRecovery',
      'CancelDevicesRecoveryResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CancelDevicesRecoveryResponse',
      'ForceDevicesLogsUpload' => 'WSD\\BrightSignApi\\Entity\\Application\\ForceDevicesLogsUpload',
      'ForceDevicesLogsUploadResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ForceDevicesLogsUploadResponse',
      'CancelDevicesLogsUpload' => 'WSD\\BrightSignApi\\Entity\\Application\\CancelDevicesLogsUpload',
      'CancelDevicesLogsUploadResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CancelDevicesLogsUploadResponse',
      'DeleteDevices' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteDevices',
      'DeleteDevicesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteDevicesResponse',
      'Authenticate' => 'WSD\\BrightSignApi\\Entity\\Application\\Authenticate',
      'AuthenticateResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\AuthenticateResponse',
      'CreateAccount' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateAccount',
      'CreateAccountResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateAccountResponse',
      'UpdateAccountSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateAccountSettings',
      'UpdateAccountSettingsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateAccountSettingsResponse',
      'CheckSubscriptionKey' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckSubscriptionKey',
      'CheckSubscriptionKeyResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckSubscriptionKeyResponse',
      'ActivateSubscriptionKey' => 'WSD\\BrightSignApi\\Entity\\Application\\ActivateSubscriptionKey',
      'ActivateSubscriptionKeyResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ActivateSubscriptionKeyResponse',
      'CreateUser' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateUser',
      'CreateUserResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateUserResponse',
      'ChangePassword' => 'WSD\\BrightSignApi\\Entity\\Application\\ChangePassword',
      'ChangePasswordResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\ChangePasswordResponse',
      'GetAllContent' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllContent',
      'GetAllContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllContentResponse',
      'GetContentFolders' => 'WSD\\BrightSignApi\\Entity\\Application\\GetContentFolders',
      'GetContentFoldersResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetContentFoldersResponse',
      'GetFolderContent' => 'WSD\\BrightSignApi\\Entity\\Application\\GetFolderContent',
      'GetFolderContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetFolderContentResponse',
      'GetSpecifiedContent' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedContent',
      'GetSpecifiedContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedContentResponse',
      'FindContent' => 'WSD\\BrightSignApi\\Entity\\Application\\FindContent',
      'FindContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindContentResponse',
      'GetContent' => 'WSD\\BrightSignApi\\Entity\\Application\\GetContent',
      'GetContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetContentResponse',
      'CreateContentFolder' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateContentFolder',
      'CreateContentFolderResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateContentFolderResponse',
      'MoveContent' => 'WSD\\BrightSignApi\\Entity\\Application\\MoveContent',
      'MoveContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\MoveContentResponse',
      'CheckContentUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckContentUsage',
      'CheckContentUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckContentUsageResponse',
      'DeleteContent' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteContent',
      'DeleteContentResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteContentResponse',
      'GetPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\GetPresentations',
      'GetPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetPresentationsResponse',
      'GetSpecifiedPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedPresentations',
      'GetSpecifiedPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedPresentationsResponse',
      'FindPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\FindPresentations',
      'FindPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindPresentationsResponse',
      'GetPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\GetPresentation',
      'GetPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetPresentationResponse',
      'GetPresentationByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetPresentationByName',
      'GetPresentationByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetPresentationByNameResponse',
      'CheckPresentationName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckPresentationName',
      'CheckPresentationNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckPresentationNameResponse',
      'CheckPresentationUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckPresentationUsage',
      'CheckPresentationUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckPresentationUsageResponse',
      'GetSupportedVideoModes' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSupportedVideoModes',
      'GetSupportedVideoModesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSupportedVideoModesResponse',
      'CreatePresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\CreatePresentation',
      'CreatePresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreatePresentationResponse',
      'UpdatePresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdatePresentation',
      'UpdatePresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdatePresentationResponse',
      'UpdatePresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdatePresentationZone',
      'UpdatePresentationZoneResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdatePresentationZoneResponse',
      'DeletePresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\DeletePresentations',
      'DeletePresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeletePresentationsResponse',
      'GetAllBrightWallPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllBrightWallPresentations',
      'GetAllBrightWallPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllBrightWallPresentationsResponse',
      'GetBrightWallPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallPresentations',
      'GetBrightWallPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallPresentationsResponse',
      'GetSpecifiedBrightWallPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedBrightWallPresentations',
      'GetSpecifiedBrightWallPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedBrightWallPresentationsResponse',
      'FindBrightWallPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\FindBrightWallPresentations',
      'FindBrightWallPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindBrightWallPresentationsResponse',
      'GetBrightWallPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallPresentation',
      'GetBrightWallPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallPresentationResponse',
      'GetBrightWallPresentationByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallPresentationByName',
      'GetBrightWallPresentationByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallPresentationByNameResponse',
      'CheckBrightWallPresentationName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallPresentationName',
      'CheckBrightWallPresentationNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallPresentationNameResponse',
      'CheckBrightWallPresentationUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallPresentationUsage',
      'CheckBrightWallPresentationUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallPresentationUsageResponse',
      'CheckBrightWallPresentationUsageByName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallPresentationUsageByName',
      'CheckBrightWallPresentationUsageByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallPresentationUsageByNameResponse',
      'CreateBrightWallPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallPresentation',
      'CreateBrightWallPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallPresentationResponse',
      'UpdateBrightWallPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallPresentation',
      'UpdateBrightWallPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallPresentationResponse',
      'DeleteBrightWallPresentations' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallPresentations',
      'DeleteBrightWallPresentationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallPresentationsResponse',
      'GetBrightWallConfigurations' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallConfigurations',
      'GetBrightWallConfigurationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallConfigurationsResponse',
      'GetBrightWallConfiguration' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallConfiguration',
      'GetBrightWallConfigurationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallConfigurationResponse',
      'GetBrightWallConfigurationByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallConfigurationByName',
      'GetBrightWallConfigurationByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallConfigurationByNameResponse',
      'CheckBrightWallConfigurationName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallConfigurationName',
      'CheckBrightWallConfigurationNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallConfigurationNameResponse',
      'CheckBrightWallConfigurationUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallConfigurationUsage',
      'CheckBrightWallConfigurationUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallConfigurationUsageResponse',
      'CheckBrightWallConfigurationByName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallConfigurationByName',
      'CheckBrightWallConfigurationByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckBrightWallConfigurationByNameResponse',
      'CreateBrightWallConfiguration' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallConfiguration',
      'CreateBrightWallConfigurationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallConfigurationResponse',
      'UpdateBrightWallConfiguration' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallConfiguration',
      'UpdateBrightWallConfigurationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallConfigurationResponse',
      'DeleteBrightWallConfigurations' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallConfigurations',
      'DeleteBrightWallConfigurationsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallConfigurationsResponse',
      'GetGroupSchedule' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroupSchedule',
      'GetGroupScheduleResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroupScheduleResponse',
      'AddScheduledPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\AddScheduledPresentation',
      'AddScheduledPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\AddScheduledPresentationResponse',
      'RemoveScheduledPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\RemoveScheduledPresentation',
      'RemoveScheduledPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\RemoveScheduledPresentationResponse',
      'UpdateScheduledPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateScheduledPresentation',
      'UpdateScheduledPresentationResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateScheduledPresentationResponse',
      'OverwriteSchedule' => 'WSD\\BrightSignApi\\Entity\\Application\\OverwriteSchedule',
      'OverwriteScheduleResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\OverwriteScheduleResponse',
      'GetDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDynamicPlaylists',
      'GetDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDynamicPlaylistsResponse',
      'GetImageVideoDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\GetImageVideoDynamicPlaylists',
      'GetImageVideoDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetImageVideoDynamicPlaylistsResponse',
      'GetAudioDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAudioDynamicPlaylists',
      'GetAudioDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAudioDynamicPlaylistsResponse',
      'GetSpecifiedDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedDynamicPlaylists',
      'GetSpecifiedDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedDynamicPlaylistsResponse',
      'FindDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\FindDynamicPlaylists',
      'FindDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindDynamicPlaylistsResponse',
      'FindImageVideoDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\FindImageVideoDynamicPlaylists',
      'FindImageVideoDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindImageVideoDynamicPlaylistsResponse',
      'FindAudioDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\FindAudioDynamicPlaylists',
      'FindAudioDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindAudioDynamicPlaylistsResponse',
      'GetDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDynamicPlaylist',
      'GetDynamicPlaylistResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDynamicPlaylistResponse',
      'GetDynamicPlaylistByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDynamicPlaylistByName',
      'GetDynamicPlaylistByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetDynamicPlaylistByNameResponse',
      'CheckDynamicPlaylistName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckDynamicPlaylistName',
      'CheckDynamicPlaylistNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckDynamicPlaylistNameResponse',
      'CheckDynamicPlaylistUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckDynamicPlaylistUsage',
      'CheckDynamicPlaylistUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckDynamicPlaylistUsageResponse',
      'CheckDynamicPlaylistUsageByName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckDynamicPlaylistUsageByName',
      'CheckDynamicPlaylistUsageByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckDynamicPlaylistUsageByNameResponse',
      'CreateDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateDynamicPlaylist',
      'CreateDynamicPlaylistResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateDynamicPlaylistResponse',
      'UpdateDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDynamicPlaylist',
      'UpdateDynamicPlaylistResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateDynamicPlaylistResponse',
      'RenameDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameDynamicPlaylist',
      'RenameDynamicPlaylistResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameDynamicPlaylistResponse',
      'DeleteDynamicPlaylists' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteDynamicPlaylists',
      'DeleteDynamicPlaylistsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteDynamicPlaylistsResponse',
      'GetLiveTextFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveTextFeeds',
      'GetLiveTextFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveTextFeedsResponse',
      'GetSpecifiedLiveTextFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedLiveTextFeeds',
      'GetSpecifiedLiveTextFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedLiveTextFeedsResponse',
      'FindLiveTextFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\FindLiveTextFeeds',
      'FindLiveTextFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindLiveTextFeedsResponse',
      'GetLiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveTextFeed',
      'GetLiveTextFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveTextFeedResponse',
      'GetLiveTextFeedByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveTextFeedByName',
      'GetLiveTextFeedByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveTextFeedByNameResponse',
      'CheckLiveTextFeedName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveTextFeedName',
      'CheckLiveTextFeedNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveTextFeedNameResponse',
      'CheckLiveTextFeedUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveTextFeedUsage',
      'CheckLiveTextFeedUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveTextFeedUsageResponse',
      'CheckLiveTextFeedUsageByName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveTextFeedUsageByName',
      'CheckLiveTextFeedUsageByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveTextFeedUsageByNameResponse',
      'CreateLiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateLiveTextFeed',
      'CreateLiveTextFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateLiveTextFeedResponse',
      'CloneLiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\CloneLiveTextFeed',
      'CloneLiveTextFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CloneLiveTextFeedResponse',
      'UpdateLiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateLiveTextFeed',
      'UpdateLiveTextFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateLiveTextFeedResponse',
      'RenameLiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameLiveTextFeed',
      'RenameLiveTextFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameLiveTextFeedResponse',
      'DeleteLiveTextFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteLiveTextFeeds',
      'DeleteLiveTextFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteLiveTextFeedsResponse',
      'GetLiveMediaFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveMediaFeeds',
      'GetLiveMediaFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveMediaFeedsResponse',
      'GetSpecifiedLiveMediaFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedLiveMediaFeeds',
      'GetSpecifiedLiveMediaFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedLiveMediaFeedsResponse',
      'FindLiveMediaFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\FindLiveMediaFeeds',
      'FindLiveMediaFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindLiveMediaFeedsResponse',
      'GetLiveMediaFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveMediaFeed',
      'GetLiveMediaFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveMediaFeedResponse',
      'GetLiveMediaFeedByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveMediaFeedByName',
      'GetLiveMediaFeedByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetLiveMediaFeedByNameResponse',
      'CheckLiveMediaFeedName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveMediaFeedName',
      'CheckLiveMediaFeedNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckLiveMediaFeedNameResponse',
      'CreateLiveMediaFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateLiveMediaFeed',
      'CreateLiveMediaFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateLiveMediaFeedResponse',
      'UpdateLiveMediaFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateLiveMediaFeed',
      'UpdateLiveMediaFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateLiveMediaFeedResponse',
      'RenameLiveMediaFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameLiveMediaFeed',
      'RenameLiveMediaFeedResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameLiveMediaFeedResponse',
      'DeleteLiveMediaFeeds' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteLiveMediaFeeds',
      'DeleteLiveMediaFeedsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteLiveMediaFeedsResponse',
      'GetWebPages' => 'WSD\\BrightSignApi\\Entity\\Application\\GetWebPages',
      'GetWebPagesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetWebPagesResponse',
      'GetSpecifiedWebPages' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedWebPages',
      'GetSpecifiedWebPagesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedWebPagesResponse',
      'FindWebPages' => 'WSD\\BrightSignApi\\Entity\\Application\\FindWebPages',
      'FindWebPagesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindWebPagesResponse',
      'GetWebPage' => 'WSD\\BrightSignApi\\Entity\\Application\\GetWebPage',
      'GetWebPageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetWebPageResponse',
      'GetWebPageByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetWebPageByName',
      'GetWebPageByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetWebPageByNameResponse',
      'CheckWebPageName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckWebPageName',
      'CheckWebPageNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckWebPageNameResponse',
      'CheckWebPageUsage' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckWebPageUsage',
      'CheckWebPageUsageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckWebPageUsageResponse',
      'CheckWebPageUsageByName' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckWebPageUsageByName',
      'CheckWebPageUsageByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CheckWebPageUsageByNameResponse',
      'RenameWebPage' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameWebPage',
      'RenameWebPageResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\RenameWebPageResponse',
      'DeleteWebPages' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteWebPages',
      'DeleteWebPagesResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteWebPagesResponse',
      'GetGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroups',
      'GetGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroupsResponse',
      'GetSpecifiedGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedGroups',
      'GetSpecifiedGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedGroupsResponse',
      'FindGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\FindGroups',
      'FindGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindGroupsResponse',
      'GetGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroup',
      'GetGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroupResponse',
      'GetGroupByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroupByName',
      'GetGroupByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetGroupByNameResponse',
      'CreateGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateGroup',
      'CreateGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateGroupResponse',
      'UpdateGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateGroup',
      'UpdateGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateGroupResponse',
      'UpdateGroupsFirmware' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateGroupsFirmware',
      'UpdateGroupsFirmwareResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateGroupsFirmwareResponse',
      'DeleteGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteGroup',
      'DeleteGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteGroupResponse',
      'GetAllBrightWallGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllBrightWallGroups',
      'GetAllBrightWallGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetAllBrightWallGroupsResponse',
      'GetBrightWallGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallGroups',
      'GetBrightWallGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallGroupsResponse',
      'GetSpecifiedBrightWallGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedBrightWallGroups',
      'GetSpecifiedBrightWallGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedBrightWallGroupsResponse',
      'FindBrightWallGroups' => 'WSD\\BrightSignApi\\Entity\\Application\\FindBrightWallGroups',
      'FindBrightWallGroupsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindBrightWallGroupsResponse',
      'GetBrightWallGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallGroup',
      'GetBrightWallGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallGroupResponse',
      'GetBrightWallGroupByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallGroupByName',
      'GetBrightWallGroupByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallGroupByNameResponse',
      'CreateBrightWallGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallGroup',
      'CreateBrightWallGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\CreateBrightWallGroupResponse',
      'UpdateBrightWallGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallGroup',
      'UpdateBrightWallGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallGroupResponse',
      'UpdateBrightWallGroupsFirmware' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallGroupsFirmware',
      'UpdateBrightWallGroupsFirmwareResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\UpdateBrightWallGroupsFirmwareResponse',
      'DeleteBrightWallGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallGroup',
      'DeleteBrightWallGroupResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\DeleteBrightWallGroupResponse',
      'GetBrightWalls' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWalls',
      'GetBrightWallsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallsResponse',
      'GetSpecifiedBrightWalls' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedBrightWalls',
      'GetSpecifiedBrightWallsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetSpecifiedBrightWallsResponse',
      'FindBrightWalls' => 'WSD\\BrightSignApi\\Entity\\Application\\FindBrightWalls',
      'FindBrightWallsResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\FindBrightWallsResponse',
      'GetBrightWall' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWall',
      'GetBrightWallResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallResponse',
      'GetBrightWallByName' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallByName',
      'GetBrightWallByNameResponse' => 'WSD\\BrightSignApi\\Entity\\Application\\GetBrightWallByNameResponse',
      'BrightWall' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWall',
      'ArrayOfBrightWallScreen' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWallScreen',
      'BrightWallScreen' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWallScreen',
      'ArrayOfPresentationContent' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfPresentationContent',
      'PresentationContent' => 'WSD\\BrightSignApi\\Entity\\Application\\PresentationContent',
      'ImageContent' => 'WSD\\BrightSignApi\\Entity\\Application\\ImageContent',
      'BackgroundImageContent' => 'WSD\\BrightSignApi\\Entity\\Application\\BackgroundImageContent',
      'VideoContent' => 'WSD\\BrightSignApi\\Entity\\Application\\VideoContent',
      'VideoStreamContent' => 'WSD\\BrightSignApi\\Entity\\Application\\VideoStreamContent',
      'LiveVideoContent' => 'WSD\\BrightSignApi\\Entity\\Application\\LiveVideoContent',
      'RadioInputContent' => 'WSD\\BrightSignApi\\Entity\\Application\\RadioInputContent',
      'RadioChannel' => 'WSD\\BrightSignApi\\Entity\\Application\\RadioChannel',
      'FirstRadioChannel' => 'WSD\\BrightSignApi\\Entity\\Application\\FirstRadioChannel',
      'CustomRadioChannel' => 'WSD\\BrightSignApi\\Entity\\Application\\CustomRadioChannel',
      'VirtualRadioChannel' => 'WSD\\BrightSignApi\\Entity\\Application\\VirtualRadioChannel',
      'AudioContent' => 'WSD\\BrightSignApi\\Entity\\Application\\AudioContent',
      'MediaRssFeedContent' => 'WSD\\BrightSignApi\\Entity\\Application\\MediaRssFeedContent',
      'WebPageContent' => 'WSD\\BrightSignApi\\Entity\\Application\\WebPageContent',
      'Device' => 'WSD\\BrightSignApi\\Entity\\Application\\Device',
      'DeviceSubscription' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceSubscription',
      'DeviceLogsSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceLogsSettings',
      'DeviceNetworkSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceNetworkSettings',
      'DeviceWiredSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceWiredSettings',
      'DeviceWirelessSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceWirelessSettings',
      'PresentationInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\PresentationInfo',
      'BrightWallPresentationInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWallPresentationInfo',
      'RemoteSnapshotSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\RemoteSnapshotSettings',
      'ArrayOfDevice' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDevice',
      'ArrayOfDeviceError' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDeviceError',
      'DeviceError' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceError',
      'ArrayOfDeviceDownload' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDeviceDownload',
      'DeviceDownload' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceDownload',
      'ArrayOfDeviceScreenShot' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDeviceScreenShot',
      'DeviceScreenShot' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceScreenShot',
      'ArrayOfDeviceLogReport' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDeviceLogReport',
      'DeviceLogReport' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceLogReport',
      'DeviceSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\DeviceSettings',
      'User' => 'WSD\\BrightSignApi\\Entity\\Application\\User',
      'Account' => 'WSD\\BrightSignApi\\Entity\\Application\\Account',
      'ArrayOfUser' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfUser',
      'ArrayOfContent' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfContent',
      'Content' => 'WSD\\BrightSignApi\\Entity\\Application\\Content',
      'ArrayOfDynamicPlaylistInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDynamicPlaylistInfo',
      'DynamicPlaylistInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\DynamicPlaylistInfo',
      'ArrayOfPresentationInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfPresentationInfo',
      'ArrayOfContentFolder' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfContentFolder',
      'ContentFolder' => 'WSD\\BrightSignApi\\Entity\\Application\\ContentFolder',
      'ArrayOfPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfPresentation',
      'Presentation' => 'WSD\\BrightSignApi\\Entity\\Application\\Presentation',
      'ArrayOfGroupInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfGroupInfo',
      'GroupInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\GroupInfo',
      'ScreenSettings' => 'WSD\\BrightSignApi\\Entity\\Application\\ScreenSettings',
      'ArrayOfPresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfPresentationZone',
      'PresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\PresentationZone',
      'ImagesPresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\ImagesPresentationZone',
      'BackgroundImagePresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\BackgroundImagePresentationZone',
      'VideoPresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\VideoPresentationZone',
      'VideoOrImagesPresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\VideoOrImagesPresentationZone',
      'AudioPresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\AudioPresentationZone',
      'EnhancedAudioPresentationZone' => 'WSD\\BrightSignApi\\Entity\\Application\\EnhancedAudioPresentationZone',
      'ArrayOfVideoMode' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfVideoMode',
      'ArrayOfBrightWallPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWallPresentation',
      'BrightWallPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWallPresentation',
      'BrightWallConfiguration' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWallConfiguration',
      'ArrayOfBrightWallGroupInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWallGroupInfo',
      'BrightWallGroupInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWallGroupInfo',
      'ArrayOfBrightWallPresentationInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWallPresentationInfo',
      'FileInfo' => 'WSD\\BrightSignApi\\Entity\\Application\\FileInfo',
      'ArrayOfBrightWallConfiguration' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWallConfiguration',
      'ArrayOfScheduledPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfScheduledPresentation',
      'ScheduledPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\ScheduledPresentation',
      'ScheduledBrightWallPresentation' => 'WSD\\BrightSignApi\\Entity\\Application\\ScheduledBrightWallPresentation',
      'ArrayOfDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDynamicPlaylist',
      'DynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\DynamicPlaylist',
      'ArrayOfDynamicPlaylistContent' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDynamicPlaylistContent',
      'DynamicPlaylistContent' => 'WSD\\BrightSignApi\\Entity\\Application\\DynamicPlaylistContent',
      'ImageVideoDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\ImageVideoDynamicPlaylist',
      'AudioDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\AudioDynamicPlaylist',
      'ArrayOfImageVideoDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfImageVideoDynamicPlaylist',
      'ArrayOfAudioDynamicPlaylist' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfAudioDynamicPlaylist',
      'ArrayOfLiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfLiveTextFeed',
      'LiveTextFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\LiveTextFeed',
      'ArrayOfLiveTextFeedItem' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfLiveTextFeedItem',
      'LiveTextFeedItem' => 'WSD\\BrightSignApi\\Entity\\Application\\LiveTextFeedItem',
      'ArrayOfLiveMediaFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfLiveMediaFeed',
      'LiveMediaFeed' => 'WSD\\BrightSignApi\\Entity\\Application\\LiveMediaFeed',
      'ArrayOfLiveMediaFeedContent' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfLiveMediaFeedContent',
      'LiveMediaFeedContent' => 'WSD\\BrightSignApi\\Entity\\Application\\LiveMediaFeedContent',
      'ArrayOfWebPage' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfWebPage',
      'WebPage' => 'WSD\\BrightSignApi\\Entity\\Application\\WebPage',
      'ArrayOfWebPageAsset' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfWebPageAsset',
      'WebPageAsset' => 'WSD\\BrightSignApi\\Entity\\Application\\WebPageAsset',
      'ArrayOfGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfGroup',
      'Group' => 'WSD\\BrightSignApi\\Entity\\Application\\Group',
      'ArrayOfDeviceHealthStatus' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfDeviceHealthStatus',
      'ArrayOfBrightWallGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWallGroup',
      'BrightWallGroup' => 'WSD\\BrightSignApi\\Entity\\Application\\BrightWallGroup',
      'ArrayOfBrightWall' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfBrightWall',
      'ArrayOfstring' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfstring',
      'ArrayOfint' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfint',
      'ArrayOfKeyValueOfstringstring' => 'WSD\\BrightSignApi\\Entity\\Application\\ArrayOfKeyValueOfstringstring',
      'KeyValueOfstringstring' => 'WSD\\BrightSignApi\\Entity\\Application\\KeyValueOfstringstring',
      'PagedDeviceList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedDeviceList',
      'PagedDeviceErrorList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedDeviceErrorList',
      'PagedDeviceDownloadList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedDeviceDownloadList',
      'PagedDeviceScreenShotList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedDeviceScreenShotList',
      'PagedDeviceLogReportList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedDeviceLogReportList',
      'PagedContentList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedContentList',
      'PagedPresentationList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedPresentationList',
      'PagedBrightWallPresentationList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedBrightWallPresentationList',
      'PagedBrightWallConfigurationList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedBrightWallConfigurationList',
      'PagedScheduledPresentationList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedScheduledPresentationList',
      'PagedDynamicPlaylistList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedDynamicPlaylistList',
      'PagedImageVideoDynamicPlaylistList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedImageVideoDynamicPlaylistList',
      'PagedAudioDynamicPlaylistList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedAudioDynamicPlaylistList',
      'PagedLiveTextFeedList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedLiveTextFeedList',
      'PagedLiveMediaFeedList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedLiveMediaFeedList',
      'PagedWebPageList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedWebPageList',
      'PagedGroupList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedGroupList',
      'PagedBrightWallGroupList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedBrightWallGroupList',
      'PagedBrightWallList' => 'WSD\\BrightSignApi\\Entity\\Application\\PagedBrightWallList',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(), $wsdl = null)
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'soap_version' => 1,
      'trace' => 1,
      'cache_wsdl' => 0,
      'features' => 1,
    ), $options);
      if (!$wsdl) {
        $wsdl = 'https://api.instore-experience.com/2014/12/SOAP/WSDL/';
      }
      parent::__construct($wsdl, $options);
    }

    /**
     * @param CheckBrightWallName $parameters
     * @return CheckBrightWallNameResponse
     */
    public function CheckBrightWallName(CheckBrightWallName $parameters)
    {
      return $this->__soapCall('CheckBrightWallName', array($parameters));
    }

    /**
     * @param CreateBrightWall $parameters
     * @return CreateBrightWallResponse
     */
    public function CreateBrightWall(CreateBrightWall $parameters)
    {
      return $this->__soapCall('CreateBrightWall', array($parameters));
    }

    /**
     * @param UpdateBrightWall $parameters
     * @return UpdateBrightWallResponse
     */
    public function UpdateBrightWall(UpdateBrightWall $parameters)
    {
      return $this->__soapCall('UpdateBrightWall', array($parameters));
    }

    /**
     * @param ReassignBrightWalls $parameters
     * @return ReassignBrightWallsResponse
     */
    public function ReassignBrightWalls(ReassignBrightWalls $parameters)
    {
      return $this->__soapCall('ReassignBrightWalls', array($parameters));
    }

    /**
     * @param DeleteBrightWall $parameters
     * @return DeleteBrightWallResponse
     */
    public function DeleteBrightWall(DeleteBrightWall $parameters)
    {
      return $this->__soapCall('DeleteBrightWall', array($parameters));
    }

    /**
     * @param GetAllDevices $parameters
     * @return GetAllDevicesResponse
     */
    public function GetAllDevices(GetAllDevices $parameters)
    {
      return $this->__soapCall('GetAllDevices', array($parameters));
    }

    /**
     * @param GetSpecifiedDevices $parameters
     * @return GetSpecifiedDevicesResponse
     */
    public function GetSpecifiedDevices(GetSpecifiedDevices $parameters)
    {
      return $this->__soapCall('GetSpecifiedDevices', array($parameters));
    }

    /**
     * @param FindDevices $parameters
     * @return FindDevicesResponse
     */
    public function FindDevices(FindDevices $parameters)
    {
      return $this->__soapCall('FindDevices', array($parameters));
    }

    /**
     * @param GetDevice $parameters
     * @return GetDeviceResponse
     */
    public function GetDevice(GetDevice $parameters)
    {
      return $this->__soapCall('GetDevice', array($parameters));
    }

    /**
     * @param GetDeviceBySerial $parameters
     * @return GetDeviceBySerialResponse
     */
    public function GetDeviceBySerial(GetDeviceBySerial $parameters)
    {
      return $this->__soapCall('GetDeviceBySerial', array($parameters));
    }

    /**
     * @param GetDeviceErrors $parameters
     * @return GetDeviceErrorsResponse
     */
    public function GetDeviceErrors(GetDeviceErrors $parameters)
    {
      return $this->__soapCall('GetDeviceErrors', array($parameters));
    }

    /**
     * @param GetDeviceDownloads $parameters
     * @return GetDeviceDownloadsResponse
     */
    public function GetDeviceDownloads(GetDeviceDownloads $parameters)
    {
      return $this->__soapCall('GetDeviceDownloads', array($parameters));
    }

    /**
     * @param GetDeviceScreenShots $parameters
     * @return GetDeviceScreenShotsResponse
     */
    public function GetDeviceScreenShots(GetDeviceScreenShots $parameters)
    {
      return $this->__soapCall('GetDeviceScreenShots', array($parameters));
    }

    /**
     * @param GetDeviceLogReports $parameters
     * @return GetDeviceLogReportsResponse
     */
    public function GetDeviceLogReports(GetDeviceLogReports $parameters)
    {
      return $this->__soapCall('GetDeviceLogReports', array($parameters));
    }

    /**
     * @param GenerateDeviceSetupPackage $parameters
     * @return GenerateDeviceSetupPackageResponse
     */
    public function GenerateDeviceSetupPackage(GenerateDeviceSetupPackage $parameters)
    {
      return $this->__soapCall('GenerateDeviceSetupPackage', array($parameters));
    }

    /**
     * @param UpdateDevice $parameters
     * @return UpdateDeviceResponse
     */
    public function UpdateDevice(UpdateDevice $parameters)
    {
      return $this->__soapCall('UpdateDevice', array($parameters));
    }

    /**
     * @param RenameDevice $parameters
     * @return RenameDeviceResponse
     */
    public function RenameDevice(RenameDevice $parameters)
    {
      return $this->__soapCall('RenameDevice', array($parameters));
    }

    /**
     * @param UpdateDeviceNetworkSettings $parameters
     * @return UpdateDeviceNetworkSettingsResponse
     */
    public function UpdateDeviceNetworkSettings(UpdateDeviceNetworkSettings $parameters)
    {
      return $this->__soapCall('UpdateDeviceNetworkSettings', array($parameters));
    }

    /**
     * @param UpdateDeviceRemoteSnapshotSettings $parameters
     * @return UpdateDeviceRemoteSnapshotSettingsResponse
     */
    public function UpdateDeviceRemoteSnapshotSettings(UpdateDeviceRemoteSnapshotSettings $parameters)
    {
      return $this->__soapCall('UpdateDeviceRemoteSnapshotSettings', array($parameters));
    }

    /**
     * @param UpdateDeviceLogsSettings $parameters
     * @return UpdateDeviceLogsSettingsResponse
     */
    public function UpdateDeviceLogsSettings(UpdateDeviceLogsSettings $parameters)
    {
      return $this->__soapCall('UpdateDeviceLogsSettings', array($parameters));
    }

    /**
     * @param ReassignDevices $parameters
     * @return ReassignDevicesResponse
     */
    public function ReassignDevices(ReassignDevices $parameters)
    {
      return $this->__soapCall('ReassignDevices', array($parameters));
    }

    /**
     * @param ForceDevicesReboot $parameters
     * @return ForceDevicesRebootResponse
     */
    public function ForceDevicesReboot(ForceDevicesReboot $parameters)
    {
      return $this->__soapCall('ForceDevicesReboot', array($parameters));
    }

    /**
     * @param CancelDevicesReboot $parameters
     * @return CancelDevicesRebootResponse
     */
    public function CancelDevicesReboot(CancelDevicesReboot $parameters)
    {
      return $this->__soapCall('CancelDevicesReboot', array($parameters));
    }

    /**
     * @param ForceDevicesRecovery $parameters
     * @return ForceDevicesRecoveryResponse
     */
    public function ForceDevicesRecovery(ForceDevicesRecovery $parameters)
    {
      return $this->__soapCall('ForceDevicesRecovery', array($parameters));
    }

    /**
     * @param CancelDevicesRecovery $parameters
     * @return CancelDevicesRecoveryResponse
     */
    public function CancelDevicesRecovery(CancelDevicesRecovery $parameters)
    {
      return $this->__soapCall('CancelDevicesRecovery', array($parameters));
    }

    /**
     * @param ForceDevicesLogsUpload $parameters
     * @return ForceDevicesLogsUploadResponse
     */
    public function ForceDevicesLogsUpload(ForceDevicesLogsUpload $parameters)
    {
      return $this->__soapCall('ForceDevicesLogsUpload', array($parameters));
    }

    /**
     * @param CancelDevicesLogsUpload $parameters
     * @return CancelDevicesLogsUploadResponse
     */
    public function CancelDevicesLogsUpload(CancelDevicesLogsUpload $parameters)
    {
      return $this->__soapCall('CancelDevicesLogsUpload', array($parameters));
    }

    /**
     * @param DeleteDevices $parameters
     * @return DeleteDevicesResponse
     */
    public function DeleteDevices(DeleteDevices $parameters)
    {
      return $this->__soapCall('DeleteDevices', array($parameters));
    }

    /**
     * @param Authenticate $parameters
     * @return AuthenticateResponse
     */
    public function Authenticate(Authenticate $parameters)
    {
      return $this->__soapCall('Authenticate', array($parameters));
    }

    /**
     * @param CreateAccount $parameters
     * @return CreateAccountResponse
     */
    public function CreateAccount(CreateAccount $parameters)
    {
      return $this->__soapCall('CreateAccount', array($parameters));
    }

    /**
     * @param UpdateAccountSettings $parameters
     * @return UpdateAccountSettingsResponse
     */
    public function UpdateAccountSettings(UpdateAccountSettings $parameters)
    {
      return $this->__soapCall('UpdateAccountSettings', array($parameters));
    }

    /**
     * @param CheckSubscriptionKey $parameters
     * @return CheckSubscriptionKeyResponse
     */
    public function CheckSubscriptionKey(CheckSubscriptionKey $parameters)
    {
      return $this->__soapCall('CheckSubscriptionKey', array($parameters));
    }

    /**
     * @param ActivateSubscriptionKey $parameters
     * @return ActivateSubscriptionKeyResponse
     */
    public function ActivateSubscriptionKey(ActivateSubscriptionKey $parameters)
    {
      return $this->__soapCall('ActivateSubscriptionKey', array($parameters));
    }

    /**
     * @param CreateUser $parameters
     * @return CreateUserResponse
     */
    public function CreateUser(CreateUser $parameters)
    {
      return $this->__soapCall('CreateUser', array($parameters));
    }

    /**
     * @param ChangePassword $parameters
     * @return ChangePasswordResponse
     */
    public function ChangePassword(ChangePassword $parameters)
    {
      return $this->__soapCall('ChangePassword', array($parameters));
    }

    /**
     * @param GetAllContent $parameters
     * @return GetAllContentResponse
     */
    public function GetAllContent(GetAllContent $parameters)
    {
      return $this->__soapCall('GetAllContent', array($parameters));
    }

    /**
     * @param GetContentFolders $parameters
     * @return GetContentFoldersResponse
     */
    public function GetContentFolders(GetContentFolders $parameters)
    {
      return $this->__soapCall('GetContentFolders', array($parameters));
    }

    /**
     * @param GetFolderContent $parameters
     * @return GetFolderContentResponse
     */
    public function GetFolderContent(GetFolderContent $parameters)
    {
      return $this->__soapCall('GetFolderContent', array($parameters));
    }

    /**
     * @param GetSpecifiedContent $parameters
     * @return GetSpecifiedContentResponse
     */
    public function GetSpecifiedContent(GetSpecifiedContent $parameters)
    {
      return $this->__soapCall('GetSpecifiedContent', array($parameters));
    }

    /**
     * @param FindContent $parameters
     * @return FindContentResponse
     */
    public function FindContent(FindContent $parameters)
    {
      return $this->__soapCall('FindContent', array($parameters));
    }

    /**
     * @param GetContent $parameters
     * @return GetContentResponse
     */
    public function GetContent(GetContent $parameters)
    {
      return $this->__soapCall('GetContent', array($parameters));
    }

    /**
     * @param CreateContentFolder $parameters
     * @return CreateContentFolderResponse
     */
    public function CreateContentFolder(CreateContentFolder $parameters)
    {
      return $this->__soapCall('CreateContentFolder', array($parameters));
    }

    /**
     * @param MoveContent $parameters
     * @return MoveContentResponse
     */
    public function MoveContent(MoveContent $parameters)
    {
      return $this->__soapCall('MoveContent', array($parameters));
    }

    /**
     * @param CheckContentUsage $parameters
     * @return CheckContentUsageResponse
     */
    public function CheckContentUsage(CheckContentUsage $parameters)
    {
      return $this->__soapCall('CheckContentUsage', array($parameters));
    }

    /**
     * @param DeleteContent $parameters
     * @return DeleteContentResponse
     */
    public function DeleteContent(DeleteContent $parameters)
    {
      return $this->__soapCall('DeleteContent', array($parameters));
    }

    /**
     * @param GetPresentations $parameters
     * @return GetPresentationsResponse
     */
    public function GetPresentations(GetPresentations $parameters)
    {
      return $this->__soapCall('GetPresentations', array($parameters));
    }

    /**
     * @param GetSpecifiedPresentations $parameters
     * @return GetSpecifiedPresentationsResponse
     */
    public function GetSpecifiedPresentations(GetSpecifiedPresentations $parameters)
    {
      return $this->__soapCall('GetSpecifiedPresentations', array($parameters));
    }

    /**
     * @param FindPresentations $parameters
     * @return FindPresentationsResponse
     */
    public function FindPresentations(FindPresentations $parameters)
    {
      return $this->__soapCall('FindPresentations', array($parameters));
    }

    /**
     * @param GetPresentation $parameters
     * @return GetPresentationResponse
     */
    public function GetPresentation(GetPresentation $parameters)
    {
      return $this->__soapCall('GetPresentation', array($parameters));
    }

    /**
     * @param GetPresentationByName $parameters
     * @return GetPresentationByNameResponse
     */
    public function GetPresentationByName(GetPresentationByName $parameters)
    {
      return $this->__soapCall('GetPresentationByName', array($parameters));
    }

    /**
     * @param CheckPresentationName $parameters
     * @return CheckPresentationNameResponse
     */
    public function CheckPresentationName(CheckPresentationName $parameters)
    {
      return $this->__soapCall('CheckPresentationName', array($parameters));
    }

    /**
     * @param CheckPresentationUsage $parameters
     * @return CheckPresentationUsageResponse
     */
    public function CheckPresentationUsage(CheckPresentationUsage $parameters)
    {
      return $this->__soapCall('CheckPresentationUsage', array($parameters));
    }

    /**
     * @param GetSupportedVideoModes $parameters
     * @return GetSupportedVideoModesResponse
     */
    public function GetSupportedVideoModes(GetSupportedVideoModes $parameters)
    {
      return $this->__soapCall('GetSupportedVideoModes', array($parameters));
    }

    /**
     * @param CreatePresentation $parameters
     * @return CreatePresentationResponse
     */
    public function CreatePresentation(CreatePresentation $parameters)
    {
      return $this->__soapCall('CreatePresentation', array($parameters));
    }

    /**
     * @param UpdatePresentation $parameters
     * @return UpdatePresentationResponse
     */
    public function UpdatePresentation(UpdatePresentation $parameters)
    {
      return $this->__soapCall('UpdatePresentation', array($parameters));
    }

    /**
     * @param UpdatePresentationZone $parameters
     * @return UpdatePresentationZoneResponse
     */
    public function UpdatePresentationZone(UpdatePresentationZone $parameters)
    {
      return $this->__soapCall('UpdatePresentationZone', array($parameters));
    }

    /**
     * @param DeletePresentations $parameters
     * @return DeletePresentationsResponse
     */
    public function DeletePresentations(DeletePresentations $parameters)
    {
      return $this->__soapCall('DeletePresentations', array($parameters));
    }

    /**
     * @param GetAllBrightWallPresentations $parameters
     * @return GetAllBrightWallPresentationsResponse
     */
    public function GetAllBrightWallPresentations(GetAllBrightWallPresentations $parameters)
    {
      return $this->__soapCall('GetAllBrightWallPresentations', array($parameters));
    }

    /**
     * @param GetBrightWallPresentations $parameters
     * @return GetBrightWallPresentationsResponse
     */
    public function GetBrightWallPresentations(GetBrightWallPresentations $parameters)
    {
      return $this->__soapCall('GetBrightWallPresentations', array($parameters));
    }

    /**
     * @param GetSpecifiedBrightWallPresentations $parameters
     * @return GetSpecifiedBrightWallPresentationsResponse
     */
    public function GetSpecifiedBrightWallPresentations(GetSpecifiedBrightWallPresentations $parameters)
    {
      return $this->__soapCall('GetSpecifiedBrightWallPresentations', array($parameters));
    }

    /**
     * @param FindBrightWallPresentations $parameters
     * @return FindBrightWallPresentationsResponse
     */
    public function FindBrightWallPresentations(FindBrightWallPresentations $parameters)
    {
      return $this->__soapCall('FindBrightWallPresentations', array($parameters));
    }

    /**
     * @param GetBrightWallPresentation $parameters
     * @return GetBrightWallPresentationResponse
     */
    public function GetBrightWallPresentation(GetBrightWallPresentation $parameters)
    {
      return $this->__soapCall('GetBrightWallPresentation', array($parameters));
    }

    /**
     * @param GetBrightWallPresentationByName $parameters
     * @return GetBrightWallPresentationByNameResponse
     */
    public function GetBrightWallPresentationByName(GetBrightWallPresentationByName $parameters)
    {
      return $this->__soapCall('GetBrightWallPresentationByName', array($parameters));
    }

    /**
     * @param CheckBrightWallPresentationName $parameters
     * @return CheckBrightWallPresentationNameResponse
     */
    public function CheckBrightWallPresentationName(CheckBrightWallPresentationName $parameters)
    {
      return $this->__soapCall('CheckBrightWallPresentationName', array($parameters));
    }

    /**
     * @param CheckBrightWallPresentationUsage $parameters
     * @return CheckBrightWallPresentationUsageResponse
     */
    public function CheckBrightWallPresentationUsage(CheckBrightWallPresentationUsage $parameters)
    {
      return $this->__soapCall('CheckBrightWallPresentationUsage', array($parameters));
    }

    /**
     * @param CheckBrightWallPresentationUsageByName $parameters
     * @return CheckBrightWallPresentationUsageByNameResponse
     */
    public function CheckBrightWallPresentationUsageByName(CheckBrightWallPresentationUsageByName $parameters)
    {
      return $this->__soapCall('CheckBrightWallPresentationUsageByName', array($parameters));
    }

    /**
     * @param CreateBrightWallPresentation $parameters
     * @return CreateBrightWallPresentationResponse
     */
    public function CreateBrightWallPresentation(CreateBrightWallPresentation $parameters)
    {
      return $this->__soapCall('CreateBrightWallPresentation', array($parameters));
    }

    /**
     * @param UpdateBrightWallPresentation $parameters
     * @return UpdateBrightWallPresentationResponse
     */
    public function UpdateBrightWallPresentation(UpdateBrightWallPresentation $parameters)
    {
      return $this->__soapCall('UpdateBrightWallPresentation', array($parameters));
    }

    /**
     * @param DeleteBrightWallPresentations $parameters
     * @return DeleteBrightWallPresentationsResponse
     */
    public function DeleteBrightWallPresentations(DeleteBrightWallPresentations $parameters)
    {
      return $this->__soapCall('DeleteBrightWallPresentations', array($parameters));
    }

    /**
     * @param GetBrightWallConfigurations $parameters
     * @return GetBrightWallConfigurationsResponse
     */
    public function GetBrightWallConfigurations(GetBrightWallConfigurations $parameters)
    {
      return $this->__soapCall('GetBrightWallConfigurations', array($parameters));
    }

    /**
     * @param GetBrightWallConfiguration $parameters
     * @return GetBrightWallConfigurationResponse
     */
    public function GetBrightWallConfiguration(GetBrightWallConfiguration $parameters)
    {
      return $this->__soapCall('GetBrightWallConfiguration', array($parameters));
    }

    /**
     * @param GetBrightWallConfigurationByName $parameters
     * @return GetBrightWallConfigurationByNameResponse
     */
    public function GetBrightWallConfigurationByName(GetBrightWallConfigurationByName $parameters)
    {
      return $this->__soapCall('GetBrightWallConfigurationByName', array($parameters));
    }

    /**
     * @param CheckBrightWallConfigurationName $parameters
     * @return CheckBrightWallConfigurationNameResponse
     */
    public function CheckBrightWallConfigurationName(CheckBrightWallConfigurationName $parameters)
    {
      return $this->__soapCall('CheckBrightWallConfigurationName', array($parameters));
    }

    /**
     * @param CheckBrightWallConfigurationUsage $parameters
     * @return CheckBrightWallConfigurationUsageResponse
     */
    public function CheckBrightWallConfigurationUsage(CheckBrightWallConfigurationUsage $parameters)
    {
      return $this->__soapCall('CheckBrightWallConfigurationUsage', array($parameters));
    }

    /**
     * @param CheckBrightWallConfigurationByName $parameters
     * @return CheckBrightWallConfigurationByNameResponse
     */
    public function CheckBrightWallConfigurationByName(CheckBrightWallConfigurationByName $parameters)
    {
      return $this->__soapCall('CheckBrightWallConfigurationByName', array($parameters));
    }

    /**
     * @param CreateBrightWallConfiguration $parameters
     * @return CreateBrightWallConfigurationResponse
     */
    public function CreateBrightWallConfiguration(CreateBrightWallConfiguration $parameters)
    {
      return $this->__soapCall('CreateBrightWallConfiguration', array($parameters));
    }

    /**
     * @param UpdateBrightWallConfiguration $parameters
     * @return UpdateBrightWallConfigurationResponse
     */
    public function UpdateBrightWallConfiguration(UpdateBrightWallConfiguration $parameters)
    {
      return $this->__soapCall('UpdateBrightWallConfiguration', array($parameters));
    }

    /**
     * @param DeleteBrightWallConfigurations $parameters
     * @return DeleteBrightWallConfigurationsResponse
     */
    public function DeleteBrightWallConfigurations(DeleteBrightWallConfigurations $parameters)
    {
      return $this->__soapCall('DeleteBrightWallConfigurations', array($parameters));
    }

    /**
     * @param GetGroupSchedule $parameters
     * @return GetGroupScheduleResponse
     */
    public function GetGroupSchedule(GetGroupSchedule $parameters)
    {
      return $this->__soapCall('GetGroupSchedule', array($parameters));
    }

    /**
     * @param AddScheduledPresentation $parameters
     * @return AddScheduledPresentationResponse
     */
    public function AddScheduledPresentation(AddScheduledPresentation $parameters)
    {
      return $this->__soapCall('AddScheduledPresentation', array($parameters));
    }

    /**
     * @param RemoveScheduledPresentation $parameters
     * @return RemoveScheduledPresentationResponse
     */
    public function RemoveScheduledPresentation(RemoveScheduledPresentation $parameters)
    {
      return $this->__soapCall('RemoveScheduledPresentation', array($parameters));
    }

    /**
     * @param UpdateScheduledPresentation $parameters
     * @return UpdateScheduledPresentationResponse
     */
    public function UpdateScheduledPresentation(UpdateScheduledPresentation $parameters)
    {
      return $this->__soapCall('UpdateScheduledPresentation', array($parameters));
    }

    /**
     * @param OverwriteSchedule $parameters
     * @return OverwriteScheduleResponse
     */
    public function OverwriteSchedule(OverwriteSchedule $parameters)
    {
      return $this->__soapCall('OverwriteSchedule', array($parameters));
    }

    /**
     * @param GetDynamicPlaylists $parameters
     * @return GetDynamicPlaylistsResponse
     */
    public function GetDynamicPlaylists(GetDynamicPlaylists $parameters)
    {
      return $this->__soapCall('GetDynamicPlaylists', array($parameters));
    }

    /**
     * @param GetImageVideoDynamicPlaylists $parameters
     * @return GetImageVideoDynamicPlaylistsResponse
     */
    public function GetImageVideoDynamicPlaylists(GetImageVideoDynamicPlaylists $parameters)
    {
      return $this->__soapCall('GetImageVideoDynamicPlaylists', array($parameters));
    }

    /**
     * @param GetAudioDynamicPlaylists $parameters
     * @return GetAudioDynamicPlaylistsResponse
     */
    public function GetAudioDynamicPlaylists(GetAudioDynamicPlaylists $parameters)
    {
      return $this->__soapCall('GetAudioDynamicPlaylists', array($parameters));
    }

    /**
     * @param GetSpecifiedDynamicPlaylists $parameters
     * @return GetSpecifiedDynamicPlaylistsResponse
     */
    public function GetSpecifiedDynamicPlaylists(GetSpecifiedDynamicPlaylists $parameters)
    {
      return $this->__soapCall('GetSpecifiedDynamicPlaylists', array($parameters));
    }

    /**
     * @param FindDynamicPlaylists $parameters
     * @return FindDynamicPlaylistsResponse
     */
    public function FindDynamicPlaylists(FindDynamicPlaylists $parameters)
    {
      return $this->__soapCall('FindDynamicPlaylists', array($parameters));
    }

    /**
     * @param FindImageVideoDynamicPlaylists $parameters
     * @return FindImageVideoDynamicPlaylistsResponse
     */
    public function FindImageVideoDynamicPlaylists(FindImageVideoDynamicPlaylists $parameters)
    {
      return $this->__soapCall('FindImageVideoDynamicPlaylists', array($parameters));
    }

    /**
     * @param FindAudioDynamicPlaylists $parameters
     * @return FindAudioDynamicPlaylistsResponse
     */
    public function FindAudioDynamicPlaylists(FindAudioDynamicPlaylists $parameters)
    {
      return $this->__soapCall('FindAudioDynamicPlaylists', array($parameters));
    }

    /**
     * @param GetDynamicPlaylist $parameters
     * @return GetDynamicPlaylistResponse
     */
    public function GetDynamicPlaylist(GetDynamicPlaylist $parameters)
    {
      return $this->__soapCall('GetDynamicPlaylist', array($parameters));
    }

    /**
     * @param GetDynamicPlaylistByName $parameters
     * @return GetDynamicPlaylistByNameResponse
     */
    public function GetDynamicPlaylistByName(GetDynamicPlaylistByName $parameters)
    {
      return $this->__soapCall('GetDynamicPlaylistByName', array($parameters));
    }

    /**
     * @param CheckDynamicPlaylistName $parameters
     * @return CheckDynamicPlaylistNameResponse
     */
    public function CheckDynamicPlaylistName(CheckDynamicPlaylistName $parameters)
    {
      return $this->__soapCall('CheckDynamicPlaylistName', array($parameters));
    }

    /**
     * @param CheckDynamicPlaylistUsage $parameters
     * @return CheckDynamicPlaylistUsageResponse
     */
    public function CheckDynamicPlaylistUsage(CheckDynamicPlaylistUsage $parameters)
    {
      return $this->__soapCall('CheckDynamicPlaylistUsage', array($parameters));
    }

    /**
     * @param CheckDynamicPlaylistUsageByName $parameters
     * @return CheckDynamicPlaylistUsageByNameResponse
     */
    public function CheckDynamicPlaylistUsageByName(CheckDynamicPlaylistUsageByName $parameters)
    {
      return $this->__soapCall('CheckDynamicPlaylistUsageByName', array($parameters));
    }

    /**
     * @param CreateDynamicPlaylist $parameters
     * @return CreateDynamicPlaylistResponse
     */
    public function CreateDynamicPlaylist(CreateDynamicPlaylist $parameters)
    {
      return $this->__soapCall('CreateDynamicPlaylist', array($parameters));
    }

    /**
     * @param UpdateDynamicPlaylist $parameters
     * @return UpdateDynamicPlaylistResponse
     */
    public function UpdateDynamicPlaylist(UpdateDynamicPlaylist $parameters)
    {
      return $this->__soapCall('UpdateDynamicPlaylist', array($parameters));
    }

    /**
     * @param RenameDynamicPlaylist $parameters
     * @return RenameDynamicPlaylistResponse
     */
    public function RenameDynamicPlaylist(RenameDynamicPlaylist $parameters)
    {
      return $this->__soapCall('RenameDynamicPlaylist', array($parameters));
    }

    /**
     * @param DeleteDynamicPlaylists $parameters
     * @return DeleteDynamicPlaylistsResponse
     */
    public function DeleteDynamicPlaylists(DeleteDynamicPlaylists $parameters)
    {
      return $this->__soapCall('DeleteDynamicPlaylists', array($parameters));
    }

    /**
     * @param GetLiveTextFeeds $parameters
     * @return GetLiveTextFeedsResponse
     */
    public function GetLiveTextFeeds(GetLiveTextFeeds $parameters)
    {
      return $this->__soapCall('GetLiveTextFeeds', array($parameters));
    }

    /**
     * @param GetSpecifiedLiveTextFeeds $parameters
     * @return GetSpecifiedLiveTextFeedsResponse
     */
    public function GetSpecifiedLiveTextFeeds(GetSpecifiedLiveTextFeeds $parameters)
    {
      return $this->__soapCall('GetSpecifiedLiveTextFeeds', array($parameters));
    }

    /**
     * @param FindLiveTextFeeds $parameters
     * @return FindLiveTextFeedsResponse
     */
    public function FindLiveTextFeeds(FindLiveTextFeeds $parameters)
    {
      return $this->__soapCall('FindLiveTextFeeds', array($parameters));
    }

    /**
     * @param GetLiveTextFeed $parameters
     * @return GetLiveTextFeedResponse
     */
    public function GetLiveTextFeed(GetLiveTextFeed $parameters)
    {
      return $this->__soapCall('GetLiveTextFeed', array($parameters));
    }

    /**
     * @param GetLiveTextFeedByName $parameters
     * @return GetLiveTextFeedByNameResponse
     */
    public function GetLiveTextFeedByName(GetLiveTextFeedByName $parameters)
    {
      return $this->__soapCall('GetLiveTextFeedByName', array($parameters));
    }

    /**
     * @param CheckLiveTextFeedName $parameters
     * @return CheckLiveTextFeedNameResponse
     */
    public function CheckLiveTextFeedName(CheckLiveTextFeedName $parameters)
    {
      return $this->__soapCall('CheckLiveTextFeedName', array($parameters));
    }

    /**
     * @param CheckLiveTextFeedUsage $parameters
     * @return CheckLiveTextFeedUsageResponse
     */
    public function CheckLiveTextFeedUsage(CheckLiveTextFeedUsage $parameters)
    {
      return $this->__soapCall('CheckLiveTextFeedUsage', array($parameters));
    }

    /**
     * @param CheckLiveTextFeedUsageByName $parameters
     * @return CheckLiveTextFeedUsageByNameResponse
     */
    public function CheckLiveTextFeedUsageByName(CheckLiveTextFeedUsageByName $parameters)
    {
      return $this->__soapCall('CheckLiveTextFeedUsageByName', array($parameters));
    }

    /**
     * @param CreateLiveTextFeed $parameters
     * @return CreateLiveTextFeedResponse
     */
    public function CreateLiveTextFeed(CreateLiveTextFeed $parameters)
    {
      return $this->__soapCall('CreateLiveTextFeed', array($parameters));
    }

    /**
     * @param CloneLiveTextFeed $parameters
     * @return CloneLiveTextFeedResponse
     */
    public function CloneLiveTextFeed(CloneLiveTextFeed $parameters)
    {
      return $this->__soapCall('CloneLiveTextFeed', array($parameters));
    }

    /**
     * @param UpdateLiveTextFeed $parameters
     * @return UpdateLiveTextFeedResponse
     */
    public function UpdateLiveTextFeed(UpdateLiveTextFeed $parameters)
    {
      return $this->__soapCall('UpdateLiveTextFeed', array($parameters));
    }

    /**
     * @param RenameLiveTextFeed $parameters
     * @return RenameLiveTextFeedResponse
     */
    public function RenameLiveTextFeed(RenameLiveTextFeed $parameters)
    {
      return $this->__soapCall('RenameLiveTextFeed', array($parameters));
    }

    /**
     * @param DeleteLiveTextFeeds $parameters
     * @return DeleteLiveTextFeedsResponse
     */
    public function DeleteLiveTextFeeds(DeleteLiveTextFeeds $parameters)
    {
      return $this->__soapCall('DeleteLiveTextFeeds', array($parameters));
    }

    /**
     * @param GetLiveMediaFeeds $parameters
     * @return GetLiveMediaFeedsResponse
     */
    public function GetLiveMediaFeeds(GetLiveMediaFeeds $parameters)
    {
      return $this->__soapCall('GetLiveMediaFeeds', array($parameters));
    }

    /**
     * @param GetSpecifiedLiveMediaFeeds $parameters
     * @return GetSpecifiedLiveMediaFeedsResponse
     */
    public function GetSpecifiedLiveMediaFeeds(GetSpecifiedLiveMediaFeeds $parameters)
    {
      return $this->__soapCall('GetSpecifiedLiveMediaFeeds', array($parameters));
    }

    /**
     * @param FindLiveMediaFeeds $parameters
     * @return FindLiveMediaFeedsResponse
     */
    public function FindLiveMediaFeeds(FindLiveMediaFeeds $parameters)
    {
      return $this->__soapCall('FindLiveMediaFeeds', array($parameters));
    }

    /**
     * @param GetLiveMediaFeed $parameters
     * @return GetLiveMediaFeedResponse
     */
    public function GetLiveMediaFeed(GetLiveMediaFeed $parameters)
    {
      return $this->__soapCall('GetLiveMediaFeed', array($parameters));
    }

    /**
     * @param GetLiveMediaFeedByName $parameters
     * @return GetLiveMediaFeedByNameResponse
     */
    public function GetLiveMediaFeedByName(GetLiveMediaFeedByName $parameters)
    {
      return $this->__soapCall('GetLiveMediaFeedByName', array($parameters));
    }

    /**
     * @param CheckLiveMediaFeedName $parameters
     * @return CheckLiveMediaFeedNameResponse
     */
    public function CheckLiveMediaFeedName(CheckLiveMediaFeedName $parameters)
    {
      return $this->__soapCall('CheckLiveMediaFeedName', array($parameters));
    }

    /**
     * @param CreateLiveMediaFeed $parameters
     * @return CreateLiveMediaFeedResponse
     */
    public function CreateLiveMediaFeed(CreateLiveMediaFeed $parameters)
    {
      return $this->__soapCall('CreateLiveMediaFeed', array($parameters));
    }

    /**
     * @param UpdateLiveMediaFeed $parameters
     * @return UpdateLiveMediaFeedResponse
     */
    public function UpdateLiveMediaFeed(UpdateLiveMediaFeed $parameters)
    {
      return $this->__soapCall('UpdateLiveMediaFeed', array($parameters));
    }

    /**
     * @param RenameLiveMediaFeed $parameters
     * @return RenameLiveMediaFeedResponse
     */
    public function RenameLiveMediaFeed(RenameLiveMediaFeed $parameters)
    {
      return $this->__soapCall('RenameLiveMediaFeed', array($parameters));
    }

    /**
     * @param DeleteLiveMediaFeeds $parameters
     * @return DeleteLiveMediaFeedsResponse
     */
    public function DeleteLiveMediaFeeds(DeleteLiveMediaFeeds $parameters)
    {
      return $this->__soapCall('DeleteLiveMediaFeeds', array($parameters));
    }

    /**
     * @param GetWebPages $parameters
     * @return GetWebPagesResponse
     */
    public function GetWebPages(GetWebPages $parameters)
    {
      return $this->__soapCall('GetWebPages', array($parameters));
    }

    /**
     * @param GetSpecifiedWebPages $parameters
     * @return GetSpecifiedWebPagesResponse
     */
    public function GetSpecifiedWebPages(GetSpecifiedWebPages $parameters)
    {
      return $this->__soapCall('GetSpecifiedWebPages', array($parameters));
    }

    /**
     * @param FindWebPages $parameters
     * @return FindWebPagesResponse
     */
    public function FindWebPages(FindWebPages $parameters)
    {
      return $this->__soapCall('FindWebPages', array($parameters));
    }

    /**
     * @param GetWebPage $parameters
     * @return GetWebPageResponse
     */
    public function GetWebPage(GetWebPage $parameters)
    {
      return $this->__soapCall('GetWebPage', array($parameters));
    }

    /**
     * @param GetWebPageByName $parameters
     * @return GetWebPageByNameResponse
     */
    public function GetWebPageByName(GetWebPageByName $parameters)
    {
      return $this->__soapCall('GetWebPageByName', array($parameters));
    }

    /**
     * @param CheckWebPageName $parameters
     * @return CheckWebPageNameResponse
     */
    public function CheckWebPageName(CheckWebPageName $parameters)
    {
      return $this->__soapCall('CheckWebPageName', array($parameters));
    }

    /**
     * @param CheckWebPageUsage $parameters
     * @return CheckWebPageUsageResponse
     */
    public function CheckWebPageUsage(CheckWebPageUsage $parameters)
    {
      return $this->__soapCall('CheckWebPageUsage', array($parameters));
    }

    /**
     * @param CheckWebPageUsageByName $parameters
     * @return CheckWebPageUsageByNameResponse
     */
    public function CheckWebPageUsageByName(CheckWebPageUsageByName $parameters)
    {
      return $this->__soapCall('CheckWebPageUsageByName', array($parameters));
    }

    /**
     * @param RenameWebPage $parameters
     * @return RenameWebPageResponse
     */
    public function RenameWebPage(RenameWebPage $parameters)
    {
      return $this->__soapCall('RenameWebPage', array($parameters));
    }

    /**
     * @param DeleteWebPages $parameters
     * @return DeleteWebPagesResponse
     */
    public function DeleteWebPages(DeleteWebPages $parameters)
    {
      return $this->__soapCall('DeleteWebPages', array($parameters));
    }

    /**
     * @param GetGroups $parameters
     * @return GetGroupsResponse
     */
    public function GetGroups(GetGroups $parameters)
    {
      return $this->__soapCall('GetGroups', array($parameters));
    }

    /**
     * @param GetSpecifiedGroups $parameters
     * @return GetSpecifiedGroupsResponse
     */
    public function GetSpecifiedGroups(GetSpecifiedGroups $parameters)
    {
      return $this->__soapCall('GetSpecifiedGroups', array($parameters));
    }

    /**
     * @param FindGroups $parameters
     * @return FindGroupsResponse
     */
    public function FindGroups(FindGroups $parameters)
    {
      return $this->__soapCall('FindGroups', array($parameters));
    }

    /**
     * @param GetGroup $parameters
     * @return GetGroupResponse
     */
    public function GetGroup(GetGroup $parameters)
    {
      return $this->__soapCall('GetGroup', array($parameters));
    }

    /**
     * @param GetGroupByName $parameters
     * @return GetGroupByNameResponse
     */
    public function GetGroupByName(GetGroupByName $parameters)
    {
      return $this->__soapCall('GetGroupByName', array($parameters));
    }

    /**
     * @param CreateGroup $parameters
     * @return CreateGroupResponse
     */
    public function CreateGroup(CreateGroup $parameters)
    {
      return $this->__soapCall('CreateGroup', array($parameters));
    }

    /**
     * @param UpdateGroup $parameters
     * @return UpdateGroupResponse
     */
    public function UpdateGroup(UpdateGroup $parameters)
    {
      return $this->__soapCall('UpdateGroup', array($parameters));
    }

    /**
     * @param UpdateGroupsFirmware $parameters
     * @return UpdateGroupsFirmwareResponse
     */
    public function UpdateGroupsFirmware(UpdateGroupsFirmware $parameters)
    {
      return $this->__soapCall('UpdateGroupsFirmware', array($parameters));
    }

    /**
     * @param DeleteGroup $parameters
     * @return DeleteGroupResponse
     */
    public function DeleteGroup(DeleteGroup $parameters)
    {
      return $this->__soapCall('DeleteGroup', array($parameters));
    }

    /**
     * @param GetAllBrightWallGroups $parameters
     * @return GetAllBrightWallGroupsResponse
     */
    public function GetAllBrightWallGroups(GetAllBrightWallGroups $parameters)
    {
      return $this->__soapCall('GetAllBrightWallGroups', array($parameters));
    }

    /**
     * @param GetBrightWallGroups $parameters
     * @return GetBrightWallGroupsResponse
     */
    public function GetBrightWallGroups(GetBrightWallGroups $parameters)
    {
      return $this->__soapCall('GetBrightWallGroups', array($parameters));
    }

    /**
     * @param GetSpecifiedBrightWallGroups $parameters
     * @return GetSpecifiedBrightWallGroupsResponse
     */
    public function GetSpecifiedBrightWallGroups(GetSpecifiedBrightWallGroups $parameters)
    {
      return $this->__soapCall('GetSpecifiedBrightWallGroups', array($parameters));
    }

    /**
     * @param FindBrightWallGroups $parameters
     * @return FindBrightWallGroupsResponse
     */
    public function FindBrightWallGroups(FindBrightWallGroups $parameters)
    {
      return $this->__soapCall('FindBrightWallGroups', array($parameters));
    }

    /**
     * @param GetBrightWallGroup $parameters
     * @return GetBrightWallGroupResponse
     */
    public function GetBrightWallGroup(GetBrightWallGroup $parameters)
    {
      return $this->__soapCall('GetBrightWallGroup', array($parameters));
    }

    /**
     * @param GetBrightWallGroupByName $parameters
     * @return GetBrightWallGroupByNameResponse
     */
    public function GetBrightWallGroupByName(GetBrightWallGroupByName $parameters)
    {
      return $this->__soapCall('GetBrightWallGroupByName', array($parameters));
    }

    /**
     * @param CreateBrightWallGroup $parameters
     * @return CreateBrightWallGroupResponse
     */
    public function CreateBrightWallGroup(CreateBrightWallGroup $parameters)
    {
      return $this->__soapCall('CreateBrightWallGroup', array($parameters));
    }

    /**
     * @param UpdateBrightWallGroup $parameters
     * @return UpdateBrightWallGroupResponse
     */
    public function UpdateBrightWallGroup(UpdateBrightWallGroup $parameters)
    {
      return $this->__soapCall('UpdateBrightWallGroup', array($parameters));
    }

    /**
     * @param UpdateBrightWallGroupsFirmware $parameters
     * @return UpdateBrightWallGroupsFirmwareResponse
     */
    public function UpdateBrightWallGroupsFirmware(UpdateBrightWallGroupsFirmware $parameters)
    {
      return $this->__soapCall('UpdateBrightWallGroupsFirmware', array($parameters));
    }

    /**
     * @param DeleteBrightWallGroup $parameters
     * @return DeleteBrightWallGroupResponse
     */
    public function DeleteBrightWallGroup(DeleteBrightWallGroup $parameters)
    {
      return $this->__soapCall('DeleteBrightWallGroup', array($parameters));
    }

    /**
     * @param GetBrightWalls $parameters
     * @return GetBrightWallsResponse
     */
    public function GetBrightWalls(GetBrightWalls $parameters)
    {
      return $this->__soapCall('GetBrightWalls', array($parameters));
    }

    /**
     * @param GetSpecifiedBrightWalls $parameters
     * @return GetSpecifiedBrightWallsResponse
     */
    public function GetSpecifiedBrightWalls(GetSpecifiedBrightWalls $parameters)
    {
      return $this->__soapCall('GetSpecifiedBrightWalls', array($parameters));
    }

    /**
     * @param FindBrightWalls $parameters
     * @return FindBrightWallsResponse
     */
    public function FindBrightWalls(FindBrightWalls $parameters)
    {
      return $this->__soapCall('FindBrightWalls', array($parameters));
    }

    /**
     * @param GetBrightWall $parameters
     * @return GetBrightWallResponse
     */
    public function GetBrightWall(GetBrightWall $parameters)
    {
      return $this->__soapCall('GetBrightWall', array($parameters));
    }

    /**
     * @param GetBrightWallByName $parameters
     * @return GetBrightWallByNameResponse
     */
    public function GetBrightWallByName(GetBrightWallByName $parameters)
    {
      return $this->__soapCall('GetBrightWallByName', array($parameters));
    }

}
