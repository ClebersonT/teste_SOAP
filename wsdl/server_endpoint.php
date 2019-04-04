<?php

require_once('../simple_soap_server_class.php');

$server = new SoapServer('http://127.0.0.1/soap/wsdl/simple_service_definition.wsdl');
$server->setClass('SimpleSoapServer');
$server->handle();
