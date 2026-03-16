<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Project
 * 
 * @property int $id
 * @property string $nama_project
 * @property string $deskripsi
 * @property string|null $link_github
 * @property string|null $link_project
 * @property string $jenis
 * @property int $tahun
 * @property string $image
 * @property string|null $kontribusi
 *
 * @package App\Models
 */
class Project extends Model
{
	protected $table = 'projects';
	public $timestamps = false;

	protected $casts = [
		'tahun' => 'int'
	];

	protected $fillable = [
		'nama_project',
		'deskripsi',
		'link_github',
		'link_project',
		'jenis',
		'tahun',
		'image',
		'kontribusi'
	];
}
