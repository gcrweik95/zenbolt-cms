<?php

namespace Zenbolt\Cms\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Admin extends Authenticatable
{
    public function role()
    {
        return $this->belongsTo('Zenbolt\Cms\Models\AdminRole', 'admin_role_id');
    }
}
