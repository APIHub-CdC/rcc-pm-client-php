<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class ClavePrevencionesRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'ClavePrevencionesRespuesta';
    
    protected static $RCCPMTypes = [
        'nombre_otorgante' => 'string',
        'fecha_reporte' => 'string',
        'numero_contrato' => 'string',
        'clave_prevencion' => '\RCCPM\MX\Client\Model\CatalogoClavesPrevencion'
    ];
    
    protected static $RCCPMFormats = [
        'nombre_otorgante' => null,
        'fecha_reporte' => 'yyyy-MM-dd',
        'numero_contrato' => null,
        'clave_prevencion' => null
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
        'nombre_otorgante' => 'nombreOtorgante',
        'fecha_reporte' => 'fechaReporte',
        'numero_contrato' => 'numeroContrato',
        'clave_prevencion' => 'clavePrevencion'
    ];
    
    protected static $setters = [
        'nombre_otorgante' => 'setNombreOtorgante',
        'fecha_reporte' => 'setFechaReporte',
        'numero_contrato' => 'setNumeroContrato',
        'clave_prevencion' => 'setClavePrevencion'
    ];
    
    protected static $getters = [
        'nombre_otorgante' => 'getNombreOtorgante',
        'fecha_reporte' => 'getFechaReporte',
        'numero_contrato' => 'getNumeroContrato',
        'clave_prevencion' => 'getClavePrevencion'
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
        $this->container['nombre_otorgante'] = isset($data['nombre_otorgante']) ? $data['nombre_otorgante'] : null;
        $this->container['fecha_reporte'] = isset($data['fecha_reporte']) ? $data['fecha_reporte'] : null;
        $this->container['numero_contrato'] = isset($data['numero_contrato']) ? $data['numero_contrato'] : null;
        $this->container['clave_prevencion'] = isset($data['clave_prevencion']) ? $data['clave_prevencion'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) > 99)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be smaller than or equal to 99.";
        }
        if (!is_null($this->container['nombre_otorgante']) && (mb_strlen($this->container['nombre_otorgante']) < 2)) {
            $invalidProperties[] = "invalid value for 'nombre_otorgante', the character length must be bigger than or equal to 2.";
        }
        if (!is_null($this->container['fecha_reporte']) && (mb_strlen($this->container['fecha_reporte']) > 10)) {
            $invalidProperties[] = "invalid value for 'fecha_reporte', the character length must be smaller than or equal to 10.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getNombreOtorgante()
    {
        return $this->container['nombre_otorgante'];
    }
    
    public function setNombreOtorgante($nombre_otorgante)
    {
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) > 99)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling ClavePrevencionesRespuesta., must be smaller than or equal to 99.');
        }
        if (!is_null($nombre_otorgante) && (mb_strlen($nombre_otorgante) < 2)) {
            throw new \InvalidArgumentException('invalid length for $nombre_otorgante when calling ClavePrevencionesRespuesta., must be bigger than or equal to 2.');
        }
        $this->container['nombre_otorgante'] = $nombre_otorgante;
        return $this;
    }
    
    public function getFechaReporte()
    {
        return $this->container['fecha_reporte'];
    }
    
    public function setFechaReporte($fecha_reporte)
    {
        if (!is_null($fecha_reporte) && (mb_strlen($fecha_reporte) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_reporte when calling ClavePrevencionesRespuesta., must be smaller than or equal to 10.');
        }
        $this->container['fecha_reporte'] = $fecha_reporte;
        return $this;
    }
    
    public function getNumeroContrato()
    {
        return $this->container['numero_contrato'];
    }
    
    public function setNumeroContrato($numero_contrato)
    {
        $this->container['numero_contrato'] = $numero_contrato;
        return $this;
    }
    
    public function getClavePrevencion()
    {
        return $this->container['clave_prevencion'];
    }
    
    public function setClavePrevencion($clave_prevencion)
    {
        $this->container['clave_prevencion'] = $clave_prevencion;
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
