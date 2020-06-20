<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 



if ( ! function_exists('read_more'))
{
      function read_more($string = '' , $length = '' , $read_more = false, $href='#' )
     {

     	$total_length = strlen($string);
     	if($total_length>$length)
     	{
	     	if($read_more==false)
	     	{
	     		$output = substr($string, 0 , $length)."..";
	     	}
	        else
	        {
	        	if($href!='#')
	        	{
	        	   $output = substr($string, 0 , $length).".. <a href=".$href.">read more</a>";	
	        	}	
	        	else
	        	{
	        		$output = substr($string, 0 , $length).".. read more";
	        	}
	            
	        }
        }
        else
        {
           if($read_more==false)
	     	{
	     		$output = substr($string, 0 , $length);
	     	}
	        else
	        {
	            $output = substr($string, 0 , $length);
	        }   	
        }
        return $output;

     }


}


if ( ! function_exists('url_encrypt'))
{
	function url_encrypt($string) 
	{
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    //pls set your unique hashing key
	    $secret_key = 'da_proj';
	    $secret_iv = 'da_projects';
	    // hash
	    $key = hash('sha256', $secret_key);
	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);
	    //do the encyption given text/string/number
	    $output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
	    $output = base64_encode($output);
	    return $output;
	}

}

if ( ! function_exists('url_decrypt'))
{
	function url_decrypt($string) 
	{
	    $output = false;
	    $encrypt_method = "AES-256-CBC";
	    //pls set your unique hashing key
	    $secret_key = 'da_proj';
	    $secret_iv = 'da_projects';
	    // hash
	    $key = hash('sha256', $secret_key);
	    // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
	    $iv = substr(hash('sha256', $secret_iv), 0, 16);
	    //decrypt the given text/string/number
	    $output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
	    return $output;
	}
}

if( ! function_exists('findExtension'))
{
	function findExtension ($filename='')
	{
	   $filename = strtolower($filename) ;
	   $exts = explode(".", $filename) ;
	   $n = count($exts)-1;
	   $exts = $exts[$n];
	   $exts = strtoupper($exts);
	   return $exts;
	}
}



if( ! function_exists('findfilename'))
{
	function findfilename ($filename='',$length='')
	{
		$exts1 = ''; 
		//echo $filename;
	   //$filename = strtolower($filename) ;
	   $exts = explode(".", $filename) ;
	   $n = count($exts)-1;
	   for ($i=0; $i <$n ; $i++) 
	   { 
	   	   $exts1 .= $exts[$i];
	   }
	   //$exts = $exts[$n];
	   if($length!='')
	   $exts1 = read_more($exts1 , $length);

	   else
	   $exts1 = read_more($exts1 );


	   return $exts1;
	}
}




if( ! function_exists('create_file_link'))
{
	function create_file_link ($file_id='')
	{
		$CI = &get_instance();
		$CI->load->model('Database_conn');
		$CI->load->model('Common');
		$id = $CI->Common->getDataSingle('directory','parent_id',array('id'=>$file_id));
		$file_name = '';
		$p='';

		do {
                   $con = array(
                     'id' => $id,
                     'type' => 'dir'
					);	
					    $name = $CI->Database_conn->fetch_edit('directory','', $con);
						if(sizeof($name)>0)
						{
						$p = $name['0']['name']."/".$p;
						$id = $name['0']['parent_id'];
					    }
					} while(sizeof($name)>0&&$name['0']['parent_id']!=0);
					$file_name = $p.$CI->Common->getDataSingle('directory','name',array('id'=>$file_id));
					return $file_name;


	}
}


if( ! function_exists('numberTowords'))
{
	function numberTowords($num)
{ 
$ones = array( 
1 => "one", 
2 => "two", 
3 => "three", 
4 => "four", 
5 => "five", 
6 => "six", 
7 => "seven", 
8 => "eight", 
9 => "nine", 
10 => "ten", 
11 => "eleven", 
12 => "twelve", 
13 => "thirteen", 
14 => "fourteen", 
15 => "fifteen", 
16 => "sixteen", 
17 => "seventeen", 
18 => "eighteen", 
19 => "nineteen" 
); 
$tens = array( 
1 => "ten",
2 => "twenty", 
3 => "thirty", 
4 => "forty", 
5 => "fifty", 
6 => "sixty", 
7 => "seventy", 
8 => "eighty", 
9 => "ninety" 
); 
$hundreds = array( 
"hundred", 
"thousand", 
"million", 
"billion", 
"trillion", 
"quadrillion" 
); //limit t quadrillion 
$num = number_format($num,2,".",","); 
$num_arr = explode(".",$num); 
$wholenum = $num_arr[0]; 
$decnum = $num_arr[1]; 
$whole_arr = array_reverse(explode(",",$wholenum)); 
krsort($whole_arr); 
$rettxt = ""; 
foreach($whole_arr as $key => $i){ 
if($i < 20){ 
$rettxt .= $ones[$i]; 
}elseif($i < 100){ 
$rettxt .= $tens[substr($i,0,1)]; 
$rettxt .= " ".$ones[substr($i,1,1)]; 
}else{ 
$rettxt .= $ones[substr($i,0,1)]." ".$hundreds[0]; 
$rettxt .= " ".$tens[substr($i,1,1)]; 
$rettxt .= " ".$ones[substr($i,2,1)]; 
} 
if($key > 0){ 
$rettxt .= " ".$hundreds[$key]." "; 
} 
} 
if($decnum > 0){ 
$rettxt .= " and "; 
if($decnum < 20){ 
$rettxt .= $ones[$decnum]; 
}elseif($decnum < 100){ 
$rettxt .= $tens[substr($decnum,0,1)]; 
$rettxt .= " ".$ones[substr($decnum,1,1)]; 
} 
}
else{
$rettxt .= " and zero ";    
} 
return $rettxt; 
}
}