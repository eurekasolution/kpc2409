<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>로그인 결과</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">로그인 결과</h2>
        <div class="mt-4">
            <p><strong>아이디:</strong> <?php echo $_POST['id'] ?></p>
            <p><strong>비밀번호:</strong> <?php echo $_POST['pass'] ?></p>
        </div>
        <a href="04.php" class="btn btn-primary mt-3">돌아가기</a>
    </div>

    <!-- Bootstrap JS (optional, for enhanced features like modals) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
