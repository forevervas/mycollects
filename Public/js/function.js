/**
*author xhq
*qq 1434970057@qq.com
*time 2015
*/
//360补天js
$(function(){
    $("#content").focus(function(){
			$("#content").css('color' , '#333333');
			$("#content").css('border-color','#333333');
			if($("#content").val() == "我来点评..."){
				$("#content").val('');
			}
			to_limitInput();
		}).keyup(function(){
			to_limitInput();
		}).keydown(function(){
			to_limitInput();
		}).blur(function(){
			if($("#content").val() == ""){
				$("#content").css('color' , '#999999');
			}
		});
}); 

function to_limitInput(){
	var content = $("#content").val();
	content = $.trim(content);
    var maxNum = 26;
	var iLen = 0;		
	for (i = 0; i < content.length; i++) iLen += content.charAt(i).charCodeAt() > 255 ? 1 : 0.5;
	var retnums = Math.abs(maxNum - Math.floor(iLen));
	$("#inputnums").html(retnums);
	//if(retnums < 0)
	if((maxNum - Math.floor(iLen)) >= 0){
		isSendBtn = true;
		$("#inputnums_text").html('还可以输入');
		$("#inputnums").css('color' , '#666666');
	}else{
		$("#inputnums").css('color' , '#FF0000');
		$("#inputnums_text").html('已超出');
		isSendBtn = false;
	}
}
function test() { 
	setTimeout(function() {}, 10)
	if(1) alert('1')
}