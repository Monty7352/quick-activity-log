<?php

namespace TestVendor\QuickActivityLog\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_logs';

    protected $fillable = [
        'subject_type',
        'subject_id',
        'action',
        'changes',
    ];

    protected $casts = [
        'changes' => 'array',
    ];
}