<?php

interface Builder
{
    public function reset();
    public function setCoreNumbers($numberCore=2);
    public function setCpu($cpuType=null);
    public function setGpu($gpuType=null);
    public function setRam($ramCapacity=2);
    public function setWaterCooler($isWaterCooler=false);
    public function setHd($hdCapacity);
}