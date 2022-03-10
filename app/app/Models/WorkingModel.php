<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkingModel extends Model
{
    //use HasFactory;
    protected $table="working";

   protected $fillable=[
       'date_work','proj_id','emp_id','work_hours'
   ];
}
