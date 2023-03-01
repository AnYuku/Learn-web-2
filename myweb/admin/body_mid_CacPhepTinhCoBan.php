<script>
    $(document).ready(function() {
        $('#KQAJAX').click(function(e) {
            e.preventDefault();
            var a = $('#txtSoA').val();
            var b = $('#txtSoB').val();
            var selector = $('#taskOption').val();

            $.ajax({
                url: 'admin/xuly.php',
                type: 'post',
                dataType: 'html',
                data: {
                    soA : a,
                    soB : b,
                    taskOption : selector
                }
            }).done(function(ketqua) {
                $('#txtKQ').val(ketqua);
            });
        });
    });
</script>

<?php
    $txtKQ = 0;
    $txtSoA = 0;
    $txtSoB = 0;
    $taskOption = "";
    if(isset($_REQUEST["KQPHP"])){
        $a=$_POST["txtSoA"];
        $b=$_POST["txtSoB"];
        $selector=$_POST["taskOption"];
        if($a == "" && $b == "") {

        } else {
            switch($selector){
                case "Plus":
                    $txtKQ = $a + $b;
                    $txtSoA = $a;
                    $txtSoB = $b;
                    $taskOption = $selector;
                    break;
                case "Minus":
                    $txtKQ = $a - $b;
                    $txtSoA = $a;
                    $txtSoB = $b;
                    $taskOption = $selector;
                    break;
                case "Multi":
                    $txtKQ = $a * $b;
                    $txtSoA = $a;
                    $txtSoB = $b;
                    $taskOption = $selector;
                    break;
                case "Divide":
                    $txtKQ = $a / $b;
                    $txtSoA = $a;
                    $txtSoB = $b;
                    $taskOption = $selector;
                    break;
            }
        }
    }
?>

<div>
    <form id="myForm" method="POST" action="">
        <a>Phep Tinh Co Ban</a>
        <div>
            <a>So A</a>
            <input type="text" id="txtSoA" name="txtSoA" value="<?php echo $txtSoA?>"/>
        </div>
        <div>
            <a>So B</a>
            <input type="text" id="txtSoB" name="txtSoB" value="<?php echo $txtSoB?>"/>
        </div>
        <div>
            <div>
                <a>KQ</a>
                <div id="ketqua">
                    <input type="text" id="txtKQ" name="txtKQ" value="<?php echo $txtKQ?>"/>
                </div>
            </div>
            <select name="taskOption" id="taskOption">
                <option value="Plus" <?php if($taskOption === "Plus") echo "selected" ?> >Cộng</option>
                <option value="Minus" <?php if($taskOption === "Minus") echo "selected" ?> >Trừ</option>
                <option value="Multi" <?php if($taskOption === "Multi") echo "selected" ?> >Nhân</option>
                <option value="Divide" <?php if($taskOption === "Divide") echo "selected" ?> >Chia</option>
            </select>
        </div>
        <div>
            <input type="submit" id="KQ" name="KQ" value="KQ" onclick="calculator()"/>
            <input type="submit" id="KQPHP" name="KQPHP" value="KQPHP"/>
            <input type="submit" id="KQAJAX" name="KQAJAX" value="KQAJAX"/>
        </div>
    </form>
</div>


<script>
    function calculator() {
        const a = document.getElementById("txtSoA").value;
        const b = document.getElementById("txtSoB").value;
        var selector = selectorValue.options[selectorValue.selectedIndex].txt;
        var form = document.getElementById('myForm');
        if (form.attachEvent) {
            form.attachEvent("submit", processForm);
        } else {
            form.addEventListener("submit", processForm);
        }
        if(a === "" && b === "") {
            
        } else {
            switch(selector) {
                case "Plus":
                    var c = a + b;
                    console.log('c: ', c);
                    document.getElementById("txtKQ").innerText = ""+c;
                    break;
                case "Minus":
                    var c = a - b;
                    document.getElementById("txtKQ").innerText = ""+c;
                    break;
                case "Multi":
                    var c = a * b;
                    document.getElementById("txtKQ").innerText = ""+c;
                    break;
                case "Divide":
                    var c = a / b;
                    document.getElementById("txtKQ").innerText = ""+c;
                    break;
            }
        }
    }
</script>