<?php
namespace Application\Utils;

use DateTime;
use DateTimeZone;
use Exception;

class UtilData {
    const MES = 'M';
    const DIA = 'D';
    const ANO = 'Y';
    const MINUTO = 'm';

    public static function incrementaData(\DateTime $data, int $intervalo, $tipoDeIncemento = self::MES){
        $modo = '';
        switch ($tipoDeIncemento) {
            case self::MES:
                $modo = $intervalo.' month';
                break;
            case self::DIA:
                $modo = $intervalo.' days';
                break;
            case self::ANO:
                $modo = $intervalo.' year';
                break;
            case self::MINUTO:
                $modo = $intervalo.' minute';
                break;

            default:
                $modo = $intervalo.' month';
                break;
        }
        if ($intervalo > 0){
            $modo = '+'.$modo;
        }
        $dtz = new DateTimeZone("Brazil/East"); //Your timezone
        return new \DateTime(date('Y-m-d', strtotime($modo, strtotime($data->format('Y-m-d')))), $dtz);
    }
    
    public static function isValidFormat($value = '', $formato = 'DD/MM/YYYY'){
            switch ($formato){
                    case 'DD/MM/YY':
                            return preg_match( '/^\d{1,2}\/\d{1,2}\/\d{2}$/' , $value )?true:false;
                    case 'DD/MM/YYYY':
                            return preg_match( '/^\d{1,2}\/\d{1,2}\/\d{4}$/' , $value )?true:false;
                            break;
                    default:
                            return preg_match( '/^\d{1,2}\/\d{1,2}\/\d{4}$/' , $value )?true:false;
                            break;

            }
    }
	

	/**
	 * 
	 * @param string $value Data no formato dd/mm/yyyy, d/m/yy ou dd/mm/yy etc...
	 * @return DateTime
	 */
	public static function getDate($value){
		$data_new = explode("/",$value);
		$data = new DateTime();
		if ($data_new[2] < 100){
			$data_new[2] = $data_new[2] + 2000;
		}
		$data->setDate($data_new[2], $data_new[1], $data_new[0]);
		
		return $data;
	}
	
	/**
	 * 
	 * @param string $data
	 * @param string $formato
	 * @throws Exception
	 * @return boolean
	 */
	public static function validaData($data, $formato = 'DD/MM/AAAA') {
		$datas = array();
		$exp_regular = '/^\d{1,2}\/\d{1,2}\/\d{4}$/';
		switch($formato) {
			case 'DD-MM-AAAA':
			case 'DD/MM/AAAA':
				$datas = preg_split($exp_regular, $data);
				break;
			case 'AAAA/MM/DD':
			case 'AAAA-MM-DD':
				$datas = preg_split($exp_regular, $data);
				break;
			case 'AAAA/DD/MM':
			case 'AAAA-DD-MM':
				$datas = preg_split($exp_regular, $data);
				break;
			case 'MM-DD-AAAA':
			case 'MM/DD/AAAA':
				$datas = preg_split($exp_regular, $data);
				break;
			case 'AAAAMMDD':
				$datas = array_push($datas, substr($data, 6, 2)); // dia 
				$datas = array_push($datas, substr($data, 4, 2)); // mes
				$datas = array_push($datas, substr($data, 0, 4)); // ano
				break;
			case 'AAAADDMM':
				$datas = array_push($datas, substr($data, 4, 2)); // dia
				$datas = array_push($datas, substr($data, 6, 2)); // mes
				$datas = array_push($datas, substr($data, 0, 4)); // ano
				break;
			default:
				throw new Exception( "Formato de data inválido");
				break;
		}
		return (checkdate($datas[1], $datas[0], $datas[2]) === 1);
	}
        
        
        /**
         * Formatar data para a grid
         * 
         * @param DateTime $data
         * @return string
         */
        public static function getFormatToString(DateTime $data, string $formato = 'Y-m-d'){
            return $data->format($formato);
        }
        
        /**
         * Formatar data para a grid
         * 
         * @param string $data
         * @return DateTime
         */
        public static function getFormatToDate(string $data, string $format = '!Y-m-d'){
            return \DateTime::createFromFormat($format, $data);
        }

        /**
         * Retorna timestamp no formato Y-m-d (2018-01-15)
         * @return DateTime
         */
        public static function getNow(){
            $dtz = new DateTimeZone('America/Sao_Paulo'); //Your timezone
            //$dtz = new DateTimeZone("Brazil/East"); //Your timezone
            return new DateTime(date('Y-m-d'), $dtz);
        }
        
        /**
         * Retorna a hora atual em string.
         * 
         * @return tempo em string 18:32:00
         */
        
        public static function getNowTime(){
//            $dtz = new DateTimeZone("Brazil/East"); //Your timezone
//            $dateTime = new DateTime(date('H:i:s'), $dtz);
//            return $dateTime->format('H:i:s');
            
            return date('H:i:s');
        }
        
        public static function isValidDate(string $strData, string $separador = '/'){
            $data = explode($separador, $strData); // fatia a string $dat em pedados, usando / como referência
            
            if(!isset($data[0]) || !isset($data[1]) || !isset($data[2]))
                return false;
            
            $d = intval($data[0]);
            $m = intval($data[1]);
            $y = intval($data[2]);

            // verifica se a data é válida!
            return (checkdate($m,$d,$y));
        }
        
        public static function isValidDateFormat(string $strData, string $separador = '/', string $formato = 'DD/MM/YYYY'){
            $data = explode($separador, $strData); // fatia a string $dat em pedados, usando / como referência
            
            if(count($data) < 3)
                return false;
            
            switch ($formato){
                case 'YYYY-MM-DD':
                    $y = intval($data[0]);
                    $m = intval($data[1]);
                    $d = intval($data[2]);
                    break;
                default : // DD/MM/YYYY
                    $d = intval($data[0]);
                    $m = intval($data[1]);
                    $y = intval($data[2]);
                    break;
            }

            // verifica se a data é válida!
            return checkdate($m,$d,$y);
        }
        
}