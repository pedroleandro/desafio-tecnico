<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>Cadastrar Novo Estutante</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico"/>
    <!-- Bootstrap Icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet"/>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic"
          rel="stylesheet" type="text/css"/>
    <!-- SimpleLightbox plugin CSS-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet"/>
</head>
<body id="page-top">
<!-- Contact-->
<section class="page-section" id="contact">
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center mb-5">
            <div class="col-lg-6">
                <form id="contactForm" action="store.php" method="post">
                    <!-- Nome -->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="name" type="text" placeholder="Nome Completo" required/>
                        <label for="name">Nome Completo</label>
                    </div>

                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="mail" type="email" placeholder="Email" required/>
                        <label for="mail">E-mail</label>
                    </div>

                    <!-- Matrícula -->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="registration" type="text" placeholder="Matrícula" required/>
                        <label for="registration">Matrícula</label>
                    </div>

                    <!-- Matrícula -->
                    <div class="form-floating mb-3">
                        <select class="form-control" name="status" required>
                            <option value="" disabled selected>Selecione uma das opções abaixo</option>
                            <option value="ativo">Ativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                        <label for="registration">Matrícula</label>
                    </div>

                    <!-- Data de Nascimento -->
                    <div class="form-floating mb-3">
                        <input class="form-control" name="date_of_birth" type="date" placeholder="Data de Nascimento"
                               required/>
                        <label for="date_of_birth">Data de Nascimento</label>
                    </div>


                    <button class="btn btn-primary" type="submit">Cadastrar</button>
                </form>
            </div>
        </div>

    </div>
</section>
<!-- Footer-->
<footer class="bg-light py-5">
    <div class="container px-4 px-lg-5">
        <div class="small text-center text-muted"><?= date("Y") . " - iG7 Tecnologia" ?></div>
    </div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- SimpleLightbox plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<!-- * *                               SB Forms JS                               * *-->
<!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
<!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>

