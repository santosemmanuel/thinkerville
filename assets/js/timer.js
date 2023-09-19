    var targetTime = new Date();
        targetTime.setSeconds(targetTime.getSeconds() + 900); // 15 minutes = 900 seconds

        function updateTimer() {
            var now = new Date();
            var timeDifference = targetTime - now;

            if (timeDifference <= 0) {
                clearInterval(timerInterval);
                alert("Time's up!");
                timerEnd();
            } else {
                var minutes = Math.floor(timeDifference / (1000 * 60));
                var seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

                minutes = minutes < 10 ? "0" + minutes : minutes;
                seconds = seconds < 10 ? "0" + seconds : seconds;

                var timerElement = document.getElementById('timer');
                timerElement.textContent = minutes + ":" + seconds;
            }
        }

    var timerInterval = setInterval(updateTimer, 1000);


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