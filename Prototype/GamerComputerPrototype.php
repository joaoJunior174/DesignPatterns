<?php

include_once './Prototype/ComputerPrototype.php';

class GamerComputerPrototype extends ComputerPrototype
{
    public $gpu;
    public $waterCooler;

    function __construct($computer)
    {
        parent::__construct($computer);
        $this->gpu = $computer['gpu'];
        $this->waterCooler = $computer['waterCooler'];
    }

    public function cloneComputer()
    {
        return new GamerComputerPrototype(self::initializeComputerArray($this));
    }

    protected function initializeComputerArray($object) {
        $computer['coreNumbers'] = $object->coreNumbers;
        $computer['cpu'] = $object->cpu;
        $computer['ram'] = $object->ram;
        $computer['hd'] = $object->hd;
        $computer['gpu'] = $object->gpu;
        $computer['waterCooler'] = $object->waterCooler;
        return $computer;
    }

}