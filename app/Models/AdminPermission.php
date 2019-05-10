<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdminPermission extends Model
{
    protected $fillable = [
        'identify',
        'title',
        'order',
        'path',
        'pid'
    ];
}
