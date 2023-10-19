$(function(){
    countdownPromo();
});        
        
function countdownPromo(){
    // Set the target date for the end of the promo (year, month (0-11), day, hour, minute, second)
    var targetDate = new Date(2023, 9, 31, 23, 59, 59);

    function updateCountdown() {
        var now = new Date();
        var timeRemaining = targetDate - now;

        if (timeRemaining >= 0) {
            var days = Math.floor(timeRemaining / (1000 * 60 * 60 * 24));
            var hours = Math.floor((timeRemaining % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((timeRemaining % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((timeRemaining % (1000 * 60)) / 1000);

            days = String(days).padStart(2, '0');
            hours = String(hours).padStart(2, '0');
            minutes = String(minutes).padStart(2, '0');
            seconds = String(seconds).padStart(2, '0');

            document.getElementById('countdown_promo').innerHTML = days + ':' + hours + ':' + minutes + ':' + seconds;
        } else {
            document.getElementById('countdown_promo').innerHTML = 'Promo Ended';
        }
    }

    setInterval(updateCountdown, 1000);

}