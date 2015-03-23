<?php namespace App;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FiscalRegimen extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    protected $table='fiscalRegimens';

    protected $fillable=['name'];

    public function scopeNameF($query,$name)
    {
        if ($name != "")
        {
            $query->where(\DB::raw('name'),"LIKE","%$name%");
        }

    }
}