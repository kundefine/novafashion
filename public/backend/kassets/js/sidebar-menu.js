// sidebar current link activation
(function(){
    $(document).ready(function(){
        // active current link (add 'active' class to current link)
        let currentLinkPath = location.pathname;
        let activeLink = $('.x-navigation li a[href="'+ currentLinkPath +'"]').parent().addClass('active');
        // add 'active' class to parent for collapsing current link
        if(activeLink.parent().parent().hasClass('xn-openable')) {
            activeLink.parent().parent().addClass('active');
        }
    });
})();