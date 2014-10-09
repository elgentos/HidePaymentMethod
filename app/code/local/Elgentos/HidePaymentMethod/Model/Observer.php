<?php
class Elgentos_HidePaymentMethod_Model_Observer {

    public function hidePaymentMethod($event){
        $method = $event->getMethodInstance();
        $result = $event->getResult();

        if($method->getCode() == 'banktransfer' && !Mage::getIsDeveloperMode()) {
            $result->isAvailable = false;
        }

    }

}