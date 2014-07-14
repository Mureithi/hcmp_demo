<?php
/**
 * @author Collins
 */
class commodity_sub_category extends Doctrine_Record {
	
	public function setTableDefinition() {
		$this -> hasColumn('id', 'int');
		$this -> hasColumn('division_name ', 'varchar', 255);
		
	}

	public function setUp() {
		$this -> setTableName('commodity_division_details');
		//$this -> hasMany('commodities as commodities_for_this_category', array('local' => 'id', 'commodity_sub_category_id' => 'id'));
	}

	public static function get_all() {
		$query = Doctrine_Query::create() -> select("*") -> from("commodity_division_details");
		$commodities = $query -> execute();
		return $commodities;
	}
	

}
?>