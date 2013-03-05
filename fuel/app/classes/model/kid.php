<?
class Model_Kid extends Orm\Model_Temporal
{

	protected static $_properties = [
		'id',
		'name',
		'parent_id',
		'temporal_start',
		'temporal_end',
	];

	protected static $_belongs_to = ['parent'];
}