<?php

namespace RedRudeBoy\HowManyBundle\Actions;

/**
 * Aquesta classe serveix per guardar un stack de actions de cada calendari
 * Utilitza el type list de redis
 * 
 * Class for have all the utilities and functions of the stack of actions
 */
class ActionStack {

	// Store the single instance of ActionStack
//	private $_instance;
	// Store the redis client
	protected $_db;
	// Store the key of redis
	private $_db_key;
	// Store the calendar_id
	private $_cal_id;

	// Private constructor to limit object instantiation to within the class
	public function __construct($redis) {
//		self::$_instance = FALSE;
//		$this->_db = $this->container->get('snc_redis.default');
		$this->_db = $redis;
	}
	
	public function setCalendarId($cal_id) {
		$this->_cal_id = $cal_id;
		$this->_db_key = $cal_id . '_stack';
	}

	public function getLastMod() {
		//Recover the last index
		$actionJson = $this->_db->lindex($this->_db_key, -1);
		$action = new Action();
		$action->constructJSON($actionJson);
		return $action->timestamp;
	}

	public function isLastMod($last_mod) {
		return (self::getLastMod() == $last_mod);
	}
	
	//redis list functions
	//vcalendar not allowed
	public function push(Action $action) {
		if(!in_array($action->type, array('vtodo','vevent','valarm')))
			throw new \InvalidArgumentException('The type must be vtodo, vevent or valarm and the type received is: ' . $type);
		
		$time = time(); //ITS THE BEST IDEA TO WORK WITH TIME????
		$action->setTimestamp($time);

		$this->_db->rpush($this->_db_key, $action->exportJSON());

		return $time;
	}

	public function getSince($last_mod) {
		$founded = false;

		$actions = array();
		$index = 1;
		do {
			$actionJson = $this->_db->lindex($this->_db_key, -$index);
			$action = new Action();
			$action->constructJSON($actionJson);
var_dump($action->crud);			
			$time = $action->timestamp;
echo '<br/>Time: '.$time.' last_mod: '.$last_mod.'<br />';
			//if time is more than last_mod save it
			if ($time > $last_mod)
				array_unshift($actions, $actionJson);
			//if time is equal founded = true
			else if ($time == $last_mod)
				$founded = true;
			//else throw exception
			else
				throw new \Exception('The last_mod: ' . $last_mod . ' is not from this stack');

			$index++;
		} while (!$founded);

		return $actions;
	}
	
	public function getAll() {
		$actionsArray = array();
		$index = 0;
		do {
			echo 'Getting '.$index."<br />";
			$actionJson = $this->_db->lindex($this->_db_key, $index);
			var_export($actionJson);
			$index++;
			
			
			if($actionJson !== null) {
				$actionsArray[] = $actionJson;
			}
			
		} while ($actionJson !== null);
		return $actionsArray;
	}

}