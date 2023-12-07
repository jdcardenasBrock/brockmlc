<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectPhases extends Model
{
    use HasFactory;
    protected $fillable=['date_initiate','url_matterport','phase_name','project_id'];

    public static function getPhases($id){
        $phases=ProjectPhases::select('phase_name')->where('project_id','=',$id)->get();
        return $phases;
    }
}
