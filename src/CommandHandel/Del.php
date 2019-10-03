<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class Del extends AbstractCommandHandel
{
	public $commandName = 'Del';


	public function getCommand(...$data)
	{
		$key=array_shift($data);


		        

		$command = [CommandConst::DEL,$key];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
