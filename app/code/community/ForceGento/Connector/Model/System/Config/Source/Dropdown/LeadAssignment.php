<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
