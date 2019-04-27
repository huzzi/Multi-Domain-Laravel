<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Site extends Model
{


    /**
     * Get shop customers
     */
    public function customers()
    {
        return $this->hasMany('App\Models\Customer');
    }

    /**
     * Get shop managers
     */
    public function managers()
    {
        return $this->hasMany('App\Models\Manager');
    }

    /**
     * Get shop owners
     */
    public function owners()
    {
        return $this->hasMany('App\Models\Manager')->where('is_owner', '=', '1');
    }


}
