<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
