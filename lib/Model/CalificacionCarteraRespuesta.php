<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class CalificacionCarteraRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'CalificacionCarteraRespuesta';
    
    protected static $RCCPMTypes = [
        'calificacion' => 'string',
        'nombre_otorgante' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'calificacion' => null,
        'nombre_otorgante' => null
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
        'calificacion' => 'calificacion',
        'nombre_otorgante' => 'nombreOtorgante'
    ];
    
    protected static $setters = [
        'calificacion' => 'setCalificacion',
        'nombre_otorgante' => 'setNombreOtorgante'
    ];
    
    protected static $getters = [
        'calificacion' => 'getCalificacion',
        'nombre_otorgante' => 'getNombreOtorgante'
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
    
    public function getCalificacion()
    {
        return $this->container['calificacion'];
    }
    
    public function setCalificacion($calificacion)
    {
        $this->container['calificacion'] = $calificacion;
        return $this;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        $this->container['nombre_otorgante'] = $nombre_otorgante;
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
