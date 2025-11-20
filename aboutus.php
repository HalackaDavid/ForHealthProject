<?php include "includes/menu.php" ?>

<?php
    $arr = [
        [
            "Jakub Böhm",
            "Ředitel",
            "bohm.jpg",

        ],
        [
            "Tomáš Hepner",
            "Jednatel",
            "hepner.jpg",
        ],        [
            "Filip Procházka",
            "Finanční ředitel",
            "prochazka.jpg",
        ],
        [
            "Jan Kupeček",
            "Personalista",
            "kupecek.jpg",
        ],
        [
            "František Kellner",
            "Marketér",
            "kellner.jpg",
        ],
        [
            "Kristýna Pechová",
            "Sekretářka",
            "pechova.jpg",
        ],
        [
            "David Halačka",
            "Asistent",
            "halacka.jpg",
        ],
    ];  
?>

<div class="content-container">
    
    <main class="indent">

        <section id='aboutus'>
            <div class='cards'>
                <?php 
                    for ($i=0; $i < count($arr); $i++) {
                        echo "<div class='card'>
                                <div class='image-part' style='background-size:cover; background-image:url(images/".$arr[$i][2].");'></div>
                                <div class='data-part indent'>
                                    <div>".$arr[$i][0]."</div>
                                    <div>".$arr[$i][1]."</div>
                                </div>
                            </div>";
                    }
                ?>
            </div>
       </section>
    </main>

</div>


<?php include "includes/footer.php" ?>
