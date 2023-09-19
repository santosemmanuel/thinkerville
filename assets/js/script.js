$(function(){
        $("#totalNumber").hide();


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

});
