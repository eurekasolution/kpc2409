<?php
	include "db.php";
	include "config.php";

	$conn = connectDB();

	session_save_path("sess");
	session_start();
	
?>

<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>취약점 분석</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Flexbox 레이아웃 설정 */
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }
        .container-flex {
            flex: 1;
        }
        footer {
            background-color: #f8f9fa;
            padding: 10px 0;
        }
    </style>
</head>
<body>

	<?php

		//phpinfo();
		$ip = $_SERVER["REMOTE_ADDR"];

		$a = rand(1, 254);
		$b = rand(1, 254);
		$c = rand(1, 254);
		$d = rand(1, 254);
		$ip = "$a.$b.$c.$d";
		echo "ip = $ip<br>";

		include "menu.php";
	?>
    <!-- Body Content -->
    <div class="container-flex">
        <div class="container mt-4">
            <?php
            if (isset($_GET['cmd'])) {
                $cmd = $_GET['cmd'];
                $filename = "$cmd.php";
                if (file_exists($filename)) {

					//echo "include $filename , sessid = $sess_id<br>";
                    include $filename;
                } else {
                    echo "<div class='alert alert-danger'>해당 페이지가 존재하지 않습니다.</div>";
                }
            } else {
                include "init.php";
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center bg-secondary">
        <div class="container">
            <p>한국생산성본부(KPC) 웹 취약점 분석과 시큐어 코딩 과정</p>
        </div>
    </footer>

    <?php
    mysqli_close($conn);
    ?>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
