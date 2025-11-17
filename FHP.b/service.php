<?php include "includes/menu.php" ?>

<?php
    $arr = [
        [
            "1500",
            "desc1",
            "img1",
        ],
        [
            "900",
            "desc2",
            "img2",
        ],
        [
            "100",
            "desc3",
            "img3",
        ],
        [
            "1500",
            "desc1",
            "img1",
        ],
        [
            "900",
            "desc2",
            "img2",
        ],
        [
            "100",
            "desc3",
            "img3",
        ],
        [
            "1500",
            "desc1",
            "img1",
        ],
        [
            "900",
            "desc2",
            "img2",
        ],
        [
            "100",
            "desc3",
            "img3",
        ],
    ];
?>

<div class="content-container">
    <main class="indent">
        <section id="service">
            <div class="cards">
                <?php
                    for($i=0;$i<count($arr);$i++) {
                        echo "<div class='card'>
                                <div class='card-image' style='background-color: url(images/service/".$arr[$i][2].");'></div>
                                <div class='card-data'>
                                    <div>".$arr[$i][0]."Kč</div>
                                    <div>".$arr[$i][1]."</div>
                                    <div>Dokošíku</div>
                                </div>
                            </div>";
                    }
                ?>
            </div>
        </section>
    </main> 
</div>

<?php include "includes/footer.php" ?>
