<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class ReporteRespuestaConsultasInstitucionales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'ReporteRespuesta_consultasInstitucionales';
    
    protected static $RCCPMTypes = [
        'comerciales' => '\RCCPM\MX\Client\Model\ConsultasComerciales',
        'financieras' => '\RCCPM\MX\Client\Model\ConsultasFinancieras',
        'consultas' => '\RCCPM\MX\Client\Model\Consultas[]'
    ];
    
    protected static $RCCPMFormats = [
        'comerciales' => null,
        'financieras' => null,
        'consultas' => null
    ];
    
    public static function RCCPMTypes()
    {
        return self::$RCCPMTypes;
    }
    
    public static function RCCPMFormats()
    {
        return self::$RCCPMFormats;
    }
    
    protected static $attributeMap = [
        'comerciales' => 'comerciales',
        'financieras' => 'financieras',
        'consultas' => 'consultas'
    ];
    
    protected static $setters = [
        'comerciales' => 'setComerciales',
        'financieras' => 'setFinancieras',
        'consultas' => 'setConsultas'
    ];
    
    protected static $getters = [
        'comerciales' => 'getComerciales',
        'financieras' => 'getFinancieras',
        'consultas' => 'getConsultas'
    ];
    
    public static function attributeMap()
    {
        return self::$attributeMap;
    }
    
    public static function setters()
    {
        return self::$setters;
    }
    
    public static function getters()
    {
        return self::$getters;
    }
    
    public function getModelName()
    {
        return self::$RCCPMModelName;
    }
    
    
    
    protected $container = [];
    
    public function __construct(array $data = null)
    {

    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getComerciales()
    {
        return $this->container['comerciales'];
    }
    
    public function setComerciales($comerciales)
    {
        $this->container['comerciales'] = $comerciales;
        return $this;
    }
    
    public function getFinancieras()
    {
        return $this->container['financieras'];
    }
    
    public function setFinancieras($financieras)
    {
        $this->container['financieras'] = $financieras;
        return $this;
    }
    
    public function getConsultas()
    {
        return $this->container['consultas'];
    }
    
    public function setConsultas($consultas)
    {
        $this->container['consultas'] = $consultas;
        return $this;
    }
    
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }
    
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }
    
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }
    
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }
    
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
