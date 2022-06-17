<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class ReporteRespuestaCredito implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'ReporteRespuesta_credito';
    
    protected static $RCCPMTypes = [
        'cuentas_financieras' => '\RCCPM\MX\Client\Model\CuentasFinancierasRespuesta[]',
        'cuentas_comerciales' => '\RCCPM\MX\Client\Model\CuentasComercialesRespuesta[]'
    ];
    
    protected static $RCCPMFormats = [
        'cuentas_financieras' => null,
        'cuentas_comerciales' => null
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
        'cuentas_financieras' => 'cuentasFinancieras',
        'cuentas_comerciales' => 'cuentasComerciales'
    ];
    
    protected static $setters = [
        'cuentas_financieras' => 'setCuentasFinancieras',
        'cuentas_comerciales' => 'setCuentasComerciales'
    ];
    
    protected static $getters = [
        'cuentas_financieras' => 'getCuentasFinancieras',
        'cuentas_comerciales' => 'getCuentasComerciales'
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
    
    public function getCuentasFinancieras()
    {
        return $this->container['cuentas_financieras'];
    }
    
    public function setCuentasFinancieras($cuentas_financieras)
    {
        $this->container['cuentas_financieras'] = $cuentas_financieras;
        return $this;
    }
    
    public function getCuentasComerciales()
    {
        return $this->container['cuentas_comerciales'];
    }
    
    public function setCuentasComerciales($cuentas_comerciales)
    {
        $this->container['cuentas_comerciales'] = $cuentas_comerciales;
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
