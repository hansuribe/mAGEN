<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');