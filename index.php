<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tugas Pemweb</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins&display=swap" rel="stylesheet">
    <style>
        body{
            font-family: 'Inter', sans-serif;
        }
    </style>
  </head>
  <body class="bg-primary-subtle bg-opacity-50">

      <div class="container mt-5 p-5 col-6 rounded">
          <div class="shadow-lg p-3 bg-body-white bg-white rounded">
              <form class="mt-5" id="myForm">
                  <div class="mb-3">
                      <label for="angka" class="form-label fw-medium">Angka</label>
                      <input type="number" name="angka" class="form-control" id="angka" required>
                  </div>
                  <div class="mb-3">
                      <label for="teks" class="form-label fw-medium">Teks</label>
                      <input type="text" name="teks" class="form-control" id="teks" required>
                  </div>
                  <button type="submit" class="btn btn-primary w-100">Submit</button>
              </form>
          </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="jquery.js"></script>
</body>
</html>