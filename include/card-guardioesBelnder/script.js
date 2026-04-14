/*$(".caixa__imagem__fundo").click(function () {
  $(".caixa__imagem__fundo").removeClass("caixa__ativo");
  $(this).addClass("caixa__ativo");
});*/

$(".caixa__imagem__fundo").click(function () {
  $(this).closest(".caixa__geral").find(".caixa__imagem__fundo").removeClass("caixa__ativo");
  $(this).addClass("caixa__ativo");
});
