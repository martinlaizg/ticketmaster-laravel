<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    public function tickets()
    {
        return $this->belongsToMany('App\Ticket');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bdate', 'country', 'poblation', 'role'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin() {
        return (!strcmp($this->role, "Admin"));
    }

    public static function editUser($name, $surname, $bdate, $country, 
        $poblation, $password, $email, $role, $id) {

        $u = User::findOrFail($id);

        if($name != null) {
            $u->name = $name;
        }

        if($surname != null) {
            $u->surname = $surname;
        }

        if($bdate != null) {
            $u->bdate = $bdate;
        }

        if($country != null) {
            $u->country = $country;
        }

        if($poblation != null) {
            $u->poblation = $poblation;
        }

        if($password != null) {
            $u->password = bcrypt($password);
        }

        if($email != null) {
            $u->email = $email;
        }

        if($role != null) {

            if($role == 0) {
                $u->role = "Guest";
            }

            if($role == 1) {
                $u->role = "Admin";
            }
        }

        $u->save();
    }

    public static function createUserAdmin($name, $surname, $bdate, $country, 
        $poblation, $password, $email, $role) {

        $u = new User();

        if($name != null) {
            $u->name = $name;
        }

        if($surname != null) {
            $u->surname = $surname;
        }

        if($bdate != null) {
            $u->bdate = $bdate;
        }

        if($country != null) {
            $u->country = $country;
        }

        if($poblation != null) {
            $u->poblation = $poblation;
        }

        if($password != null) {
            $u->password = bcrypt($password);
        }

        if($email != null) {
            $u->email = $email;
        }

        if($role == 0) {
            $u->role = "Guest";
        }

        if($role == 1) {
            $u->role = "Admin";
        }

        $u->save();
    }

    public static function deleteUser($id) {
        $u = User::findOrFail($id);

        $u->delete();
    }
}
