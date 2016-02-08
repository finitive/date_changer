<?php

class Date_Changer 
{
	private $str_date;
	
	public function __construct($str_date)
	{
		$this->str_date = $str_date;
	}
	
	/**
	
	Function untuk mengubah tanggal dalam bahasa Inggris (Y-m-d --> hari, tgl - bulan - tahun)
	
	return : tanggal yang sdh diubah formatnya
	
	**/
	
	public function ubah()
	{
		$tmp = explode (" ",$this->str_date);
		
		$newDate = date_create($tmp[0]);
		
		$hasil = $newDate->format('l d-m-Y');
		
		$tmp2 = explode(" ",$hasil);
		$ori_date = explode("-",$tmp2[1]);
		//echo $ori_date[0];
		
		$day = $tmp2[0];
		$converted_date = "";
		
		/**Bagian untuk mengubah hari (ex:Monday --> Senin, ) **/
		
		switch($day)
		{
			case 'Monday':$converted_date.='Senin, ';
			break;
			
			case 'Tuesday':$converted_date.='Selasa, ';
			break;
			
			case 'Wednesday':$converted_date.='Rabu, ';
			break;
			
			case 'Thursday':$converted_date.='Kamis, ';
			break;
			
			case 'Friday':$converted_date.="Jum'at, ";
			break;
			
			case 'Saturday':$converted_date.='Sabtu, ';
			break;
			
			case 'Sunday':$converted_date.='Minggu, ';
			break;
		}
		
		/** End **/
		
		
		/** Bagian untuk mengubah Bulan (ex:1 --> Januari) **/
		
		$ori_day = (int) $ori_date[0];
		$converted_date.=$ori_day." ";
		$ori_month = (int) $ori_date[1];
		$ori_year = (int) $ori_date[2];
		switch($ori_month)
		{
			case '1':$converted_date.='Januari ';
			break;
			
			case '2':$converted_date.='Februari ';
			break;
			
			case '3':$converted_date.='Maret ';
			break;
			
			case '4':$converted_date.='April ';
			break;
			
			case '5':$converted_date.="Mei ";
			break;
			
			case '6':$converted_date.='Juni ';
			break;
			
			case '7':$converted_date.='Juli ';
			break;
			
			case '8':$converted_date.='Agustus ';
			break;
			
			case '9':$converted_date.='September ';
			break;
			
			case '10':$converted_date.='Oktober ';
			break;
			
			case '11':$converted_date.='November ';
			break;
			
			case '12':$converted_date.='Desember ';
			break;
			
		}
		/**End**/
		
		$converted_date.=$ori_year;
		//echo $converted_date;
		return $converted_date;
	}
}

/** Stub driver untuk class Date_Changer **/

$t = new Date_Changer("2016-02-12 12:00");
echo $t->ubah();

