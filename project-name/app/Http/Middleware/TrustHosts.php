<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');