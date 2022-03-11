<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class PersonaAvalesDomicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'PersonaAvales_domicilio';
    
    protected static $RCCPMTypes = [
        'direccion' => 'string',
        'colonia_poblacion' => 'string',
        'delegacion_municipio' => 'string',
        'ciudad' => 'string',
        'estado' => 'string',
        'cp' => 'string',
        'pais' => 'string',
        'telefono' => 'string',
        'extension' => 'string',
        'fax' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'direccion' => null,
        'colonia_poblacion' => null,
        'delegacion_municipio' => null,
        'ciudad' => null,
        'estado' => null,
        'cp' => null,
        'pais' => null,
        'telefono' => null,
        'extension' => null,
        'fax' => null
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
        'direccion' => 'direccion',
        'colonia_poblacion' => 'coloniaPoblacion',
        'delegacion_municipio' => 'delegacionMunicipio',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'cp' => 'CP',
        'pais' => 'pais',
        'telefono' => 'telefono',
        'extension' => 'extension',
        'fax' => 'fax'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'cp' => 'setCp',
        'pais' => 'setPais',
        'telefono' => 'setTelefono',
        'extension' => 'setExtension',
        'fax' => 'setFax'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'cp' => 'getCp',
        'pais' => 'getPais',
        'telefono' => 'getTelefono',
        'extension' => 'getExtension',
        'fax' => 'getFax'
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
        $this->container['direccion'] = isset($data['direccion']) ? $data['direccion'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['pais'] = isset($data['pais']) ? $data['pais'] : null;
        $this->container['telefono'] = isset($data['telefono']) ? $data['telefono'] : null;
        $this->container['extension'] = isset($data['extension']) ? $data['extension'] : null;
        $this->container['fax'] = isset($data['fax']) ? $data['fax'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) > 40)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['direccion']) && (mb_strlen($this->container['direccion']) < 2)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) > 60)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be smaller than or equal to 60.";
        }
        if (!is_null($this->container['colonia_poblacion']) && (mb_strlen($this->container['colonia_poblacion']) < 2)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) > 40)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['delegacion_municipio']) && (mb_strlen($this->container['delegacion_municipio']) < 2)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) > 40)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['ciudad']) && (mb_strlen($this->container['ciudad']) < 2)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) > 10)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 10.";
        }
        if (!is_null($this->container['cp']) && (mb_strlen($this->container['cp']) < 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 5.";
        }
        if (!is_null($this->container['telefono']) && (mb_strlen($this->container['telefono']) > 11)) {
            $invalidProperties[] = "invalid value for 'telefono', the character length must be smaller than or equal to 11.";
        }
        if (!is_null($this->container['telefono']) && (mb_strlen($this->container['telefono']) < 2)) {
            $invalidProperties[] = "invalid value for 'telefono', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['extension']) && (mb_strlen($this->container['extension']) > 8)) {
            $invalidProperties[] = "invalid value for 'extension', the character length must be smaller than or equal to 8.";
        }
        if (!is_null($this->container['extension']) && (mb_strlen($this->container['extension']) < 2)) {
            $invalidProperties[] = "invalid value for 'extension', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) > 11)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be smaller than or equal to 11.";
        }
        if (!is_null($this->container['fax']) && (mb_strlen($this->container['fax']) < 2)) {
            $invalidProperties[] = "invalid value for 'fax', the character length must be bigger than or equal to 2.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getDireccion()
    {
        return $this->container['direccion'];
    }
    
    public function setDireccion($direccion)
    {
        if (!is_null($direccion) && (mb_strlen($direccion) > 40)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling PersonaAvalesDomicilio., must be smaller than or equal to 40.');
        }
        if (!is_null($direccion) && (mb_strlen($direccion) < 2)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getColoniaPoblacion()
    {
        return $this->container['colonia_poblacion'];
    }
    
    public function setColoniaPoblacion($colonia_poblacion)
    {
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) > 60)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling PersonaAvalesDomicilio., must be smaller than or equal to 60.');
        }
        if (!is_null($colonia_poblacion) && (mb_strlen($colonia_poblacion) < 2)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['colonia_poblacion'] = $colonia_poblacion;
        return $this;
    }
    
    public function getDelegacionMunicipio()
    {
        return $this->container['delegacion_municipio'];
    }
    
    public function setDelegacionMunicipio($delegacion_municipio)
    {
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) > 40)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling PersonaAvalesDomicilio., must be smaller than or equal to 40.');
        }
        if (!is_null($delegacion_municipio) && (mb_strlen($delegacion_municipio) < 2)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['delegacion_municipio'] = $delegacion_municipio;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if (!is_null($ciudad) && (mb_strlen($ciudad) > 40)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling PersonaAvalesDomicilio., must be smaller than or equal to 40.');
        }
        if (!is_null($ciudad) && (mb_strlen($ciudad) < 2)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['ciudad'] = $ciudad;
        return $this;
    }
    
    public function getEstado()
    {
        return $this->container['estado'];
    }
    
    public function setEstado($estado)
    {
        $this->container['estado'] = $estado;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        if (!is_null($cp) && (mb_strlen($cp) > 10)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling PersonaAvalesDomicilio., must be smaller than or equal to 10.');
        }
        if (!is_null($cp) && (mb_strlen($cp) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling PersonaAvalesDomicilio., must be bigger than or equal to 5.');
        }
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getPais()
    {
        return $this->container['pais'];
    }
    
    public function setPais($pais)
    {
        $this->container['pais'] = $pais;
        return $this;
    }
    
    public function getTelefono()
    {
        return $this->container['telefono'];
    }
    
    public function setTelefono($telefono)
    {
        if (!is_null($telefono) && (mb_strlen($telefono) > 11)) {
            throw new \InvalidArgumentException('invalid length for $telefono when calling PersonaAvalesDomicilio., must be smaller than or equal to 11.');
        }
        if (!is_null($telefono) && (mb_strlen($telefono) < 2)) {
            throw new \InvalidArgumentException('invalid length for $telefono when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['telefono'] = $telefono;
        return $this;
    }
    
    public function getExtension()
    {
        return $this->container['extension'];
    }
    
    public function setExtension($extension)
    {
        if (!is_null($extension) && (mb_strlen($extension) > 8)) {
            throw new \InvalidArgumentException('invalid length for $extension when calling PersonaAvalesDomicilio., must be smaller than or equal to 8.');
        }
        if (!is_null($extension) && (mb_strlen($extension) < 2)) {
            throw new \InvalidArgumentException('invalid length for $extension when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['extension'] = $extension;
        return $this;
    }
    
    public function getFax()
    {
        return $this->container['fax'];
    }
    
    public function setFax($fax)
    {
        if (!is_null($fax) && (mb_strlen($fax) > 11)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling PersonaAvalesDomicilio., must be smaller than or equal to 11.');
        }
        if (!is_null($fax) && (mb_strlen($fax) < 2)) {
            throw new \InvalidArgumentException('invalid length for $fax when calling PersonaAvalesDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['fax'] = $fax;
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
