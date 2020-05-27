<?php include 'header.php';?>

<section class="total fondo-rojo-fiat">
    <section class="container top-20 bottom-20">
        <div class="row text-left">
            <div class="col-md-2">
                <img src="imgs/logo-fiat-color.png" class="img-fluid" alt="">
            </div>
	        
            <div class="col-md-7">
                <h2 class="blanco titulo-fiat top-40">ACCESORIOS FIAT</h2>
            </div>
            
        </div>
    </section>
</section>


<section class="total">
    <section class="container top-30 bottom-30">
        <div class="row text-center">
            <div class="col-md-12">
                <h3>ENCUENTRA TU ACCESORIO</h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <!-- Inicio del form -->
                <form role="form" action="">
                    <div class="form-row">

                        <div class="col-md-3 mb-3">
                            <select class="form-control control-ssangyong is-invalid">
                                <option value="" selected="">MODELO</option>
                                <option value="" selected="">MODELO 1</option>
                                <option value="" selected="">MODELO 2</option>
                                <option value="" selected="">MODELO 3</option>
                                <option value="" selected="">MODELO 4</option>
                                <option value="" selected="">MODELO 5</option>
                                <option value="" selected="">MODELO N...</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <select class="form-control is-invalid">
                                <option value="">TIPO DE ACCESORIO</option>
                                <option value="">CATEGORÍA 1</option>
                                <option value="">CATEGORÍA 2</option>
                                <option value="">CATEGORÍA 3</option>
                                <option value="">CATEGORÍA 4</option>
                                <option value="">CATEGORÍA 5</option>
                                <option value="">CATEGORÍA N...</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <select class="form-control is-invalid">
                                <option value="">VER TODOS LOS ACCESORIOS</option>
                                <option value="">VER LISTAS DE 6</option>
                                <option value="">VER LISTAS DE 12</option>
                                <option value="">VER LISTAS DE 18</option>
                            </select>
                        </div>

                        <div class="col-md-3 mb-3">
                            <select class="form-control is-invalid">
                                <option value="date-DESC">Orden &darr;</option>
                                <option value="date-ASC">Orden &uarr;</option>
                            </select>
                        </div>

                        <!-- FILTROS -->
                        <div class="col-md-12 mb-3 text-center">
                            <button class="btn btn-lg btn-fiat inline-block"><i class="fas fa-search mr-2"></i>Filtrar</button>
                            <button class="btn btn-lg btn-fiat inline-block"><i class="fas fa-search mr-2"></i>Eliminar Filtrar</button>
                        </div>

                    </div>

                </form>
                <!-- Cierre del form -->

                <div class="col-md-12 top-20">
                    <div class="row text-left">

                        <div class="col-md-3 bottom-30">
                            <img src="imgs/producto-1-fiat.png" class="img-fluid" alt="">
                            <p class="destacado no-space">LLANTAS FIAT
                                <br>ABARTH
                                <br>SKU: 123456789
                            </p>
                            <h3><strong>$69.700</strong></h3>
                            <a href="fiat-interno.php" class="btn btn-lg btn-cotizar bloque">COTIZAR</a>
                        </div> <!-- col-3 -->

                        <div class="col-md-3 bottom-30">
                            <img src="imgs/producto-2-fiat.png" class="img-fluid" alt="">
                            <p class="destacado no-space">LLANTAS FIAT
                                <br>500
                                <br>SKU: 123456789
                            </p>
                            <h3><strong>$109.000</strong></h3>
                            <a href="fiat-interno.php" class="btn btn-lg btn-cotizar bloque">COTIZAR</a>
                        </div> <!-- col-3 -->

                        <div class="col-md-3 bottom-30">
                            <img src="imgs/producto-1-fiat.png" class="img-fluid" alt="">
                            <p class="destacado no-space">LLANTAS FIAT
                                <br>CRONOS
                                <br>SKU: 123456789
                            </p>
                            <h3><strong>$85.500</strong></h3>
                            <a href="fiat-interno.php" class="btn btn-lg btn-cotizar bloque">COTIZAR</a>
                        </div> <!-- col-3 -->

                        <div class="col-md-3 bottom-30">
                            <img src="imgs/producto-2-fiat.png" class="img-fluid" alt="">
                            <p class="destacado no-space">LLANTAS FIAT
                                <br>CRONOS
                                <br>SKU: 123456789
                            </p>
                            <h3><strong>$90.000</strong></h3>
                            <a href="fiat-interno.php" class="btn btn-lg btn-cotizar bloque">COTIZAR</a>
                        </div> <!-- col-3 -->

                    </div> <!-- col-12 -->

                    <!-- FILTROS -->
                    <div class="col-md-12 mb-3 text-center">
                        <button class="btn btn-lg btn-fiat inline-block"><i class="fas fa-search mr-2"></i>VER MÁS PRODUCTOS</button>
                    </div>

                </div>
            </div>
        </div>

    </section>
</section>


<?php include 'footer.php';?>