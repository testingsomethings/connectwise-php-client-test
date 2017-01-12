<?php

namespace Spinen\ConnectWise\Models\Finance;

use Spinen\ConnectWise\Support\Model;

class AgreementWorkRoleExclusion extends Model
{
    /**
     * Properties that need to be casts to a specific object or type
     *
     * @var array
     */
    protected $casts = [
        'id'          => 'integer',
        //        'workRole'    => 'WorkRoleReference',
        'agreementId' => 'integer',
        //        '_info'       => 'Metadata',
    ];
}
