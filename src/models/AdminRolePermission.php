<?php

namespace Zenbolt\Cms\Models;

use Illuminate\Database\Eloquent\Model;

class AdminRolePermission extends Model
{
    public function page()
    {
        return $this->belongsTo('Zenbolt\Cms\Models\CmsPage', 'cms_page_id');
    }
}
