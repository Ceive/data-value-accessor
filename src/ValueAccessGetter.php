<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 20.05.2016
 * Time: 19:00
 */
namespace Ceive\Data\OuterValueAccessor {
	
	use Ceive\Util\PropertyRegistry\PropertyRegistryInterface;
	
	/**
	 * Class ValueAccessValueAccessGetter
	 * @package Ceive\Data\OuterValueAccessor\ValueAccessor
	 */
	class ValueAccessGetter implements ValueAccessGetterInterface{

		/**
		 * @param $data
		 * @param $key
		 * @return mixed|null
		 */
		public function __invoke($data, $key){
			if($data === null){
				return null;
			}
			if($data instanceof PropertyRegistryInterface){
				return $data->getProperty($key);
			}elseif(is_array($data) || $data instanceof \ArrayAccess){
				return $data[$key];
			}elseif(is_object($data)){
				return $data->{$key};
			}else{
				throw new \LogicException('[OuterGetter] Wrong data type');
			}
		}

	}
}

