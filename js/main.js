(function ($, Drupal) {
    $(document).ready(function(){
        $('.flop-container').click(function() {});
        $('.expanded').unbind("click");
        $('.expanded').click(function() {
            $('ul', this).slideToggle();
            $(this).toggleClass('active');
        });
        $('#btn-search').click(function() {
            $('.container-form-search').toggleClass('active-form-search');
            $('.icon-text-search').hide();
            $('#edit-search-block-form--2').focus();
        });
        $('#btn-contact, #btn-contact-luk').unbind("click");
        $('#btn-contact, #btn-contact-luk').click(function() {
            $('#container-contact').slideToggle();
        });
        $('.js-btn-toggle').unbind("click");
        $('.js-btn-toggle').click(function() {
            $(this).next('.content').slideToggle();
        });

    });
    $(function() {
        $('.easy-modal').easyModal({
            top: 0,
            overlay: 0.9,
            hasVariableWidth: true,
            zIndex: function () {
        return 1000;
    }
        });
        
        $('.easy-modal-open').click(function(e) {
            var target = $(this).attr('href');
            $(target).trigger('openModal');
            e.preventDefault();
        });

        $('.easy-modal-close').click(function(e) {
            $('.easy-modal').trigger('closeModal');
        });

        $('.easy-modal-animated').easyModal({
            top: 100,
            overlay: 0.2,
            transitionIn: 'animated bounceInLeft',
            transitionOut: 'animated bounceOutRight',
            closeButtonClass: '.animated-close'
        });
    });
    $(function() {
        var header = $(".single-page-nav");
        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 200) {
                header.addClass('single-page-nav-show');
            } else {
                header.removeClass('single-page-nav-show');
            }
        });
    });
})(jQuery, Drupal);