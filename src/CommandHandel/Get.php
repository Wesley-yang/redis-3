<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class Get extends AbstractCommandHandel
{
	public $commandName = 'Get';


	public function getCommand(...$data)
	{
		$key=array_shift($data);


		        

		$command = [CommandConst::GET,$key];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		$data = $recv->getData();
		        return $this->unSerialize($data);
	}
}
