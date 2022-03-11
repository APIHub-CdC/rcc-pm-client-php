<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class ReporteRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'ReporteRespuesta';
    
    protected static $RCCPMTypes = [
        'folio_consulta' => 'string',
        'folio_otorgante' => 'string',
        'clave_retorno' => 'string',
        'fecha_consulta' => 'string',
        'persona' => '\RCCPM\MX\Client\Model\PersonaRespuesta',
        'claves_banxico' => '\RCCPM\MX\Client\Model\ClavesBanxico',
        'calificacion_cartera' => '\RCCPM\MX\Client\Model\CalificacionCarteraRespuesta[]',
        'clave_prevenciones' => '\RCCPM\MX\Client\Model\ClavePrevencionesRespuesta[]',
        'consultas_institucionales' => '\RCCPM\MX\Client\Model\ReporteRespuestaConsultasInstitucionales',
        'declarativas' => '\RCCPM\MX\Client\Model\DeclarativasRespuesta[]',
        'accionistas' => '\RCCPM\MX\Client\Model\PersonaAccionistas[]',
        'avales' => '\RCCPM\MX\Client\Model\PersonaAvales[]',
        'credito' => '\RCCPM\MX\Client\Model\ReporteRespuestaCredito'
    ];
    
    protected static $RCCPMFormats = [
        'folio_consulta' => null,
        'folio_otorgante' => null,
        'clave_retorno' => null,
        'fecha_consulta' => 'yyyy-MM-dd',
        'persona' => null,
        'claves_banxico' => null,
        'calificacion_cartera' => null,
        'clave_prevenciones' => null,
        'consultas_institucionales' => null,
        'declarativas' => null,
        'accionistas' => null,
        'avales' => null,
        'credito' => null
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
        'folio_consulta' => 'folioConsulta',
        'folio_otorgante' => 'folioOtorgante',
        'clave_retorno' => 'claveRetorno',
        'fecha_consulta' => 'fechaConsulta',
        'persona' => 'persona',
        'claves_banxico' => 'clavesBanxico',
        'calificacion_cartera' => 'calificacionCartera',
        'clave_prevenciones' => 'clavePrevenciones',
        'consultas_institucionales' => 'consultasInstitucionales',
        'declarativas' => 'declarativas',
        'accionistas' => 'accionistas',
        'avales' => 'avales',
        'credito' => 'credito'
    ];
    
    protected static $setters = [
        'folio_consulta' => 'setFolioConsulta',
        'folio_otorgante' => 'setFolioOtorgante',
        'clave_retorno' => 'setClaveRetorno',
        'fecha_consulta' => 'setFechaConsulta',
        'persona' => 'setPersona',
        'claves_banxico' => 'setClavesBanxico',
        'calificacion_cartera' => 'setCalificacionCartera',
        'clave_prevenciones' => 'setClavePrevenciones',
        'consultas_institucionales' => 'setConsultasInstitucionales',
        'declarativas' => 'setDeclarativas',
        'accionistas' => 'setAccionistas',
        'avales' => 'setAvales',
        'credito' => 'setCredito'
    ];
    
    protected static $getters = [
        'folio_consulta' => 'getFolioConsulta',
        'folio_otorgante' => 'getFolioOtorgante',
        'clave_retorno' => 'getClaveRetorno',
        'fecha_consulta' => 'getFechaConsulta',
        'persona' => 'getPersona',
        'claves_banxico' => 'getClavesBanxico',
        'calificacion_cartera' => 'getCalificacionCartera',
        'clave_prevenciones' => 'getClavePrevenciones',
        'consultas_institucionales' => 'getConsultasInstitucionales',
        'declarativas' => 'getDeclarativas',
        'accionistas' => 'getAccionistas',
        'avales' => 'getAvales',
        'credito' => 'getCredito'
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
        $this->container['folio_consulta'] = isset($data['folio_consulta']) ? $data['folio_consulta'] : null;
        $this->container['folio_otorgante'] = isset($data['folio_otorgante']) ? $data['folio_otorgante'] : null;
        $this->container['clave_retorno'] = isset($data['clave_retorno']) ? $data['clave_retorno'] : null;
        $this->container['fecha_consulta'] = isset($data['fecha_consulta']) ? $data['fecha_consulta'] : null;
        $this->container['persona'] = isset($data['persona']) ? $data['persona'] : null;
        $this->container['claves_banxico'] = isset($data['claves_banxico']) ? $data['claves_banxico'] : null;
        $this->container['calificacion_cartera'] = isset($data['calificacion_cartera']) ? $data['calificacion_cartera'] : null;
        $this->container['clave_prevenciones'] = isset($data['clave_prevenciones']) ? $data['clave_prevenciones'] : null;
        $this->container['consultas_institucionales'] = isset($data['consultas_institucionales']) ? $data['consultas_institucionales'] : null;
        $this->container['declarativas'] = isset($data['declarativas']) ? $data['declarativas'] : null;
        $this->container['accionistas'] = isset($data['accionistas']) ? $data['accionistas'] : null;
        $this->container['avales'] = isset($data['avales']) ? $data['avales'] : null;
        $this->container['credito'] = isset($data['credito']) ? $data['credito'] : null;
    }
    
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if (!is_null($this->container['folio_consulta']) && (mb_strlen($this->container['folio_consulta']) > 15)) {
            $invalidProperties[] = "invalid value for 'folio_consulta', the character length must be smaller than or equal to 15.";
        }
        if (!is_null($this->container['folio_consulta']) && (mb_strlen($this->container['folio_consulta']) < 1)) {
            $invalidProperties[] = "invalid value for 'folio_consulta', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['folio_otorgante']) && (mb_strlen($this->container['folio_otorgante']) > 25)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be smaller than or equal to 25.";
        }
        if (!is_null($this->container['folio_otorgante']) && (mb_strlen($this->container['folio_otorgante']) < 1)) {
            $invalidProperties[] = "invalid value for 'folio_otorgante', the character length must be bigger than or equal to 1.";
        }
        if (!is_null($this->container['fecha_consulta']) && (mb_strlen($this->container['fecha_consulta']) > 10)) {
            $invalidProperties[] = "invalid value for 'fecha_consulta', the character length must be smaller than or equal to 10.";
        }
        return $invalidProperties;
    }
    
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }
    
    public function getFolioConsulta()
    {
        return $this->container['folio_consulta'];
    }
    
    public function setFolioConsulta($folio_consulta)
    {
        if (!is_null($folio_consulta) && (mb_strlen($folio_consulta) > 15)) {
            throw new \InvalidArgumentException('invalid length for $folio_consulta when calling ReporteRespuesta., must be smaller than or equal to 15.');
        }
        if (!is_null($folio_consulta) && (mb_strlen($folio_consulta) < 1)) {
            throw new \InvalidArgumentException('invalid length for $folio_consulta when calling ReporteRespuesta., must be bigger than or equal to 1.');
        }
        $this->container['folio_consulta'] = $folio_consulta;
        return $this;
    }
    
    public function getFolioOtorgante()
    {
        return $this->container['folio_otorgante'];
    }
    
    public function setFolioOtorgante($folio_otorgante)
    {
        if (!is_null($folio_otorgante) && (mb_strlen($folio_otorgante) > 25)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling ReporteRespuesta., must be smaller than or equal to 25.');
        }
        if (!is_null($folio_otorgante) && (mb_strlen($folio_otorgante) < 1)) {
            throw new \InvalidArgumentException('invalid length for $folio_otorgante when calling ReporteRespuesta., must be bigger than or equal to 1.');
        }
        $this->container['folio_otorgante'] = $folio_otorgante;
        return $this;
    }
    
    public function getClaveRetorno()
    {
        return $this->container['clave_retorno'];
    }
    
    public function setClaveRetorno($clave_retorno)
    {
        $this->container['clave_retorno'] = $clave_retorno;
        return $this;
    }
    
    public function getFechaConsulta()
    {
        return $this->container['fecha_consulta'];
    }
    
    public function setFechaConsulta($fecha_consulta)
    {
        if (!is_null($fecha_consulta) && (mb_strlen($fecha_consulta) > 10)) {
            throw new \InvalidArgumentException('invalid length for $fecha_consulta when calling ReporteRespuesta., must be smaller than or equal to 10.');
        }
        $this->container['fecha_consulta'] = $fecha_consulta;
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
    
    public function getClavesBanxico()
    {
        return $this->container['claves_banxico'];
    }
    
    public function setClavesBanxico($claves_banxico)
    {
        $this->container['claves_banxico'] = $claves_banxico;
        return $this;
    }
    
    public function getCalificacionCartera()
    {
        return $this->container['calificacion_cartera'];
    }
    
    public function setCalificacionCartera($calificacion_cartera)
    {
        $this->container['calificacion_cartera'] = $calificacion_cartera;
        return $this;
    }
    
    public function getClavePrevenciones()
    {
        return $this->container['clave_prevenciones'];
    }
    
    public function setClavePrevenciones($clave_prevenciones)
    {
        $this->container['clave_prevenciones'] = $clave_prevenciones;
        return $this;
    }
    
    public function getConsultasInstitucionales()
    {
        return $this->container['consultas_institucionales'];
    }
    
    public function setConsultasInstitucionales($consultas_institucionales)
    {
        $this->container['consultas_institucionales'] = $consultas_institucionales;
        return $this;
    }
    
    public function getDeclarativas()
    {
        return $this->container['declarativas'];
    }
    
    public function setDeclarativas($declarativas)
    {
        $this->container['declarativas'] = $declarativas;
        return $this;
    }
    
    public function getAccionistas()
    {
        return $this->container['accionistas'];
    }
    
    public function setAccionistas($accionistas)
    {
        $this->container['accionistas'] = $accionistas;
        return $this;
    }
    
    public function getAvales()
    {
        return $this->container['avales'];
    }
    
    public function setAvales($avales)
    {
        $this->container['avales'] = $avales;
        return $this;
    }
    
    public function getCredito()
    {
        return $this->container['credito'];
    }
    
    public function setCredito($credito)
    {
        $this->container['credito'] = $credito;
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
