<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body>
<style>
    .gradient-custom {
        background: #6a11cb;
        background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
        background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
</style>
<section class="vh-100 gradient-custom">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                <div class="card bg-dark text-white" style="border-radius: 1rem;">
                    <div class="card-body p-5 text-center">
                        <div class="mb-md-5 mt-md-4 pb-5">
                            <h2 class="fw-bold mb-2">REGISTRE</h2><br><br>
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline datepicker">
                                        <input type="email" id="typeEmailX" placeholder="Nom"
                                               class="form-control form-control-lg"/>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-outline datepicker">
                                        <input type="email" id="typeEmailX" placeholder="Cognom"
                                               class="form-control form-control-lg"/>
                                    </div>
                                </div>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="email" id="typeEmailX" placeholder="Email"
                                       class="form-control form-control-lg"/>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" placeholder="Nom Usuari"
                                       class="form-control form-control-lg"/>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" placeholder="Contrasenya"
                                       class="form-control form-control-lg"/>
                            </div>
                            <div class="form-outline form-white mb-4">
                                <input type="password" id="typePasswordX" placeholder="Repeteix Contrasenya"
                                       class="form-control form-control-lg"/>
                            </div>
                            <div>
                                <p class="mb-0">Ja tens un compte? <a href="<?php echo e(url('/login')); ?>"
                                                                      class="text-white-50 fw-bold">Inicia Sessió</a>
                                </p>
                            </div>
                        </div>
                        <button class="btn btn-outline-light btn-lg px-5" type="submit">Registra</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-8 col-xl-6">
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="form-outline datepicker">
                        <input type="text" class="form-control" id="exampleDatepicker1"/>
                        <label for="exampleDatepicker1" class="form-label">Select a date</label>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="form-outline datepicker">
                        <input type="text" class="form-control" id="exampleDatepicker1"/>
                        <label for="exampleDatepicker1" class="form-label">Select a date</label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH D:\DAW\M7 - Desenvolupament Web Servidor\UF3\appGael\resources\views/register.blade.php ENDPATH**/ ?>