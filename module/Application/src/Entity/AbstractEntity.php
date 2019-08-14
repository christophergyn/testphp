<?php
namespace Application\Entity;

use Zend\Hydrator\ClassMethods;
use Application\Utils\UtilData;

/**
 * 
 * @author Tony
 *
**/
abstract class AbstractEntity {

	/**
	 * 
	 * @param array $options
	 */
	public function __construct(Array $data = array()){
            $this->arrayToObject($data);
	}
	
	/**
	 * 
	 * @return array
	 */
	public function toArray(){
            $hydrator = new ClassMethods();
            $data = $hydrator->extract($this);
            foreach ($data as $key => $value){
                if ($value instanceof \DateTime) {
                        $data[$key] = $value->format('d/m/Y');
                } else {
                        $data[$key] = $value;
                }
            }
            return $data;
	}
	
	public function arrayToObject($data = array()){
            foreach ($data as $key => $value){
                try {
                    if ((is_string($value)) && (UtilData::isValidFormat($value))){
                        $data[$key] =  UtilData::getDate($value)->format('d-m-Y');
                    }
                } catch (\Exception $e) {			}
            }
            $hydrator = new ClassMethods();
            $hydrator->hydrate($data, $this);
	}
	
}