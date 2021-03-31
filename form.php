<?php
require "form_func.php";
$html_build=buildForm();
$html_show=showForm();
echo<<<here
<html>
<head>
    <title>Анкета</title>
</head>
<body>
<div id='build' style="display: $display_build">
$html_build
</div>
 <div id='show' style="display: $display_show">
 $html_show
        <tr> <td><button type="button" id="btn1" onclick="build.style.display='block';show.style.display='none'"> Исправить </button> </td> 
         <td><button type="button" id="btn2" onclick="thanks.style.display='block';show.style.display='none'"> Верно </button>  </td> </tr>
        </table>
 </form>
</div> 
   <div id='thanks' style="display: $display_thanks">
        <h3>Спасибо за заполнение анкеты</h3>
    </div> 
</body>
</html>
here;
?>
