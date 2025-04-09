<?php

namespace Zenbolt\Cms\Models;

use Illuminate\Database\Eloquent\Model;

class CmsLog extends Model
{
	protected $guarded = ['id'];

	public function admin()
	{
		return $this->belongsTo('Zenbolt\Cms\Models\Admin', 'admin_id');
	}

	public function page()
	{
		return $this->belongsTo('Zenbolt\Cms\Models\CmsPage', 'cms_page_id');
	}
}
