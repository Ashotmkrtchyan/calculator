<?php

//function get_text($id){
//    $rezalt = mysqli_query( "SELECT id,ip,hitory FROM statti WHERE id='$id'");
//    $row = mysqli_fetch_array($rezalt,MYSQLI_ASSOC);
//    return $row;
//}


//if ($_POST['param']){
//    $param = json_decode($_POST['param']);
//    echo  json_encode($param);
//
//    exit();
//}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../css/Maine_Index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <title>Calculat</title>
</head>
<body>
<div class="bodey_grid">
    <div class="calculate_body grid">
        <div class="form_class grid_form_div">
            <form action="" method="post" name="viewform" class="grid_form_form">
                <input type="text" class="calculate_input" id="calulate_input_out" name="viewinpute" value="0" readonly>
            </form>
        </div>
        <div class="calculate_line grid_item">
            <div class="calculate_item" data="37" onclick="squareroot()">&radic;</div>
            <div class="calculate_item calculate_log" data="108"><span> log<sub><small>n</small></sub>X </span></div>
            <div class="calculate_item" data="99" onclick="clean()">C</div>
            <div class="calculate_item" data="8" id="backspace" onclick="backspacein()">⃖</div>
        </div>
        <div class="calculate_line grid_item">
            <div class="calculate_item" data="115" onclick="sin()">sin</div>
            <div class="calculate_item" data="107" onclick="cos()">cos</div>
            <div class="calculate_item" data="94" onclick="power()">X<sup><small>2</small></sup></div>
            <div class="calculate_item" data="47" onclick="insert('/')">&divide;</div>
        </div>
        <div class="calculate_line grid_item">
            <div class="calculate_item" data="55" onclick="insert('7')">7</div>
            <div class="calculate_item" data="56" onclick="insert('8')">8</div>
            <div class="calculate_item" data="57" onclick="insert('9')">9</div>
            <div class="calculate_item" data="42" onclick="insert('*')">*</div>
        </div>
        <div class="calculate_line grid_item">
            <div class="calculate_item" data="52" onclick="insert('4')">4</div>
            <div class="calculate_item" data="53" onclick="insert('5')">5</div>
            <div class="calculate_item" data="54" onclick="insert('6')">6</div>
            <div class="calculate_item" data="45" onclick="insert('-')">-</div>
        </div>
        <div class="calculate_line grid_item">
            <div class="calculate_item" data="49" onclick="insert('1')">1</div>
            <div class="calculate_item" data="50" onclick="insert('2')">2</div>
            <div class="calculate_item" data="51" onclick="insert('3')">3</div>
            <div class="calculate_item" data="43" onclick="insert('+')">+</div>
        </div>
        <div class="calculate_line grid_item">
            <div class="calculate_item" data="109" onclick="factorial()">n!</div>
            <div class="calculate_item" data="48" onclick="insert('0')">0</div>
            <div class="calculate_item" data="46" onclick="insert('.')">.</div>
            <div class="calculate_item" data="61" onclick="equal()">=</div>
        </div>
    </div>
    <div class="history_div" name="history_div" id="history_div">
    </div>
    <div class="log_out">
        <div id="seve" class="seve">seve</div>
        <a href="#">Login Out</a>
    </div>
</div>
<?php

?>
<script src="../js/keyboard.js"></script>
</body>
</html>