<!DOCTYPE html>
<html>
<head>

    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
<label for="cars">Chọn màu quân:</label>
<select>
  <option value="trang">quân trắng</option>
  <option value="den">quân đen</option>
</select>

<label for="cars">Chọn quân cờ:</label>
<select>
  <option value="trang">xe</option>
  <option value="den">mã</option>
  <option value="trang">tượng</option>
  <option value="den">hậu</option>
  <option value="trang">vua</option>
  <option value="den">tốt</option>
</select>
<label for="cars">Chọn quân cờ:</label>
<select>
  <?php for($i==1; $i<=64; $i++):?>
  <option value=""><?=$i;?></option>
  <?php endfor;?>
</select>
<input type="submit" value="submit">
<table>
  <tr>
    <td>a1</td>
    <td class="color">a2</td>
    <td>a3</td>
    <td class="color">a4</td>
    <td>a5</td>
    <td class="color">a6</td>
    <td>a7</td>
    <td class="color">a8</td>
  </tr>
  <tr>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
  </tr>
  <tr>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
  </tr>
  <tr>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
  </tr>
  <tr>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
    <td class="color"></td>
    <td></td>
  </tr>
    </table>
</body>
</html>