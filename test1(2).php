<?php
session_start();
include('connect.php');
ini_set('display_errors', 1);
error_reporting(E_ALL);


// Проверка подключения
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}



// Запрос для получения вопросов и ответов из базы данных
$sql = "SELECT * FROM variant_otvetov WHERE id_test=1";
$sql1 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=1";


$result = $connect->query($sql);
$result1 = $connect->query($sql1);

$info = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=1")) {
      $info = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

$sql2 = "SELECT * FROM variant_otvetov WHERE id_test=2";
$sql3 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=2";


$result2 = $connect->query($sql2);
$result3 = $connect->query($sql3);

$info2 = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=2")) {
      $info2 = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

$sql4 = "SELECT * FROM variant_otvetov WHERE id_test=6";
$sql5 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=6";


$result4 = $connect->query($sql4);
$result5 = $connect->query($sql5);

$info3 = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=6")) {
      $info3 = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

$sql6= "SELECT * FROM variant_otvetov WHERE id_test=7";
$sql7 = "SELECT otvet1, otvet2, otvet3, otvet4 FROM variant_otvetov WHERE id_test=7";


$result6 = $connect->query($sql6);
$result7 = $connect->query($sql7);

$info4 = [];
  if($query = $connect -> query("SELECT otvet1, otvet2, otvet3, otvet4  FROM variant_otvetov WHERE id_test=7")) {
      $info4 = $query -> fetch_all(PDO:: FETCH_ASSOC);
  } 
  else {
    print_r($connect->errorInfo());
}

?>


<!doctype html>
<html lang="en">
 
<head>

  <meta charset="UTF-8" />
  <title>Вес тела</title>
  <link rel="shortcut icon" href="logotip.png">
    
  <link rel="stylesheet" href="test1.css">
   
  <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:400,600,700');
 
        *, *:before, *:after {margin: 0; padding: 0; box-sizing: border-box;}
        body {
            font: 14px 'Open Sans', 
            sans-serif;
	        background: linear-gradient(-45deg, #0d00a1,#8db9eb);
	        background-size: 400% 400%;
	        animation: gradient 10s ease infinite;
	        height: 100vh;
            color:white;
}

    @keyframes gradient {
	0% {
		background-position: 0% 50%;
	}
	50% {
		background-position: 100% 50%;
	}
	100% {
		background-position: 0% 50%;
	}
}
        
 
        .top { padding-right: 20px; background: #261F41; text-align: right; }
        a { color: rgba(255,255,255,0.6); text-transform: uppercase; text-decoration: none; line-height: 42px; }
 
        h1 {padding: 50px 0; font-weight: 400; text-align: center;}
         
        .main {margin: 0 auto; max-width: 500px;}
        .main .quizsection {margin-bottom: 20px;}
 </style>
  
</head>
 
<body>
 
<h1>Тест по теме "Вес тела"</h1>
 
<section class="main">
 
<form name="quiz" class="quizform" method="post">
 
<div class="quizsection">
 
 
            <?php foreach($result as $sd): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd['vopros']; ?></h2>
            <?php endforeach; ?>
     
    <?php foreach($info as $sd1): ?>
    <div class="answer">
        <input type="radio" value="0" name="q1" id="value1">
        <span><?php echo $sd1[0]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="0" name="q1" id="value2">
        <span><?php echo $sd1[1]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="0" name="q1" id="value3">
        <span><?php echo $sd1[2]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="1" name="q1" id="value4">
        <span><?php echo $sd1[3]; ?></span>
    </div>
    <?php endforeach; ?>
 
</div>
 
<div class="quizsection">
 
            <?php foreach($result2 as $sd2): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd2['vopros']; ?></h2>
            <?php endforeach; ?>

    <?php foreach($info2 as $sd2): ?>
    <div class="answer">
        <input type="radio"value="0" name="q2" id="value1">
        <span><?php echo $sd2[0]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="0" name="q2" id="value2">
        <span><?php echo $sd2[1]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="1" name="q2" id="value3">
        <span><?php echo $sd2[2]; ?></span>
    </div>
 
    <div class="answer">
        <input type="radio" value="0" name="q2" id="value4">
        <span><?php echo $sd2[3]; ?></span>
    </div>
    <?php endforeach; ?>
 
</div>
 
<div class="quizsection">
 
            <?php foreach($result4 as $sd3): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd3['vopros']; ?></h2>
            <?php endforeach; ?>
 
    <?php foreach($info3 as $sd3): ?>
    <div class="answer">
        <input name="q3" value="0" id="value1" type="radio" /> 
        <span><?php echo $sd3[0]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q3" value="0" id="value2" type="radio" />
        <span><?php echo $sd3[1]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q3" value="1" id="value3" type="radio" />
        <span><?php echo $sd3[2]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q3" value="0" id="value4" type="radio" />
        <span><?php echo $sd3[3]; ?></span>
    </div>
    <?php endforeach; ?>
</div>

<div class="quizsection">
 
            <?php foreach($result6 as $sd4): ?>
            <!-- Заголовок с вопросом -->
                <h2 class="title"><?php echo $sd4['vopros']; ?></h2>
            <?php endforeach; ?>
 
    <?php foreach($info4 as $sd4): ?>
    <div class="answer">
        <input name="q4" value="1" id="value1" type="radio" /> 
        <span><?php echo $sd4[0]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q4" value="0" id="value2" type="radio" />
        <span><?php echo $sd4[1]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q4" value="0" id="value3" type="radio" />
        <span><?php echo $sd4[2]; ?></span>
    </div>
 
    <div class="answer">
        <input name="q4" value="0" id="value4" type="radio" />
        <span><?php echo $sd4[3]; ?></span>
    </div>
    <?php endforeach; ?>
</div>
 
 
</form>
 
</section>
 
<button class="proverka_otvetov" method="post" name="submit" type="submit">Проверить ответы</button> 
<?php
$sqlll = '';
if(isset($_POST['submit'])) {
    $score = 0;
    $q1 = $_POST['q1'];
    $q2 = $_POST['q2'];
    $q3 = $_POST['q3'];
    $q4 = $_POST['q4'];
    if($q1 == 1) {
        $score++;
    }
    if($q2 == 1) {
        $score++;
    }
    if($q3 == 1) {
        $score++;
    }
    if($q4 == 1) {
        $score++;
    }

    $_SESSION['score'] = $score;
    $username = "student3";
    // $username = $_SESSION['login'];
    // $username = mysqli_real_escape_string($connect, $_SESSION['login']);
    // $score = mysqli_real_escape_string($connect, $score);
    $sqlll = "INSERT INTO yspevaemost (id_student, name_student, ocenka) VALUES (DEFAULT, '$username', '$score')";
    // header("Location: result.php");
    if (mysqli_query($connect, $sqlll)) {
        $sqlll = $_POST['sqlll'];
        echo "данные отправлены";  
    
    } else {
        echo "Ошибка" . $sqlll . "<br>" . mysqli_error($connect);
    }
}
?>


<script language='JavaScript1.2'>
    
    if (window.Event)
    document.captureEvents(Event.MOUSEUP);
     
    function nocontextmenu() {
    event.cancelBubble = true, event.returnValue = false;
     
    return false;
    }
     
    function norightclick(e) {
    if (window.Event) {
    if (e.which == 2 || e.which == 3) return false;
    }
    else if (event.button == 2 || event.button == 3) {
    event.cancelBubble = true, event.returnValue = false;
    return false;
    }
    }
     
    if (document.layers)
    document.captureEvents(Event.MOUSEDOWN);
     
    document.oncontextmenu = nocontextmenu;
    document.onmousedown = norightclick;
    document.onmouseup = norightclick;
    </script> 
</body>
</html>