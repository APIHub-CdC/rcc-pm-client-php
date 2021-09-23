<?php

namespace RCCPM\MX\Client\Model;
use \RCCPM\MX\Client\ObjectSerializer;

class CatalogoEstados
{
    
    const AGS = 'AGS';
    const MOR = 'MOR';
    const BCN = 'BCN';
    const NAY = 'NAY';
    const BCS = 'BCS';
    const NL = 'NL';
    const CAM = 'CAM';
    const OAX = 'OAX';
    const CHS = 'CHS';
    const PUE = 'PUE';
    const CHI = 'CHI';
    const QRO = 'QRO';
    const COA = 'COA';
    const QR = 'QR';
    const COL = 'COL';
    const SLP = 'SLP';
    const DF = 'DF';
    const SIN = 'SIN';
    const DGO = 'DGO';
    const SON = 'SON';
    const EM = 'EM';
    const TAB = 'TAB';
    const GTO = 'GTO';
    const TAM = 'TAM';
    const GRO = 'GRO';
    const TLAX = 'TLAX';
    const HGO = 'HGO';
    const VER = 'VER';
    const JAL = 'JAL';
    const YUC = 'YUC';
    const MICH = 'MICH';
    const ZAC = 'ZAC';
    const CDMX = 'CDMX';
    const TLA = 'TLA';
    
    
    public static function getAllowableEnumValues()
    {
        return [
            self::AGS,
            self::MOR,
            self::BCN,
            self::NAY,
            self::BCS,
            self::NL,
            self::CAM,
            self::OAX,
            self::CHS,
            self::PUE,
            self::CHI,
            self::QRO,
            self::COA,
            self::QR,
            self::COL,
            self::SLP,
            self::DF,
            self::SIN,
            self::DGO,
            self::SON,
            self::EM,
            self::TAB,
            self::GTO,
            self::TAM,
            self::GRO,
            self::TLAX,
            self::HGO,
            self::VER,
            self::JAL,
            self::YUC,
            self::MICH,
            self::ZAC,
            self::TLA,
            self::CDMX
        ];
    }
}
