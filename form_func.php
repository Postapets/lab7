<?php
$firstName='';
$middleName='';
$lastName='';
$lang=[];
$work=[];
$gender="";
if (count($_POST)==0) $isFirstTime=true; else $isFirstTime=false;
if ($isFirstTime) {
    $display_build='block';
    $display_show='none';
}
else {$display_build='none';
    $display_show='block';}
$display_thanks='none';
function buildForm(){
    global $firstName, $middleName, $lastName;
    extract($_POST);
    $string=<<<here
        <form action='' method='post' id='form'>  
        <table cellpadding='10' border='5'>
        <tr> <td colspan="2"> <b> Анкета </b> </td> </tr>
        <tr><td><input type=text  name='firstName'  value=$firstName> </td> <td>Фамилия</td>  </tr>
        <tr><td><input type=text  name='middleName'  value=$middleName> </td> <td>Имя</td> </tr>
        <tr> <td><input type=text  name='lastName'  value=$lastName> </td> <td>Отчество</td><</tr>
        <tr> <td colspan="2"> <b> Пол </b> </td> </tr>
        <tr> <td><input type=radio name="gender"  value="М"> </td> <td>М</td></tr>
        <tr> <td><input type=radio  name="gender"  value="Ж"> </td> <td>Ж</td></tr>
        <tr> <td colspan="2"> <b> Программирую на </b> </td> </tr>
        <tr> <td><input type=checkbox  name="lang[]"  value="Си"> </td> <td>Си</td></tr>
        <tr> <td><input type=checkbox  name="lang[]"  value="Паскаль"> </td> <td>Паскаль</td></tr>
        <tr> <td><input type=checkbox  name="lang[]"  value="PHP"> </td> <td>PHP</td></tr>
        <tr> <td colspan="2"> <b> Могу работать </b> </td> </tr>
        <tr> <td colspan="2"> <select name="work[]" multiple>
        <option>Програмистом
        <option>Сисадмином
        <option>Тестировщиком
        <option>Руководителем группы
        </select>
        </td> </tr>
        <tr> <td colspan='2'><button type='submit'>Отослать</button>  </td> </tr>
        </table>
        </form>
    here;
    return $string;
}

function showForm(){
    global $firstName, $middleName, $lastName, $lang,$work,$gender;
    extract($_POST);
    $lang=implode(",",$lang);
    $work=implode(",",$work);
    $string=<<<here
        <form action='' method='post' id='form'>
        <table cellpadding='10' border='5'>
        <tr> <td colspan="2"> <b> Праверка анкеты </b> </td> </tr>
        <tr> <td>$firstName</td> <td>Фамилия</td></tr>
        <tr> <td>$middleName</td> <td>Имя</td></tr>
        <tr> <td>$lastName</td> <td>Отчество</td></tr>
        <tr> <td colspan="2"> <b> Пол <b> </td> </tr>
        <tr> <td colspan="2"> $gender </tr>
        <tr> <td colspan="2"> <b> Программирую на <b> </td> </tr>
        <tr> <td colspan="2"> $lang </td></tr>
        <tr> <td colspan="2"> <b>  Могу работать <b> </td> </tr>
        <tr> <td colspan="2"> $work </td></tr>
    here;
    return $string;
}