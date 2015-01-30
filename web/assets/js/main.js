// Animation for notifications
jQuery(function ($) {
    $(document).ready(function () {
        $('#notification .alert').each(function (item, obj) {

            window.setTimeout(function () {
                $(obj).slideDown();
            }, 300);

            window.setTimeout(function () {
                $(obj).slideUp(1000);
                $(obj).remove();
            }, 5000);
        });

        $('body').on('submit', '#searchPanel form', function (e) {
            var formData = $(this).serialize();
            $.ajax({
                url: Routing.generate('widget_autocomplete_panel'),
                dataType: 'json',
                type: "GET",
                cache: false,
                data: formData,
                beforeSend: function () {
                    $('.searchAutocomplete').hide().html('');
                },
                success: function (response) {
                    var ahtml = '';
                    ahtml += '<ul>';
                    $.each(response.adverts, function (item, obj) {
                        ahtml += '<li><p class="title">' + obj.title + '</p></li>';
                    });
                    ahtml += '</ul>';
                    console.debug(ahtml);
                    $('.searchAutocomplete').html(ahtml).show();
                }
            });

            return false;
        });

        $('#searchPanel [type=search]').on('keyup', function (e) {
            e.preventDefault();
            var searchQuery = $(this).val();
            if (searchQuery.length >= 3) {
                $(this).parents('form').submit();
            }
        });

        $('.search-field').keypress(function (e) {
            if (this.value == '') {
                if (e.which == 13) return false;
            } else {
                return true;
            }
        });

        // Kill autosuggest on scroll
        $(window).scroll(function () {
            $('.searchAutocomplete').css({'display': 'none'});
        });
    });

    $('body').on('click', '[data-handler=bookmark]', function (e) {
        var bottonElement = $(this);
        var clickedEl = bottonElement;
        if (false == bottonElement.hasClass('save-favorite')) {
            var clickedEl = $(bottonElement).parents('.save-favorite');
        }

        var request = $.getJSON(
            Routing.generate('add_advert_to_bookmark', {
                'id': bottonElement.data('id')
            })
        );

        request.done(function (response) {
            if (response.status == 'add') {
                clickedEl.addClass('favorited');
                addMessage(trans('Обявление добавленно в закладки'));
            } else {
                clickedEl.removeClass('favorited');
                addMessage(trans('Обявление Удаленно из закладок'));
            }
        });

        request.fail(function (response) {
            addMessage('danger', 'Что-то пошло не так')
        });

        return false;
    });
});

function trans(message) {
    var translat;
    return message;
}

function addMessage(key, message) {
    if (message == undefined) {
        message = key;
        key = 'info';
    }
    var messageEl = $('<div />', {
        'class': 'alert alert-' + key,
        'style': 'display: none; z-index: 300'
    }).append(message);

    messageEl.append($('<button />', {
        'type': 'button',
        'class': 'close',
        'data-dismiss': 'alert'
    }).append($('<span />', {
        'aria-hidden': "true"
    }).append('&nbsp;&nbsp;&times;')));

    $('#notification').append(messageEl);
    $('#notification').css('z-index', '200');


    $('body').find('#notification .alert').each(function (item, obj) {
        window.setTimeout(function () {
            $(obj).slideDown();
            playNotify();
        }, 300);

        window.setTimeout(function () {
            $(obj).slideUp(1000);
            $(obj).remove();
        }, 5000);
    });
}

function playNotify(notifySound) {
    if (notifySound == undefined) {
        var notifySound = 'notify';
    }

    var audioNotifyElement = $('#audio-notification');
    if (audioNotifyElement.length == 0) {
        var audioNotifyElement = $('<audio />', {
            'id': 'audio-notification'
        });
    }

    if (audioNotifyElement.find('source[data-key=notify]').length == 0) {
        audioNotifyElement.append($('<source />', {
            'src': '/assets/sound/' + notifySound + '.mp3',
            'type': 'audio/mpeg',
            'data-key': 'notify'
        }));
    }

    audioNotifyElement.appendTo('body');
    $(audioNotifyElement)[0].play();
    console.log('must be played');
}
