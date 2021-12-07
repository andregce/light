<!doctype html>
<html lang="en">

<head>
    <title>Andre Goncalves</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
</head>

<body class="text-center bg-secondary">
    <div class="card m-3" style="width: 28rem;">
        <div class="card-body">
            <div class="container mt-5">
                <form method="POST" action="/light">
                    @csrf
                    <div class="row m-3">
                        <div class="col-6">
                            <label for="customRange1" class="form-label">Brightness</label>
                        </div>
                        <div class="col-6">
                            <input type="range" class="form-range" name="brightness" value={{ Session::get('brightness') ?? '0' }} min="0" max="100" step="10" id="brightness">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-6">
                            <label for="customRange2" class="form-label">Temperature</label>
                        </div>
                        <div class="col-6">
                            <input type="range" class="form-range" name="temperature" value={{ Session::get('temperature') ?? '0' }} min="10" max="250" step="10" id="temperature">
                        </div>
                    </div>
                    <div class="row m-3">
                        <div class="col-12">
                            <button type="submit">Let there be light</button>
                        </div>
                    </div>
                </form>
              </div>
        </div>
    </div>
</body>

</html>