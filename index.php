<?php

include_once './Factory/BilletPayment.php';
include_once './Factory/CreditCardPayment.php';
include_once './Builder/ComputerBuilder.php';
include_once './Builder/ComputerDirector.php';
include_once './Singleton/Log.php';
include_once './Prototype/GamerComputerPrototype.php';

//function to simulate factory pattern
function simulateFactory() {
    //simulating a post data for billet
    $data_billet['bar_code'] = "132874289753243423";
    $data_billet['date'] = "22/03/2011";

    $billetPayment = new BilletPayment();
    $billet = $billetPayment->paymentDataObject();
    $billet->fillPaymentFields($data_billet);
    $billetPayment->integratePaymentOMS();

    //simulating a post data for credit card
    $data_credit['card_number'] = "5443.3242.2345.2352";
    $data_credit['cvc'] = "234";
    $data_credit['date'] = "05/30";

    $creditPayment = new CreditCardPayment();
    $credit = $creditPayment->paymentDataObject();
    $credit->fillPaymentFields($data_credit);
    $creditPayment->integratePaymentOMS();
}

function simulateBuilder() {

    $computerBuilder = new ComputerBuilder();
    $computerDirector = new ComputerDirector();
    $computerDirector->buildAmdPcGamer($computerBuilder);
    $gamerPC = $computerBuilder->getComputer();
    $computerDirector->buildOfficeComputer($computerBuilder);
    $officePc = $computerBuilder->getComputer();

    print(json_encode($gamerPC));
    print("<br/>");
    print(json_encode($officePc));

}

function simulateSingleton() {
    $message = '[ERROR WHILE PLACING ORDER]...';
    $path = 'order/afterSave/save.log';
    $logConnection = Log::getInstance();
    $logConnection->saveLog($message,$path);
}

function simulatePrototype() {

    $computer['coreNumbers'] = '12';
    $computer['cpu'] = 'Inter i9';
    $computer['ram'] = 'ram';
    $computer['hd'] = 'hd';
    $computer['gpu'] = 'RTX 3080TI';
    $computer['waterCooler'] = true;

    $cmpGamer = new GamerComputerPrototype($computer);
    $cmpGamer2 = $cmpGamer->cloneComputer();

    print(var_dump($cmpGamer2));



}

//simulateFactory();
//simulateBuilder();
//simulateSingleton();
simulatePrototype();
?>
