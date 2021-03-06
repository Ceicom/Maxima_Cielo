<?php

class Maxima_Cielo_Model_Observer {
    public function dispatch(Varien_Event_Observer $observer) {
        $oRequest        = Mage::app()->getRequest();
        $sControllerName = $oRequest->getControllerName();
        $sAtionName      = $oRequest->getActionName();

        if($sControllerName == 'cart' AND $sAtionName == 'index') {
            Mage::getSingleton('checkout/session')->getQuote()->getPayment()->setData('method', '');
        }
        if($sControllerName == 'onepage' AND $sAtionName == "saveShippingMethod") {
            Mage::getSingleton('checkout/session')->getQuote()->getPayment()->setData('method', '');
        }
    }
}