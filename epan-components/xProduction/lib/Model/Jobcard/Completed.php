<?php

namespace xProduction;

class Model_Jobcard_Completed extends Model_JobCard{
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Jobcard this post can see')
		);
	function init(){
		parent::init();
		$this->addCondition('status','completed');
	}
}	