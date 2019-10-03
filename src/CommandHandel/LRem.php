<?php

namespace EasySwoole\Redis\CommandHandel;

use EasySwoole\Redis\CommandConst;
use EasySwoole\Redis\Redis;
use EasySwoole\Redis\Response;

class LRem extends AbstractCommandHandel
{
    public $commandName = 'LRem';


    public function getCommand(...$data)
    {
        $key = array_shift($data);
        $count = array_shift($data);
        $value = array_shift($data);

        $value = $this->serialize($value);

        $command = [CommandConst::LREM, $key, $count, $value];
        $commandData = array_merge($command, $data);
        return $commandData;
    }


    public function getData(Response $recv)
    {
        return $recv->getData();
    }
}
