<?php
namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class GeoAdd extends AbstractCommandHandel
{
	public $commandName = 'GeoAdd';


	public function getCommand(...$data)
	{
		$key=array_shift($data);
		$longitude=array_shift($data);
		$latitude=array_shift($data);
		$name=array_shift($data);
		$data=array_shift($data);


		        $command = array_merge([Command::GEOADD, $key, $longitude, $latitude, $name,], $data);
		        

		$command = [CommandConst::GEOADD,$key,$longitude,$latitude,$name,$data];
		$commandData = array_merge($command,$data);
		return $commandData;
	}


	public function getData(Response $recv)
	{
		return $recv->getData();
	}
}
