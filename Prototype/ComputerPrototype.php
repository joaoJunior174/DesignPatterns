<?php

abstract class ComputerPrototype
{
    protected $coreNumbers;
    protected $cpu;
    protected $ram;
    protected $hd;

    function __construct($computer)
    {
        $this->coreNumbers = $computer['coreNumbers'];
        $this->cpu = $computer['cpu'];
        $this->ram = $computer['ram'];
        $this->hd = $computer['hd'];
    }

    abstract function cloneComputer();
    abstract protected function initializeComputerArray($object);

}