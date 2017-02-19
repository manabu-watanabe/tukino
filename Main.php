<?php
function getDirLst($dir) {
    $files = scandir($dir);
    $files = array_filter($files, function ($file) {
        return !in_array($file, array('.', '..', '.DS_Store'));
    });

    $list = array();
    foreach ($files as $file) {
        $fullpath = rtrim($dir, '/') . '/' . $file;
        if (is_dir($fullpath)) {
            $list[] = basename($fullpath);
        }
    }
    return $list;
}

function getFileList($dir) {
    $files = scandir($dir);
    $files = array_filter($files, function ($file) {
        return !in_array($file, array('.', '..',  '.DS_Store'));
    });

    $list = array();
    foreach ($files as $file) {
        $fullpath = rtrim($dir, '/') . '/' . $file;
        if (is_file($fullpath)) {
            $list[] = $fullpath; // basename($fullpath); //basename($fullpath, ".php" );
        }
    }
    return $list;
}
?>

<!DOCTYPE html>
<html>
<head>
<meta charset='utf-8'>
<title>ふわふわクローゼット</title>
<script type="text/javascript" src="js/script.js"></script>
<link rel="stylesheet" href="default.css" />

</head>
<body>

<div id="header">
  <div class="header_banner">
    <a href="/"><img src="parts/title.png" alt="ふわふわクローゼットタイトルイメージ" /></a>
  </div>
</div>

<?php
$param_select_base = $_GET['base'];
?>
<form name="main">

<table>
  <tr>
  </td>
   <td>
     <table><tr><td>
     <select name="base" onChange="ch_base();">
       <?php
       $select_base = "";
       $baselist = getDirLst("./image");
       foreach ($baselist as $base) {
         if ($param_select_base == "" or $param_select_base == $base) {
           echo "<option value=\"$base\" selected>$base</option>\n";
           $select_base = $base;
         } else {
           echo "<option value=\"$base\">$base</option>\n";
         }
       }
       ?>
     </select>
   </td></td>
   <tr><td>
    <div class="room" style="float:left; position: relative; width: 250px; height: 400px;">
  <?php
    echo "<img lass=\"lv0\" name=\"bass\" src=\"image/$select_base/base.png\" >";
  ?>
  <img name="legwear" class="lv1" src="image/blanc_legwear.png">
  <img name="legarmor" class="lv2" src="image/blanc_legarmor.png">
  <img name="bodywear" class="lv3" src="image/blanc_bodywear.png">
  <img name="arm" class="lv4" src="image/blanc_arm.png" >
  <img name="bodyarmor" class="lv5" src="image/blanc_bodyarmor.png" >
  <img name="head" class="lv6" src="image/blanc_head.png">
    </dev>
  </td></td>
</table>





  </td>

  <td>

<p>
<dev>頭防具</dev>
<select name="head" onChange="ch_head();">
  <option Value="image/blanc_head.png">未選択</option>
  <?php
  $headlist = getFileList("image/".$select_base."/head/");
  foreach ($headlist as $head) {
    $head_name = basename($head, '.png');
    echo "<option Value=\"$head\">$head_name</option>";
  }
  ?>
</select>
</p>

<p>
<dev>胴アーマー</dev>
<select name="bodyarmor" onChange="ch_bodyarmor();">
  <option Value="image/blanc_bodyarmor.png">未選択</option>
  <?php
  $headlist = getFileList("image/".$select_base."/bodyarmor/");
  foreach ($headlist as $head) {
    $head_name = basename($head, '.png');
    echo "<option Value=\"$head\">$head_name</option>";
  }
  ?>
</select>
</p>


<p>
<dev>腕防具</dev>
<select name="arm" onChange="ch_arm();">
  <option Value="image/blanc_arm.png">未選択</option>
  <?php
  $headlist = getFileList("image/".$select_base."/arm/");
  foreach ($headlist as $head) {
    $head_name = basename($head, '.png');
    echo "<option Value=\"$head\">$head_name</option>";
  }
  ?>
</select>
</p>

<p>
<dev>脚アーマー</dev>
<select name="legarmor" onChange="ch_legarmor();">
  <option Value="image/blanc_legarmor.png">未選択</option>
  <?php
  $headlist = getFileList("image/".$select_base."/legarmor/");
  foreach ($headlist as $head) {
    $head_name = basename($head, '.png');
    echo "<option Value=\"$head\">$head_name</option>";
  }
  ?>
</select>
</p>

<p>
<dev>胴ウェア</dev>
<select name="bodywear" onChange="ch_bodywear();">
  <option Value="image/blanc_bodywear.png">未選択</option>
  <?php
  $headlist = getFileList("image/".$select_base."/bodywear/");
  foreach ($headlist as $head) {
    $head_name = basename($head, '.png');
    echo "<option Value=\"$head\">$head_name</option>";
  }
  ?>
</select>
</p>

<p>
<dev>脚ウェア</dev>
<select name="legwear" onChange="ch_legwear();">
  <option Value="image/blanc_legwear.png">未選択</option>
  <?php
  $headlist = getFileList("image/".$select_base."/legwear/");
  foreach ($headlist as $head) {
    $head_name = basename($head, '.png');
    echo "<option Value=\"$head\">$head_name</option>";
  }
  ?>
</select>
</p>

</tr>
</table>

</from>

</body>
</html>
