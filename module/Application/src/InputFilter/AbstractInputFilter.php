<?php
namespace Application\InputFilter;

use Zend\InputFilter\InputFilter;

class AbstractInputFilter extends InputFilter{


	/**
	 * @param array $haystack
	 *
	 * @return array
	 */
	public function haystack(Array $haystack = array()){
            $array = array();
            foreach($haystack as $value){
                if ($value){
                    $array[$value['value']] = $value['label'];
                }
            }
            return array_keys($array);
	}
}