<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class CommandGetKeys extends AbstractCommandHandel
{
	public $commandName = 'CommandGetKeys';


	public function getCommand(...$data)
	{
		$data=array_shift($data);


		        $command = array_merge([Command::COMMAND, 'GETKEYS'], $data);

		$command = [CommandConst::COMMANDGETKEYS,$data];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
