<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class ZLexCount extends AbstractCommandHandel
{
	public $commandName = 'ZLexCount';


	public function getCommand(...$data)
	{
		$key=array_shift($data);
		$min=array_shift($data);
		$max=array_shift($data);


		        

		$command = [CommandConst::ZLEXCOUNT,$key,$min,$max];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
