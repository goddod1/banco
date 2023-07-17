<?php session_start(); ?>
<?php
include '../models/Quanco.php';
// include 'Location.php';

// $currentLocation = new Location($_POST['x'], $_POST['y']);


$lct1 = new Xe($_POST['ten'], $_POST['mau'], $_POST['x'], $_POST['y']);
$lct2 = new Hau($_POST['ten'], $_POST['mau'], $_POST['x'], $_POST['y']);
$lct3 = new Tinh($_POST['ten'], $_POST['mau'], $_POST['x'], $_POST['y']);
$lct4 = new Ma($_POST['ten'], $_POST['mau'], $_POST['x'], $_POST['y']);
$lct5 = new Tuong($_POST['ten'], $_POST['mau'], $_POST['x'], $_POST['y']);
$lct6 = new Tot($_POST['ten'], $_POST['mau'], $_POST['x'], $_POST['y']);



?>
<!DOCTYPE html>
<html>

<head>


   <title>Document</title>
   <link rel="stylesheet" href="css.css">
</head>

<body>
   <form method="post">
      <label for="cars">Chọn màu quân:</label>
      <select name="mau">
         <option value="false">quân trắng</option>
         <option value="true">quân đen</option>
      </select>

      <label for="cars">Chọn quân cờ:</label>
      <select name="ten">
         <option value="xe">xe</option>
         <option value="ma">mã</option>
         <option value="tinh">tịnh</option>
         <option value="hau">hậu</option>
         <option value="vua">vua</option>
         <option value="tot">tốt</option>
      </select>
      <label>nhap toa do x:</label>
      <input type="text" name="x">
      <label>nhap toa do y:</label>
      <input type="text" name="y">
      <input type="submit" value="submit" name="submit">
   </form>
   <h3>Chess Board using Nested For Loop</h3>
   <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">


      <?php
      if (isset($_POST['submit'])) {
         if($_POST['x']<=8 && $_POST['x']>=1 && $_POST['y']<=8 && $_POST['y']>=1){
         $locationArray = $lct1->move1();
         $locationArrayQueen = $lct2->move1();
         $locationArrayQueen2 = $lct2->move3();
         
         $locationArrayBishop = $lct3->move3();
         $locationArrayKnight = $lct4->move();
         $locationArrayKing = $lct5->move();
         $locationArrayPawn = $lct6->move();
         $locationArrayPawn2 = $lct6->move2();

         echo $_POST['ten'];

         for ($row = 1; $row <= 8; $row++) {
            echo "<tr>";
            for ($col = 1; $col <= 8; $col++) {
               $total = $row + $col;
               switch ($_POST['ten']) {
                  case "xe": // rook
                     loopLocation($locationArray, $lct1, $col, $row, $total % 2 != 0);
                     break;
                  case "hau": // queen
                     if($lct2->locationX == $col|| $lct2->locationY==$row){
                     loopLocation($locationArrayQueen, $lct2, $col, $row, $total % 2 != 0);}
                  else{
                     loopLocation($locationArrayQueen2, $lct2, $col, $row, $total % 2 != 0);

                  }
                     break;
                  case "tinh":
                     loopLocation($locationArrayBishop, $lct3, $col, $row, $total % 2 != 0);
                     break;
                  case "ma":
                     loopLocation($locationArrayKnight, $lct4, $col, $row, $total % 2 != 0);
                     break;
                  case "vua":
                     loopLocation($locationArrayKing, $lct5, $col, $row, $total % 2 != 0);
                     break;
                  case "tot":
                     if($lct6->locationY==7){
                     loopLocation($locationArrayPawn, $lct6, $col, $row, $total % 2 != 0);
                     }else if($lct6->locationY<7){
                     loopLocation($locationArrayPawn2, $lct6, $col, $row, $total % 2 != 0);
                     }else{
                        echo "<script>alert('quân tốt không thể ở ô hàng 8');</script>";
                     }
                     break;
               }
               // loopLocation($locationArrayPawn, $lct6, $col, $row, $total % 2 != 0);
            }
            echo "</tr>";
         }

         foreach ($locationArray as $location) {
            echo ($location->locationX . $location->locationY . " ");
         }
      }
   }

      function loopLocation($locationArray, $lct, $col, $row, $isOddNumber)
      {
         $isChangedColor = false;
         if ($row == $lct->locationY && $lct->locationX == $col) {
            echo "<td height=30px width=30px bgcolor=red>" . $lct->getImage() . "</td>";
            $isChangedColor = true;
         }
         foreach ($locationArray as $location) {
            if ($row == $location->locationY1 && $location->locationX1 == $col) {
               echo "<td height=30px width=30px bgcolor=blue></td>";
               $isChangedColor = true;
               // break;
            }
         }
         if (!$isChangedColor) {
            if ($isOddNumber) {
               echo "<td height=30px width=30px bgcolor=#000000></td>";
            } else {
               echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
         }
      }

     
      ?>
   </table>

</body>

</html>