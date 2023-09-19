<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prática</title>
    <link rel="stylesheet" href="estilo/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <header class="">
        <nav class="navbar cor-fundo">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Bootstrap" width="30" height="24">
                </a>
            </div>
        </nav>
    </header>

    <main>
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="mt-5">
                        Faça seu cadastro
                    </h1>
                </div>
            </div>
            <form action="crud/inserir.php" class="m-auto p-5 ">
                <div class="formulario m-auto rounded">
                    <div class="row p-2">
                        <div class="col-md-6 m-auto ">
                            <label for="nome" class="form-label cor-fonte-label fs-3">Escreva seu nome</label>
                            <input type="text" name="nome" id="nome" placeholder="Digite seu nome aqui!" class="form-control">
                        </div>
                    </div>          
                    <div class="row p-2">
                        <div class="col-md-6 m-auto ">
                            <label for="senha" class="form-label cor-fonte-label fs-3">Digite uma senha</label>
                            <input type="password" name="senha" id="senha" placeholder="Digite sua senha aqui!" class="form-control">
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </footer>
</body>

</html>