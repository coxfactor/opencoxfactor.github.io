<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>MySQL에 접속하여 데이터 insert하기</h1>
    <?php 
    //mysql 접속 계정 정보 설정
    $mysql_host = 'coxfactorphp.mysql.database.azure.com';
    $mysql_user = 'milo';
    $mysql_password = '102rlrkq!@!@';
    $mysql_db = 'coxfactor';
    //connetc 설정(host,user,password)
    $conn = mysql_connect($mysql_host,$mysql_user,$mysql_password);
    //db 연결
    $dbconn = mysql_select_db($mysql_db,$conn);
    //charset UTF8
    mysql_query("set names utf8");
    //쿼리문 작성
    $query = "select * from tb_student";
    //쿼리보내고 결과를 변수에 저장
    $result = mysql_query($query);
    echo "현재 데이터는 아래와 같습니다.<br/>";
    while($row = mysql_fetch_array($result)){
        echo "번호: ".$row[id]."/ 이름: ".$row[name]."/ 성별: ".$row[sex]
        ."/ 몸무게: ".$row[weight]."/ 키: ".$row[height]."/ 영어점수: ".$row[engScore]
        ."/ 취미: ".$row[specialty]."<br/>";
    }
    echo "<br/><h1>데이터 Insert</h1>입력하고자 하는 데이터를 입력하고 제출을 누르세요.";
    ?>
    <form method="POST" action="index.php">
        이름: <input type="text" name="name"/><br/>
        성별: <input type="text" name="sex"/><br/>
        몸무게: <input type="text" name="weight"/><br/>
        키: <input type="text" name="height"/><br/>
        영어점수: <input type="text" name="engScore"/><br/>
        취미: <input type="text" name="specialty"/><br/>
        <input type="submit" name="answer"/><br/>
    </form>
    <?php 
        $insertQuery = "insert into tb_student (name,sex,weight,height,engScore,specialty)"
        ." values ('".$_POST['name']."','".$_POST['sex']."',".$_POST['weight'].","
        .$_POST['height'].",".$_POST['engScore'].",'".$_POST['specialty']."')";
        $result = mysql_query($insertQuery,$conn);
        //데이터가 전달되었으면 새로고침하기
        if (($_POST['name'] != NULL)&($_POST['sex'] != NULL)&($_POST['weight'] != NULL)
            &($_POST['height'] != NULL)&($_POST['engScore'] != NULL)){
         echo "<meta http-equiv='refresh' content='1;index.php' />";
        }
    ?>
 
</body>
</html>
