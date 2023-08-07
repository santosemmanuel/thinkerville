$(function(){

    $("#totalNumber").hide();
    $("#spinner-wait").delay(500).fadeOut();
    window.onbeforeunload = function() {
        return "Data will be lost if you leave the page, are you sure?";
    };

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
});

function checkData(){
    var totalNum = parseInt($("input[name='totalNumber']").val());
    var userInputData = [];
    for (let i=1; i<=totalNum; i++){
        var userInputRow = {};
        $("#wrap_id input[name='question_num_"+i+"']").each(function(){
            var answerName = $(this).attr('name');
            var answerValue = $(this).val();
            if(answerName.checked){
                
            }
            userInputRow[answerName] = answerValue;
        });
        userInputData.push(userInputRow);
    }
        $.ajax({
            url: 'functions/checkData.php',
            type: 'POST',
            data: {userInputData: userInputData},
            processData: false,
            contentType: false,
            success: function (data) {
                // Handle the response from PHP if needed
                alert(JSON.stringify(userInputData));
                alert('Data submitted successfully and stored.'+data);
            },
            error: function () {
                alert('Error occurred while sending data. Please try again.');
            }
        });

    /*var wordObj = {};
    for (let i=1;i$("input[name='totalNumber']").val();i++){
        var inputName = "answer_id"+i;
        var inputValue = $("#answer_id"+i).val();
        wordObj[inputName] = inputValue;
    }
    $.ajax({
        url: 'functions/checkData.php', // Replace with the PHP script URL
        type: 'POST',
        data: wordObj,
        dataType: 'json',
        success: function (data) {
            // Handle the response from PHP if needed
            alert("nagana");
            alert('Data submitted successfully and stored.');
        },
        error: function () {
            alert('Error occurred while sending data.');
        }
    });*/
    
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
            $("#question_id").hide();
            $("#score-card").delay(500).fadeIn();
            pass;
        }
    }
}



