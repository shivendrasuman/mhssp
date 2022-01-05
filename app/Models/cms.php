<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cms extends Model
{
    protected $table = 'mhssp_cms';
	public $timestamps = false;
	public $incrementing = false;
	protected $fillable = [
			'cms_title',
			'cms_body',
			'cms_image',
			'cms_meta_data',
    ];
}
