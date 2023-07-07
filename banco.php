<html>
   
   <head>
      <title>Vẽ bàn cờ bằng PHP</title>
      <link rel="stylesheet" href="css.css">
   </head>
   <body>
   
      <table width="270px" cellspacing="0px" cellpadding="0px" border="1px">  
      
	  <!-- Ô có độ rộng 270px (8 cột x 60px) -->  
      <?php  
      for($row=1; $row <= 8; $row++)  
      {  
        if(isset($_POST['y'])){
          $row=$_POST['y'];
        }
          echo "<tr>";  
          for($col=1; $col <=8; $col++)  
          {  
            if(isset($_POST['x'])){
              $row=$_POST['x'];
            }
            $total=$row + $col;  
            if($total%2 == 0)  
            {  
              echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
            }  
            else  
            {  
              echo "<td height=30px width=30px bgcolor=#000000></td>";  
            }  
          }  
          if(isset($_POST['submit'])){
            echo "<td height=30px width=30px bgcolor=red></td>"; 
          }
          echo "</tr>";  
      }  
      ?>  
     </table>
       <form method="post">
        <label>Nhap toa do x:</label>
        <input type="text" name="x">
        <label>Nhap toa do y:</label>
        <input type="text" name="y">
        <input type="submit" value="submit" name="submit">
       </form>
   </body>
</html>