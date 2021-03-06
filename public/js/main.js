$(document).ready(function () {
    //referentie: https://tympanus.net/codrops/2015/09/15/styling-customizing-file-inputs-smart-way/
    $('.inputFile').each(function () {
        var $input = $(this),
            $label = $input.next('label'),
            labelVal = $label.html();

        $input.on('change', function (e) {
            var fileName = '';

            if (this.files && this.files.length > 1)
                fileName = (this.getAttribute('data-multiple-caption') || '').replace('{count}', this.files.length);
            else if (e.target.value)
                fileName = e.target.value.split('\\').pop();

            if (fileName)
                $label.find('span').html(fileName);
            else
                $label.html(labelVal);
        });

        // Firefox bug fix
        $input
            .on('focus', function () {
                $input.addClass('has-focus');
            })
            .on('blur', function () {
                $input.removeClass('has-focus');
            });
    });


    $('.box').hover(function () {
        $('.full-image').html($(this).html());
    });


    //profile pic upload on register screen
    $(function () {
        $('#picture-input').change(function (e) {
            var img = URL.createObjectURL(e.target.files[0]);
            $('#register-img').attr('src', img);

        });
    });
});