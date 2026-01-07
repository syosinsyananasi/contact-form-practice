<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'first_name',
        'last_name',
        'gender',
        'email',
        'tel',
        'address',
        'building',
        'detail',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getFullNameAttribute()
    {
        return $this->last_name . ' ' . $this->first_name;
    }

    public function getGenderLabelAttribute()
    {
        $genders = [
            1 => '男性',
            2 => '女性',
            3 => 'その他',
        ];
        return $genders[$this->gender] ?? '';
    }

    public function getAddressWithoutPostalCodeAttribute()
    {
        // 郵便番号パターン（7桁の数字、ハイフンあり・なし両方対応）を除去
        return preg_replace('/^\d{3}-?\d{4}\s*/', '', $this->address);
    }
}
