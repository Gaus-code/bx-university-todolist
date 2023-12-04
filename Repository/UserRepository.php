<?php
class UserRepository extends Repository
{
	/**
	 * @param array $filter
	 * @return User[]
	 * @throws Exception
	 */

	public function getList(array $filter = []): array
	{
		return [];
	}


	public function add($user): bool
	{
		return true;
		//insert into users
	}

	public function update($user): bool
	{
		return true;
		//update users set values(...)
	}
}