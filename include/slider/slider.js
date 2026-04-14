(function () {
  var wrapper = document.querySelector(".slider-wrapper");
  if (!wrapper) return;

  var $conteudoGeral = wrapper.querySelector(".conteudo-geral");
  var $conteudoEmArray = [].slice.call(wrapper.querySelectorAll(".componente"));
  var $botoesDeFechar = [].slice.call(wrapper.querySelectorAll(".componente-botao-fechar"));

  setTimeout(function () {
    $conteudoGeral.classList.remove("js-conteudo-geral");
  }, 200);

  $conteudoEmArray.forEach(function ($componente) {
    $componente.addEventListener("click", function () {
      if (this.classList.contains("caixa-conteudo-ativo")) return;
      $conteudoGeral.classList.add("caixa--componente-ativo");
      this.classList.add("caixa-conteudo-ativo");
    });
  });

  $botoesDeFechar.forEach(function ($btn) {
    $btn.addEventListener("click", function (e) {
      e.stopPropagation();
      $conteudoGeral.classList.remove("caixa--componente-ativo");
      var ativo = wrapper.querySelector(".componente.caixa-conteudo-ativo");
      if (ativo) ativo.classList.remove("caixa-conteudo-ativo");
    });
  });
})();
