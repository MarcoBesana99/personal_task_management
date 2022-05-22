<?php

namespace App\Traits;

use App\Models\User;

trait HasUserTrait 
{
	protected static function bootHasUserTrait() : void
	{
		self::creating(function ($model)
		{
			$model->user_id = auth()->id();
		});
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}