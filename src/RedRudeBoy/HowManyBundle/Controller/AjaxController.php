<?php

namespace RedRudeBoy\HowManyBundle\Controller;
//echo getcwd();
//\chdir('../src/RedRudeBoy/HowManyBundle/iCalCreator/');
//echo getcwd();
//exit;

//
//
//For work with iCalcreator
//require_once '../../../../vendor/kigkonsult/dbiCal-3.0.5/includes/iCalcreator.class.php';
//require_once '../../../../vendor/kigkonsult/dbiCal-3.0.5/includes/dbiCal.class.php';
//require_once 'MDB2.php';
//require_once '../src/RedRudeBoy/HowManyBundle/iCalCreator/iCalcreator.class.php';

//use RedRudeBoy\HowManyBundle\iCalCreator;
//use RedRudeBoy\HowManyBundle\iCalCreator\vcalendar as vcalendar;
//use RedRudeBoy\HowManyBundle\iCalCreator\vtodo as vtodo;
//use RedRudeBoy\HowManyBundle\iCalCreator\vevent as vevent;
//use RedRudeBoy\HowManyBundle\iCalCreator\calendarComponent;
//use RedRudeBoy\HowManyBundle\iCalCreator\vtimezone;
//use RedRudeBoy\HowManyBundle\iCalCreator\valarm;

//
//
//Actions classes
//use RedRudeBoy\HowManyBundle\Actions;
//use RedRudeBoy\HowManyBundle\Actions\Action as Action;
//use RedRudeBoy\HowManyBundle\Actions\ActionDo as ActionDo;
//use RedRudeBoy\HowManyBundle\Actions\ActionStack as ActionStack;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\SecurityContext;
//Sure?
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use JMS\SecurityExtraBundle\Annotation\Secure;

class AjaxController extends Controller
{
	/**
	 * Check if the user have the last version of each calendar
	 * 
	 * The object have to be this structure:
	 * {
	 *	{iCalid: {id}, last_mod: {timestamp_last_mod},
	 *	...
	 * }
	 */
    public function checkUpdatesAction()
    {
		echo '<pre>';
		$cal_id = '123';
//		$redis = $this->get('snc_redis.default');
//		$action = $this->get('howMany.actionClass');
//		$action->construct('create', 'vevent', 'data');
//		var_dump($action);
		
		$stack = $this->get('howMany.actionStack');
		$stack->setCalendarId($cal_id);
//		$last_mod = $stack->push($action);
//		var_dump($last_mod);
//		$s = $stack->getAll();
		$s = $stack->getSince('1339787675');
		var_dump($s);
		exit;
		$as = new ActionStack($cal_id,$redis);
		$a = new Action();
		$a->construct('create', 'vevent', 'data');
		var_dump($a->exportJSON());
		exit;
		
		
		define('ICAL_LANG', 'esp'); //Not here ok...
		

		$cal = new vcalendar(array(
			'language' => 'spa'
		));
		
		
		$howMany = new vtodo();
//		$howMany->summary = 'Visitar l\'àvia';
//		$howMany->organizer = 'user_id';
//		$howMany->description = 'Aprendràs molt!';
		$howMany->setSummary(utf8_encode("Visitar l'àvia"));
		$howMany->setOrganizer('user_id');
		$howMany->setDescription(utf8_encode('Aprendràs molt!'));
		$howMany->setDuration(0,0,60);
		$howMany->setDtstart(date('y'),date('m'),date('d'),date('H'),date('i'),date('s'));
		$howMany->setDtstamp(date('y'),date('m'),date('d'),date('H'),date('i'),date('s'));
		$howMany->setDtend(date('y'),date('m'),date('d'),date('H'),date('i'),date('s'));
		$howMany->setCategories(utf8_encode('family'));
		
		$cal->addComponent($howMany);
//		$cal->parse();
//		$str = $cal->createCalendar();
		echo '<pre>';
		var_dump($cal);
		echo '<br />';
//		$xmlcal = \RedRudeBoy\HowManyBundle\iCalCreator\iCal2XML($cal);
		
//		UniversalClassLoader ??
//		$cal = $this->get('vcalendar.factory')->create(new vcalendar());
//		$redis->set('library', 'predis');
//		$retval = $redis->get('library');
		
//		echo $xmlcal;
//		var_dump($xmlcal);
//		var_dump($howMany);
		exit;
		$request = $this->getRequest();
//		$session = $request->getSession();
		
		try {
			$dataJSON = $request->get('data',null);
			$calendars = json_decode($dataJSON);
			if(empty($calendars))
				throw new Exception('Cannot be emtpy');
			
		} catch (Exception $e) {
			//Return bad params json error
		}
		
		$status = 'success';
		$responseCode = 200;
		$numElementsFailed = 0;		
		
		foreach ($calendars as $calendar) {
			/* @TODO */
			//		{iCalid: {id}, last_mod: {timestamp_last_mod}}
			
			//check if exist
			
			//Check if this timestamp is in the stack
			//Check if is the last version	*/
			
				//if true return success
			
				//else return stack
			
			
			//if any error handle it
			

			
		}
		
		$return = array(
			'status'	=> $status,
			'responseCode' => $responseCode		
		);
		return new Response(json_encode($return), $responseCode);
	}

	public function sendDataAction()
	{
		$request = $this->getRequest();
//		$session = $request->getSession();
		
		$status = 'success';
		$responseCode = 200;
		$numElementsFailed = 0;
		$data = $request->get('data',null);
		if(empty($data)) {
			$responseCode = 400;
			$status = 'data cannot be empty';
			
		} else {
			$actions = json_decode($data);
			//Control error
			foreach ($actions as $action) {
				try {
					switch ($action) {
						case 'create':
							$this->createElement($action);
							break;
						case 'update':
							$this->updateElement($action);
							break;
						case 'delete':
							$this->deleteElement($action);
							break;
						default:
							$responseCode = 400;
							$status = 'action not recognized';
							$numElementsFailed++;
							break;
					}
				} catch (Exception $e) {
					$numElementsFailed++;
					$responseCode = 500;
					$status = $numElementsFailed.' have failed, the last message is: '.$e->getMessage();
				}
			}	
		}
		$return = array(
			'status'	=> $status,
			'responseCode' => $responseCode		
		);
		return new Response(json_encode($return), $responseCode);
    }
	
	private function createElement($element)
	{
		/* @TODO */
	}
	
	private function updateElement($element)
	{
		/* @TODO */
	}
	
	private function deleteElement($element)
	{
		/* @TODO */
	}
	
	
	
/**
 *		dbiCal integration not works, its for older versions of php
 */	
	
//	var $DBICALDSN = 'mysql://root:root@localhost/ical';
//	var $dbConnection;
//	var $dbiCal;
	
//	public function __construct(LoggerInterface $logger = null) {
//		define('DBICALDSN', 'mysql://root:root@localhost/ical');
//		$this->dbConnection = $this->connectDB($this->DBICALDSN);
//		$this->dbiCal = new dbiCal($this->dbConnection);
//	}
	
//	private function connectDB($DBICALDSN) {
//		$_DBconnection = & MDB2::singleton($DBICALDSN);
//		if (PEAR::isError($_DBconnection)) {
//			$msg = $_DBconnection->getUserInfo() . PHP_EOL . $_DBconnection->getMessage();
//			if ($_log) {
//				$_log->log($msg, PEAR_LOG_EMERG);
//				$_log->flush();
//			} else {
//				echo $msg;
//			}
//			exit();
//		}
//		$res = & $_DBconnection->exec('SET autocommit=0'); // MySQL fix turning autocommit off
//		if (PEAR::isError($res)) {
//			$msg = $res->getUserInfo() . PHP_EOL . $res->getMessage();
//			if ($_log) {
//				$_log->log($msg, PEAR_LOG_EMERG);
//				$_log->flush();
//			} else {
//				echo $msg;
//			}
//			exit();
//		}
//		return $_DBconnection;
//	}
}