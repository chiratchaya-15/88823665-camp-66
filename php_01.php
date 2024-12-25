<h1>File index.php<h1>
<?php
// กำหนดค่าของแม่สูตรคูณ
$multiplier = 2; // สูตรคูณแม่ 2

// แสดงหัวข้อ
echo "<h1 style='text-align: center;'>ตารางสูตรคูณของ $multiplier</h1>";

// เริ่มแสดงตารางสูตรคูณ
echo "<tr><th>จำนวน</th><th>ผลลัพธ์</th></tr><br>";

// ทำการวนลูปเพื่อแสดงตารางสูตรคูณ
for ($i = 1; $i <= 12; $i++) {
    $result = $multiplier * $i;
    echo $multiplier." x ".$i." = ".$result."<br>";
}
// ปิดตาราง
echo "</table>";
?>