$(document).ready(function(){var a=setInterval(function(){var b=$(".liveTime").attr("id");var c="start="+b;$.ajax({type:"POST",url:"modules.php?name=Your_Account&op=updatelivebroadcasting",data:c,cache:false,success:function(d){$("#live_broadcasting").html(d)}})},60000)});