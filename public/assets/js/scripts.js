$(function() {

    $('aside').perfectScrollbar();

    $(document).on('click', '.navigatable', function(e) {
        e.preventDefault();
        var url = $(this).attr('data-url');
        if (url != null) {
            window.location = url;
        }
    })

    $('.modable').each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            
        });
    });

    var aside = {
        aside: $('aside'),
        html: '<div id="aside-overlay"></div>',
        show: function() {
            if (this.aside.hasClass('show')) {
                this.hide();
            } else {
                this.aside.addClass('show');
                $(this.html).insertAfter(this.aside);
            }
        },
        hide: function() {
            this.aside.removeClass('show');
            $('#aside-overlay').remove();
        }
    }

    $('#aside-trigger').on('click', function(e) {
        e.preventDefault();
        aside.show();
    });

    $(document).on('click', '#aside-overlay', function(e) { aside.hide(); });

    $(document).on('click', '.bootbox', function(e) { bootbox.hideAll(); });
    $(document).on('click', '.modal-dialog', function(e) { e.stopPropagation(); });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    /*
        TIME TRACKING
    */
    $('#record-time-trigger').on('click', function(e) {
        e.preventDefault();

        var form = $('#tracktime'),
            formData = form.serialize(),
            url = form.attr('action');

        $.post(url, formData, function(data) {
            $('#time-in').text(data.time_in);
            $('#time-out').text(data.time_out);
            $('#record-time-trigger').text(data.label);
            if (data.disabled) {
                $('#record-time-trigger').prop('disabled', true);
            }
            if (data.breakDisabled) {
                $('#take-break-trigger').prop('disabled', true);
            }
            else {
                $('#take-break-trigger').prop('disabled', false);
            }
            console.log(data);
        }, 'json');
    });
    /*
        BREAK
    */
    $('#take-break-trigger').on('click', function(e) {
        e.preventDefault();

        var url = $(this).attr('data-takebreak');

        $.post(url, function(data) {
            console.log(data);
        }, 'json');
    });

    /*
        AUTO-RESIZE TEXTAREA
    */
    autosize($('textarea'));

    /*
        FADE OUT ALERT
    */
    var alert = $('.alert-fadeable');
    alert.delay(5000).animate({
        'margin-top': '-' + (alert.height() + 48) + 'px'
    }, 100);
    alert.delay(50).fadeOut(100);

    $('.pd-content').each(function() {
        $(this).on('click', function() {
            var parentLi = $(this).closest('li');
            parentLi.find('.pd-meta').toggleClass('hidden');
        });
    });

    $('#generate-password').on('click', function(e) {
        e.preventDefault();
        var text = "";
        var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
        for(var i=0; i < 12; i++) {
            text += possible.charAt(Math.floor(Math.random() * possible.length));
        }
        $('#' + $(this).attr('data-target')).val(text);
    });

    $('.submit-profile-btn').each(function() {

        $(this).on('click', function(e) {
            e.preventDefault();
        });

    });

    $('#birthdate').datepicker({
        changeMonth: true,
        changeYear: true,
        yearRange: 'c-80:+0',
        dateFormat: 'yy-mm-dd'
    });

    $('#guardian').on('change', function() {
        var tf = $('#guardian-name'),
            target = $(this).val();
        if (target != '') {
            tf.val($('#' + target + '-name').val());
        } else {
            tf.val('');
        }
    });

    $('#cp').on('change', function() {
        var tf = $('#contact-person'),
            target = $(this).val();
        if (target != '') {
            tf.val($('#' + target + '-name').val());
        } else {
            tf.val('');
        }
    });

    $('#guardian-same-address, #contact-same-address').on('change', function() {
        var target = $(this).attr('data-target'),
            eAddress = $('#employee-address .form-control'),
            addressValues = {},
            count = 0;

        eAddress.each(function() {
            addressValues[count] = $(this).val();
            count++;
        });

        count = 0;
        if ($(this).prop('checked') == true) {
            $(target + ' .form-control').each(function() {
                $(this).prop('disabled', true).val(addressValues[count]);
                count++;
            });
            $(target + '-catcher').val(1);
        } else {
            $(target + ' .form-control').each(function() {
                $(this).prop('disabled', false).val('');
            });
            $(target + '-catcher').val(0);
        }
    });


    /*
        VERIFY USERNAME
    */
    var typingTimer;
    var doneTypingInterval = 500;

    $('.verify-field').on('keyup', function() {

        var data = {
                'username': $(this).val(),
                'user_id': $(this).attr('data-user-id')
            },
            url = $(this).attr('data-url');

        clearTimeout(typingTimer);

        if ($(this).val) {
            typingTimer = setTimeout(function() {

                $('.field-verifier').html('<i class="fa fa-circle-o-notch fa-spin fa-fw"></i>');                
                
                $.get(url, data, function(response) {
                    console.log(response);
                    response = $.parseJSON(response);
                    if (response.available == true) {
                        $('.field-verifier').html('<i class="fa fa-check fa-fw fc-primary"></i>');
                    } else {
                        $('.field-verifier').html('<i class="fa fa-close fa-fw fc-danger"></i>');
                    }
                });

            }, doneTypingInterval);
        }

    });

    $('.upload-profile').on('click', function() {
        $('.form-control-file').trigger('click');
    });

    // $('.form-control-file').on('change', function() {
    //     readPhotoURL(this, '.upload-profile');
    //     $('#upload-dp').removeClass('hidden');
    // });

    $('#remove-dp').on('click', function(e) {
        e.preventDefault();
        window.location.href = $(this).attr('data-url');
    });

    $('#citizenship').on('change', function() {
        if ($(this).val() == 'Others') {
            $('#citizenship-other').prop('disabled', false).focus();
        }
        else {
            $('#citizenship-other').prop('disabled', true);   
        }
    });

    $('#message, #comment').on('keyup', function() {
        var postButton = $('#post-comment');
        if ($(this).val() != '') {
            postButton.prop('disabled', false);
            postButton.addClass('btn-primary').removeClass('btn-danger');
        } else {
            postButton.prop('disabled', true);
        }
    });

    /*
        RATING
    */
    $('.rating').each(function() {
        var wrapper = $(this),
            ratingField = wrapper.find('input'),
            ul = wrapper.find('ul'),
            li = ul.find('li');
        li.each(function() {
            var rating = $(this).attr('data-rating');
            $(this).on('mouseover', function() {
                var lis = ul.find('li');
                lis.each(function() {
                    if ($(this).attr('data-rating') <= rating) {
                        $(this).find('.fa').attr('class', 'fa fa-star');
                    } else {
                        $(this).find('.fa').attr('class', 'fa fa-star-o');
                    }
                });
            });
            $(this).on('click', function() {
                ratingField.val(rating);
            });
        });
        $(this).on('mouseout', function() {
            var rating = ratingField.val();
            if (rating == '') {   
                li.each(function() {
                    $(this).find('.fa').attr('class', 'fa fa-star-o');
                });
            } else {
                li.each(function() {
                    if ($(this).attr('data-rating') <= rating) {
                        $(this).find('.fa').attr('class', 'fa fa-star');
                    }
                    else {
                        $(this).find('.fa').attr('class', 'fa fa-star-o');    
                    }
                });
            }
        });
    });

    // update profile photo
    $('.modal-dp').on('click', function(e) {
        e.preventDefault();
        $($(this).attr('data-target')).click();
    });
    $('#dp-file').on('change', function() {
        readPhotoURL(this, '.modal-dp');
        var form = $($(this).attr('data-form'));
        console.log(form.attr('action'));

        setTimeout(function() {
            var data = new FormData(form[0]);
            $.post({
                url: form.attr('action'),
                data: data,
                processData: false
            }).done(function(r) {
                r = $.parseJSON(r);
                console.log(r);
            });
        }, 500);
    });

    // var w = 0;
    // $('.section-header-menu ul li').each(function() {
    //     w += ($(this).width() + 16);
    // });
    // var sw = $('.section-header-menu').width();
    // $('.section-header-menu ul').css({
    //     'width' : w > sw ? w : sw
    // });
    
});

function drawCalendar(dom, targetURL) {
    $.ajax({ url: targetURL }).done(function(response) {
        $(dom).html(response);
    });
}

function drawShiftCalendar(dom, targetURL, shiftBriefId) {
    var data = { 'shiftBriefId': shiftBriefId };
    $.ajax({ url: targetURL, data: data }).done(function(response) {
        $(dom).html(response);
    });
}

function readPhotoURL(input, dom) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $(dom).attr('style', "background: url(" + e.target.result + ") center center no-repeat;background-size:cover;");
        };
        reader.readAsDataURL(input.files[0]);
    }
}