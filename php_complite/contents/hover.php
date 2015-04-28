<script>
$( document ).ready(function() {
    $("[rel='tooltip']").tooltip();    
 
    $('.hover').hover(
        function(){
            $(this).find('.desc').slideDown(250); //.fadeIn(250)
        },
        function(){
            $(this).find('.desc').slideUp(250); //.fadeOut(205)
        }
    ); 
});
</script>