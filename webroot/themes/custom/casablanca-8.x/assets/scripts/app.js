(function($) {

    //Adding open class to navigation
    $(document).ready(function () {
       $('.mobile-menu').on('click', function () {
           $('.navigation').toggleClass('open');
       });
    });

    // Adding container class to every paragraph on page
    // To fix max width
    // $(".paragraph").addClass( "container" );

})(jQuery);