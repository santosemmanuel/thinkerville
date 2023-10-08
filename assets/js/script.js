$(function(){
    $("#totalNumber").hide();
    $("#card-questionaire").hide();
    
    var update = function(){      //** timer
        $(".sec").each(function(){
            var count = parseInt($(this).html());
            if(count !== 0){
                $(this).html(count - 1);
            }else{
                dec_min();
            }
        });
    };
    setInterval(update, 1000);

    $.ajax({
        type: "POST",
        url: "functions/display-vid.php",
        success: function (data) {
            $("#display-vid").html(data);
            document.querySelector('video').setAttribute("controlslist", "nodownload");
            $('#vid-player').bind('contextmenu',function() { return false; });
        },
        error: function () {
            alert("Error occurred while displaying the video. Please try again.");
        }
    });    
});

function checkData(){
    $("#submitButton").hide();
    $("#checkButton").show();
    var totalNum = parseInt($("input[name='totalNumber']").val());
    var userInputData = [];
    var dataCheck = "";
    for (let i=1; i<=totalNum; i++){
        var userInputRow = {};
        $("#wrap_id input[name='question_num_"+i+"']").each(function(){
            var answerName = $(this).attr('name');
            var answerValue = $("input[name='"+answerName+"']:checked").val();
            if(answerValue == null){
                userInputRow[i] = "Not answered";
            }else{
                userInputRow[i] = answerValue;
            }
        });
        userInputData.push(userInputRow);
    }
    if(dataCheck == "Empty"){
        alert("The task is currently marked as unfinished and requires further attention.");
    }else{
        var wordObj = {
            "userInputData" : userInputData,
            "totalNum" : totalNum
        };
        $.ajax({
            type: "POST",
            url: "functions/checkData.php",
            data: wordObj,
            success: function (data) {
                $("#card-questionaire").html(data);
            },
            error: function () {
                alert("Error occurred while sending data. Please try again.");
            }
        });
    }
}

function timerEnd(){
    var totalNum = parseInt($("input[name='totalNumber']").val());
    var userInputData = [];
    var dataCheck = "";
    for (let i=1; i<=totalNum; i++){
        var userInputRow = {};
        $("#wrap_id input[name='question_num_"+i+"']").each(function(){
            var answerName = $(this).attr('name');
            var answerValue = $("input[name='"+answerName+"']:checked").val();
            
            if(answerValue == null){
                userInputRow[i] = "0";
            }else{
                userInputRow[i] = answerValue;
            }
        });
        userInputData.push(userInputRow);
    }
    var wordObj = {
        "userInputData" : userInputData,
        "totalNum" : totalNum
    };
    $.ajax({
        type: "POST",
        url: "functions/checkData.php",
        data: wordObj,
        success: function (data) {
            $("#card-questionaire").html(data);
        },
        error: function () {
            alert("Error occurred while sending data. Please try again.");
        }
    });
}

function dec_min(){
    min = parseInt($(".min").html());
    if(min != 0){
        $(".min").html(min - 1);
        $(".sec").html(59);
    }else{
        hr = parseInt($(".hr").html());
        if(hr !== 0){
            $(".hr").html(hr - 1);
            $(".min").html(59);
            $(".sec").html(59);
        }else{
            timerEnd();   
        }
    }
}