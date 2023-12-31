        var currentIndex = 0;
        var totalCards = 0;


        function hideAllCards() {
            $('.card-body2').hide();
        }

        function showCurrentCard() {
            hideAllCards();
            $('.card-body2:eq(' + currentIndex + ')').show();
        }

        function showPrevious() {
            currentIndex = Math.max(0, currentIndex - 1);
            showCurrentCard();
            updateButtonStates();
        }

        function showNext() {
            currentIndex = Math.min(totalCards - 1, currentIndex + 1);
            showCurrentCard();
            updateButtonStates();
        }

        function loadDataEasy(index) {
            $.ajax({
                url: 'functions/display_questions_easy.php',
                type: 'POST',
                data: { index: index },
                dataType: 'html',
                success: function(data) {
                    $('#contentContainer').delay(550).fadeIn().html(data);
                    totalCards = $('.card-body2').length;
                    $("input[name='totalNumber']").val(totalCards);
                    currentIndex = 0;
                    showCurrentCard();
                    updateButtonStates();
                    reloadMessage();
                },
                error: function() {
                    alert("Error occured while sending data. Please try again.");
                }
            });
        }

        function updateButtonStates() {
            $('#prevButton').prop('disabled', currentIndex === 0);
            $('#nextButton').prop('disabled', currentIndex === totalCards - 1);
            if (currentIndex === totalCards - 1) {
                $("#submitButton").show();
                $("#nextButton").hide();
            } else {
                $("#nextButton").show();
                $("#submitButton").hide();
            }
        }

        function reloadMessage(){
            window.onbeforeunload = function() {
                return "Data will be lost if you leave the page, are you sure?";
            };
        }

        // Initial load of data
        loadDataEasy(currentIndex);
        $(function(){
            $("#card-questionaire").fadeIn();
            $("#medium-btn").click(function(){
                $("#leveSelection").hide();
                loadDataMedium(currentIndex);
                $("#card-questionaire").fadeIn();
            });
            $("#hard-select").click(function(){
                $("#div-content").hide();
                loadDataHard(currentIndex);
                $("#card-questionaire").fadeIn();
            });
        });

        