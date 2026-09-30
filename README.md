# Quick Activity Log for Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/your-github-username/quick-activity-log.svg?style=flat-square)](https://packagist.org/packages/your-github-username/quick-activity-log)
[![Total Downloads](https://img.shields.io/packagist/dt/your-github-username/quick-activity-log.svg?style=flat-square)](https://packagist.org/packages/your-github-username/quick-activity-log)
[![License](https://img.shields.io/packagist/l/your-github-username/quick-activity-log.svg?style=flat-square)](LICENSE.md)

A lightweight and easy-to-use activity and audit logging package for Eloquent models in Laravel. Automatically tracks model creation, updates, and deletions without complex setup.

---

## Features

- 🚀 Zero configuration needed to get started.
- 📦 Automatically tracks `created`, `updated`, and `deleted` events on Eloquent models.
- 💾 Stores attributes/changes as JSON in database.
- ⚡ Lightweight and fast execution.

---

## Installation

You can install the package via Composer:

```bash
composer require your-github-username/quick-activity-log


## Usage

Add the `LogsActivity` trait to any Eloquent model you want to track:



### Fetching Logs

You can fetch logs using the `ActivityLog` model:



Run the migrations to create the activity_logs table:

Bash
php artisan migrate
Usage
Add the LogsActivity trait to any Eloquent model you want to track:

PHP
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use YourGithubUsername\QuickActivityLog\Traits\LogsActivity;

class User extends Model
{
    use LogsActivity;

    protected $fillable = ['name', 'email', 'password'];
}
Fetching Logs
You can fetch logs using the ActivityLog model:

PHP
use YourGithubUsername\QuickActivityLog\Models\ActivityLog;

// Retrieve all activity logs ordered by newest first
$logs = ActivityLog::latest()->get();

foreach ($logs as$log) {
    echo "Model: " . $log->subject_type . "\n"; // e.g., App\Models\User
    echo "Model ID: " . $log->subject_id . "\n"; // e.g., 1
    echo "Action: " . $log->action . "\n";       // created, updated, or deleted
    
    // Output changed data array
    print_r($log->changes);
}