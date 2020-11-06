<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class Persona implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Persona';
    
    protected static $RCCPMTypes = [
        'rfc' => 'string',
        'nombre' => 'string',
        'domicilio' => '\RCCPM\MX\Client\Model\PersonaDomicilio'
    ];
    
    protected static $RCCPMFormats = [
        'rfc' => null,
        'nombre' => null,
        'domicilio' => null
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
        'rfc' => 'RFC',
        'nombre' => 'nombre',
        'domicilio' => 'domicilio'
    ];
    
    protected static $setters = [
        'rfc' => 'setRfc',
        'nombre' => 'setNombre',
        'domicilio' => 'setDomicilio'
    ];
    
    protected static $getters = [
        'rfc' => 'getRfc',
        'nombre' => 'getNombre',
        'domicilio' => 'getDomicilio'
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
        $this->container['rfc'] = isset($data['rfc']) ? $data['rfc'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rfc'] === null) {
            $invalidProperties[] = "'rfc' can't be null";
        }
        if ((mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if ((mb_strlen($this->container['rfc']) < 10)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be bigger than or equal to 10.";
        }
        if ($this->container['nombre'] === null) {
            $invalidProperties[] = "'nombre' can't be null";
        }
        if ((mb_strlen($this->container['nombre']) > 75)) {
            $invalidProperties[] = "invalid value for 'nombre', the character length must be smaller than or equal to 75.";
        }
        if ((mb_strlen($this->container['nombre']) < 2)) {
            $invalidProperties[] = "invalid value for 'nombre', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['domicilio'] === null) {
            $invalidProperties[] = "'domicilio' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        if ((mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling Persona., must be smaller than or equal to 13.');
        }
        if ((mb_strlen($rfc) < 10)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling Persona., must be bigger than or equal to 10.');
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        if ((mb_strlen($nombre) > 75)) {
            throw new \InvalidArgumentException('invalid length for $nombre when calling Persona., must be smaller than or equal to 75.');
        }
        if ((mb_strlen($nombre) < 2)) {
            throw new \InvalidArgumentException('invalid length for $nombre when calling Persona., must be bigger than or equal to 2.');
        }
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getDomicilio()
    {
        return $this->container['domicilio'];
    }
    
    public function setDomicilio($domicilio)
    {
        $this->container['domicilio'] = $domicilio;
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
