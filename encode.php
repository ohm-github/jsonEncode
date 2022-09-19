<!DOCTYPE html>
<html>
<body>

<?php

$string = "{\"hn\":\"019844-62\",\"patientName\":\"\\u0e19\\u0e32\\u0e22 \\u0e01\\u0e27\\u0e34\\u0e19 \\u0e2a\\u0e2b\\u0e30\\u0e28\\u0e31\\u0e01\\u0e14\\u0e34\\u0e4c\\u0e21\\u0e19\\u0e15\\u0e23\\u0e35\",\"drOrders\":[\"\\u0e17\\u0e1e\\u0e0d. \\u0e01\\u0e0a\\u0e1e\\u0e23 \\u0e1e\\u0e48\\u0e27\\u0e07\\u0e1e\\u0e31\\u0e19\\u0e18\\u0e38\\u0e4c\\u0e07\\u0e32\\u0e21\"],\"drugName\":[\"Accusol 35 Accum oon \\u0e02\\u0e19\\u0e32\\u0e14 5 \\u0e25\\u0e34\\u0e15\\u0e23\",\"Duocetz(paracetamol 325 mg + tramadol 37.5 mg) tab\"],\"pharmacyQueueNo\":\"1B0001\",\"countDrugBlisterPack\":2}"; 
//String ที่ได้มา

$string = strtoupper($string); 
//ปรับให้ String ที่ได้มา เป็นตัวใหญ่ทั้งหมด เพราะการเทียบ ใน ENT_COMPAT จะตรงการ อักขระตัวใหญ่เท่านั้น

$string = preg_replace('/\\\U([0-9A-F]+)/', '&#x$1;', $string);
//ตัด string ที่ขึ้นต้น ด้วย \u ตรงนี้ที่ต้องใส่ "\" หลายอันเพราะมันเป็น syntax ซ้ำในฟังก์ชั่น

echo html_entity_decode($string, ENT_COMPAT, 'UTF-8');
//แสดงผลลัพธ์แปลง Format encode unicode to string

?>

</body>
</html>
