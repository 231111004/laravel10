<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Users extends Model
{
    protected $table = 'users'; 
    protected $primaryKey = 'id_user'; 

    public static function register($username, $password)
    {
        return DB::insert('INSERT INTO users (username, password) VALUES (?, ?)', [$username, $password]);
    }

    public static  function login($username, $password)
    {
        return DB::select('SELECT * FROM users WHERE username = ? AND password = ?', [$username, $password]);
    } 
 }

