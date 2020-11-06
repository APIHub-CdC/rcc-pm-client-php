<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class PersonaPeticion implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'PersonaPeticion';
    
    protected static $RCCPMTypes = [
        'folio_otorgante' => 'string',
        'persona' => '\RCCPM\MX\Client\Model\Persona'
    ];
    
    protected static $RCCPMFormats = [
        'folio_otorgante' => null,
        'persona' => null
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
        'folio_otorgante' => 'folioOtorgante',
        'persona' => 'persona'
    ];
    
    protected static $setters = [
        'folio_otorgante' => 'setFolioOtorgante',
        'persona' => 'setPersona'
    ];
    
    protected static $getters = [
        'folio_otorgante' => 'getFolioOtorgante',
        'persona' => 'getPersona'
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
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['folio_otorgante'] === null) {
            $invalidProperties[] = "'folio_otorgante' can't be null";
        }
        if ((mb_strlen($this->container['folio_otorgante']) > 25)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be smaller than or equal to 25.";
        }
        if ((mb_strlen($this->container['folio_otorgante']) < 1)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be bigger than or equal to 1.";
        }
        if ($this->container['persona'] === null) {
            $invalidProperties[] = "'persona' can't be null";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        if ((mb_strlen($folio_otorgante) > 25)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling PersonaPeticion., must be smaller than or equal to 25.');
        }
        if ((mb_strlen($folio_otorgante) < 1)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling PersonaPeticion., must be bigger than or equal to 1.');
        }
        $this->container['folio_otorgante'] = $folio_otorgante;
        return $this;
    }
    
    public function getPersona()
    {
        return $this->container['persona'];
    }
    
    public function setPersona($persona)
    {
        $this->container['persona'] = $persona;
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
