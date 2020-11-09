<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class DeclarativasRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'DeclarativasRespuesta';
    
    protected static $RCCPMTypes = [
        'declarativa' => 'string',
        'fecha_declarativa' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'declarativa' => null,
        'fecha_declarativa' => 'yyyy-MM-dd'
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
        'declarativa' => 'declarativa',
        'fecha_declarativa' => 'fechaDeclarativa'
    ];
    
    protected static $setters = [
        'declarativa' => 'setDeclarativa',
        'fecha_declarativa' => 'setFechaDeclarativa'
    ];
    
    protected static $getters = [
        'declarativa' => 'getDeclarativa',
        'fecha_declarativa' => 'getFechaDeclarativa'
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
        $this->container['declarativa'] = isset($data['declarativa']) ? $data['declarativa'] : null;
        $this->container['fecha_declarativa'] = isset($data['fecha_declarativa']) ? $data['fecha_declarativa'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['declarativa']) && (mb_strlen($this->container['declarativa']) > 99)) {
            $invalidProperties[] = "invalid value for 'declarativa', the character length must be smaller than or equal to 99.";
        }
        if (!is_null($this->container['declarativa']) && (mb_strlen($this->container['declarativa']) < 1)) {
            $invalidProperties[] = "invalid value for 'declarativa', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['fecha_declarativa']) && (mb_strlen($this->container['fecha_declarativa']) > 10)) {
            $invalidProperties[] = "invalid value for 'fecha_declarativa', the character length must be smaller than or equal to 10.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDeclarativa()
    {
        return $this->container['declarativa'];
    }
    
    public function setDeclarativa($declarativa)
    {
        if (!is_null($declarativa) && (mb_strlen($declarativa) > 99)) {
            throw new \InvalidArgumentException('invalid length for $declarativa when calling DeclarativasRespuesta., must be smaller than or equal to 99.');
        }
        if (!is_null($declarativa) && (mb_strlen($declarativa) < 1)) {
            throw new \InvalidArgumentException('invalid length for $declarativa when calling DeclarativasRespuesta., must be bigger than or equal to 1.');
        }
        $this->container['declarativa'] = $declarativa;
        return $this;
    }
    
    public function getFechaDeclarativa()
    {
        return $this->container['fecha_declarativa'];
    }
    
    public function setFechaDeclarativa($fecha_declarativa)
    {
        if (!is_null($fecha_declarativa) && (mb_strlen($fecha_declarativa) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_declarativa when calling DeclarativasRespuesta., must be smaller than or equal to 10.');
        }
        $this->container['fecha_declarativa'] = $fecha_declarativa;
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
