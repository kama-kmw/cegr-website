$(document).on('click', '.close-popup', function(e) {
    e.preventDefault();
    let popup = $(this).closest('.popup-container');
    popup.css("display", "none");
});