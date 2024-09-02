<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>웹 취약점 분석과 시큐어 코딩</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Logo</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">취약점 분석</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">SQL Injection</a></li>
                    <li><a class="dropdown-item" href="#">XSS</a></li>
                    <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
            </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Dropdown</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Link</a></li>
                  <li><a class="dropdown-item" href="#">Another link</a></li>
                  <li><a class="dropdown-item" href="#">A third link</a></li>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>


    <div class="container">
        <div class="row bg-danger">
            <div class="col-5">5</div>
            <div class="col-3">3</div>
            <div class="col-4">4</div>
        </div>
        <div class="row">
            <div class="col-5 bg-success">
                <input type="text" class="form-control">
            </div>
            <div class="col-3 col-md-5 bg-primary">3</div>
            <div class="col bg-danger">4</div>
        </div>

        <div class="row">
            <div class="col-5 bg-success d-none d-md-block">
                <input type="text" class="form-control">
            </div>
            <div class="col-3 col-md-5 bg-primary">3</div>
            <div class="col bg-danger">4</div>
        </div>

        <div class="row">
            <div class="col">
                <?php
                    for($i = 1; $i <= 10; $i++)
                    {
                        echo "$i <br>";
                    }

                    include "03.php";

                    $name = "홍길동";
                    echo "name = $name<br>";
                    echo "i = $i <br>";
                ?>
            </div>
        </div>

    </div>

    <!-- Bootstrap JS (optional, for enhanced features like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
