<!DOCTYPE html>
<html>
<head>
    <title>시부렁</title>
</head>
<body>
    <h1>문제5. 데이터 입력받아 화면에 출력하기</h1>
    <form method="POST" action="index.php">
        이름: <input type="text" name="name"/><br/>
        나이: <input type="number" name="age"/><br/>
        키: <input type="number" name="height"/><br/>
        직업: <input type="text" name="job"/><br/>
        날짜: <input type="date" name="date"/><br/>
        E-mail: <input type="mail" name="mail"/><br/>
        <input type="submit" name="submit"/>
    </form>
    <h4>입력된 데이터는 아래와 같습니다.</h4>
    <?php 
        echo "이름: ".$_POST['name']."<br/>";
        echo "나이: ".$_POST['age']."<br/>";
        echo "키: ".$_POST['height']."<br/>";
        echo "직업: ".$_POST['job'];
        echo "날짜: ".$_POST['date']."<br/>";
        echo "E-mail: ".$_POST['mail']."<br/>";
    ?>
</body>
</html>
