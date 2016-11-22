<!DOCTYPE htmal>
<html>
<head>
    <title>DickyCR 3MI-6 UTS.php</title>
</head>
<body>
<table border='1'>
  <tr>
    <th rowspan="2">INPUT</th>
    <th colspan="5">OUTPUT</th>
  </tr>
  <tr>
    <th>A</th>
    <th>E</th>
    <th>I</th>
    <th>U</th>
    <th>O</th>
  </tr>
  <tr>
    <td>
     <?php
      $n1="DICKY CIPTO R";
      echo $n1;
     ?>
    </td>
    <td>
     <?php
     $dor = substr_count($n1,"A");
     echo $dor
     ?>
    </td>
    <td>
     <?php
     $dor = substr_count($n1,"E");
     echo $dor
     ?>
    </td>
     <td>
     <?php
     $dor = substr_count($n1,"I");
     echo $dor
     ?>
    </td>
     <td>
     <?php
     $dor = substr_count($n1,"U");
     echo $dor
     ?>
    </td>
     <td>
     <?php
     $dor = substr_count($n1,"O");
     echo $dor
     ?>
    </td>
   </tr>   
</table>
</body>
</html>   
