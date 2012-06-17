<?php

namespace RedRudeBoy\HowManyBundle\Actions;

//require_once '../src/RedRudeBoy/HowManyBundle/iCalCreator/iCalcreator.class.php';

use RedRudeBoy\HowManyBundle\iCalCreator;
use RedRudeBoy\HowManyBundle\iCalCreator\vcalendar as vcalendar;
use RedRudeBoy\HowManyBundle\iCalCreator\vtodo as vtodo;
use RedRudeBoy\HowManyBundle\iCalCreator\vevent as vevent;
//use RedRudeBoy\HowManyBundle\iCalCreator\calendarComponent;
//use RedRudeBoy\HowManyBundle\iCalCreator\vtimezone;
//use RedRudeBoy\HowManyBundle\iCalCreator\valarm;

/*
 * Static library for execute all the actions
 */

class ActionDo {

	// Getter method for creating/returning the single instance of this class
	public static function getInstance() {
		if (!self::$_instance)
			self::$_instance = new ActionDo();

		return self::$_instance;
	}
	
	private static function construct(Action $action, vcalendar $calendar) {
		$type = $action->type;
		$crud = $action->crud;
		
		$function_name = $type.$crud;
		if(function_exists($function_name)) {
			call_user_func_array($function_name, array($action,$calendar));
		} else {
			throw new \InvalidArgumentException('Function '.$function_name.' not founded');
		}
	}
	
	private static function createvcalendar($action,$calendar) {
		
	}
	private static function updatevcalendar($action,$calendar) {
		
	}
}