<?php
namespace xDispatch;
class Model_DeliveryNote_Completed extends Model_DeliveryNote{
	public $actions=array(
			'can_view'=>array('caption'=>'Whose created Jobcard this post can see'),
		);
	function init(){
		parent::init();
		$this->addCondition('status','Completed');
	}
}	