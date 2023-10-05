document.addEventListener('DOMContentLoaded', function () {
   const homeForm = document.getElementById('homeForm');

   homeForm.addEventListener('submit', function (event) {
      event.preventDefault();

      let formData = new FormData(homeForm);
      formData.append('action', 'register_ajax_callback');
      formData.append('_ajax_nonce', ajax.ajaxNonce);
      fetch(ajax.ajaxUrl, {
         method: 'POST',
         body: formData,
      })
         .then((response) => response.json())
         .then((data) => {
            if (data.hasOwnProperty('data')) {
               var mensagem = data.data.message;
               var dataResponse = document.getElementById('dataResponse');
               if (dataResponse) {
                  dataResponse.innerHTML = mensagem;
                  dataResponse.classList.remove('hidden');
                  dataResponse.classList.add('block')
                  setTimeout(function () {
                     dataResponse.classList.add('hidden');
                     dataResponse.classList.remove('block')
                  }, 5000);
               }
            }
            if (data.hasOwnProperty('success')) {
               if (data.success === true) {
                  var homeForm = document.getElementById('homeForm');

                  if (homeForm) {
                     homeForm.reset();
                  }
               }
            }
         })
         .catch((error) => {
            console.error('Ocorreu um erro:', error);
         });
   });

});
document.addEventListener('DOMContentLoaded', function () {
   var homeVideo = document.getElementById('homeVideo');

   // Inicia o vídeo mutado e com volume 0
   homeVideo.muted = true;
   // homeVideo.volume = 0;
   homeVideo.play();

   // Função para ajustar o volume
   function ajustarVolume() {
      var videoOffsetTop = document.querySelector('.collection').offsetTop;
      var videoHeight = document.querySelector('.collection').offsetHeight;
      var windowHeight = window.innerHeight;

      var scrollPosition = window.scrollY;
      // homeVideo.muted = false;
      homeVideo.volume = 0.5

      if (console.log(scrollPosition >= videoOffsetTop - windowHeight && scrollPosition <= videoOffsetTop + videoHeight)) {
         var progresso = (scrollPosition - (videoOffsetTop - windowHeight)) / videoHeight;
         var novoVolume = progresso;

         // if (novoVolume > 1) {
         //    novoVolume = 1;
         // }

         homeVideo.muted = false;
         // homeVideo.volume = novoVolume;
      }
   }

   // Adiciona um ouvinte de evento para o evento de rolagem
   window.addEventListener('scroll', ajustarVolume);
});
