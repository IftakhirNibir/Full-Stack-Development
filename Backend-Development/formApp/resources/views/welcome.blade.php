<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <h1>Sum form</h1>
    <form method="POST" style="width: 50%">
        @csrf
        <div class="mb-3">
          <label for="number1" class="form-label">Number1: </label>
          <input type="text" class="form-control" id="number1" name="number1">
        </div>
        <div class="mb-3">
          <label for="number2" class="form-label">Number2: </label>
          <input type="text" class="form-control" id="number2" name="number2">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>

      <div class="output mt-5">
        @if (isset($output))
            <h3>{{$output}}</h3>     
        @endif
    </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

