<?php

include_once './Builder/Builder.php';

class ComputerDirector
{
    private $builder;

    public function setBuilder($builder) {
        $this->builder = $builder;
    }

    public function buildAmdPcGamer($builder) {
        $builder->reset();
        $builder->setCoreNumbers(8);
        $builder->setCpu('Amd Ryzen 5 3600');
        $builder->setGpu('RTX 2060');
        $builder->setRam(16);
        $builder->setWaterCooler();
        $builder->setHd(1000);
    }

    public function buildOfficeComputer($builder) {
        $builder->reset();
        $builder->setCoreNumbers(4);
        $builder->setCpu('Intel Quad Core');
        $builder->setGpu('Intel graphics');
        $builder->setRam(8);
        $builder->setWaterCooler();
        $builder->setHd(256);
    }

}