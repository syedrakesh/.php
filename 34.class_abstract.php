<?php
//  Class - Access Modifier - Abstract Class - Abstract Method - 
class BuyProduct extends Payment
{
    public function GetPayment()
    {
        return $this->VisaPayment();
    }
}

abstract class Payment
{
    public function VisaPayment()
    {
        return 'Visa Pament Done';
    }
    abstract public function GetPayment();
}

$bike = new BuyProduct();
echo $bike->GetPayment();
