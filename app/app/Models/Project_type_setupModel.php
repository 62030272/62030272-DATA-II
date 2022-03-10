<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_type_setupModel extends Model
{
    //use HasFactory;
    protected $table="project_type_setup";

   protected $fillable=[
       'proj_type','proj_type_desc'
   ];
}
