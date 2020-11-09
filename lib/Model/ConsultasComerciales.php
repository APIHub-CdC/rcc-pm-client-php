<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class ConsultasComerciales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'ConsultasComerciales';
    
    protected static $RCCPMTypes = [
        'ultimos3meses' => 'int',
        'ultimos12meses' => 'int',
        'ultimos24meses' => 'int',
        'mas24meses' => 'float'
    ];
    
    protected static $RCCPMFormats = [
        'ultimos3meses' => 'int32',
        'ultimos12meses' => 'int32',
        'ultimos24meses' => 'int32',
        'mas24meses' => null
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
        'ultimos3meses' => 'ultimos3meses',
        'ultimos12meses' => 'ultimos12meses',
        'ultimos24meses' => 'ultimos24meses',
        'mas24meses' => 'mas24meses'
    ];
    
    protected static $setters = [
        'ultimos3meses' => 'setUltimos3meses',
        'ultimos12meses' => 'setUltimos12meses',
        'ultimos24meses' => 'setUltimos24meses',
        'mas24meses' => 'setMas24meses'
    ];
    
    protected static $getters = [
        'ultimos3meses' => 'getUltimos3meses',
        'ultimos12meses' => 'getUltimos12meses',
        'ultimos24meses' => 'getUltimos24meses',
        'mas24meses' => 'getMas24meses'
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
        $this->container['ultimos3meses'] = isset($data['ultimos3meses']) ? $data['ultimos3meses'] : null;
        $this->container['ultimos12meses'] = isset($data['ultimos12meses']) ? $data['ultimos12meses'] : null;
        $this->container['ultimos24meses'] = isset($data['ultimos24meses']) ? $data['ultimos24meses'] : null;
        $this->container['mas24meses'] = isset($data['mas24meses']) ? $data['mas24meses'] : null;
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
    
    public function getUltimos3meses()
    {
        return $this->container['ultimos3meses'];
    }
    
    public function setUltimos3meses($ultimos3meses)
    {
        $this->container['ultimos3meses'] = $ultimos3meses;
        return $this;
    }
    
    public function getUltimos12meses()
    {
        return $this->container['ultimos12meses'];
    }
    
    public function setUltimos12meses($ultimos12meses)
    {
        $this->container['ultimos12meses'] = $ultimos12meses;
        return $this;
    }
    
    public function getUltimos24meses()
    {
        return $this->container['ultimos24meses'];
    }
    
    public function setUltimos24meses($ultimos24meses)
    {
        $this->container['ultimos24meses'] = $ultimos24meses;
        return $this;
    }
    
    public function getMas24meses()
    {
        return $this->container['mas24meses'];
    }
    
    public function setMas24meses($mas24meses)
    {
        $this->container['mas24meses'] = $mas24meses;
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
