<?php

use Carbon\Carbon;

function set_active_path($path)
{
    return request()->is($path . '*') ? ' active' : '';
}

function so_numero($string)
{
    return preg_replace('/[^0-9]/', '', $string);
}

function formata_cep($cep)
{
    $cep = so_numero($cep);

    if (strlen($cep) != 8) {
        return '';
    }

    return substr($cep, 0, 5) . '-' . substr($cep, -3);
}

function formata_telefone($telefone)
{
    $telefone = so_numero($telefone);
    $tamanho = strlen($telefone);

    if ($tamanho > 11) {
        $telefone = '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 5) . '-' . substr($telefone, 7, 4);
    } else if ($tamanho == 11 && substr($telefone, 0, 4) == '0800') {
        $telefone = substr($telefone, 0, 4) . '-' . substr($telefone, 4, 3) . '-' . substr($telefone, 7, 4);
    } else if ($tamanho == 11) {
        $telefone = '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 1) . ' ' . substr($telefone, 3, 4) . '-' . substr($telefone, 7, 4);
    } else if ($tamanho == 10) {
        $telefone = '(' . substr($telefone, 0, 2) . ') ' . substr($telefone, 2, 4) . '-' . substr($telefone, 6, 4);
    } else if ($tamanho == 9) {
        $telefone = substr($telefone, 0, 1) . '-' . substr($telefone, 1, 4) . '-' . substr($telefone, 5, 4);
    } else if ($tamanho == 8) {
        $telefone = substr($telefone, 0, 4) . '-' . substr($telefone, 4, 4);
    } else {
        $telefone = '';
    }

    return $telefone;
}

function formata_cpf_cnpj($cpf_cnpj)
{
    $cpf_cnpj = so_numero($cpf_cnpj);
    $tamanho = strlen($cpf_cnpj);

    if ($tamanho != 11 && $tamanho != 14) {
        return '';
    }

    $mascara = $tamanho == 11 ? '###.###.###-##' : '##.###.###/####-##';
    $indice = -1;

    for ($i = 0; $i < strlen($mascara); $i++) {
        if ($mascara[$i] == '#') {
            $mascara[$i] = $cpf_cnpj[++$indice];
        }
    }

    return $mascara;
}

function valida_cpf($cpf)
{
    $cpf = so_numero($cpf);

    if (strlen($cpf) != 11) {
        return false;
    } else {
        if ($cpf == "00000000000") {
            return false;
        } else {
            $n[1] = intval(substr($cpf, 1 - 1, 1));
            $n[2] = intval(substr($cpf, 2 - 1, 1));
            $n[3] = intval(substr($cpf, 3 - 1, 1));
            $n[4] = intval(substr($cpf, 4 - 1, 1));
            $n[5] = intval(substr($cpf, 5 - 1, 1));
            $n[6] = intval(substr($cpf, 6 - 1, 1));
            $n[7] = intval(substr($cpf, 7 - 1, 1));
            $n[8] = intval(substr($cpf, 8 - 1, 1));
            $n[9] = intval(substr($cpf, 9 - 1, 1));
            $n[10] = intval(substr($cpf, 10 - 1, 1));
            $n[11] = intval(substr($cpf, 11 - 1, 1));

            $soma = 10 * $n[1] + 9 * $n[2] + 8 * $n[3] + 7 * $n[4] + 6 * $n[5] + 5 * $n[6] + 4 * $n[7] + 3 * $n[8] + 2 * $n[9];
            $soma = $soma - (11 * (intval($soma / 11)));

            if ($soma == 0 || $soma == 1) {
                $resultado1 = 0;
            } else {
                $resultado1 = 11 - $soma;
            }

            if ($resultado1 == $n[10]) {
                $soma = $n[1] * 11 + $n[2] * 10 + $n[3] * 9 + $n[4] * 8 + $n[5] * 7 + $n[6] * 6 + $n[7] * 5 + $n[8] * 4 + $n[9] * 3 + $n[10] * 2;
                $soma = $soma - (11 * (intval($soma / 11)));

                if ($soma == 0 || $soma == 1) {
                    $resultado2 = 0;
                } else {
                    $resultado2 = 11 - $soma;
                }

                if ($resultado2 == $n[11]) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
}

function valida_cnpj(string $cnpj)
{
    $cnpj = so_numero($cnpj);

    if (strlen($cnpj) != 14) {
        return false;
    } else {
        if ($cnpj == "00000000000000") {
            return false;
        } else {
            $n[1] = intval(substr($cnpj, 1 - 1, 1));
            $n[2] = intval(substr($cnpj, 2 - 1, 1));
            $n[3] = intval(substr($cnpj, 3 - 1, 1));
            $n[4] = intval(substr($cnpj, 4 - 1, 1));
            $n[5] = intval(substr($cnpj, 5 - 1, 1));
            $n[6] = intval(substr($cnpj, 6 - 1, 1));
            $n[7] = intval(substr($cnpj, 7 - 1, 1));
            $n[8] = intval(substr($cnpj, 8 - 1, 1));
            $n[9] = intval(substr($cnpj, 9 - 1, 1));
            $n[10] = intval(substr($cnpj, 10 - 1, 1));
            $n[11] = intval(substr($cnpj, 11 - 1, 1));
            $n[12] = intval(substr($cnpj, 12 - 1, 1));
            $n[13] = intval(substr($cnpj, 13 - 1, 1));
            $n[14] = intval(substr($cnpj, 14 - 1, 1));

            $soma = $n[1] * 5 + $n[2] * 4 + $n[3] * 3 + $n[4] * 2 + $n[5] * 9 + $n[6] * 8 + $n[7] * 7 + $n[8] * 6 + $n[9] * 5 + $n[10] * 4 + $n[11] * 3 + $n[12] * 2;
            $soma = $soma - (11 * (intval($soma / 11)));

            if ($soma == 0 || $soma == 1) {
                $resultado1 = 0;
            } else {
                $resultado1 = 11 - $soma;
            }

            if ($resultado1 == $n[13]) {
                $soma = $n[1] * 6 + $n[2] * 5 + $n[3] * 4 + $n[4] * 3 + $n[5] * 2 + $n[6] * 9 + $n[7] * 8 + $n[8] * 7 + $n[9] * 6 + $n[10] * 5 + $n[11] * 4 + $n[12] * 3 + $n[13] * 2;
                $soma = $soma - (11 * (intval($soma / 11)));

                if ($soma == 0 || $soma == 1) {
                    $resultado2 = 0;
                } else {
                    $resultado2 = 11 - $soma;
                }

                if ($resultado2 == $n[14]) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }
    }
}

function inv_moeda_usa_bra($valor)
{
    return number_format($valor, 2, ',', '.');
}

function inv_moeda_bra_usa($valor)
{
    return str_replace(',', '.', str_replace('.', '', $valor));
}

function inv_data_usa_bra($data)
{
    if (!$data) {
        return $data;
    }

    return Carbon::createFromFormat('Y-m-d', $data)->format('d/m/Y');
}

function inv_data_bra_usa($data)
{
    if (!$data) {
        return $data;
    }

    return Carbon::createFromFormat('d/m/Y', $data)->format('Y-m-d');
}

function timestamp_bra($timestamp)
{
    if (!$timestamp) {
        return $timestamp;
    }

    return Carbon::createFromFormat('Y-m-d H:i:s', $timestamp)->format('d/m/Y \à\s H:i\h');
}


function dia_da_semana($dia = null)
{
    $dia_da_semana = array('0'=>'Domingo', 
    '1'=>'Segunda-feira', 
    '2'=>'Terça-feira', 
    '3'=>'Quarta-feira', 
    '4'=>'Quinta-feira', 
    '5'=>'Sexta-feira', 
    '6'=>'Sábado');
    return $dia_da_semana[$dia];
}

