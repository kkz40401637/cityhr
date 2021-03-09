<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $table = 'departments';

    public function CompanyInfo( )
    {
        return $this->belongsTo('App\Company','id');
    }

    public function StationInfo( )
    {
        return $this->belongsTo('App\Station','id');
    }

}
