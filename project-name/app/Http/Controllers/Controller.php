<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
