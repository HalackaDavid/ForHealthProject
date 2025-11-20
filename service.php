<?php include "includes/menu.php" ?>


<!--
Code jako stvoren do produkce pote jen pridat belidlo do oci a pote naskrabat a nakonec vydezinfikovat 100% alkoholem.
-->

<?php
    $arr = [
        [
            "1500",
            "noc-lahvicka.png",
        ],
        [
            "900",
            "rybiolej.png",
        ],
        [
            "100",
            "vitaminb6.png",
        ],
        [
            "1500",
            "vitaminb.png",
        ],
        [
            "900",
            "vitaminc.png",
        ],
        [
            "100",
            "vitamind.png",
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
                                <div class='card-image' style='background-size:contain; background-repeat:no-repeat; background-image:url(images/".$arr[$i][1].");'></div>
                                <div class='card-data'>
                                    <div>".$arr[$i][0]."Kč</div>
                                    <button>Dokošíku</button>
                                </div>
                            </div>";
                    }
                ?>
            </div>
        </section>
    </main> 
</div>

<?php include "includes/footer.php" ?>
