<?
class Model_Parent extends Orm\Model_Temporal
{

	protected static $_properties = [
		'id',
		'name',
		'temporal_start',
		'temporal_end',
	];

	protected static $_has_many = ['kids'];
}