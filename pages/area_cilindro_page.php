<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Área Cilindro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../style.css" />
</head>

<body>
    <div class="row justify-content-center m-5">
        <div class="col-md-8">
            <div class="card">
                <a class="btn btn-color col-2 m-2" href="../index.html"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-backspace-fill" viewBox="0 0 16 16">
                        <path d="M15.683 3a2 2 0 0 0-2-2h-7.08a2 2 0 0 0-1.519.698L.241 7.35a1 1 0 0 0 0 1.302l4.843 5.65A2 2 0 0 0 6.603 15h7.08a2 2 0 0 0 2-2V3zM5.829 5.854a.5.5 0 1 1 .707-.708l2.147 2.147 2.146-2.147a.5.5 0 1 1 .707.708L9.39 8l2.146 2.146a.5.5 0 0 1-.707.708L8.683 8.707l-2.147 2.147a.5.5 0 0 1-.707-.708L7.976 8 5.829 5.854z" />
                    </svg> Volver</a>
                <div class="card-body">
                    <h1 class="card-title">Área del Cilindro</h1>
                    <hr />
                    <div class="row justify-content-center mt-5">
                        <h5 class="col-md-2">Fórmula:</h5>
                        <p class="col-md-4">
                            <strong>Área</strong> = 2 * pi * radio * (radio + altura)
                        </p>
                    </div>

                    <!-- form -->
                    <form class="row g-3 mt-5" action="../php/area_cilindro.php" method="POST">
                        <div class="col-md-6">
                            <label class="form-label">Radio</label>
                            <input type="text" class="form-control" name="radio" />
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Altura</label>
                            <input type="text" class="form-control" name="altura" />
                        </div>

                        <div class="col-12">
                            <div class="row m-1">
                                <input type="submit" value="Calcular" name="calcular" class="btn btn-color" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>