<?php
######################################################
#
#	© T.Ismayil (2017)
#   © tehmezovismayil@gmail.com
#   © DOTphp.net
#
######################################################

class imgCheck
{
	
	public static function getType( $name )
	{
		$name = explode("." , $name);
		$type = end($name);
		return $type;
	}
	
	public static function createimg( $image )
	{
		switch( self::getType($image) )
		{
			case "png"; return imagecreatefrompng( $image ); break;
			case "jpg"; return imagecreatefromjpeg( $image ); break;
			case "jpeg"; return imagecreatefromjpeg( $image ); break;
			case "gif"; return imagecreatefromgif( $image ); break;
		}
	}
	
	public static function ____( $img1 , $img2 )
	{
		
	  if ( imagesx($img1) != imagesx($img2) || imagesy($img1) != imagesy($img2) )
	  { 
		return false; 
	  }
	  
	  for( $x = 0; $x < imagesx( $img1 ); $x++ )
	  { 
		 for ($y = 0; $y < imagesy( $img1 ); $y++)
		 { 
			 if( imagecolorat($img1 , $x, $y) != imagecolorat($img2 , $x, $y) )
			 { 
				return false; 
			 } 
		 } 
	  } 
	  return true; 
	}  
	
	
	public function check( $image1 , $image2 )
	{
		$Action1 = $image1;
		$Action2 = $image2;
		return self::____( self::createimg($Action1) , self::createimg($Action2) );	
	}
	
	
}

	




?>