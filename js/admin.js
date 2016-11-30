var user = "admin";
// var first_send = 1;
var to_send = "";



var getContent = function(param){
  $.ajax({
    type : 'post',
    url : 'php/admin_get_content.php',
    data : {user : user,
            // first_send : first_send,
            user_who_will_play : param
          },
    async : true,
    cache : false,
    success : function (data) {
      $('#main').html(data);
      $(".circle").hide();
    }
  });
}

var send = function(param){
  $.ajax({
    type : 'post',
    url : 'php/admin_send.php',
    data : {user : user,
            // first_send : first_send,
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
    $.ajax({
      url : 'php/change_show_answer.php',
      type : 'post',
      data : {status : ""},
      async : true,
      cache : false,
      success : function() {
      }
    });
    getContent();
  });

  $("#show-correct-answer").off().click(function(){
      $.ajax({
        url : 'php/change_show_answer.php',
        type : 'post',
        data : {status : 1},
        async : true,
        cache : false,
        success : function() {
        }
      });
  });

  $(".director").off().click(function() {
     to_send = $.trim($(this).text());
     alert($.trim($(this).text()));
    });

  $("#send").off().click(function() {
    $.ajax({
      url : 'php/change_show_answer.php',
      type : 'post',
      data : {status : ""},
      async : true,
      cache : false,
      success : function() {
      }
    });
    send(to_send);
    first_send = 0;

  });
});
