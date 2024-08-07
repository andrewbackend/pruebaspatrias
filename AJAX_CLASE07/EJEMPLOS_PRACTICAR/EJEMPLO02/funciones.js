let x = $(document);
x.ready(inicializarEventos);

function inicializarEventos() {
  let x = $("#menu a");
  x.click(presionEnlace);
}

function presionEnlace() {
  let pagina = $(this).attr("href");
  let x = $("#detalles");
  x.load(pagina);
  return false;
}