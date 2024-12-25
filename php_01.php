<h1>File index.php<h1>
<?php
// กำหนดค่าของแม่สูตรคูณ
$multiplier = 2; // สูตรคูรแม่2

// แสดงหัวข้อ
echo "<h1>ตารางสูตรคูณของ $multiplier</h1>";

// เริ่มแสดงตารางสูตรคูณ
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr><th>จำนวน</th><th>ผลลัพธ์</th></tr>";

// ทำการวนลูปเพื่อแสดงตารางสูตรคูณ
for ($i = 1; $i <= 12; $i++) {
    $result = $multiplier * $i;
    echo "<tr><td>$multiplier x $i</td><td>$result</td></tr>";
}

// ปิดตาราง
echo "</table>";
?>        