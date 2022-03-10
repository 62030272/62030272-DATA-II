<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project_status_setupModel extends Model
{
    //use HasFactory;
    protected $table="project_status_setup";

   protected $fillable=[
       'proj_status','proj_status_desc'
   ];
}
