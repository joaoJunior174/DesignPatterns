<?php

include_once './Factory/PaymentMethodInterface.php';

class CreditCard implements PaymentMethodInterface
{
    private $paymentCode;
    private $creditCardNumber;
    private $creditCardCvc;
    private $creditCardDate;
    const PAYMENT_CODE=12;

    public function paymentData() {

        $data['code'] = self::PAYMENT_CODE;
        $data['card_number'] = $this->creditCardNumber;
        $data['cvc'] = $this->creditCardCvc;
        $data['date'] = $this->creditCardDate;

        return $data;
    }

    public function fillPaymentFields($data=null) {

        try {
            $this->paymentCode = self::PAYMENT_CODE;
            $this->creditCardNumber = $data['card_number'];
            $this->creditCardCvc = $data['cvc'];
            $this->creditCardDate = $data['date'];
        } catch (\Exception $exception) {
            print($exception);
        }

    }

}
