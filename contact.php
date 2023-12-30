<?php

include 'includes/header.php'
?>
<section class="clean-block clean-form dark first-section-margin-top">
    <div class="container">
        <div class="block-heading">
            <h2 class="text-info" data-bss-disabled-mobile="true" data-aos="zoom-out">Contacto</h2>
        </div>
        <form>
            <div class="card-details">
                <div class="row">
                    <div class="col-sm-8">
                        <div class="mb-3">
                            <label class="form-label" data-bss-disabled-mobile="true" data-aos="flip-up" for="names">Nombre(s)</label>
                            <input class="form-control" type="text" data-bss-disabled-mobile="true" data-aos="flip-up" id="names" placeholder="Nombre(s)" name="names" data-bs-theme="light">
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="mb-3">
                            <label class="form-label" data-bss-disabled-mobile="true" data-aos="flip-up" for="surnames">Apellidos</label>
                            <input class="form-control" type="text" data-bss-disabled-mobile="true" data-aos="flip-up" id="surnames" placeholder="Apellidos" name="surnames" data-bs-theme="light">
                        </div>
                    </div>
                    <div class="col-sm-11">
                        <div class="mb-3">
                            <label class="form-label" data-bss-disabled-mobile="true" data-aos="flip-up" for="email">Correo electrónico</label>
                            <input class="form-control" type="email" data-bss-disabled-mobile="true" data-aos="flip-up" id="email" placeholder="Correo electrónico" name="email" data-bs-theme="light" inputmode="email">
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="mb-3">
                            <label class="form-label" data-bss-disabled-mobile="true" data-aos="flip-up" for="phone">No. teléfono</label>
                            <input class="form-control" type="text" data-bss-disabled-mobile="true" data-aos="flip-up" id="phone" placeholder="No. teléfono" name="phone" data-bs-theme="light" inputmode="tel">
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <label class="form-label" data-bss-disabled-mobile="true" data-aos="flip-up" for="message">Mensaje</label>
                            <textarea class="form-control" data-bss-disabled-mobile="true" data-aos="flip-up" id="message" name="message" data-bs-theme="light"></textarea>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-3">
                            <a class="btn btn-success d-block w-100 btn-font-size" role="button" data-bss-disabled-mobile="true" data-aos="flip-down" href="#">Enviar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<?php

include 'includes/footer.php'
?>