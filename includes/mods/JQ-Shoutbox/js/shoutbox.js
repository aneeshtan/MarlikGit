$(document).ready(function(){var b=$("#nick");var f=$("#message");var e=$("#shoutbox-loading");var d=$("#shoutbox-content > ul");function c(){d.hide();e.fadeIn();$.ajax({type:"POST",url:"modules.php?app=mod&name=JQ-Shoutbox",data:"action=update",complete:function(g){e.fadeOut();d.html(g.responseText);d.fadeIn(2000)}})}function a(){if(b.attr("value")&&f.attr("value")){return true}else{return false}}c();$("#shoutbox-form").submit(function(){if(a()){var g=b.attr("value");var h=f.attr("value");if(h.length<4){alert("پیام شما می بایست بیش از 3 حرف باشد");return false}if(h.length>255){alert("پیام شما بیش از 255 کارکتر می باشد . آن را کوتاه تر کنید.");return false}$("#send").attr({disabled:true,value:"در حال ارسال ..."});$("#send").blur();$.ajax({type:"POST",url:"modules.php?app=mod&name=JQ-Shoutbox",data:"action=insert&nick="+g+"&message="+h,complete:function(i){d.html(i.responseText);c();$("#send").attr({disabled:false,value:"ارسال کن !"});$("#message").val($("#message").html())}})}else{alert("پیام خود را وارد نکردید !")}return false});$(".add_emo").live("click",function(){var g=f.attr("value");var h=$(this).attr("id");$("#message").val($("#message").val()+h+" ")});$(".refresh_shoutbox").live("click",function(){c()});$(".delete_update").live("click",function(){var g=$(this).attr("id");var h="action=delete&id="+g;if(confirm("از حذف این پست اطمینان دارید ؟")){$.ajax({type:"POST",url:"modules.php?app=mod&name=JQ-Shoutbox",data:h,beforeSend:function(i){$("#shout_li_"+g).html("در حال بارگذاری")},success:function(){$("#shout_li_"+g).css("background","#FFE3E6");$("#shout_li_"+g).slideUp("slow")}})}return false})});