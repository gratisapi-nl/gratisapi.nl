<?php

/**
 * Created by Reliese Model.
 * Date: Sun, 03 Dec 2017 12:51:16 +0000.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Eloquent;

/**
 * Class PostcodesNl
 * 
 * @property float $id
 * @property string $postcode
 * @property float $postcode_id
 * @property float $pnum
 * @property string $pchar
 * @property float $minnumber
 * @property float $maxnumber
 * @property string $numbertype
 * @property string $street
 * @property string $city
 * @property float $city_id
 * @property string $municipality
 * @property float $municipality_id
 * @property string $province
 * @property string $province_code
 * @property float $lat
 * @property float $lon
 * @property float $rd_x
 * @property float $rd_y
 * @property string $location_detail
 * @property \Carbon\Carbon $changed_date
 *
 * @package App\Models
 */
class PostcodesNl extends Eloquent
{
	protected $table = 'postcodes_nl';
	public $incrementing = false;
	public $timestamps = false;

	protected $casts = [
		'id' => 'float',
		'postcode_id' => 'float',
		'pnum' => 'float',
		'minnumber' => 'float',
		'maxnumber' => 'float',
		'city_id' => 'float',
		'municipality_id' => 'float',
		'lat' => 'float',
		'lon' => 'float',
		'rd_x' => 'float',
		'rd_y' => 'float'
	];

	protected $dates = [
		'changed_date'
	];

	protected $fillable = [
		'postcode',
		'postcode_id',
		'pnum',
		'pchar',
		'minnumber',
		'maxnumber',
		'numbertype',
		'street',
		'city',
		'city_id',
		'municipality',
		'municipality_id',
		'province',
		'province_code',
		'lat',
		'lon',
		'rd_x',
		'rd_y',
		'location_detail',
		'changed_date'
	];
}
