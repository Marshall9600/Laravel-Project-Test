<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');