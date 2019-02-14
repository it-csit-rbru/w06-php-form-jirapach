<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>แบบฟร์อมเสนอหัวข้อโครงงาน</h1>
    <form action="project_data.php" method="GET">
        <fieldset id="sect1">
            <legend>ส่วนที่ 1 ข้อมูลผู้จัดทำโครงงาน</legend>
            <label for="sid">รหัสนักศึกษา</label><input type="text" name="sid">
            <label for="fname">ชื่อ</label><input type="text" name="fname">
            <label for="lname">นามสกุล</label><input type="text" name="lname"><br>
            <label for="program">สาขาวิชา</label>
            <select name="program">
                <option value="1">วิทยาการคอมพิวเตอร์</option>
                <option value="1">เทคโนโลยีสารสนเทศ</option>
                <option value="1">เทคโนโลยีเครือข่ายคอมพิวเตอร์</option>
                <option value="1">ภูมิสารสนเทศ</option>
                <option value="1">คอมพิวเตอร์ศึกษา</option>
            </select>
            <label for="program">คณะ</label>
            <select name="faculty">
                <option value="1">ครุศาสตร์</option>
                <option value="1">วิทยาการคอมพิวเตอร์และเทคโนโลยีสารสนเทศ</option>
            </select>
            <label for="std_year">ชั้นปี</label>
            <input type="radio" name="std_year" value="1"><label>ปี1</label>
            <input type="radio" name="std_year" value="1"><label>ปี2</label>
            <input type="radio" name="std_year" value="1"><label>ปี3</label>
            <input type="radio" name="std_year" value="1"><label>ปี4</label>
            <input type="radio" name="std_year" value="1"><label>ปี5</label>
            </fieldset>   

          <fieldset id="sect1">
          <legend>ส่วนที่2 ข้อมูลโครงงาน </legend>
            <label for="prj_name_th">ชื่อโครงงาน(ไทย)</label><input type="text" name="prj_name_th"><br>
            <label for="prj_name_en">ชื่อโครงงาน(อังกฤษ)</label><input type="text" name="prj_name_en"><br>
            <label for="prj_type">ประเภทโครงงาน</label>
      <select name="prj_type">
        <option value="1">โครงงานประเภทสำรวจ</option>
        <option value="2">โครงงานประเภทศึกษาค้นคว้า</option>
        <option value="3">โครงงานประเภททดลอง</option>
        <option value="4">โครงงานประเภทสิ่งประดิษฐ์</option>
      </select><br>
        <label>เครื่องมือที่ใช้</label>
        <input type="checkbox" name="prj_tool[]"><label>HTML</label>
        <input type="checkbox" name="prj_tool[]"><label>CSS</label>
        <input type="checkbox" name="prj_tool[]"><label>JavaScript</label>
        <input type="checkbox" name="prj_tool[]"><label>Bootstrap</label>
        <input type="checkbox" name="prj_tool[]"><label>Material Design</label>
        <input type="checkbox" name="prj_tool[]"><label>Angular</label>
        <input type="checkbox" name="prj_tool[]"><label>React</label>
        <input type="checkbox" name="prj_tool[]"><label>PHP</label>
        <input type="checkbox" name="prj_tool[]"><label>My SQL</label>
        <input type="checkbox" name="prj_tool[]"><label>ChartJS</label><br>
        <label>อาจารย์ที่ปรึกษา</label>
        <select name="Prj_adviosor">
            <option value="1">ผศ.บุญเรือน พฤกษ์ศศิธร</option>
            <option value="2">ผศ.ทิพย์วรรณ ฟูเฟื่อง</option>
            </legend>
        </select>
        <input type="submit" value="Go...">
     </fieldset>
      
    </form>
</body>
</html>