<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFloorplans extends Model
{
    use HasFactory;
    protected $fillable=['url_floorplan','floor_label','project_id','name'];
}
