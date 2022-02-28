<?php

interface PaymentMethodInterface {

    public function paymentData();
    public function fillPaymentFields($data=null);

}
