<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');