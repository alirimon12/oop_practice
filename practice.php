<?php 

//////////////////start///////////Object class/////constructor/////////


class cars
{
  
function __construct($brand, $color, $price) 


{


$this->brand=$brand;
$this->color=$color;
$this->price=$price;

}


function  Toyatta() 

{
  
   $Toyatta=array( $this->brand, $this->color, $this->price );
  

   return $Toyatta; 

}   


function  Lamborguiny() 

{
  
   $Lamborguiny=array( $this->brand, $this->color, $this->price );
  

   return $Lamborguiny; 

}

}


$Toyatta=new cars("Totaytta", "Blue", 200);  

$Lamborguiny=new cars("Lamborguiny", "Black", 20000);
   
$Toyatta=$Toyatta-> Toyatta();   
$Lamborguiny=$Lamborguiny-> Lamborguiny(); 


foreach($Toyatta as $Toyatta)

{

echo $Toyatta."<br>";

}   



foreach($Lamborguiny as $Lamborguiny)

{

echo $Lamborguiny."<br>";

} 
//////////////////End///////////Object class/////constructor/////////


///////////////Start///////Inheritance//////////


class cars{

    public $restaurant =array(
  
        "Name"=>"SeaFoodian",
        "Location"=>"New York ",
        "Team"=>"Active",
        
  
        ); 
  
  function __construct($brand, $color, $price) 
  {
  
    $this->brand=$brand;
    $this->color=$color;
    $this->price=$price;
    
  
  }
  
  
  function cars() 
  
  {
  
  
  $car= array($this->brand, $this->color, $this->color ) ;  
  
  return $car;
  
  }
  
  
  
  }   
  
  class house extends cars 
  
  
  {
  
   
    function  housee()
  
    {
  
      
      $hosuse = array(
        
        "Company"=>"T200",
         "Color"=>"Blue",
         "Price"=>"2000"
      
      );
  
      
  
      return $hosuse; 
  
    }
    
    
  
  } 
  
  
  class restaurant extends house 
  
  {
   
  function restaurantt() 
  
  {
  
    echo "restuarant";
     
  
  }
    
  }
  
  
  
  $obj= new house("toyatta", "black", 2000);
  
    
  
   $house=$obj-> housee();
   $cars=$obj-> cars() ;
    $obj-> restaurantt() ;
  
   foreach($cars as $h) 
   
   
   {
  
     echo $h."<br>";
  
   }
///////////////End///////Inheritance//////////


///////////////Start///////Trait//////////


trait fruit {

    function fruits() 

    {

     $fruits=array("Banana", "Apple", "Orange");  

     return $fruits;
  

    }

}  
trait car{


    function cars() 
    {

    $cars=array("Volbo","Toyatta","Lanborguiny");

    }



}
class class1{

     //  use fruit, car
     use fruit, car{
  
      fruit:: fruits insteadof car; 

      car:: cars as c;

     }

}
 $obj=new class1();

 $fruits =$obj-> fruits();

 echo $c =$obj-> c();
 

  foreach($fruits as $f) 

  {

   
   echo $f;

  }


///////////////End///////Trait//////////

///////////////Start///////Abstract//////////


abstract class bank {     
    abstract function bank_prof();

}  

class islamiBank extends bank  

{

  function bank_prof()  

  {

    $nationalID="Ali RImon";
    
  }  

}

class bankladeshBank extends bank  

{

  function bank_prof()  

  {

    $nationalID="Ali RImon";


  }
}   

///////////////End///////Abstract//////////  



///////////////Start///////Interface//////////  
interface volvo {


    function  volvo();
   
   }
   
   
   interface toyatta {
   
   
    function  toyatta();
     
   } 
   
   class Lanborguiny implements volvo  
   
   {
      
   
     function __construct ($brand, $color, $price) 
    
    
     {
   
       $this->brand=$brand;
       $this->color=$color;
       $this->price=$price;
   
     }
   
   
     function  volvo()  
   
     {
     
      $volbo=array($this->brand, $this->color,$this->price);
      
       return $volbo;
    
     }   
   
   
   
     function   toyatta() 
     
     {
   
       $toyatta=array($this->brand, $this->color,$this->color);
      
       return $toyatta;
   
     }
   
   
   }
   
   
   
   $obj=new Lanborguiny("Volbo", "Red", "200");
   
      
   $volbo=$obj-> toyatta(); 
   
   foreach($volbo as $vol) 
   
   {
   
    echo $vol."<br>";
   
   
   }


///////////////End///////Interface//////////



?>