<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class manuscript extends Model
{
    protected $fillable = [ 'name', 'designation', 'email','department','faculty','title','first_author','corresponding_author','other_author','journal','volume_and_issue_number','date_of_acceptance','issn','publisher','publication_fee','file_copy','file_evidence','file_letter','file_invoice','date1',
 ];
 
}
