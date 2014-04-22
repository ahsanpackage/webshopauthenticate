<?php namespace Ahsan\Webshopauthenticate;

use Illuminate\Database\Seeder;

class UsersGroupsTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('groups')->truncate();

		$now = date('Y-m-d H:i:s');
		$data['name'] = 'Admin';
		$data['permissions'] = '{"system":1}';
		$data['created_at'] = $now;
		$data['updated_at'] = $now;
		\DB::table('groups')->insert($data);

		$usr_data['user_id'] = 1;
		$usr_data['group_id'] = 1;
		\DB::table('users_groups')->insert($usr_data);
	}
}