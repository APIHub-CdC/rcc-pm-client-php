<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class CuentasComercialesRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'CuentasComercialesRespuesta';
    
    protected static $RCCPMTypes = [
        'rfc' => 'string',
        'nombre_otorgante' => 'string',
        'moneda' => 'string',
        'vigente' => 'float',
        'saldo_total' => 'float',
        '_29dias' => 'float',
        '_59dias' => 'float',
        '_89dias' => 'float',
        '_119dias' => 'float',
        '_179dias' => 'float',
        '_180_mas_dias' => 'float',
        'actualizacion' => 'string',
        'historia' => 'string',
        'atraso_mayor' => 'int'
    ];
    
    protected static $RCCPMFormats = [
        'rfc' => null,
        'nombre_otorgante' => null,
        'moneda' => null,
        'vigente' => 'float',
        'saldo_total' => 'float',
        '_29dias' => null,
        '_59dias' => null,
        '_89dias' => null,
        '_119dias' => null,
        '_179dias' => null,
        '_180_mas_dias' => null,
        'actualizacion' => 'yyyy-MM',
        'historia' => null,
        'atraso_mayor' => 'int32'
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
        'nombre_otorgante' => 'nombreOtorgante',
        'moneda' => 'moneda',
        'vigente' => 'vigente',
        'saldo_total' => 'saldoTotal',
        '_29dias' => '29dias',
        '_59dias' => '59dias',
        '_89dias' => '89dias',
        '_119dias' => '119dias',
        '_179dias' => '179dias',
        '_180_mas_dias' => '180MasDias',
        'actualizacion' => 'actualizacion',
        'historia' => 'historia',
        'atraso_mayor' => 'atrasoMayor'
    ];
    
    protected static $setters = [
        'rfc' => 'setRfc',
        'nombre_otorgante' => 'setNombreOtorgante',
        'moneda' => 'setMoneda',
        'vigente' => 'setVigente',
        'saldo_total' => 'setSaldoTotal',
        '_29dias' => 'set29dias',
        '_59dias' => 'set59dias',
        '_89dias' => 'set89dias',
        '_119dias' => 'set119dias',
        '_179dias' => 'set179dias',
        '_180_mas_dias' => 'set180MasDias',
        'actualizacion' => 'setActualizacion',
        'historia' => 'setHistoria',
        'atraso_mayor' => 'setAtrasoMayor'
    ];
    
    protected static $getters = [
        'rfc' => 'getRfc',
        'nombre_otorgante' => 'getNombreOtorgante',
        'moneda' => 'getMoneda',
        'vigente' => 'getVigente',
        'saldo_total' => 'getSaldoTotal',
        '_29dias' => 'get29dias',
        '_59dias' => 'get59dias',
        '_89dias' => 'get89dias',
        '_119dias' => 'get119dias',
        '_179dias' => 'get179dias',
        '_180_mas_dias' => 'get180MasDias',
        'actualizacion' => 'getActualizacion',
        'historia' => 'getHistoria',
        'atraso_mayor' => 'getAtrasoMayor'
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
    
    public function getRfc()
    {
        return $this->container['rfc'];
    }
    
    public function setRfc($rfc)
    {
        $this->container['rfc'] = $rfc;
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
    
    public function getMoneda()
    {
        return $this->container['moneda'];
    }
    
    public function setMoneda($moneda)
    {
        $this->container['moneda'] = $moneda;
        return $this;
    }
    
    public function getVigente()
    {
        return $this->container['vigente'];
    }
    
    public function setVigente($vigente)
    {
        $this->container['vigente'] = $vigente;
        return $this;
    }
    
    public function getSaldoTotal()
    {
        return $this->container['saldo_total'];
    }
    
    public function setSaldoTotal($saldo_total)
    {
        $this->container['saldo_total'] = $saldo_total;
        return $this;
    }
    
    public function get29dias()
    {
        return $this->container['_29dias'];
    }
    
    public function set29dias($_29dias)
    {
        $this->container['_29dias'] = $_29dias;
        return $this;
    }
    
    public function get59dias()
    {
        return $this->container['_59dias'];
    }
    
    public function set59dias($_59dias)
    {
        $this->container['_59dias'] = $_59dias;
        return $this;
    }
    
    public function get89dias()
    {
        return $this->container['_89dias'];
    }
    
    public function set89dias($_89dias)
    {
        $this->container['_89dias'] = $_89dias;
        return $this;
    }
    
    public function get119dias()
    {
        return $this->container['_119dias'];
    }
    
    public function set119dias($_119dias)
    {
        $this->container['_119dias'] = $_119dias;
        return $this;
    }
    
    public function get179dias()
    {
        return $this->container['_179dias'];
    }
    
    public function set179dias($_179dias)
    {
        $this->container['_179dias'] = $_179dias;
        return $this;
    }
    
    public function get180MasDias()
    {
        return $this->container['_180_mas_dias'];
    }
    
    public function set180MasDias($_180_mas_dias)
    {
        $this->container['_180_mas_dias'] = $_180_mas_dias;
        return $this;
    }
    
    public function getActualizacion()
    {
        return $this->container['actualizacion'];
    }
    
    public function setActualizacion($actualizacion)
    {
        $this->container['actualizacion'] = $actualizacion;
        return $this;
    }
    
    public function getHistoria()
    {
        return $this->container['historia'];
    }
    
    public function setHistoria($historia)
    {
        $this->container['historia'] = $historia;
        return $this;
    }
    
    public function getAtrasoMayor()
    {
        return $this->container['atraso_mayor'];
    }
    
    public function setAtrasoMayor($atraso_mayor)
    {
        $this->container['atraso_mayor'] = $atraso_mayor;
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
