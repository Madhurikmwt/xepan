<?php
namespace xStore;
class Model_MaterialRequestSent_Cancel extends Model_MaterialRequestSent{
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Jobcard this post can see'),
				
		);
	function init(){
		parent::init();
		$this->addCondition('status','cancel');
	}
}	