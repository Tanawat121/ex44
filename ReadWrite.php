<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $nickname = $_POST['nickname'];
    
    $data = "$name, $nickname\n";
    file_put_contents("student.txt", $data, FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บันทึกข้อมูลนักเรียน</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f7f6;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 80%;
            max-width: 500px;
        }
        h2 {
            text-align: center;
            color: #4CAF50;
        }
        label {
            font-size: 18px;
            margin-bottom: 8px;
            display: inline-block;
            color: #555;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
        }
        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            width: 100%;
        }
        button:hover {
            background-color:rgb(167, 199, 51);
        }
        pre {
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            padding: 10px;
            font-family: 'Courier New', Courier, monospace;
            white-space: pre-wrap;
            word-wrap: break-word;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>แบบฟอร์มบันทึกข้อมูล</h2>
        <form method="post">
            <label for="name">ชื่อ:</label>
            <input type="text" id="name" name="name" required><br>
            
            <label for="nickname">ชื่อเล่น:</label>
            <input type="text" id="nickname" name="nickname" required><br>
            
            <button type="submit">บันทึกข้อมูล</button>
        </form>

        <h2>ข้อมูลที่บันทึกไว้</h2>
        <pre><?php echo file_exists("student.txt") ? file_get_contents("student.txt") : "ยังไม่มีข้อมูล"; ?></pre>
    </div>
</body>
</html>
