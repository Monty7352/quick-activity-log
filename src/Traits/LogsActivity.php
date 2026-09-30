<?php

namespace TestVendor\QuickActivityLog\Traits;

use TestVendor\QuickActivityLog\Models\ActivityLog;

trait LogsActivity
{
    public static function bootLogsActivity(): void
    {
        static::created(function ($model) {
            static::logChange($model, 'created', $model->getAttributes());
        });

        static::updated(function ($model) {
            static::logChange($model, 'updated', $model->getChanges());
        });

        static::deleted(function ($model) {
            static::logChange($model, 'deleted', $model->getOriginal());
        });
    }

    protected static function logChange($model, string $action, array $changes): void
    {
        ActivityLog::create([
            'subject_type' => get_class($model),
            'subject_id'   => $model->getKey(),
            'action'       => $action,
            'changes'      => $changes,
        ]);
    }
}