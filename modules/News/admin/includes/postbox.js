$(function(){$(".comment_button").click(function(){var c=$("#topicname").val();var a=$("#topictext").val();var b="topicname="+c+"&topictext="+a;if(c==""||a==""){alert("ورودی ها را پر کنید .")}else{$("#flash").show();$("#flash").fadeIn(400).html('<img src="images/loading.gif" align="absmiddle"> <span class="loading">Loading...</span>');$.ajax({type:"POST",url:"'.ADMIN_OP.'save_q_t_a&",data:b,cache:false,success:function(d){$("#display").after(d);document.getElementById("topicname").value="";document.getElementById("topictext").value="";$("#flash").hide()}})}return false})});