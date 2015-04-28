<script src="js/masonry.pkgd.min.js"></script>
<script>
  $(window).load(function(){
    var container = document.querySelector('#container');
    var msnry = new Masonry( container, {
      // options
      itemSelector: '.item'
    });
  });
</script>