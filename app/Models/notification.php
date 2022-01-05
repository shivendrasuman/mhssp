<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class notification extends Model
{
   protected $table = 'mhssp_notification';
	public $timestamps = false;
	public $incrementing = false;
	protected $fillable = [
			'notification_type',
			'notification_title',
			'notification_filetype',			
			'notification_file_url',
			'notification_is_flash',
			'notification_is_new',
			'notification_datetime',
			'notification_status',
			'created_by',
			'edited_by',
        ];
}
