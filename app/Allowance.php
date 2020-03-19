<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Allowance extends Model
{
    protected $fillable=['name','designation','department','faculty','a','b','c','published','ongoing','status','current','any_type','title','objective','destription','duration','expected_date','output','date',];
}
