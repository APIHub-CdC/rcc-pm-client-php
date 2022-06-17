<?php

namespace RCCPM\MX\Client;

use \GuzzleHttp\Client;
use \GuzzleHttp\HandlerStack as handlerStack;

use Signer\Manager\ApiException;
use Signer\Manager\Interceptor\MiddlewareEvents;
use Signer\Manager\Interceptor\KeyHandler;

use \RCCPM\MX\Client\Configuration;
use \RCCPM\MX\Client\Model\Error;
use \RCCPM\MX\Client\Api\RCCPMApi as Instance;

use \RCCPM\MX\Client\Model\Persona;
use \RCCPM\MX\Client\Model\PersonaDomicilio;
use \RCCPM\MX\Client\Model\PersonaPeticion;
use \RCCPM\MX\Client\Model\CatalogoEstados;
use \RCCPM\MX\Client\Model\CatalogoPais;

class ApiTest extends \PHPUnit_Framework_TestCase
{

    public function setUp()
    {
        $password = "your_key_password";//$password = getenv('KEY_PASSWORD');
        $this->signer = new KeyHandler(null, null, $password);

        $events = new MiddlewareEvents($this->signer);
        $handler = handlerStack::create();
        $handler->push($events->add_signature_header('x-signature'));   
        $handler->push($events->verify_signature_header('x-signature'));
        $client = new Client(['handler' => $handler]);

        $config = new Configuration();
        $config->setHost('the_url');
        
        $this->apiInstance = new Instance($client, $config);
        $this->x_api_key = "your_api_key";
        $this->username = "your_username";
        $this->password = "your_password";

    }     
    
    public function testGetReporteCreditoPM()
    {

        $request = new PersonaPeticion();
        $persona = new Persona();
        $domicilio = new PersonaDomicilio(); 
        $catalogoEstados = new CatalogoEstados(); 
        $catalogoPais = new CatalogoPais();            

        $domicilio->setDireccion("AV. PASEO DE LA REFORMA 01");
        $domicilio->setColoniaPoblacion("GUERRERO");
        $domicilio->setDelegacionMunicipio("CUAUHTEMOC");
        $domicilio->setCiudad("CIUDAD DE MÉXICO");
        $domicilio->setEstado($catalogoEstados::CDMX);
        $domicilio->setCP("68370");
        $domicilio->setPais($catalogoPais::MX);

        $persona->setRFC("EDC930121E01");
        $persona->setNombre("RESTAURANTE SA DE CV");
        $persona->setDomicilio($domicilio);

        $request->setFolioOtorgante("1000001");
        $request->setPersona($persona);
        
        try {

            $result = $this->apiInstance->getReporteCreditoPM($this->x_api_key, $this->username, $this->password, $request);
            if($this->apiInstance->getStatusCode() == 200){
                print_r($result);
            }            
        } catch (ApiException $e) {
            if($e->getCode() !== 204){
                echo 'Exception when calling ApiTest->testGetReporteCreditoPM: ', $e->getMessage(), PHP_EOL;
            }
        }
        $this->assertTrue($this->apiInstance->getStatusCode() == 200);         
    }   
}
