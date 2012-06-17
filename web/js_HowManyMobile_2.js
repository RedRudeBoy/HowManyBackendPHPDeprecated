$(document).bind("mobileinit", function(){
	$.mobile.defaultPageTransition = 'slide';
});
$( '#HowManyView' ).live( 'pagebeforecreate',function(event){
	alert( 'This page was just inserted into the dom!' );
});
/*
 *Example for do request
$(document).ready(function() {

	//listen for the form beeing submitted
	$("#myForm").submit(function(){
		//get the url for the form
		var url=$("#myForm").attr("action");
   
		//start send the post request
		$.post(url,{
			formName:$("#nameid").val(),
			other:"attributes"
		},function(data){
			//the response is in the data variable
   
			if(data.responseCode==200 ){           
				$('#output').html(data.greeting);
				$('#output').css("color","red");
			}
			else if(data.responseCode==400){//bad request
				$('#output').html(data.greeting);
				$('#output').css("color","red");
			}
       
		},"json");//make sure the the response is in json format

		//we dont what the browser to submit the form
		return false;
	});


});
 */