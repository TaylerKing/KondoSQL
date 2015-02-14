<?php
	/*
	 *  $db->get('table', 'column(s)', array('column', 'is equal/less/more/etc', 'data'));
	 */
	class KondoSQL {
		private static $_instance;
		protected $_errors = [[], "<br><div style='clear:both;border:1px dashed #000;display:inline-block;padding:4px;margin:4px;'><b>Uh oh! You have errors in your script.</b>", "</div>"];
		private function __construct() {
			echo "Example.";
		}
		public static function instance(){
			if(is_null(self::$_instance)) {
				self::$_instance = new self;
			}
			return self::$_instance;
		}
		public function get($a = null, $b = null, $c = null) {
			if(is_null($a) || is_null($b) || $is_null($c))
				array_push($this->_errors[0], "0");
			return false;
		}
		public function errors() {
			if(count($this->_errors[0])) {
				$a = $this->_errors[1];
				foreach ($this->_errors[0] as $error) {
					switch($error) {
						case "0":
							$a .= "<br/><b> - " . $error . "</b>: Null value(s) supplied for get()";
						break;
					}
				}
				return $a . $this->_errors[2];
			} else return false;
		}
		/*public function __call($method, array $arguments) {
			switch ($method) {
				case 'value':
					# code...
					break;
				
				default:
					# code...
					break;
			}
		}*/
	}
?>