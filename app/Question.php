<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $table ='questions';
    protected $fillable =['question','option1','option2','option3','category','option4'];
}
