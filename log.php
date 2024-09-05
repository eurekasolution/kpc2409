<?php
    $LPP = 10;
    if(!isset($_GET["page"]))
        $page = 1;
    else
        $page = $_GET["page"];

    $start = ($page -1) * $LPP;

    $sql = "select count(*) as dcount from log";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    echo "data count = $data[dcount] <br>";
    $dataCount = $data["dcount"];

    $maxPage = ceil($dataCount/$LPP);
    echo "maxPage = $maxPage<br>";

    $sql = "select * from log order by idx desc limit $start, $LPP";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);
    // 순서, IP, WHEN, WORK
    ?>
    <div class="container">
        <div class="row">
            <div class="col colLine">순서</div>
            <div class="col colLine">IP</div>
            <div class="col colLine">시간</div>
            <div class="col colLine">WORK</div>
            <div class="col colLine">비고</div>
        </div>
    <?php
        while($data)
        {
            ?>
            <div class="row">
                <div class="col colLine"><?php echo $data["idx"]?></div>
                <div class="col colLine"><?php echo $data["ip"]?></div>
                <div class="col colLine"><?php echo $data["time"]?></div>
                <div class="col colLine"><?php echo $data["work"]?></div>
                <div class="col colLine">비고</div>
            </div>

            <?php
            $data = mysqli_fetch_array($result);
        }
    ?>
        <div class="row">
            <div class="col colLine">
                <?php 
                for($i=1; $i<=$maxPage; $i++)
                {
                    if($i == $page)
                    {
                        echo "<span class='badge rounded-pill bg-primary'><a href='index.php?cmd=log&page=$i'>$i</a></span> ";
                    }else
                    {
                        echo "<span class='badge rounded-pill bg-secondary'><a href='index.php?cmd=log&page=$i'>$i</a></span> ";
                    }
                    
                }
                ?>
            </div>
        </div>
    </div>

    <?php



?>