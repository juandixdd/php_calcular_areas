<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Área triangulo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="../style.css" />
  </head>
  <body>
    <div class="row justify-content-center m-5">
      <div class="col-md-8">
        <div class="card">
          <div class="card-body">
            <h1 class="card-title">Área del triangulo</h1>
            <hr />
            <div class="row justify-content-center mt-5">
              <h5 class="col-md-2">Fórmula:</h5>
              <p class="col-md-4">
                <strong>Área del triángulo</strong> = <strong>Base</strong> *
                <strong>Altura</strong> / 2
              </p>
            </div>

            <!-- form -->
            <form
              class="row g-3 mt-5"
              action="../php/area_triangulo.php"
              method="POST"
            >
              <div class="col-md-6">
                <label class="form-label">Base</label>
                <input type="text" class="form-control" name="base" />
              </div>
              <div class="col-md-6">
                <label class="form-label">Altura</label>
                <input type="text" class="form-control" name="altura" />
              </div>

              <div class="col-12">
                <input
                  type="submit"
                  value="Calcular"
                  name="calcular"
                  class="btn btn-color"
                />
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
