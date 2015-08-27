# NuSoap

Installation
-----------
``` bash
composer require kiann/nusoap:dev-master
```

Usage
------
``` php
use Kiann\Nusoap\NusoapClient;

       $client = new NusoapClient("https://yourserver.org?wsdl", true);
       $client->setNameSpaces(array(
            'soap' => 'http://schemas.xmlsoap.org/soap/envelope/',
            'xsd' => 'http://www.w3.org/2001/XMLSchema',
            'xsi' => 'http://www.w3.org/2001/XMLSchema-instance',
            'SOAP-ENC' => 'http://schemas.xmlsoap.org/soap/encoding/'
       ));
       $result = $client->call('operation', $requestBody);
``` 
