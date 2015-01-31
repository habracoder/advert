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
        var currentElement = $(this);

        var request = $.getJSON(
            Routing.generate('toggle_bookmark', {
                'advert_id': currentElement.data('id')
            })
        );

        request.done(function (response) {
            if (response.bookmark == 'added')
                $(currentElement).addClass('favorited');
            else
                currentElement.removeClass('favorited');
            addMessage(Translator.trans(response.message));
        });

        request.fail(function (response) {
            addMessage('error', Translator.trans(response.responseJSON.message))
        });

        return false;
    });
});

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

    audioNotifyElement = $('#audio-notification');
    if (audioNotifyElement.length == 0) {
        audioNotifyElement = $('<audio />', {
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
}
