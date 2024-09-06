<!-- crawling.php -->
<?php
    if(!isset(  $_GET["page"]  ))
        $page = 1;
    else
        $page = $_GET["page"];

    $URL = "https://www.ksure.or.kr/rh-kr/bbs/i-412/list.do?pageIndex=$page&searchCondition=&pageItm=10";

    $curl = curl_int(); // curl = Client URL
    curl_setopt($curl, CURLOPT_URL, $URL); // 요청할 주소
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true); // 요청결과를 문자로 반환
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false); // 서버의 인증서 유효성검사
    $response = curl_exec($curl);

?>