<?php

namespace RedRudeBoy\HowManyBundle\Actions;

/*
 * Object for have a intermediate layer between BD & stack
 */

class Action {

	var $crud;
	var $type;
	var $data;
	var $prevData;
	var $timestamp;

	public function construct($crud, $type, $data) {
		$this->validateCRUD($crud);
		$this->validateType($type);

		$this->crud = $crud;
		$this->type = $type;
		$this->data = $data;
	}

	public function constructJSON($json) {
		$param = json_decode($json, true);
		
		if (json_last_error() != JSON_ERROR_NONE)
			throw new \InvalidArgumentException('The param is not json_encoded');

		if (!(isset($param['crud'])) || !(isset($param['type'])) || !(isset($param['data'])))
			throw new \InvalidArgumentException('The params crud, type and data are mandatory');
		
		$this->validateCRUD($param['crud']);
		$this->validateType($param['type']);

		$this->crud = $param['crud'];
		$this->type = $param['type'];
		$this->data = $param['data'];
	}
	
	private function validateCRUD($crud) {
		if(in_array($crud, array('create', 'update', 'delete')))
			return true;
		else {
			throw new \InvalidArgumentException('The crud must be create, update or delete and the crud received is: ' . $crud);
			return false;
		}
	}
	
	private function validateType($type) {
		if(in_array($type, array('vcalendar','vtodo','vevent','valarm')))
			return true;
		else {
			throw new \InvalidArgumentException('The type must be vcalendar, vtodo, vevent or valarm and the type received is: ' . $type);
			return false;
		}
	}

	public function setPrevData($data) {
		$this->prevData = $data;
	}

	public function setTimestamp($time) {
		$this->timestamp = $time;
	}

	public function export() {
		$actionArray = array(
			'crud'		=>	(empty($this->crud))		? null : $this->crud,
			'type'		=>	(empty($this->type))		? null : $this->type,
			'data'		=>	(empty($this->data))		? null : $this->data,
			'prevData'	=>	(empty($this->prevData))	? null : $this->prevData,
			'timestamp'	=>	(empty($this->timestamp))	? null : $this->timestamp
		);
		return $actionArray;
	}

	public function exportJSON() {
		return json_encode($this->export());
	}

}