<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class HLen extends AbstractCommandHandel
{
	public $commandName = 'HLen';


	public function getCommand(...$data)
	{
		$key=array_shift($data);


		        

		$command = [CommandConst::HLEN,$key];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
