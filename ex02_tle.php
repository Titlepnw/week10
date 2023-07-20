<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php&HTML</title>
    <style>
h1{
  text-align: center;
  background: blue;
  color: white;
  }
</style>
</head>
<body>
 <h1>ข้อมูลส่วนบุคคล</h1>
 <hr>
 <div style = border : solid; padding: 30px; >
<?php
 echo "รหัสนักศึกษา : 644230052 <br>";
 echo  "<span style='color:green'> ชื่อสกุล : ภานุวัฒน์ สิทธิรัตน์</span> <br>";
 echo "หมู่เรียน:64/38 ";
 echo "<br><b>สาขาวิชาเทคโนโลยีสารสนเทศ</b>";
 echo "<br>มหาวิทยาลัยราชภัฏนครปฐม";
  
 ?>
</div>
<hr>

<h1>การจัดการกับตัวแปร</h1>
<hr>
<?php
$fname = "Panuwat";
$lname = "Sittirat";
$age="20";

echo $fname." " ;
echo $lname; 
echo  "<br>".$fname." ",$lname;
echo  "<br>ฉันอายุ" .$age."ปี ";

?>
<hr>
  <br>
<form action="">
    <label for="fname">NAME</label>
    <input  align: center type="text" id="fname" name="fname" Value=" <?php echo $fname ?>">
    <label for="lname">SURNAME</label>
    <input type="text" id="lname" name="lname" Value="<?php echo $lname ?>">
</form>


</body>
</html>

