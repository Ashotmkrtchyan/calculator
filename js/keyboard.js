// основные логические функции

function insert(num) {
    let inpvalustring = document.viewform.viewinpute.value;
    if (inpvalustring === "0") {
        if (num === ".") {
            document.viewform.viewinpute.value = document.viewform.viewinpute.value + num;
        } else {
            document.viewform.viewinpute.value = num;
        }
    } else {
        document.viewform.viewinpute.value = document.viewform.viewinpute.value + num;
    }
}

function clean() {
    document.viewform.viewinpute.value = "0";
}

function backspacein() {
    let inpvalustring = document.viewform.viewinpute.value;
    if (inpvalustring.length - 1 !== 0) {
        document.viewform.viewinpute.value = inpvalustring.substring(0, inpvalustring.length - 1);
    } else {
        document.viewform.viewinpute.value = "0"
    }
}

function squareroot() {
    let inpvalustring = parseInt(document.viewform.viewinpute.value);
    document.viewform.viewinpute.value = Math.sqrt(inpvalustring);
    let historyQueue = "squareroot " + inpvalustring + " = " + document.viewform.viewinpute.value;
    queueHIstori(historyQueue);
}

function sin() {
    let inpvalustring = parseInt(document.viewform.viewinpute.value);
    document.viewform.viewinpute.value = Math.sin(inpvalustring);
    let historyQueue = "sin " + inpvalustring + " = " + document.viewform.viewinpute.value;
    queueHIstori(historyQueue);
}

function cos() {
    let inpvalustring = parseInt(document.viewform.viewinpute.value);
    document.viewform.viewinpute.value = Math.cos(inpvalustring);
    let historyQueue = "cos " + inpvalustring + " = " + document.viewform.viewinpute.value;
    queueHIstori(historyQueue);
}

function power() {
    let inpvalustring = parseInt(document.viewform.viewinpute.value);
    document.viewform.viewinpute.value = Math.pow(inpvalustring, 2);
    let historyQueue = "squaring " + inpvalustring + " = " + document.viewform.viewinpute.value;
    queueHIstori(historyQueue);
}

function equal() {
    let inpvalustring = document.viewform.viewinpute.value;
    document.viewform.viewinpute.value = eval(inpvalustring);
    let historyQueue = inpvalustring + " = " + document.viewform.viewinpute.value;
    queueHIstori(historyQueue);
}

function factorial() {
    let inpvalustring = parseInt(document.viewform.viewinpute.value);
    document.viewform.viewinpute.value = rsum(inpvalustring);

    function rsum(element) {
        if (element === 0 || element === 1) {
            return 1;
        } else if (element < 0) {
            return rsum(element * -1);
        } else {
            return element * rsum(element - 1);
        }
    }

    let historyQueue = document.viewform.viewinpute.value;
    queueHIstori(historyQueue);
}


// связать клавиатуру

const arraycharKode = [49, 50, 51, 52, 53, 54, 55, 56, 57, 48, 47, 42, 45, 43, 46];  // массив допустимых символов ввода
document.onkeypress = function (event) {
    if ((arraycharKode.indexOf(event.keyCode) !== -1) === true) {
        insert(event.key);
    } else if (event.keyCode === 35) { // key => #
        squareroot();
    } else if (event.keyCode === 99) { // key => c
        clean();
    } else if (event.keyCode === 8) { // ?????????
        backspacein();
    } else if (event.keyCode === 115) { // key => s
        sin();
    } else if (event.keyCode === 107) { // key => k
        cos();
    } else if (event.keyCode === 94) { // key => ^
        power();
    } else if (event.keyCode === 33) { // key => !
        factorial();
    } else if (event.keyCode === 61 || event.keyCode === 13) { // key => = || key => enter
        equal();
    }
};

// история калькулятора

let queue = [];

function queueHIstori(element) {
    if (queue.length > 20) {
        queue.shift();
        queue.push(element);
        init();
    } else {
        queue.push(element);
        init();
    }
}

function init() {
    let pteg = document.getElementById("history_div");
    let text = "";
    for (let i = queue.length - 1; i >= 0; i--) {
        text += queue[i] + "<br/>";
    }
    pteg.innerHTML = text;
    // alert(JSON.stringify(queue));
}


$(".seve").click(function(){
    $.ajax({
        type: 'POST',
        uel: '/view/Calculate_view.php',
        dataType: 'json',
        data: "param="+ JSON.stringify(queue),
        success: function (html) {
            alert(html);
        }
    })
});