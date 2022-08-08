<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Excuse Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="back.js"></script>

  </head>

  <body class='bg-dark text-light font-monospace'>

    <header class="navbar bg-warning p-4">
      <div class="container">
        <h3 class="text-dark font-monospace">Excuser Generator</h3>
      </div>
</header>

    <div class="container">
      <div class="conteudo mt-4 mb-4">

        <p class="fs-5 text-center">
          This is an excuse generator. You can use it for escape from work, parties, 
          college, children or even to scape from your own family. Just choose which one do you need and press 
          "Generate Excuse" button...
        </p>

        <form action="#">
          <div class="row">
            <div class="col-md-3 "><!--border border-light-->
              <label class="fs-5 mt-4 mb-4 bg-dark text-warning" for="option">Choose an option...</label>
            </div>
            <div class="col-md-2">
              <select id="option" class="form-select form-select-lg fs-5 mt-4 mb-4">
                <option value="random" selected >Random</option>
                <option value="family">Family</option>
                <option value="office">Work</option>
                <option value="children">Children</option>
                <option value="college">College</option>
                <option value="party">Party</option>
              </select>
            </div>

            <div class="col-md-7 d-grid gap-2"> 
              <button type="submit" class="btn btn-warning fs-5 mt-4 mb-4 fw-bold" onclick="processa_back()">Generate the Excuse</button>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <textarea id="textarea" class="form-control mt-3 fs-5" rows= "3" placeholder="Your excuses should to appears here..." disabled></textarea>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>