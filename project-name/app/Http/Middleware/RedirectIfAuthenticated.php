<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
