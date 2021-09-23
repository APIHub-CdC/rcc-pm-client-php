<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class PersonaDomicilio implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'Persona_domicilio';
    
    protected static $RCCPMTypes = [
        'direccion' => 'string',
        'cp' => 'string',
        'delegacion_municipio' => 'string',
        'colonia_poblacion' => 'string',
        'ciudad' => 'string',
        'estado' => '\RCCPM\MX\Client\Model\CatalogoEstados',
        'estado_extranjero' => 'string',
        'pais' => '\RCCPM\MX\Client\Model\CatalogoPais'
    ];
    
    protected static $RCCPMFormats = [
        'direccion' => null,
        'cp' => null,
        'delegacion_municipio' => null,
        'colonia_poblacion' => null,
        'ciudad' => null,
        'estado' => null,
        'estado_extranjero' => null,
        'pais' => null
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
        'cp' => 'CP',
        'delegacion_municipio' => 'delegacionMunicipio',
        'colonia_poblacion' => 'coloniaPoblacion',
        'ciudad' => 'ciudad',
        'estado' => 'estado',
        'estado_extranjero' => 'estadoExtranjero',
        'pais' => 'pais'
    ];
    
    protected static $setters = [
        'direccion' => 'setDireccion',
        'cp' => 'setCp',
        'delegacion_municipio' => 'setDelegacionMunicipio',
        'colonia_poblacion' => 'setColoniaPoblacion',
        'ciudad' => 'setCiudad',
        'estado' => 'setEstado',
        'estado_extranjero' => 'setEstadoExtranjero',
        'pais' => 'setPais'
    ];
    
    protected static $getters = [
        'direccion' => 'getDireccion',
        'cp' => 'getCp',
        'delegacion_municipio' => 'getDelegacionMunicipio',
        'colonia_poblacion' => 'getColoniaPoblacion',
        'ciudad' => 'getCiudad',
        'estado' => 'getEstado',
        'estado_extranjero' => 'getEstadoExtranjero',
        'pais' => 'getPais'
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
        $this->container['cp'] = isset($data['cp']) ? $data['cp'] : null;
        $this->container['delegacion_municipio'] = isset($data['delegacion_municipio']) ? $data['delegacion_municipio'] : null;
        $this->container['colonia_poblacion'] = isset($data['colonia_poblacion']) ? $data['colonia_poblacion'] : null;
        $this->container['ciudad'] = isset($data['ciudad']) ? $data['ciudad'] : null;
        $this->container['estado'] = isset($data['estado']) ? $data['estado'] : null;
        $this->container['estado_extranjero'] = isset($data['estado_extranjero']) ? $data['estado_extranjero'] : null;
        $this->container['pais'] = isset($data['pais']) ? $data['pais'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['direccion'] === null) {
            $invalidProperties[] = "'direccion' can't be null";
        }
        if ((mb_strlen($this->container['direccion']) > 40)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be smaller than or equal to 40.";
        }
        if ((mb_strlen($this->container['direccion']) < 2)) {
            $invalidProperties[] = "invalid value for 'direccion', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['cp'] === null) {
            $invalidProperties[] = "'cp' can't be null";
        }
        if ((mb_strlen($this->container['cp']) > 10)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be smaller than or equal to 10.";
        }
        if ((mb_strlen($this->container['cp']) < 5)) {
            $invalidProperties[] = "invalid value for 'cp', the character length must be bigger than or equal to 5.";
        }
        if ($this->container['delegacion_municipio'] === null) {
            $invalidProperties[] = "'delegacion_municipio' can't be null";
        }
        if ((mb_strlen($this->container['delegacion_municipio']) > 60)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be smaller than or equal to 60.";
        }
        if ((mb_strlen($this->container['delegacion_municipio']) < 2)) {
            $invalidProperties[] = "invalid value for 'delegacion_municipio', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['colonia_poblacion'] === null) {
            $invalidProperties[] = "'colonia_poblacion' can't be null";
        }
        if ((mb_strlen($this->container['colonia_poblacion']) > 60)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be smaller than or equal to 60.";
        }
        if ((mb_strlen($this->container['colonia_poblacion']) < 2)) {
            $invalidProperties[] = "invalid value for 'colonia_poblacion', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['ciudad'] === null) {
            $invalidProperties[] = "'ciudad' can't be null";
        }
        if ((mb_strlen($this->container['ciudad']) > 40)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be smaller than or equal to 40.";
        }
        if ((mb_strlen($this->container['ciudad']) < 2)) {
            $invalidProperties[] = "invalid value for 'ciudad', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['estado'] === null) {
            $invalidProperties[] = "'estado' can't be null";
        }
        if (!is_null($this->container['estado_extranjero']) && (mb_strlen($this->container['estado_extranjero']) > 40)) {
            $invalidProperties[] = "invalid value for 'estado_extranjero', the character length must be smaller than or equal to 40.";
        }
        if (!is_null($this->container['estado_extranjero']) && (mb_strlen($this->container['estado_extranjero']) < 2)) {
            $invalidProperties[] = "invalid value for 'estado_extranjero', the character length must be bigger than or equal to 2.";
        }
        if ($this->container['pais'] === null) {
            $invalidProperties[] = "'pais' can't be null";
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
        if ((mb_strlen($direccion) > 85)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling PersonaDomicilio., must be smaller than or equal to 85.');
        }
        if ((mb_strlen($direccion) < 2)) {
            throw new \InvalidArgumentException('invalid length for $direccion when calling PersonaDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['direccion'] = $direccion;
        return $this;
    }
    
    public function getCp()
    {
        return $this->container['cp'];
    }
    
    public function setCp($cp)
    {
        if ((mb_strlen($cp) > 10)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling PersonaDomicilio., must be smaller than or equal to 10.');
        }
        if ((mb_strlen($cp) < 5)) {
            throw new \InvalidArgumentException('invalid length for $cp when calling PersonaDomicilio., must be bigger than or equal to 5.');
        }
        $this->container['cp'] = $cp;
        return $this;
    }
    
    public function getDelegacionMunicipio()
    {
        return $this->container['delegacion_municipio'];
    }
    
    public function setDelegacionMunicipio($delegacion_municipio)
    {
        if ((mb_strlen($delegacion_municipio) > 60)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling PersonaDomicilio., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($delegacion_municipio) < 2)) {
            throw new \InvalidArgumentException('invalid length for $delegacion_municipio when calling PersonaDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['delegacion_municipio'] = $delegacion_municipio;
        return $this;
    }
    
    public function getColoniaPoblacion()
    {
        return $this->container['colonia_poblacion'];
    }
    
    public function setColoniaPoblacion($colonia_poblacion)
    {
        if ((mb_strlen($colonia_poblacion) > 60)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling PersonaDomicilio., must be smaller than or equal to 60.');
        }
        if ((mb_strlen($colonia_poblacion) < 2)) {
            throw new \InvalidArgumentException('invalid length for $colonia_poblacion when calling PersonaDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['colonia_poblacion'] = $colonia_poblacion;
        return $this;
    }
    
    public function getCiudad()
    {
        return $this->container['ciudad'];
    }
    
    public function setCiudad($ciudad)
    {
        if ((mb_strlen($ciudad) > 40)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling PersonaDomicilio., must be smaller than or equal to 40.');
        }
        if ((mb_strlen($ciudad) < 2)) {
            throw new \InvalidArgumentException('invalid length for $ciudad when calling PersonaDomicilio., must be bigger than or equal to 2.');
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
    
    public function getEstadoExtranjero()
    {
        return $this->container['estado_extranjero'];
    }
    
    public function setEstadoExtranjero($estado_extranjero)
    {
        if (!is_null($estado_extranjero) && (mb_strlen($estado_extranjero) > 40)) {
            throw new \InvalidArgumentException('invalid length for $estado_extranjero when calling PersonaDomicilio., must be smaller than or equal to 40.');
        }
        if (!is_null($estado_extranjero) && (mb_strlen($estado_extranjero) < 2)) {
            throw new \InvalidArgumentException('invalid length for $estado_extranjero when calling PersonaDomicilio., must be bigger than or equal to 2.');
        }
        $this->container['estado_extranjero'] = $estado_extranjero;
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
