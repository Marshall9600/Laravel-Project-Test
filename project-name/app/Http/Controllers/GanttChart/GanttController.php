<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');