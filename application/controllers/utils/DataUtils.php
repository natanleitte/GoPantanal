<?php

class DataUtils {

    private $listaDeMeses = array("Jan", "Feb", "Mar", "May", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dec");

    public static function obterDataFormatada($data) {
        foreach ($this->listaDeMeses as $key => $mesDaLista) {
            if (strcmp($this->obterMesDa($data), $mesDaLista) === 0) {
                $mes = ($key + 1) > 9 ? $key : "0" . $key;
            }
        }
        return $this->obterAnoDa($data) . "-" . $mes . "-" . $this->obterDiaDa($data);
    }

    public static function obterMesDa($data) {
        return substr($data, 4, 3);
    }

    public static function obterDiaDa($data) {
        return substr($data, 8, 2);
    }

    public static function obterAnoDa($data) {
        return substr($data, 11, 4);
    }

    public static function alterarParaSeisDaManhaA($data) {
        $data[17] = '6';
        return $data;
    }

    public static function converteDataParaFormatoDateDoMySql($data) {
        $dia = substr($data, 0, 2);
        $mes = substr($data, 3, 2);
        $ano = substr($data, 6, 4);
        
        return $ano . "-" . $mes . "-" . $dia;
    }

}
