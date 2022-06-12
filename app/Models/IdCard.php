<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Carbon;

class IdCard extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $table = 'idcard';

    use SoftDeletes;

    public const CREATED_AT = 'created_at';
    public const UPDATED_AT = 'updated_at';
    protected $dates = ['deleted_at'];

//    public function setBirthDateAttribute($value)
//    {
//        if (!empty($value)) {
//            $this->attributes['birth_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
//        }
//    }
//    public function setIssueDateAttribute($value)
//    {
//        if (!empty($value)) {
//            $this->attributes['issue_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
//        }
//    }
//    public function setExpireDateAttribute($value)
//    {
//        if (!empty($value)) {
//            $this->attributes['expire_date'] = Carbon::createFromFormat('d/m/Y', $value)->toDateString();
//        }
//    }
    public function getThFullNameAttribute($value)
    {
        if (!empty($this->attributes['th_first_name'])) {
            return $this->attributes['th_title_name'].' '. $this->attributes['th_first_name'] . ' ' . $this->attributes['th_last_name'];
        }

        return '';

    }
    public function getEnFullNameAttribute($value)
    {
        if (!empty($this->attributes['en_first_name'])) {
            return $this->attributes['en_title_name'].' '. $this->attributes['en_first_name'] . ' ' . $this->attributes['en_last_name'];
        }

        return '';

    }
    public function getFullAddressAttribute($value)
    {
        if (!empty($this->attributes['building_no'])) {
            return 'ที่อยู่ '. $this->attributes['building_no'].' ต. '. $this->attributes['sub_district'] . ' อ. '
                . $this->attributes['district']
                .' จ. '.$this->attributes['province'];
        }

        return '';

    }
}
