<?php

include_once './Factory/Payment.php';
include_once './Factory/Billet.php';

class BilletPayment extends Payment
{
    function __construct() {
        $this->createPayment();
    }

    function createPayment() {
        $this->objectPayment = new Billet();
    }
    function paymentDataObject() {

        try {
            if (empty($this->objectPayment)) {
                throw new Exception("There are no data on billet card payment");
            }
            return $this->objectPayment;
        } catch (\Exception $e) {
            print($e);
        }
    }
}