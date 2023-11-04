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
