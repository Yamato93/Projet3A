<?php

function log_call($variable, $lib=""){
	if(!file_exists("../log/call.log"))
		file_put_contents("../log/call.log", "");
	if(is_array($variable)){
		foreach ($variable as $key => $value) {
			file_put_contents("../log/call.log", "-------------"
				."$key => $value \r\n".file_put_contents("../log/call.log"));
		}
		file_put_contents("../log/call.log", date("[j/m/y H:i:s]")." - $lib = \r\n".file_get_contents("../log/call.log"));
	}
	else{
		file_put_contents("../log/call.log", date("[j/m/y H:i:s]")." - $lib = $variable \r\n".file_get_contents("../log/call.log"));
	}
}