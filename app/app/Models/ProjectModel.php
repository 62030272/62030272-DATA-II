<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectModel extends Model
{
   // use HasFactory;
   protected $table="project";

   protected $fillable=[
       'proj_id','proj_name','proj_type',
       'location','budget','proj_status'
   ];
}
