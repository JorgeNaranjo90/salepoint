<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CertificateSats extends Model {

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'certificatesats';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','certificateFile','certificatePemFile','certificateKeyFile' ,'certificateKeyPemFile','noSerie','startDate','endDate'];

    public static function filterAndPaginate($name)
    {
        return CertificateSats::name($name)->orderBy('name','ASC')
            ->paginate();
    }

    public function scopeName($query, $name)
    {
        if (trim($name) != "") {
            $query->where("name", "LIKE", "%$name%");
        }
    }

}
