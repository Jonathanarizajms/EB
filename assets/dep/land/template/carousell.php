<style>
	.carousel-item img {
  width: 100%; /* Ancho al 100% */
  max-height: 80vh; /* Altura máxima del 80% de la ventana */
  object-fit: cover; /* Mantiene la proporción de la imagen */
  display: block; /* Asegura que la imagen se comporte como un bloque */
  margin: 0 auto; /* Centra la imagen */
}
</style>
<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" data-bs-interval="1000">
  <div class="carousel-inner">
    <div class="carousel-item active w-100 h-50">
      <img src="assets/dep/land/img/carousell/3.jpg" class="d-block w-100 rounded border" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/dep/land/img/carousell/2.png" class="d-block w-100 rounded border" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="assets/dep/land/img/carousell/1.jpg" class="d-block w-100 rounded border" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
