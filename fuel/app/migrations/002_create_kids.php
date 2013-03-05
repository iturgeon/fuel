<?php

namespace Fuel\Migrations;

class Create_kids
{
	public function up()
	{
		\DBUtil::create_table('kids', array(
			'id' => array('constraint' => 11, 'type' => 'int', 'auto_increment' => true, 'unsigned' => true),
			'name' => array('constraint' => 255, 'type' => 'varchar'),
			'parent_id' => array('constraint' => 11, 'type' => 'int'),
			'temporal_start' => array('constraint' => 11, 'type' => 'int'),
			'temporal_end' => array('constraint' => 11, 'type' => 'int'),

		), array('id', 'temporal_start', 'temporal_end'));
	}

	public function down()
	{
		\DBUtil::drop_table('kids');
	}
}