<?php

namespace WSD\BrightSignApi\Entity\ContentUpload;

class UploadState
{
    const __default = 'Unknown';
    const Unknown = 'Unknown';
    const Queued = 'Queued';
    const Started = 'Started';
    const Uploading = 'Uploading';
    const Stopped = 'Stopped';
    const Uploaded = 'Uploaded';
    const Verified = 'Verified';
    const Cancelled = 'Cancelled';
    const Corrupted = 'Corrupted';
    const Collected = 'Collected';
    const Terminated = 'Terminated';
    const Completed = 'Completed';


}
