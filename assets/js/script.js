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
                var answerValue = $("input[name='"+answerName+"']:checked").val();
                userInputRow[answerName] = answerValue;
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
            processData: false,
            contentType: false,
            success: function (data) {
                alert(data);
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
                $("#question_id").hide();
                $("#score-card").delay(500).fadeIn();
                pass;
            }
        }
    }


