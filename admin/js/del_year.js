$(document).on('click', '.teg__close', function(e) {
    e.preventDefault();
    let elem = $(this);
    let parent = elem.closest('.teg__item');
    let id = parent.attr('id');
    let year = parent.text();
    
    let popup = $(document).find('.del-year-popup');
    popup.css('display', 'flex');
    popup.find('#id').attr("value", id);
    popup.find('.h2').text('Удалить год ' +year+ '?');
});