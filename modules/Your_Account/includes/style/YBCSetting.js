$(document).ready(function(){$("#demo").hide();var b=$.farbtastic("#picker");var c=$("#picker").css("opacity",0.25);var a;$(".colorwell").each(function(){b.linkTo(this);$(this).css("opacity",0.75)}).focus(function(){if(a){$(a).css("opacity",0.75).removeClass("colorwell-selected")}b.linkTo(this);c.css("opacity",1);$(a=this).css("opacity",1).addClass("colorwell-selected")});$(".updatesetting").click(function(){var g=$(this).attr("id");var f=$("#color1").val();var e=$("#color2").val();var j=$("#color3").val();if($("input[@name='password']:checked").val()=="0"){document.getElementById("blog_password").value=""}var d=$("#blog_password").val();if($("input[name='notifyblog']:checked").val()=="1"){var i=1}else{if($("input[@name='notifyblog']:checked").val()=="0"){var i=0}else{var i=0}}var h="action="+g+"&color1="+f+"&color2="+e+"&color3="+j+"&password="+d+"&notify="+i;$.ajax({type:"POST",url:"modules.php?name=Your_Account&op=YBSaveSetting",data:h,success:function(k){$("#setting").html("تنظیمات ذخیره شد").fadeIn(1200);$("#setting").load("modules.php?name=Your_Account&op=YAB_Setting")}});$(".BPostRow").css("background",f);$(".BReplyRow").css("background",e);$(".BAdminReplyRow").css("background",j);return false});$(".resetsetting").click(function(){var e=$(this).attr("id");var d=$("#setting").attr("title");var f="action="+e;if(confirm("آیا از بازیابی تنظیمات به حال پیش فرض اظمینان دارید ؟")){$.ajax({type:"POST",url:"modules.php?name=Your_Account&op=YBSaveSetting",data:f,success:function(g){$(".notify").html("تنظیمات ذخیره شد").fadeOut(1500);$(".notify").html(g);$("#setting").load("modules.php?name=Your_Account&op=YAB_Setting")}});$(".BPostRow").css("background","#F9F1A9");$(".BReplyRow").css("background","#");$(".BAdminReplyRow").css("background","#EDFAC8")}return false});$(".close_setting").click(function(){$("#setting").fadeOut()})});
