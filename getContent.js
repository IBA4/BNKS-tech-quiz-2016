var getContent = function(param){
  $.ajax({
    type : 'post',
    url : 'getContent.php',
    data : {number : param},
    async : true,
    cache : false,
    success : function (data) {
      $('#main').html(data);
    }
  });

}

setInterval (getContent(1), 500);
