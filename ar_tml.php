<?php
 function str_bb ($value) {
     $value = str_ireplace('[a1]','<img src=\'smyle/1.png\' />',$value);
     $value = str_ireplace('[a2]','<img src=\'smyle/2.png\' />',$value);
     $value = str_ireplace('[a3]','<img src=\'smyle/3.png\' />',$value);
     $value = str_ireplace('[a4]','<img src=\'smyle/4.png\' />',$value);
     $value = str_ireplace('[a5]','<img src=\'smyle/5.png\' />',$value); 
     $value = str_ireplace('[a6]','<img src=\'smyle/6.png\' />',$value);
     $value = str_ireplace('[a7]','<img src=\'smyle/7.png\' />',$value);
     $value = str_ireplace('[a8]','<img src=\'smyle/8.png\' />',$value);
     $value = str_ireplace('[a9]','<img src=\'smyle/9.png\' />',$value);
     #---- يسار
     $value = str_ireplace('[يسار]','<div style=\'text-align:left;\'>',$value);
     $value = str_ireplace('[/يسار]','</div>',$value);
     #---- وسط
     $value = str_ireplace('[وسط]','<div style=\'text-align:center;\'>',$value);
     $value = str_ireplace('[/وسط]','</div>',$value);
     #---- يمين
     $value = str_ireplace('[يمين]','<div style=\'text-align:right;\'>',$value);
     $value = str_ireplace('[/يمين]','</div>',$value);
     #---- h1
     $value = str_ireplace('[هـ1]','<h1>',$value);
     $value = str_ireplace('[/هـ1]','</h1>',$value);
     #---- h2
     $value = str_ireplace('[2هـ]','<h2>',$value);
     $value = str_ireplace('[/2هـ]','</h2>',$value);
     #---- h3
     $value = str_ireplace('[هـ3]','<h3>',$value);
     $value = str_ireplace('[/هـ3]','</h3>',$value);    
     #---- h4
     $value = str_ireplace('[هـ4]','<h4>',$value);
     $value = str_ireplace('[/هـ4]','</h4>',$value);    
     #---- h5
     $value = str_ireplace('[هـ5]','<h5>',$value);
     $value = str_ireplace('[/هـ5]','</h5>',$value);    
     #---- h6
     $value = str_ireplace('[هـ6]','<h6>',$value);
     $value = str_ireplace('[/هـ5]','</h6>',$value);
     #---- نص
     $value = str_ireplace('[نص]','<p>',$value);
     $value = str_ireplace('[/نص]','</p>',$value);
     #---- ضخم
     $value = str_ireplace('[ضخم]','<b>',$value);
     $value = str_ireplace('[/ضخم]','</b>',$value);
     #---- مائل
     $value = str_ireplace('[مائل]','<i>',$value);
     $value = str_ireplace('[/مائل]','</i>',$value);
     #---- صورة
     $value = str_ireplace('[صور]',"<img src='",$value);
     $value = str_ireplace('[/صور]',"' />",$value);
     #---- رابط 
     $value = str_ireplace('[رابط=',"<a href='",$value);
     $value = str_ireplace('[/رابط]','</a>',$value);
      $value = str_ireplace(']',"'>",$value);
     return $value;
 }
?>


