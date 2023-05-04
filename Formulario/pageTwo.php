<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">
    </script>
    <script src = "https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js">
    </script>
    <script src = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/js/bootstrap-multiselect.min.js">
    </script>
    <link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-multiselect/0.9.15/css/bootstrap-multiselect.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    </head>
<body>
    <div class = "container-fluid main-bg" >
        <div class="row">
            <div class=" col-12 box">
                <form action="" method="post" class="form">
                    <h2 class="title text-center"> La Casa De Pastel</h2>
                    <label for="">Codigo do pastel</label>
                    <input type="text">
                    <label for="">Unidades vendidas</label>
                    <input type="number" class="number">
                    <div class="btn">
                        <button type="button" class="btn btn-primary">Editar</button>
                        <button type="button" class="btn btn-danger">Deletar</button>
                    </div>
                    <button type="button" class="btn btn-primary">Enviar</button>
                    <a class="a" href="http://localhost/Formulario/index.php/"><i class="bi bi-arrow-left-circle"></i></a>
                </form>
            </div>
            
        </div>
    </div>
    <script>
        $(document).ready(function() {
        $('#mltislct').multiselect();
        });
    </script>
</body>
</html>