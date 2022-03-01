<?php

include_once './Builder/Builder.php';
include_once './Builder/Computer.php';

class ComputerBuilder implements Builder
{
    private $computer;

    function __construct() {
        $this->reset();
    }

    public function reset()
    {
        $this->computer = new Computer();
    }

    public function setCoreNumbers($numberCore = 2)
    {
        $this->computer->coreNumbers=$numberCore;
    }

    public function setCpu($cpuType = null)
    {
        $this->computer->cpu = $cpuType;
    }

    public function setGpu($gpuType = null)
    {
        $this->computer->gpu = $gpuType;
    }

    public function setRam($ramCapacity = 2)
    {
        $this->computer->ram = $ramCapacity;
    }

    public function setWaterCooler($isWaterCooler = false)
    {
        $this->computer->waterCooler = $isWaterCooler;
    }

    public function setHd($hdCapacity)
    {
        $this->computer->hd = $hdCapacity;
    }

    public function getComputer() {
        $device = $this->computer;
        $this->reset();
        return $device;
    }

}