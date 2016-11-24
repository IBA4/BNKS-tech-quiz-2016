var user = prompt("Type the user name");
var question_number = 0;

var getContent = function(param){
  // $(".enabled").on('click', function() {
  //     // answer($(this).text());
  //     alert("yeah");
  //
  // });
  alert("yeah");
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


getContent();

// setInterval ('getContent()',800);
