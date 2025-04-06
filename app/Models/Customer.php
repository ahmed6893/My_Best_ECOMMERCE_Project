<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticatableTrait;

class Customer extends Model implements Authenticatable
{
    use HasFactory, AuthenticatableTrait;

    protected $fillable = ['first_name', 'last_name', 'email', 'password','phone'];

    public static $customer;

    public static function saveNewCustomer($request)
    {
        self::$customer = new Customer();
        self::$customer->first_name = $request->first_name;
        self::$customer->last_name  = $request->last_name;
        self::$customer->email      = $request->email;
        self::$customer->phone      = $request->phone;
        self::$customer->password   = bcrypt($request->password);
        self::$customer->save();

        return self::$customer;
    }

}
