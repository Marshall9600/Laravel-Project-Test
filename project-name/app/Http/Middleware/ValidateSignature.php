<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
