<?php
namespace Mit\Model;

use Mit\AbstractModel;

class AccountModel extends AbstractModel
{
	public function getAccountById($id)
	{
		$this->qb->select('*');
		$this->qb->from('account');
		$this->qb->where('id = :id');
		$query = $this->qb->setParameter(':id', $id);
		$result = $query->execute();
		return $result->fetch();
	}
}