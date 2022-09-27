<div class="row">
                <div class="col-lg-2 d-none d-sm-block">
                    <aside class="bg-light" id="side">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                        </ul>
                    </aside>
                </div>
         
   
            <div class="col-lg-10 col-sm-12">
               <button class="danger"  type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Agregar</button>
            diandae voluptatibus molestias voluptates aut vel sint soluta ea aspernatur! Tenetur ex, inventore excepturi fugiat mollitia voluptas.
            <div class="row">
                  <?php  for ($a=0 ; $a<10; $a++):?>
                    <div class=" col md-4">

                      <div class='card'style='width: 18rem;'>
                        <img src='../public/img/logo.png' class='card-img-top' alt='...'>
                        <div class='card-body'>
                          <h5 class='card-title'>Card title</h5>
                          <p class='card-text'>Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <div class='row'>
                          <a href='#' class='btn btn-primary col-md-6' data-bs-toggle="modal" data-bs-target="#exampleModal">Go somewhere</a>
                          <a href='details.php' class='btn btn-warning col-md-6' >Ver detalles</a>
                          <a href='#' class='btn btn-danger col-md-12' onclick="delet(this)">Eliminar</a>
                        </div>
                      </div>
                    </div>
                  </div>
                        <?php endfor;?>
                      </div>
            </div>



        </div>