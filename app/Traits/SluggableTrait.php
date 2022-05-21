<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait SluggableTrait 
{
	private static $__sluggableConfig = [
		'slug_column' => 'slug',
		'slug_from' => 'title'
	];

	protected static function bootSluggableTrait() : void
	{
		self::setSluggableConfig();

		static::creating(function ($model)
		{
			$model->{self::$__sluggableConfig['slug_column']} = $model->generateSlug($model->{self::$__sluggableConfig['slug_from']});
		});
	}

	private static function setSluggableConfig() : void
	{
		if (isset(self::$sluggableConfig['slug_column']))
		{
			self::$__sluggableConfig['slug_column'] = self::$sluggableConfig['slug_column'];
		}

		if (isset(self::$sluggableConfig['slug_from']))
		{
			self::$__sluggableConfig['slug_from'] = self::$sluggableConfig['slug_from'];
		}
	}

	private function generateSlug($name) : String
	{
		return Str::slug($name);
	}
}