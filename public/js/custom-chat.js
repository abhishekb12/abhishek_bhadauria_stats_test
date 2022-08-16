$(document).ready(function(){
	// alert('chat');
	getLeftBoxData();
	allConnections();

	window.setInterval(function(){
		newChatdata($('li.active').attr('data-id'));
		// getLeftBoxData()
	}, 5000);

	// setInterval(function() {
	//     getLeftBoxData();
	// }, 8000);
});


function getLeftBoxData($filter=null,$search=null){

	  $.ajax({
           url:'chat-users',
           type: "GET",
           data: {'filter' : $filter, 'search' : $search},
           success:function(resp) {
           	// console.log(resp);
           		//$('#noChatInt').css('display','none');
              	if(resp.html != ''){
              		$('#leftBox').html(resp.html);
              	}else{
              		$('#noChatInt').css('display','block');
              		$('#fetchMsg').html('No messages');
              	}
	         	
	         	
	         	setTimeout(function(){
	         	 $("#leftBox li:first-child").trigger('click'); 
	         	}, 3000);

	         	// fetchUserConversation($("#leftBox li:first-child").click());
            }
       }).done(function(){
       		
       		
       		//setTimeout(function(){ $("#leftBox li:first-child").trigger('click'); }, 3000);

       		$('.custom-chat-left-list').click(function(){				
				$('.custom-chat-left-list').removeClass('active');
				$(this).addClass('active');
				fetchUserConversation($(this).attr('data-id'));
			})
       })
}

function fetchUserConversation(id){
	$.ajax({
       url:'fetch-message',
       type: "GET",
       data: {id : id},
       success:function(resp) {
	       	console.log(resp.html);
	          $('#middleBox').html(resp.html);
	          $('#companyName').html(resp.companyName);

	          setTimeout(function(){
		         	var elmnt = document.getElementById("chatappendiv");
					  elmnt.scrollIntoView();
		    }, 1000);
        }
    }).done(function(){

    	
    	  
    	$('#chat_message_'+id).emojioneArea({
            pickerPosition:"top",
            toneStyle: "bullet"
        });
    	$('.connection-accept-decline').click(function(){
    		alert('dfjnf');
    		acceptDeclineCOnnection($(this).attr('data-id'),id)
    	});
    	submitChat();
    })	
}

function acceptDeclineCOnnection(status,user_id){
	$.ajax({
	       url:'change-con-status',
	       type: "POST",
	       data: {'_token':$('meta[name="csrf-token"]').attr('content'),'status':status,'user_id':user_id},
	       success:function(resp) {
	       	if(status == 'accept'){

	          fetchUserConversation(user_id);
	          allConnections();
	       	}else{
	       		getLeftBoxData();
	       	}
	     
	        }
	})
}

function allConnections(){

	  $.ajax({
           url:'connections',
           type: "GET",
           data: {},
           success:function(resp) {
               $('#rightBox').html(resp.html);
            }
       })
}

$('#searchBox').keyup(function(){
	// alert($(this).val());
	getLeftBoxData('recent',$(this).val());
});

$('select').change(function(){
    // alert($(this).val());
    getLeftBoxData($(this).val(),'');
});


function messageConn(id){
	alert(id);
	$('#chat-list-'+id).click();
}

function removeConn(user_id){
	$.ajax({
	       url:'remove-conn',
	       type: "POST",
	       data: {'_token':$('meta[name="csrf-token"]').attr('content'),'user_id':user_id},
	       success:function(resp) {
	       	// if(status == 'accept'){

	          // fetchUserConversation(user_id);
	       	// }else{
	       		getLeftBoxData();
	       		allConnections();
	       	// }
	     
	        }
	})
	
}

function submitChat(){	
	$("#chatForm").submit(function(e) {
	    e.preventDefault();
	    $.ajax({
	       url:'chat-messages',
	       type: "POST",
	       data: $( this ).serialize(),
	       success:function(resp) {
	       		if(resp.status == true){
	       			$('.emojionearea-editor').html('');
	       			newChatdata(resp.chatid)
	       			
	    			// fetchUserConversation(resp.chatid)    
	       		}
	        }
		})
	});
}

function newChatdata(user_id){

	$.ajax({
	       url:'new-message',
	       type: "POST",
	       data: {'_token':$('meta[name="csrf-token"]').attr('content'),'user_id':user_id},
	       success:function(resp) {	       
	     		$('#chatappendiv').html(resp.html);
	       }
	})
}
