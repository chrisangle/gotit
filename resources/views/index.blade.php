<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <title>The Tea House</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="jumbotron text-center">
    <h1>The Tea House</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form class="form-inline" action="{{ route('result') }}">
                <label for="code" class="form-label mr-sm-2">Nhập mã dự thưởng:</label>
                <input type="text" class="form-control mr-sm-2" id="code" name="code">
                <button type="submit" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
