<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <h1>문제6. 원하는 버튼을 눌러서 구구단 확인하기</h1>
    <p>구구단을 보고싶은 번호를 클릭하세요.</p>
    <form method="POST" action="index.php">
        <?php 
            for($i=2;$i<100;$i++){
                echo "<button type='reset' name='button' value='".$i."'>".$i."단</button>";
            }
            echo "</form>";
            echo "선택한 숫자, ".$_POST['button']."의 구구단은 아래와 같습니다.<br/>";
            for($i=1;$i<10;$i++){
                echo $_POST['button']." X ".$i." = ".($_POST['button']*$i)."<br/>";
            }
        ?>
</body>
</html>
