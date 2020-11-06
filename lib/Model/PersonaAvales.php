<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class PersonaAvales implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'PersonaAvales';
    
    protected static $RCCPMTypes = [
        'rfc' => 'string',
        'curp' => 'string',
        'nombre' => 'string',
        'segundo_nombre' => 'string',
        'apellido_paterno' => 'string',
        'apellido_materno' => 'string',
        'domicilio' => '\RCCPM\MX\Client\Model\PersonaAvalesDomicilio',
        'cantidad' => 'float'
    ];
    
    protected static $RCCPMFormats = [
        'rfc' => null,
        'curp' => null,
        'nombre' => null,
        'segundo_nombre' => null,
        'apellido_paterno' => null,
        'apellido_materno' => null,
        'domicilio' => null,
        'cantidad' => 'float'
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
        'curp' => 'CURP',
        'nombre' => 'nombre',
        'segundo_nombre' => 'segundoNombre',
        'apellido_paterno' => 'apellidoPaterno',
        'apellido_materno' => 'apellidoMaterno',
        'domicilio' => 'domicilio',
        'cantidad' => 'cantidad'
    ];
    
    protected static $setters = [
        'rfc' => 'setRfc',
        'curp' => 'setCurp',
        'nombre' => 'setNombre',
        'segundo_nombre' => 'setSegundoNombre',
        'apellido_paterno' => 'setApellidoPaterno',
        'apellido_materno' => 'setApellidoMaterno',
        'domicilio' => 'setDomicilio',
        'cantidad' => 'setCantidad'
    ];
    
    protected static $getters = [
        'rfc' => 'getRfc',
        'curp' => 'getCurp',
        'nombre' => 'getNombre',
        'segundo_nombre' => 'getSegundoNombre',
        'apellido_paterno' => 'getApellidoPaterno',
        'apellido_materno' => 'getApellidoMaterno',
        'domicilio' => 'getDomicilio',
        'cantidad' => 'getCantidad'
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
        $this->container['curp'] = isset($data['curp']) ? $data['curp'] : null;
        $this->container['nombre'] = isset($data['nombre']) ? $data['nombre'] : null;
        $this->container['segundo_nombre'] = isset($data['segundo_nombre']) ? $data['segundo_nombre'] : null;
        $this->container['apellido_paterno'] = isset($data['apellido_paterno']) ? $data['apellido_paterno'] : null;
        $this->container['apellido_materno'] = isset($data['apellido_materno']) ? $data['apellido_materno'] : null;
        $this->container['domicilio'] = isset($data['domicilio']) ? $data['domicilio'] : null;
        $this->container['cantidad'] = isset($data['cantidad']) ? $data['cantidad'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) > 13)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be smaller than or equal to 13.";
        }
        if (!is_null($this->container['rfc']) && (mb_strlen($this->container['rfc']) < 10)) {
            $invalidProperties[] = "invalid value for 'rfc', the character length must be bigger than or equal to 10.";
        }
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) > 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be smaller than or equal to 18.";
        }
        if (!is_null($this->container['curp']) && (mb_strlen($this->container['curp']) < 18)) {
            $invalidProperties[] = "invalid value for 'curp', the character length must be bigger than or equal to 18.";
        }
        if (!is_null($this->container['nombre']) && (mb_strlen($this->container['nombre']) > 75)) {
            $invalidProperties[] = "invalid value for 'nombre', the character length must be smaller than or equal to 75.";
        }
        if (!is_null($this->container['nombre']) && (mb_strlen($this->container['nombre']) < 2)) {
            $invalidProperties[] = "invalid value for 'nombre', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['segundo_nombre']) && (mb_strlen($this->container['segundo_nombre']) > 75)) {
            $invalidProperties[] = "invalid value for 'segundo_nombre', the character length must be smaller than or equal to 75.";
        }
        if (!is_null($this->container['segundo_nombre']) && (mb_strlen($this->container['segundo_nombre']) < 2)) {
            $invalidProperties[] = "invalid value for 'segundo_nombre', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) > 25)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['apellido_paterno']) && (mb_strlen($this->container['apellido_paterno']) < 2)) {
            $invalidProperties[] = "invalid value for 'apellido_paterno', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) > 25)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['apellido_materno']) && (mb_strlen($this->container['apellido_materno']) < 2)) {
            $invalidProperties[] = "invalid value for 'apellido_materno', the character length must be bigger than or equal to 2.";
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
        if (!is_null($rfc) && (mb_strlen($rfc) > 13)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling PersonaAvales., must be smaller than or equal to 13.');
        }
        if (!is_null($rfc) && (mb_strlen($rfc) < 10)) {
            throw new \InvalidArgumentException('invalid length for $rfc when calling PersonaAvales., must be bigger than or equal to 10.');
        }
        $this->container['rfc'] = $rfc;
        return $this;
    }
    
    public function getCurp()
    {
        return $this->container['curp'];
    }
    
    public function setCurp($curp)
    {
        if (!is_null($curp) && (mb_strlen($curp) > 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling PersonaAvales., must be smaller than or equal to 18.');
        }
        if (!is_null($curp) && (mb_strlen($curp) < 18)) {
            throw new \InvalidArgumentException('invalid length for $curp when calling PersonaAvales., must be bigger than or equal to 18.');
        }
        $this->container['curp'] = $curp;
        return $this;
    }
    
    public function getNombre()
    {
        return $this->container['nombre'];
    }
    
    public function setNombre($nombre)
    {
        if (!is_null($nombre) && (mb_strlen($nombre) > 75)) {
            throw new \InvalidArgumentException('invalid length for $nombre when calling PersonaAvales., must be smaller than or equal to 75.');
        }
        if (!is_null($nombre) && (mb_strlen($nombre) < 2)) {
            throw new \InvalidArgumentException('invalid length for $nombre when calling PersonaAvales., must be bigger than or equal to 2.');
        }
        $this->container['nombre'] = $nombre;
        return $this;
    }
    
    public function getSegundoNombre()
    {
        return $this->container['segundo_nombre'];
    }
    
    public function setSegundoNombre($segundo_nombre)
    {
        if (!is_null($segundo_nombre) && (mb_strlen($segundo_nombre) > 75)) {
            throw new \InvalidArgumentException('invalid length for $segundo_nombre when calling PersonaAvales., must be smaller than or equal to 75.');
        }
        if (!is_null($segundo_nombre) && (mb_strlen($segundo_nombre) < 2)) {
            throw new \InvalidArgumentException('invalid length for $segundo_nombre when calling PersonaAvales., must be bigger than or equal to 2.');
        }
        $this->container['segundo_nombre'] = $segundo_nombre;
        return $this;
    }
    
    public function getApellidoPaterno()
    {
        return $this->container['apellido_paterno'];
    }
    
    public function setApellidoPaterno($apellido_paterno)
    {
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) > 25)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling PersonaAvales., must be smaller than or equal to 25.');
        }
        if (!is_null($apellido_paterno) && (mb_strlen($apellido_paterno) < 2)) {
            throw new \InvalidArgumentException('invalid length for $apellido_paterno when calling PersonaAvales., must be bigger than or equal to 2.');
        }
        $this->container['apellido_paterno'] = $apellido_paterno;
        return $this;
    }
    
    public function getApellidoMaterno()
    {
        return $this->container['apellido_materno'];
    }
    
    public function setApellidoMaterno($apellido_materno)
    {
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) > 25)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling PersonaAvales., must be smaller than or equal to 25.');
        }
        if (!is_null($apellido_materno) && (mb_strlen($apellido_materno) < 2)) {
            throw new \InvalidArgumentException('invalid length for $apellido_materno when calling PersonaAvales., must be bigger than or equal to 2.');
        }
        $this->container['apellido_materno'] = $apellido_materno;
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
    
    public function getCantidad()
    {
        return $this->container['cantidad'];
    }
    
    public function setCantidad($cantidad)
    {
        $this->container['cantidad'] = $cantidad;
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
