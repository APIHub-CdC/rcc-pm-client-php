<?php

namespace RCCPM\MX\Client\Model;

use \ArrayAccess;
use \RCCPM\MX\Client\ObjectSerializer;

class CuentasFinancierasRespuesta implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;
    
    protected static $RCCPMModelName = 'CuentasFinancierasRespuesta';
    
    protected static $RCCPMTypes = [
        'rfc' => 'string',
        'nombre_otorgante' => 'string',
        'contrato' => 'string',
        'saldo_inicial' => 'float',
        'saldo_total' => 'float',
        'moneda' => 'string',
        'fecha_apertura' => 'string',
        'plazo' => 'int',
        'claves_observacion' => 'string',
        'tipo_credito' => 'string',
        'vigente' => 'float',
        '_29dias' => 'float',
        '_59dias' => 'float',
        '_89dias' => 'float',
        '_119dias' => 'float',
        '_179dias' => 'float',
        '_180_mas_dias' => 'float',
        'actualizacion' => 'string',
        'fecha_cierre' => 'string',
        'pago_efectivo' => 'float',
        'quita' => 'float',
        'dacion_pago' => 'float',
        'quebranto_castigo' => 'float',
        'historia' => 'string',
        'atraso_mayor' => 'int',
        'registro_impugnado' => 'string'
    ];
    
    protected static $RCCPMFormats = [
        'rfc' => null,
        'nombre_otorgante' => null,
        'contrato' => null,
        'saldo_inicial' => 'float',
        'saldo_total' => 'float',
        'moneda' => null,
        'fecha_apertura' => 'yyyy-MM-dd',
        'plazo' => 'int32',
        'claves_observacion' => null,
        'tipo_credito' => null,
        'vigente' => 'float',
        '_29dias' => null,
        '_59dias' => null,
        '_89dias' => null,
        '_119dias' => null,
        '_179dias' => null,
        '_180_mas_dias' => null,
        'actualizacion' => 'yyyy-MM',
        'fecha_cierre' => 'yyyy-MM-dd',
        'pago_efectivo' => 'float',
        'quita' => 'float',
        'dacion_pago' => 'float',
        'quebranto_castigo' => 'float',
        'historia' => null,
        'atraso_mayor' => 'int32',
        'registro_impugnado' => null
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
        'contrato' => 'contrato',
        'saldo_inicial' => 'saldoInicial',
        'saldo_total' => 'saldoTotal',
        'moneda' => 'moneda',
        'fecha_apertura' => 'fechaApertura',
        'plazo' => 'plazo',
        'claves_observacion' => 'clavesObservacion',
        'tipo_credito' => 'tipoCredito',
        'vigente' => 'vigente',
        '_29dias' => '29dias',
        '_59dias' => '59dias',
        '_89dias' => '89dias',
        '_119dias' => '119dias',
        '_179dias' => '179dias',
        '_180_mas_dias' => '180MasDias',
        'actualizacion' => 'actualizacion',
        'fecha_cierre' => 'fechaCierre',
        'pago_efectivo' => 'pagoEfectivo',
        'quita' => 'quita',
        'dacion_pago' => 'dacionPago',
        'quebranto_castigo' => 'quebrantoCastigo',
        'historia' => 'historia',
        'atraso_mayor' => 'atrasoMayor',
        'registro_impugnado' => 'registroImpugnado'
    ];
    
    protected static $setters = [
        'rfc' => 'setRfc',
        'nombre_otorgante' => 'setNombreOtorgante',
        'contrato' => 'setContrato',
        'saldo_inicial' => 'setSaldoInicial',
        'saldo_total' => 'setSaldoTotal',
        'moneda' => 'setMoneda',
        'fecha_apertura' => 'setFechaApertura',
        'plazo' => 'setPlazo',
        'claves_observacion' => 'setClavesObservacion',
        'tipo_credito' => 'setTipoCredito',
        'vigente' => 'setVigente',
        '_29dias' => 'set29dias',
        '_59dias' => 'set59dias',
        '_89dias' => 'set89dias',
        '_119dias' => 'set119dias',
        '_179dias' => 'set179dias',
        '_180_mas_dias' => 'set180MasDias',
        'actualizacion' => 'setActualizacion',
        'fecha_cierre' => 'setFechaCierre',
        'pago_efectivo' => 'setPagoEfectivo',
        'quita' => 'setQuita',
        'dacion_pago' => 'setDacionPago',
        'quebranto_castigo' => 'setQuebrantoCastigo',
        'historia' => 'setHistoria',
        'atraso_mayor' => 'setAtrasoMayor',
        'registro_impugnado' => 'setRegistroImpugnado'
    ];
    
    protected static $getters = [
        'rfc' => 'getRfc',
        'nombre_otorgante' => 'getNombreOtorgante',
        'contrato' => 'getContrato',
        'saldo_inicial' => 'getSaldoInicial',
        'saldo_total' => 'getSaldoTotal',
        'moneda' => 'getMoneda',
        'fecha_apertura' => 'getFechaApertura',
        'plazo' => 'getPlazo',
        'claves_observacion' => 'getClavesObservacion',
        'tipo_credito' => 'getTipoCredito',
        'vigente' => 'getVigente',
        '_29dias' => 'get29dias',
        '_59dias' => 'get59dias',
        '_89dias' => 'get89dias',
        '_119dias' => 'get119dias',
        '_179dias' => 'get179dias',
        '_180_mas_dias' => 'get180MasDias',
        'actualizacion' => 'getActualizacion',
        'fecha_cierre' => 'getFechaCierre',
        'pago_efectivo' => 'getPagoEfectivo',
        'quita' => 'getQuita',
        'dacion_pago' => 'getDacionPago',
        'quebranto_castigo' => 'getQuebrantoCastigo',
        'historia' => 'getHistoria',
        'atraso_mayor' => 'getAtrasoMayor',
        'registro_impugnado' => 'getRegistroImpugnado'
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
    
    public function getContrato()
    {
        return $this->container['contrato'];
    }
    
    public function setContrato($contrato)
    {
        $this->container['contrato'] = $contrato;
        return $this;
    }
    
    public function getSaldoInicial()
    {
        return $this->container['saldo_inicial'];
    }
    
    public function setSaldoInicial($saldo_inicial)
    {
        $this->container['saldo_inicial'] = $saldo_inicial;
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
    
    public function getMoneda()
    {
        return $this->container['moneda'];
    }
    
    public function setMoneda($moneda)
    {
        $this->container['moneda'] = $moneda;
        return $this;
    }
    
    public function getFechaApertura()
    {
        return $this->container['fecha_apertura'];
    }
    
    public function setFechaApertura($fecha_apertura)
    {
        $this->container['fecha_apertura'] = $fecha_apertura;
        return $this;
    }
    
    public function getPlazo()
    {
        return $this->container['plazo'];
    }
    
    public function setPlazo($plazo)
    {
        $this->container['plazo'] = $plazo;
        return $this;
    }
    
    public function getClavesObservacion()
    {
        return $this->container['claves_observacion'];
    }
    
    public function setClavesObservacion($claves_observacion)
    {
        $this->container['claves_observacion'] = $claves_observacion;
        return $this;
    }
    
    public function getTipoCredito()
    {
        return $this->container['tipo_credito'];
    }
    
    public function setTipoCredito($tipo_credito)
    {
        $this->container['tipo_credito'] = $tipo_credito;
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
    
    public function getFechaCierre()
    {
        return $this->container['fecha_cierre'];
    }
    
    public function setFechaCierre($fecha_cierre)
    {
        $this->container['fecha_cierre'] = $fecha_cierre;
        return $this;
    }
    
    public function getPagoEfectivo()
    {
        return $this->container['pago_efectivo'];
    }
    
    public function setPagoEfectivo($pago_efectivo)
    {
        $this->container['pago_efectivo'] = $pago_efectivo;
        return $this;
    }
    
    public function getQuita()
    {
        return $this->container['quita'];
    }
    
    public function setQuita($quita)
    {
        $this->container['quita'] = $quita;
        return $this;
    }
    
    public function getDacionPago()
    {
        return $this->container['dacion_pago'];
    }
    
    public function setDacionPago($dacion_pago)
    {
        $this->container['dacion_pago'] = $dacion_pago;
        return $this;
    }
    
    public function getQuebrantoCastigo()
    {
        return $this->container['quebranto_castigo'];
    }
    
    public function setQuebrantoCastigo($quebranto_castigo)
    {
        $this->container['quebranto_castigo'] = $quebranto_castigo;
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
    
    public function getRegistroImpugnado()
    {
        return $this->container['registro_impugnado'];
    }
    
    public function setRegistroImpugnado($registro_impugnado)
    {
        $this->container['registro_impugnado'] = $registro_impugnado;
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
