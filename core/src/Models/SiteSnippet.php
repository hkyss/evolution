<?php namespace EvolutionCMS\Models;

use Illuminate\Database\Eloquent;

/**
 * @property int $id
 * @property string $name
 * @property string $description
 * @property int $editor_type
 * @property int $category
 * @property bool $cache_type
 * @property string $snippet
 * @property int $locked
 * @property string $properties
 * @property string $moduleguid
 * @property int $createdon
 * @property int $editedon
 * @property int $disabled
 */
class SiteSnippet extends Eloquent\Model
{
	const CREATED_AT = 'createdon';
	const UPDATED_AT = 'editedon';
    protected $dateFormat = 'U';

	protected $casts = [
		'editor_type' => 'int',
		'category' => 'int',
		'cache_type' => 'bool',
		'locked' => 'int',
		'createdon' => 'int',
		'editedon' => 'int',
		'disabled' => 'int'
	];

	protected $fillable = [
		'name',
		'description',
		'editor_type',
		'category',
		'cache_type',
		'snippet',
		'locked',
		'properties',
		'moduleguid',
		'disabled'
	];
}