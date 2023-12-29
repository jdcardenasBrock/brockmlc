<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class clients extends Model
{
    use HasFactory;
    protected $fillable= ['name', 'rel_user', 'created_by', 'modified_by', 'created_at','updated_at'];

    public static function searchById($value)
    {
        $data = DB::table('clients')
            ->where([
                ['numID', 'like', "%{$value}%"]
            ])
            ->get();
        return $data;
    }
    public static function searchByName($value)
    {
        $data = DB::table('clients')
            ->where([
                [DB::raw('name'), 'like', "%{$value}%"]
            ])
            ->get();

        return $data;
    }
}
