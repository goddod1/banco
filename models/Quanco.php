<?php
class Quanco
{
  public $name;
  public $color;
  public $locationX;
  public $locationY;

  public function __construct($name, $color, $locationX, $locationY)
  {
    $this->name = $name;
    $this->color = $color;
    $this->locationX = $locationX;
    $this->locationY = $locationY;
  }

  public function getImage()
  {

    if ($this->color == 'false') {
      return "<img ".$this->Image1()."  height=30px width=30px>";
    } else if ($this->color == 'true') {
      return "<img ".$this->Image2()."   height=30px width=30px>";
    }
  }

}
class location{
  public $locationX1;
  public $locationY1;

  public function __construct($locationX1, $locationY1)
  {
    $this->locationX1 = $locationX1;
    $this->locationY1 = $locationY1;
  }
}
trait move1{
  public function move1(){
    $locationArray = [];

    for ($row = 1; $row <= 8; $row++) {
      for ($col = 1; $col <= 8; $col++) {
        if ($col == $this->locationX) {
          if ($row == $this->locationY) {
          } else {
            $location = new location($col, $row);
            array_push($locationArray, $location);
          }
    
        } else if ($row == $this->locationY) {
    
          if ($col == $this->locationX) {
          } else {
            $location = new location($col, $row);
            array_push($locationArray, $location);
          }
    
        }
}
    }
    return $locationArray;
  }
}

trait move2{
  public function move3(){
    $locationArrayBishop = [];

    for ($row = 1; $row <= 8; $row++) {
      for ($col = 1; $col <= 8; $col++) {
    for($n=1;$n<=8; $n++){
      if($row == $this->locationY+$n){
        
        if($col == $this->locationX+$n){
          echo $row;
          echo $col;  
          $location = new location($col, $row);
          array_push($locationArrayBishop, $location);
        }
      
      }
    }
    
    for($n=1;$n<=8; $n++){
      if($row == $this->locationY-$n){
        if($col == $this->locationX-$n){
          echo $row;
          echo $col;  
          $location = new location($col, $row);
          array_push($locationArrayBishop, $location);
        }
      }
   }

   for($n=1;$n<=8; $n++){
    if($row == $this->locationY-$n){
      if($col == $this->locationX+$n){
        $location = new location($col, $row);
        array_push($locationArrayBishop, $location);
      }
    }
  }
  
  for($n=1;$n<=8; $n++){
    if($row == $this->locationY+$n){
      if($col == $this->locationX-$n){
        $location = new location($col, $row);
        array_push($locationArrayBishop, $location);
      }
    }
 }
  }
}
return $locationArrayBishop;
  }
}

class Xe extends Quanco
{
  public function Image1()
  {
    return "src='../models/image/rook-chess-svgrepo-com (1).png'";
    }

  public function Image2()
  {
      return "<src='../models/image/rook-chess-svgrepo-com.png'";
    
  }
  use move1;

}

class Tinh extends Quanco
{
  public function Image1()
  {
    return "src='../models/image/black-bishop-svgrepo-com (1).png' ";
    }

  public function Image2()
  {
      return "<src='../models/image/black-bishop-svgrepo-com.png'";
    
  }
 

  use move2;

  
//   public function move()
//   {
//     $locationArrayBishop = [];

//     for ($row = 1; $row <= 8; $row++) {
//       for ($col = 1; $col <= 8; $col++) {
//     for($n=1;$n<=8; $n++){
//       if($row == $this->locationY+$n){
        
//         if($col == $this->locationX+$n){
//           echo $row;
//           echo $col;  
//           $location = new Tinh("Tinh", $this->color, $col, $row);
//           array_push($locationArrayBishop, $location);
//         }
      
//       }
//     }
    
//     for($n=1;$n<=8; $n++){
//       if($row == $this->locationY-$n){
//         if($col == $this->locationX-$n){
//           echo $row;
//           echo $col;  
//           $location = new Tinh("Tinh", $this->color, $col, $row);
//           array_push($locationArrayBishop, $location);
//         }
//       }
//    }

//    for($n=1;$n<=8; $n++){
//     if($row == $this->locationY-$n){
//       if($col == $this->locationX+$n){
//         $location = new Tinh("Tinh", $this->color, $col, $row);
//         array_push($locationArrayBishop, $location);
//       }
//     }
//   }
  
//   for($n=1;$n<=8; $n++){
//     if($row == $this->locationY+$n){
//       if($col == $this->locationX-$n){
//         $location = new Tinh("Tinh", $this->color, $col, $row);
//         array_push($locationArrayBishop, $location);
//       }
//     }
//  }
//   }
// }
// return $locationArrayBishop;
//   }
}

class Hau extends Quanco
{
    public function Image1()
    {
      return "src='../models/image/queen-chess-svgrepo-com (1).png' ";
      }
  
    public function Image2()
    {
        return "<src='../models/image/queen-chess-svgrepo-com.png' ";
      
    }
  

  use move1, move2;
  
}



class Tuong extends Quanco
{
    public function Image1()
    {
      return "src='../models/image/king-seo-and-web-svgrepo-com (1).png'";
      }
  
    public function Image2()
    {
        return "<src='../models/image/king-seo-and-web-svgrepo-com.png'  ";
      
    }

  

  
  public function move()
  {
    
    $locationArrayKing = [];

    for ($row = 1; $row <= 8; $row++) {
      for ($col = 1; $col <= 8; $col++) {

            if(($col == $this->locationX+1 && $row == $this->locationY+1) || ($col == $this->locationX-1 && $row == $this->locationY-1) || ($col == $this->locationX+1 && $row == $this->locationY-1) || ($col == $this->locationX-1 && $row == $this->locationY+1) ||($col == $this->locationX+1 && $row == $this->locationY) || ($col == $this->locationX && $row == $this->locationY+1) || ($col == $this->locationX && $row == $this->locationY-1) || ($col == $this->locationX-1 && $row == $this->locationY)){
            $location = new location($col, $row);
            array_push($locationArrayKing, $location);
            }
          }
    
        } 
        // else if ($row == $this->locationY) {
    
        //   if ($col == $this->locationX) {
        //   } else {
        //     $location = new Xe("Xe", $this->color, $col, $row);
        //     array_push($locationArray, $location);
        //   }
    
        // }

    return $locationArrayKing;
}


}
class Ma extends Quanco
{
 
    public function Image1()
    {
      return "src='../models/image/horse-chess-svgrepo-com (1).png'";
      }
  
    public function Image2()
    {
        return "src='../models/image/horse-chess-svgrepo-com.png'   ";
      
    }
    
  

  
  public function move()
  {

$locationArrayKnight = [];

for ($row = 1; $row <= 8; $row++) {
  for ($col = 1; $col <= 8; $col++) {

        if(($col==$this->locationX+1 && $row==$this->locationY-2) || ($col==$this->locationX-1 && $row==$this->locationY-2) || ($col==$this->locationX+1 && $row==$this->locationY+2) || ($col==$this->locationX-1 && $row==$this->locationY+2) || ($col==$this->locationX+2 && $row==$this->locationY-1) || ($col==$this->locationX+2 && $row==$this->locationY+1) || ($col==$this->locationX-2 && $row==$this->locationY+1) || ($col==$this->locationX-2 && $row==$this->locationY-1)){
          $location = new location($col, $row);
          array_push($locationArrayKnight, $location);
        }
}
    }
   

return $locationArrayKnight;
  }
}

class Tot extends Quanco
{
    public function Image1()
    {
      return "src='../models/image/pawn-chess-svgrepo-com (1).png'";
      }
  
    public function Image2()
    {
        return "src='../models/image/pawn-chess-svgrepo-com.png'  ";
      
    }


  public function move()
  {
    
    
    $locationArrayPawn = [];

    for ($row = 1; $row <= 8; $row++) {
      for ($col = 1; $col <= 8; $col++) {
        // if ($col == $this->locationX) {
        //   if ($row == $this->locationY) {
        //   } else {
        //     $location = new Xe("Xe", $this->color, $col, $row);
        //     array_push($locationArray, $location);
        //   }
    
        // } else if ($row == $this->locationY) {
    
        //   if ($col == $this->locationX) {
        //   } else {
        //     $location = new Xe("Xe", $this->color, $col, $row);
        //     array_push($locationArray, $location);
        //   }
    
        // }
        // if($row==8 && $col==$this->locationX){
        //  return 0;
        // }else
        
         if(($col==$this->locationX && $row==$this->locationY-1) || ($col==$this->locationX && $row==$this->locationY-2)){
          $location = new location($col, $row);
              array_push($locationArrayPawn, $location);
        }
}
    }
    return $locationArrayPawn;
  }

  public function move2()
  {
    
    
    $locationArrayPawn2 = [];

    for ($row = 1; $row <= 8; $row++) {
      for ($col = 1; $col <= 8; $col++) {
        // if ($col == $this->locationX) {
        //   if ($row == $this->locationY) {
        //   } else {
        //     $location = new Xe("Xe", $this->color, $col, $row);
        //     array_push($locationArray, $location);
        //   }
    
        // } else if ($row == $this->locationY) {
    
        //   if ($col == $this->locationX) {
        //   } else {
        //     $location = new Xe("Xe", $this->color, $col, $row);
        //     array_push($locationArray, $location);
        //   }
    
        // }
        // if($row==8 && $col==$this->locationX){
        //  return 0;
        // }else
        
         if(($col==$this->locationX && $row==$this->locationY-1)){
          $location = new location($col, $row);
              array_push($locationArrayPawn2, $location);
        }
}
    }
    return $locationArrayPawn2;
  }
}
?>