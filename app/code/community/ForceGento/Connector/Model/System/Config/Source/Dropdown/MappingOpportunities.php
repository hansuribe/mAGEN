<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');