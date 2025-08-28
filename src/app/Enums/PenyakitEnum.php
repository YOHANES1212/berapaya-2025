<?php

namespace App\Enums;

enum PenyakitEnum: string
{
    case DEMAM_BERDARAH = 'Demam Berdarah';
    case TIFUS = 'Tifus';
    case PNEUMONIA = 'Pneumonia';
    case USUS_BUNTU = 'Usus Buntu';
    case BATU_EMP = 'Batu Empedu Ringan';
    case PERSALINAN_NORMAL = 'Persalinan Normal';
    case CAESAR = 'Caesar';
    case SERANGAN_JANTUNG = 'Serangan Jantung';
    case PEMASANGAN_RING = 'Pemasangan Ring';
    case OPERASI_BYPASS = 'Operasi Bypass';
    case KANKER_PAYUDARA = 'Kanker Payudara';
    case KANKER_PARU = 'Kanker Paru';
    case STROKE = 'Stroke';
    case TUMOR_OTAK = 'Tumor Otak';
    case PATAH_TULANG = 'Patah Tulang';
}
