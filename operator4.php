<?php

$var1 =$_POST["steven1"];
$var2 =$_POST["steven2"];
$var3 =$_POST["steven3"];


//kiri
if ($var1 == "True")
{
	$kiri = 1;
}
else
{
	$kiri = 0;
}
//kanan
if ($var3 == "True")
{
	$kanan = 1;
}
else
{
	$kanan = 0;
}

//operator logika
if($var2 == 'and')
{
    $hasil = $kiri && $kanan;
    if ($hasil == 1)
    {
    	$final = "TRUE";
    }
    else
    {
    	$final = "FALSE";
    }
    echo "$var1 && $var3 = ",$final;
}
elseif($var2 == 'or')
{
    if ($kiri == 1 or $kanan == 1)
    {
    	echo "$var1 || $var3 = TRUE";
    }
    else
    {
    	echo "$var1 || $var3 = FALSE";
    }
   

}
//operator xor
elseif($var2 == 'xor')
{
	//$hasil = $kiri xor $kanan;
    if($kiri == 1 )
    {
    	if ($kanan == 0)
    	{
    		echo "$var1 xor $var3 == TRUE";
    	}
    	else if($kanan == 1)
    	{
    		echo "$var1 xor $var3 == FALSE";
    	}
    }	
    else if($kiri == 0)
    {
    	if ($kanan == 1)
    	{
    		echo "$var1 xor $var3 == TRUE";
    	}
    	else if($kanan == 0)
    	{
    		echo "$var1 xor $var3 == FALSE";
    	}


    }
}

elseif($var2 == '!')
{
    $hasil = !$kiri;
    if ($hasil == 1)
    {
    	$final = "TRUE";
    }
    else
    {
    	$final = "FALSE";
    }
    echo "!$var1 = ",$final;
}