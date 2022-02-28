<?php

abstract class Payment
{
    protected $objectPayment;
    abstract function createPayment();
    abstract function paymentDataObject();

    public function integratePaymentOMS() {
        $paymentData = $this->paymentDataObject();
        print("Sending the following data to OMS: ");
        print(json_encode($paymentData->paymentData()));
        print("Payment data integrated with OMS.<br//>");
    }

}