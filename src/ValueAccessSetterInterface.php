<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 01.06.2016
 * Time: 23:46
 */
namespace Ceive\Data\OuterValueAccessor {

	/**
	 * Interface ValueAccessSetterInterface
	 * @package Ceive\Data\OuterValueAccessor\ValueAccessor
	 */
	interface ValueAccessSetterInterface{

		/**
		 * @param $data
		 * @param $key
		 * @param $value
		 * @return mixed
		 */
		public function __invoke($data, $key, $value);

	}
}

