<?php

include_once './Factory/PaymentMethodInterface.php';

class Billet implements PaymentMethodInterface
{
    private $paymentCode;
    private $barCode;
    private $expireDate;
    const PAYMENT_CODE=11;

    public function paymentData() {

        $data['code'] = $this->paymentCode;
        $data['bar_code'] = $this->barCode;
        $data['date'] = $this->expireDate;

        return $data;
    }

    public function fillPaymentFields($data=null) {

        try {
            $this->paymentCode = self::PAYMENT_CODE;
            $this->barCode = $data['bar_code'];
            $this->expireDate = $data['date'];
        } catch (\Exception $exception) {
            print($exception);
        }

    }

}