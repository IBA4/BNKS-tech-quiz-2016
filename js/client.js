var user = prompt("Type the user name");
var question_number = 0;

var getContent = function(param){
  $.ajax({
    type : 'post',
    url : 'client_get_content.php',
    data : {user:user,
            question_number:question_number
            },
    async : true,
    cache : false,
    success : function (data) {
    if(data){question_number++;
    $('#main').html(data);
    }
    }
  });

}


setInterval ('getContent()',800);
