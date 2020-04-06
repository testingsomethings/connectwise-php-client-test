<?php

namespace Spinen\ConnectWise\Models\v2019_5\System;

use Carbon\Carbon;
use Spinen\ConnectWise\Support\Model;

/**
 * Class WorkflowTableType Version v2019_5
 *
 * Model for WorkflowTableType
 *
 * @property Metadata $_info
 * @property integer $id
 * @property string $identifier
 * @property string $name
 */
class WorkflowTableType extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        '_info' => Metadata::class,
        'id' => 'integer',
        'identifier' => 'string',
        'name' => 'string'
    ];
}
