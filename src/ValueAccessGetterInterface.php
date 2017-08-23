<?php
/**
 * Created by Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>.
 * Author: Kutuzov Alexey Konstantinovich <lexus.1995@mail.ru>
 * Project: Ceive
 * IDE: PhpStorm
 * Date: 01.06.2016
 * Time: 23:45
 */
namespace Ceive\Data\OuterValueAccessor {

	/**
	 * Interface ValueAccessGetterInterface
	 * @package Ceive\Data\OuterValueAccessor\ValueAccesor
	 */
	interface ValueAccessGetterInterface{

		/**
		 * @param $data
		 * @param $key
		 * @return mixed
		 */
		public function __invoke($data, $key);

	}
}

