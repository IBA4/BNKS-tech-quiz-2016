
var user = prompt("Type the user name");
$(document).ready(function() {
  $.ajax({
    type: 'post',
    url: 'set_usernames.php',
    data: {user : user},
    async : true,
    cache : false,
    success : function(tule) {
      if(tule=="locked"){
        window.location.replace("not_started.php");
    }
    }
  });
});

var first_load =1;
var question_number = 0;
var activity_number = 0;
var zz,xx;
var set_time=500;


//code for timer
//set variables for timer


// Start code for timer
function startTimer() {
    // console.log("Timer ON Progress :"  + sec );
    sec--;
    progressTime();
    if (sec < 10) sec = "0" + sec;
    $("#seconds").text(sec);
    if (sec == 0) {
        stopTimer();
    }
    changeColor();
}

function stopTimer() {
    $('.enabled').off();
    $('.enabled').removeClass('enabled').addClass('disabled');
    clearInterval(xx);
    call_zz();
//    $(".enabled").attr("disabled", "disabled");
}

function setTimer() {
    //initialize timer object: it controls the execution of the function - startTimer - each second
    timer = setInterval(startTimer(), 1000);
}

//$("#seconds").text(secInitial); //set the tspan value to initial
//        setTimer(); //*first point to start the Timer function

function changeColor() {

    if(sec == Math.floor(secInitial/1.5)){
        $("#seconds").css({
            'fill':'orange',
            'transition': 'all 1s linear'
        });
        $("#mainCircle").css({
            'stroke':'orange',
            'transition': 'all 1s linear'
        });
    }
    if(sec == Math.floor(secInitial/3)){
        $("#seconds").css({
            'fill':'rgb(255,100,100)',
            'transition': 'all 1s linear'
        });
        $("#mainCircle").css({
            'stroke':'rgb(255,100,100)',
            'transition': 'all 1s linear'
        });
    }
    if(sec == 4){
        $("#seconds").css({
            'fill':'rgb(225,0,0)',
            'transition': 'all 1s linear'
        });
        $("#mainCircle").css({
            'stroke':'rgb(225,0,0)',
            'transition': 'all 1s linear'
        });
    }
}

function progressTime() {
//    $('.circleFill').attr('class', 'circleFill filled');
    $("#mainCircle").css({
        'stroke-dashoffset':offsetValue,
        'transition':'all 1s linear'
    });
    offsetValue+=offsetValueCounter;
}


var get_activities= function() {
    if(timerCalls++ % 2==0) startTimer();
  $.ajax({
    type : 'post',
    url : 'client_activity.php',
    data :{activity_number:activity_number},
    dataType: "json",
    async : true,
    cache : false,
    success : function (ratm){
      if(ratm){
        activity_number++;
      $(document).ready(function() {
        if (ratm[1]){
          console.log($.trim(("#"+ratm[0]).replace(/ /g,"-")));
          $($.trim(("#"+ratm[0]).replace(/ /g,"-"))).css({
            "background-color": "green",
            "color" : "white"
          });

          $("#user-score-"+ratm[1]).html("<div class='animated flip'>"+ratm[2]+"</div>");
        }else {
          $($.trim(("#"+ratm[0]).replace(/ /g,"-"))).css({
            "background-color": "red",
            "color" : "white"
          });
        }
      });
      }
      clearInterval(xx);
      call_zz();
    }
  });
}

var get_content = function(param){
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
        secInitial = 20;
        sec = secInitial;
        circum = Math.floor(2 * Math.PI * 60) + 7;
        offsetValueCounter = circum / secInitial, offsetValue = offsetValueCounter;
        timerCalls = 0;
              $("#mainCircle").css({
                  'stroke':'#15ad15',
                  'stroke-dashoffset':'0',
                  'stroke-dasharray': '380'
              });

      if(first_load){
        $.ajax({
          type : 'post',
          url : 'score.php',
          async : true,
          cache : false,
          success : function (tux) {
            $('#main_score').html(tux);
              first_load = 0;
              //set variables for timer and reset

          }
        });
      }

    $(document).ready(function() {
      $(".enabled").off().on('click', function() {
          $('.enabled').removeClass('enabled').addClass('disabled');

        $.ajax({
          type : 'post',
          url : 'check_answer.php',
          data : {answer :$.trim($(this).text()),user : user, question_number : question_number},
          async : true,
          cache : false,
          success : function(){
          }
        });
      });

    });
    clearInterval(zz);
    call_xx();
    }

    }
  });

}
// get_content();
call_zz();

function call_zz(){zz = setInterval ('get_content()',set_time);}
function call_xx(){xx = setInterval ('get_activities()',set_time);}
