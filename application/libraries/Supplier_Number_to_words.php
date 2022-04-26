<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class supplier_number_to_words {
    //put your code here
    public $msg = "";
    public function __construct()
    {
        $this->CI =& get_instance();
        $this->msg = "";
    }

    public function number_to_words_in_rupees($amount,$currency_name)
    {
        $number = $amount;
  $no = round($number);
    $decimal = round($number - ($no = floor($number)), 2) * 100;
    $digits_length = strlen($no);
    $i = 0;
    $str = array();
    $words = array(
        0 => '',
        1 => 'One',
        2 => 'Two',
        3 => 'Three',
        4 => 'Four',
        5 => 'Five',
        6 => 'Six',
        7 => 'Seven',
        8 => 'Eight',
        9 => 'Nine',
        10 => 'Ten',
        11 => 'Eleven',
        12 => 'Twelve',
        13 => 'Thirteen',
        14 => 'Fourteen',
        15 => 'Fifteen',
        16 => 'Sixteen',
        17 => 'Seventeen',
        18 => 'Eighteen',
        19 => 'Nineteen',
        20 => 'Twenty',
        30 => 'Thirty',
        40 => 'Fourty',
        50 => 'Fifty',
        60 => 'Sixty',
        70 => 'Seventy',
        80 => 'Eighty',
        90 => 'Ninety');
    $digits = array('', 'Hundred', 'Thousand', 'Lakh', 'Crore');
    while ($i < $digits_length) {
        $divider = ($i == 2) ? 10 : 100;
        $number = floor($no % $divider);
        $no = floor($no / $divider);
        $i += $divider == 10 ? 1 : 2;
        if ($number) {
            $plural = (($counter = count($str)) && $number > 9) ? ' ' : null;
            $str [] = ($number < 21) ? $words[$number] . ' ' . $digits[$counter] . $plural : $words[floor($number / 10) * 10] . ' ' . $words[$number % 10] . ' ' . $digits[$counter] . $plural;
        } else {
            $str [] = null;
        }
    }

    $Rupees = implode(' ', array_reverse($str));
    $paise = ($decimal) ? " " . ($words[$decimal - $decimal%10]) ." " .($words[$decimal%10])  : '';
    if($currency_name == 'Indian rupee'){
      if($paise){
      return "Rupees" . ($Rupees ? ' ' . $Rupees : ''). $paise . "Paise Only";
      }
      if(!$paise){
      return "Rupees" .($Rupees ? ' ' . $Rupees : ''). $paise . "Only";
      }
    } else {
      if($paise){
      return $currency_name . ($Rupees ? ' ' . $Rupees : ''). $paise . "Paise Only";
      }
      if(!$paise){
      return $currency_name .($Rupees ? ' ' . $Rupees : ''). $paise . "Only";
      }
    }


    }
}
