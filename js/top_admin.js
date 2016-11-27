var number_of_clients = 0;
var clients = [];
$.ajax({
    url: 'php/start.php',
    type: 'post',
    async: true,
    cache: false
});


function get_clients() {
    $.ajax({
        url: 'php/get_clients.php',
        type: 'post',
        dataType: 'html',
        data: {number_of_clients: number_of_clients},
        async: true,
        cache: false,
        success: function(param) {
            if (param) {
                number_of_clients++;
                $('#redirector').append(param);
                $(document).ready(function() {
                    $(".connected-user-card").off().on('click', function() {
                        $(this).toggleClass("connected-user-card-selected");
                        karni = $.trim($(this).text());
                        if (clients.indexOf(karni) == -1) {
                            clients.push(karni);
                        } else {
                            clients.splice(clients.indexOf(karni), 1);
                        }
                    });
                    $(".carry-on").off().on('click', function(){
                        clearInterval(dukto);
                        var send = JSON.stringify(clients);
                        $.ajax({
                          url: 'php/init.php',
                          type: 'post',
                          data: {data : send},
                          async : true,
                          cache : false,
                          success : function (){
                            window.location.replace("admin.php");
                          }
                        });
                    });
                });
            }
        }
    });
}

var dukto = setInterval('get_clients()', 500);
