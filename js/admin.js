var user = "admin";
var first_send = 1;
var to_send = "";



var getContent = function(param){
  $.ajax({
    type : 'post',
    url : 'php/admin_get_content.php',
    data : {user : user,
            first_send : first_send,
            user_who_will_play : param
          },
    async : true,
    cache : false,
    success : function (data) {
      $('#main').html(data);
    }
  });
}

var send = function(param){
  $.ajax({
    type : 'post',
    url : 'php/admin_send.php',
    data : {user : user,
            first_send : first_send,
            user_who_will_play : param
          },
    async : true,
    cache : false,
    success : function (data) {
      alert("sent");
    }
  });
}


$(document).ready(function() {
  $("#load").click(function() {
    getContent();
  });

  $(".director").click(function() {
     to_send = $.trim($(this).text());
     alert($.trim($(this).text()));
    });

  $("#send").click(function() {
    send(to_send);
    first_send = 0;

  });
});
