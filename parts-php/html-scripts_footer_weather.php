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
    $('.weather_box').css('display', 'block')
  })
  const inputField = document.querySelector('.chosen-value');
  const dropdown = document.querySelector('.value-list');
  const dropdownArray = [...document.querySelectorAll('li')];
  console.log(typeof dropdownArray)
  dropdown.classList.add('open');
  inputField.focus(); // Demo purposes only
  let valueArray = [];
  dropdownArray.forEach(item => {
    valueArray.push(item.textContent);
  });

  const closeDropdown = () => {
    dropdown.classList.remove('open');
  }

  inputField.addEventListener('input', () => {
    dropdown.classList.add('open');
    let inputValue = inputField.value.toLowerCase();
    let valueSubstring;
    if (inputValue.length > 0) {
      for (let j = 0; j < valueArray.length; j++) {
        if (!(inputValue.substring(0, inputValue.length) === valueArray[j].substring(0, inputValue.length).toLowerCase())) {
          dropdownArray[j].classList.add('closed');
        } else {
          dropdownArray[j].classList.remove('closed');
        }
      }
    } else {
      for (let i = 0; i < dropdownArray.length; i++) {
        dropdownArray[i].classList.remove('closed');
      }
    }
  });

  dropdownArray.forEach(item => {
    item.addEventListener('click', (evt) => {
      inputField.value = item.textContent;
      dropdownArray.forEach(dropdown => {
        dropdown.classList.add('closed');
      });
    });
  })

  inputField.addEventListener('focus', () => {
    inputField.placeholder = 'search';
    dropdown.classList.add('open');
    dropdownArray.forEach(dropdown => {
      dropdown.classList.remove('closed');
    });
  });

  inputField.addEventListener('blur', () => {
    inputField.placeholder = 'Select';
    dropdown.classList.remove('open');
  });

  document.addEventListener('click', (evt) => {
    const isDropdown = dropdown.contains(evt.target);
    const isInput = inputField.contains(evt.target);
    if (!isDropdown && !isInput) {
      dropdown.classList.remove('open');
    }
  });

  $('.yilan_country').mouseenter(function() {
    $('.n_5').addClass('show')
  })
  $('.yilan_country').mouseleave(function() {
    $('.n_5').removeClass('show')
  })
  $('.n_5').click(function() {
    $('.weather_box').css('backgroundColor', 'lightblue')
  })
  $('.hsinchu_country').mouseenter(function() {
    $('.n_1').addClass('show')
  })
  $('.hsinchu_country').mouseleave(function() {
    $('.n_1').removeClass('show')
  })
  $('.hsinchu_country').mouseenter(function() {
    $('.n_2').addClass('show')
  })
  $('.hsinchu_country').mouseleave(function() {
    $('.n_2').removeClass('show')
  })
  $('.miaoli_country').mouseenter(function() {
    $('.n_3').addClass('show')
  })
  $('.miaoli_country').mouseleave(function() {
    $('.n_3').removeClass('show')
  })
  $('.miaoli_country').mouseenter(function() {
    $('.n_4').addClass('show')
  })
  $('.miaoli_country').mouseleave(function() {
    $('.n_4').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_1').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_1').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_2').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_2').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_3').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_3').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_4').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_4').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_5').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_5').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_6').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_6').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_7').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_7').removeClass('show')
  })
  $('.hualien_country').mouseenter(function() {
    $('.e_8').addClass('show')
  })
  $('.hualien_country').mouseleave(function() {
    $('.e_8').removeClass('show')
  })
</script>

</body>

</html>