<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Project
 * * @property int $id
 * @property string $nama_project
 * @property string $slug
 * @property string $deskripsi
 * @property string|null $tantangan
 * @property string|null $solusi
 * @property string|null $link_github
 * @property string|null $link_project
 * @property string $jenis
 * @property array|null $tech_stack
 * @property int $tahun
 * @property string $image
 * @property array|null $screenshots
 * @property string|null $kontribusi
 * @property string|null $konteks
 */
class Project extends Model
{
	use HasFactory;

	protected $table = 'projects';
	public $timestamps = true;

	protected $casts = [
		'tahun' => 'int',
		'tech_stack' => 'array',
		'screenshots' => 'array',
	];

	protected $fillable = [
		'nama_project',
		'slug',
		'deskripsi',
		'tantangan',
		'solusi',
		'link_github',
		'link_project',
		'jenis',
		'tech_stack',
		'tahun',
		'image',
		'screenshots',
		'kontribusi',
		'konteks',
	];

	public function getImageUrlAttribute()
	{
		if ($this->image && file_exists(public_path('storage/' . $this->image))) {
			return asset('storage/' . $this->image);
		}

		return 'https://placehold.co/1200x800/f1f5f9/94a3b8?text=No+Image';
	}

	public function getRouteKeyName()
	{
		return 'slug';
	}
}
