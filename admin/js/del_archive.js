$(document).on('click', '.del-archive', function(e) {
    e.preventDefault();
    let elem = $(this);
    let parent = elem.closest('.aside__block');
    let id = parent.attr('id');
    let name = parent.find('.archive_name').text();
    
    let popup = $(document).find('.del-archive-popup');
    popup.css('display', 'flex');
    popup.find('#id').attr("value", id);
    popup.find('.h2').text('Удалить архив ' + name + '?');
});