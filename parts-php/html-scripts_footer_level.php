<section class="fixed-section">
  <div class="homepage-container flex">
    <div class="fixed-functions">
      <svg class="icon-homepage svg">
        <use xlink:href="./icomoon/symbol-defs.svg#icon-homepage"></use>
      </svg>
    </div>

    <div class="fixed-functions">
      <svg class="icon-heart svg">
        <use xlink:href="./icomoon/symbol-defs.svg#icon-heart"></use>
      </svg>
    </div>

    <div class="fixed-functions">
      <svg class="icon-cart svg">
        <use xlink:href="./icomoon/symbol-defs.svg#icon-cart"></use>
      </svg>
    </div>

    <div class="fixed-functions">
      <svg class="icon-user svg">
        <use xlink:href="./icomoon/symbol-defs.svg#icon-user"></use>
      </svg>
    </div>
  </div>
</section>

<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

<script src="./js/nomad.js"></script>

<script>
  $('path').click(function() {
    $('.mountain_box').css('display', 'block')
  })
  $('.close_info').click(function() {
    $('.mountain_box').css('display', 'none')
  })
  $('.btn').click(function() {
    $('.level_light_box').css('display', 'block')
  })
  $('.close_level').click(function() {
    $('.level_light_box').css('display', 'none')
  })
</script>

</body>

</html>