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

        function loadData(index) {
            $.ajax({
                url: 'functions/display_questions.php',
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

        // Initial load of data
        loadData(currentIndex);