function echeck(g){var a="@";var b=".";var f=g.indexOf(a);var d=g.length;var e=g.indexOf(b);var c=g.lastIndexOf(b);if(g.indexOf(a)==-1){alert("!! ایمیل معتبر نمی باشد");return false}if(g.indexOf(a)==-1||g.indexOf(a)==0||g.indexOf(a)==d){alert("!! ایمیل معتبر نمی باشد");return false}if(g.indexOf(b)==-1||g.indexOf(b)==0||g.indexOf(b)==d||g.substring(c+1)==""){alert("!! ایمیل معتبر نمی باشد");return false}if(g.indexOf(a,(f+1))!=-1){alert("!! ایمیل معتبر نمی باشد");return false}if(g.substring(f-1,f)==b||g.substring(f+1,f+2)==b){alert("!! ایمیل معتبر نمی باشد");return false}if(g.indexOf(b,(f+2))==-1){alert("!! ایمیل معتبر نمی باشد");return false}if(g.indexOf(" ")!=-1){alert("!! ایمیل معتبر نمی باشد");return false}return true}function ValidateForm(){var b=document.form.email;if((b.value==null)||(b.value=="")){alert("!!  لطفا ایمیلتان را وارد نمایید");b.focus();return false}if(echeck(b.value)==false){b.value="";b.focus();return false}var a=document.form.subj;if((a.value==null)||(a.value=="")){alert("!! لطفا موضوعي براي پيام خود بنويسيد");a.focus();return false}var d=document.form.dept;if((d.value==null)||(d.value=="")){alert("!! لطفا يک بخش را انتخاب نماييد ");d.focus();return false}var c=document.form.message;if((c.value==null)||(c.value=="")){alert("!! لطفا پيام خود را بنويسيد");c.focus();return false}return true}$(document).ready(function(){$("input").focus(function(){$(this).parent().addClass("curFocus").children("div").toggle()});$("input").blur(function(){$(this).parent().removeClass("curFocus").children("div").toggle()});$("textarea").focus(function(){$(this).parent().addClass("curFocus").children("div").toggle()});$("textarea").blur(function(){$(this).parent().removeClass("curFocus").children("div").toggle()});$("select").focus(function(){$(this).parent().addClass("curFocus").children("div").toggle()});$("select").blur(function(){$(this).parent().removeClass("curFocus").children("div").toggle()});$('<div class="tl"></div><div class="tr"></div><div class="bl"></div><div class="br"></div>').appendTo("div.single-field")});