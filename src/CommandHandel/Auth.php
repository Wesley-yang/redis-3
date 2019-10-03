<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class Auth extends AbstractCommandHandel
{
	public $commandName = 'Auth';


	public function getCommand(...$data)
	{
		$password=array_shift($data);


		        

		$command = [CommandConst::AUTH,$password];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return true;
	}
}
