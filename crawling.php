<!-- crawling.php -->
<?php
    if(!isset(  $_GET["page"]  ))
        $page = 1;
    else
        $page = $_GET["page"];

    $URL = "https://www.ksure.or.kr/rh-kr/bbs/i-412/list.do?pageIndex=$page&searchCondition=&pageItm=10";

    $curl = curl_init(); // curl = Client URL
    curl_setopt($curl, CURLOPT_URL, $URL); // 요청할 주소
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 요청결과를 문자로 반환
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 서버의 인증서 유효성검사
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "User-Agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.121 Safari/537.36"
    ));
    $response = curl_exec($curl);

    //echo "$response";
?>

<div class="container">
    <div class="row">
        <div class="col colLine">

        </div>
    </div>
</div>