<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');