<?php
class  Application_Model_References extends Zend_Db_Table_Abstract
{
	protected $_name = 'ref_val';
	protected $_primary = 'id';

	public function getAll()
	{

			return $this->fetchAll($this->select()
		->order('name ASC')
		);
	}


	public function save( $bind, $id = null )
	{
		if( is_null( $id )){
			$row = $this->createRow();
			$row->date_entered        = new Zend_Db_Expr('NOW()');
			 
		}else{
			$row = $this->getRow( $id );
		}

		$row->setFromArray( $bind );
		return $row->save();
	}

	public function getRow( $id )
	{

		$id = (int) $id;
		$row = $this->find( $id )->current();
		return $row;
	}

	public function getAllNewsGroupById($id ){

		$query = $this->select()
		->from( array( 'p'=>'ref_val' ), array('*'))
	 
		->where('P.id = ?' , $id )
		->setIntegrityCheck(false);
		 
		return $this->fetchAll( $query );
	}

	public function getBy($wheres = array(), $orWheres = array())
	{
		$query = $this->select();

		if(count($wheres)){
			foreach ($wheres as $key => $value) {
				$query->where($key, $value);
			}

		}
		if(count($orWheres)){
			foreach ($orWheres as $key => $value) {
				$query->orWhere($key, $value);
			}

		}
		//echo print_r($query->__toString(), true);
		return $this->fetchAll($query);
	}
}
