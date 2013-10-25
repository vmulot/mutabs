
$(function () {
    var tabContainers = $('.ce_mutabStart');
    
    $('.ce_mutabNav a').click(function () {
        tabContainers.hide().filter(this.hash).show();
        
        $('.ce_mutabNav a').parent('li').removeClass('active');
        $(this).parent('li').addClass('active');
        
        return false;
    }).filter(':first').click();
});
