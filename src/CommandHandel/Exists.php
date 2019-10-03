<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class Exists extends AbstractCommandHandel
{
	public $commandName = 'Exists';


	public function getCommand(...$data)
	{
		$key=array_shift($data);


		        

		$command = [CommandConst::EXISTS,$key];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
