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

            if (currentIndex === totalCards - 1) {
                $("#submitButton").show();
            }
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
        function loadDataMedium(index) {
            $.ajax({
                url: 'functions/display_questions_medium.php',
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
        function loadDataHard(index) {
            $.ajax({
                url: 'functions/display_questions_hard.php',
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
            $('#submitButton').toggle(currentIndex === numCards - 1);
        }

        function reloadMessage(){
            window.onbeforeunload = function() {
                return "Data will be lost if you leave the page, are you sure?";
            };
        }
        
        // Initial load of data
        $(function(){
            $("#submitButton").hide();
            $("#easy-btn").click(function(){
                $("#leveSelection").hide();
                loadDataEasy(currentIndex);
                $("#card-questionaire").fadeIn();
            });
            $("#medium-btn").click(function(){
                $("#leveSelection").hide();
                loadDataMedium(currentIndex);
                $("#card-questionaire").fadeIn();
            });
            $("#hard-btn").click(function(){
                $("#leveSelection").hide();
                loadDataHard(currentIndex);
                $("#card-questionaire").fadeIn();
            });
        });

        