<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');