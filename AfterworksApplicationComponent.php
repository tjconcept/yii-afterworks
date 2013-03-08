<?php

class AfterworksApplicationComponent extends CApplicationComponent {

	public function init() {
		Yii::app()->onEndRequest = array($this, 'execute');
		return parent::init();
	}


    public function addJob( $job ) {
    	$this->onExecute = $job;
    }

	public function execute() {
		if (function_exists('fastcgi_finish_request'))
			fastcgi_finish_request();

		if ($this->hasEventHandler('onExecute'))
			$this->onExecute(new CEvent($this));
	}

	public function onExecute($event) {
		$this->raiseEvent('onExecute',$event);
	}

}

?>