jQuery(document).ready(function ($) {
   // Verifica se o elemento #tamanho existe
   if ($('#tamanho').length) {
      // Adiciona um evento de mudança nos radio buttons
      $('input[name="attribute_tamanho"]').change(function () {
         // Obtém o valor do radio button selecionado
         var selectedValue = $(this).val();

         // Define o valor do select como o valor do radio button
         $('#tamanho').val(selectedValue);

         // Dispara o evento change no select
         $('#tamanho').change();
      });
   }
});

jQuery(document).ready(function ($) {
   $('.reset_variations').click(function (e) {
      e.preventDefault(); // Evita que o link recarregue a página

      // Limpa a seleção dos radio buttons
      $('input[name="attribute_tamanho"]').prop('checked', false);

      // Limpa a seleção do select, se existir
      if ($('#tamanho').length) {
         $('#tamanho').val('');
      }

      // Ativa o evento change no select, se existir
      if ($('#tamanho').length) {
         $('#tamanho').change();
      }
   });
});

jQuery(
   '<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>',
).insertAfter('.quantity input')
jQuery('.quantity').each(function () {
   var spinner = jQuery(this),
      input = spinner.find('input[type="number"]'),
      btnUp = spinner.find('.quantity-up'),
      btnDown = spinner.find('.quantity-down'),
      min = input.attr('min'),
      max = input.attr('max')

   btnUp.click(function () {
      var oldValue = parseFloat(input.val())

      var newVal = oldValue + 1

      spinner.find('input').val(newVal)
      spinner.find('input').trigger('change')
   })

   btnDown.click(function () {
      var oldValue = parseFloat(input.val())
      if (oldValue <= min) {
         var newVal = oldValue
      } else {
         var newVal = oldValue - 1
      }
      spinner.find('input').val(newVal)
      spinner.find('input').trigger('change')
   })
})

document.addEventListener('DOMContentLoaded', function () {
   var related_products = new Swiper('#swiper-related-products', {
      slidesPerView: 2,
      spaceBetween: 30,
      navigation: {
         nextEl: '.swiper-button-next',
         prevEl: '.swiper-button-prev',
      },
      pagination: {
         el: '.swiper-pagination',
         clickable: true,
      },
      breakpoints: {
         768: {
            slidesPerView: 3,
         }
      }
   });
});
