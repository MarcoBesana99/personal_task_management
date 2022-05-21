<?php

namespace App\Traits;

use Carbon\Carbon;
use Illuminate\Support\Str;

trait GetterTrait {
	public function getDescription($limit = null)
    {
        return is_null($limit) ? $this->description : Str::limit($this->description, $limit, '...');
    }

    public function getStartDate()
    {
		return Carbon::parse($this->start_date)->format('d-m-Y');
    }

    public function getEndDate()
    {
		return !is_null($this->end_date) ? Carbon::parse($this->end_date)->format('d-m-Y') : null;
    }
}