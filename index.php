<?php
    include "ar_tml.php";
 if($_POST['insert']){
  $textarea_post1 = strip_tags ($_POST['text']);
   echo   $textarea_post = str_bb(strip_tags ($_POST['text']));
 }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>ArTML</title>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript">
            $(function () {
                $('.pica').click(function () {
                    var relget = $(this).attr('rel');
                    var valtextarea = $('#text').val();
                    var allval = valtextarea + '' + relget + '';
                    $('#text').focus();
                    $('#text').val(allval);
                });
            });
        </script>
        <style>
            /*table tr td{border: 1px solid #ccc;}*/
            textarea{resize: none;border: 1px solid #ccc;border-radius: 5px;}
       .t{resize: none;border: 1px solid #ff6a00; border-radius: 5px; width: 70%;}
            .pica{height: 40px;width: 40px;cursor: pointer;}
            input[type='button']{border: 1px solid #808080;cursor: pointer;}
            input[type='button']:hover{border: 1px solid #fff;cursor: pointer;}
             </style>
    </head>
    <body>
        <div class="t">
        <table width="100%">
        <tr>
        <td>
        <table width="100%">
        <tr>
        <td>
        <input class="pica" type="button" rel="[يسار][/يسار]" value="يسار"/>
        <input class="pica" type="button" rel="[وسط][/وسط]" value="وسط"/>
        <input class="pica" type="button" rel="[يمين][/يمين]" value="يمين"/>
            <input class="pica" type="button" rel="[هـ1][/هـ1]" value="هـ1"/>
            <input class="pica" type="button" rel="[هـ2][/هـ2]" value="هـ2"/>
            <input class="pica" type="button" rel="[هـ3][/هـ3]" value="هـ3"/>
            <input class="pica" type="button" rel="[هـ4][/هـ4]" value="هـ4"/>
            <input class="pica" type="button" rel="[هـ5][/هـ5]" value="هـ5"/>
            <input class="pica" type="button" rel="[هـ6][/هـ6]" value="هـ6"/>
            <input class="pica" type="button" rel="[نص][/نص]" value="نص"/>
            <input class="pica" type="button" rel="[ضخم][/ضخم]" value="ضخم"/>
            <input class="pica" type="button" rel="[مائل][/مائل]" value="مائل"/>
            <input class="pica" type="button" rel="[صور][/صور]" value="صورة"/>
            <input class="pica" type="button" rel="[رابط=http://]title[/رابط]" value="رابط"/>
         </td>
        </tr>
 
        </table>
        </td>
        </tr>
        <tr>
        <td>
            <table width="100%">
        <tr>
        <td valign="top" width="80%">
            <form method="post">
        <textarea name="text" id="text" cols="85" rows="7"><?=$textarea_post1;?></textarea>
             <input  type="submit" name="insert" value="add"/>
                </form>
        </td>
        <td valign="top" width="20%">
            <div class="iam">
        <table  width="100%">
        <tr>
        <td>
        <img src="smyle/1.png" rel="[a1]" class="pica"/>
        <img src="smyle/2.png" rel="[a2]" class="pica"/>
        <img src="smyle/3.png" rel="[a3]" class="pica"/>
         </td>
        </tr>
        <tr>
        <td>
        <img src="smyle/4.png" rel="[a4]" class="pica"/>
        <img src="smyle/5.png" rel="[a5]" class="pica"/>
        <img src="smyle/6.png" rel="[a6]" class="pica"/>
         </td>
        </tr>
         <tr>
        <td>
        <img src="smyle/7.png" rel="[a7]" class="pica"/>
        <img src="smyle/8.png" rel="[a8]" class="pica"/>
        <img src="smyle/9.png" rel="[a9]" class="pica"/>
        </td>
        </tr>
        </table>
                </div>
        </td>
        </tr>
        </table>
        </td>
        </tr>
        </table>
            </div>
    </body>
</html>
