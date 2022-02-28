<?php

include_once './Factory/BilletPayment.php';
include_once './Factory/CreditCardPayment.php';
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

simulateFactory();

?>
