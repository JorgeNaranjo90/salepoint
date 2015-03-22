<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;
    use SoftDeletes;

    protected $dates = ['deleted_at'];

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['name', 'email', 'password', 'image'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];

    public function partner(){
        return $this->hasOne('App\Partner');
    }

    public function getFullNameAttribute()
    {
        return $this->name;
    }

    public function setPasswordAttribute($value){
        if ( !empty($value)){
            $this->attributes['password'] = bcrypt($value);
        }
    }

    public function setImageAttribute($value){
        if ( !empty($value)){
            $this->attributes['image'] =$value;
        }
    }

    //Scope for search

    /*
     * This function search Users by Name
     * @query query that you create in index
     * @name is the string name that you search
     * */

    public static function filterAndPaginate($name)
    {
        return User::name($name)
            ->orderBy('name','ASC')
            ->paginate();

    }

    public function scopeName($query, $name){
        if(trim($name) != ""){
            $query->where("name", "LIKE", "%$name%");
        }
    }
}
