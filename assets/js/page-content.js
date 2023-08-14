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
                    alert(data);
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
                    alert(data);
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
                    alert(data);
                }
            });
        }

        function updateButtonStates() {
            $('#prevButton').prop('disabled', currentIndex === 0);
            $('#nextButton').prop('disabled', currentIndex === totalCards - 1);
        }

        function reloadMessage(){
            window.onbeforeunload = function() {
                return "Data will be lost if you leave the page, are you sure?";
            };
        }
        
        // Initial load of data
        $(function(){
            $("#easy-btn").click(function(){
                $("#leveSelection").hide();
                loadDataEasy(currentIndex);
                $("#card-questionaire").show();
            });
            $("#medium-btn").click(function(){
                $("#leveSelection").hide();
                loadDataMedium(currentIndex);
                $("#card-questionaire").show();
            });
            $("#hard-btn").click(function(){
                $("#leveSelection").hide();
                loadDataHard(currentIndex);
                $("#card-questionaire").show();
            });
        });

        