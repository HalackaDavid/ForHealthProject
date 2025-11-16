<?php include "includes/menu.php" ?>

<?php
    $arr = [
        [
            "Jakub Bohm",
            "Reditel",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
        [
            "Filip Prochazka",
            "Unknown",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
        [
            "Honza Kupecek",
            "Unknown",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
        [
            "Unknown",
            "Unknown",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
        [
            "Tomas Hepner",
            "Unknown",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
        [
            "Kristyna Pechova",
            "Unknown",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
        [
            "David Halacka",
            "Unknown",
            "https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fimages.unsplash.com%2Fphoto-1608848461950-0fe51dfc41cb%3Fixlib%3Drb-4.0.3%26ixid%3DMnwxMjA3fDB8MHxleHBsb3JlLWZlZWR8MTl8fHxlbnwwfHx8fA%253D%253D%26w%3D1000%26q%3D80&f=1&nofb=1&ipt=e8c8730ec140f94f5ea7cef2763c4ea4544c766706db851db8f356be99942c7d",
        ],
    ];  
?>

<div class="container">
    <section>
        <h2>O nás</h2>
        <p>Jsme dynamická firma s dlouholetou zkušeností v oboru. Naším cílem je poskytovat kvalitní služby a individuální přístup ke každému klientovi.</p>
    </section>

    <section id='aboutus'>
        <div class='cards'>
            <?php 
                for ($i=0; $i < count($arr); $i++) {
                    echo "<div class='card'>
                            <div class='image-part' style='background-size:cover; background-image:url(".$arr[$i][2].");'></div>
                            <div class='data-part container'>
                                <div>".$arr[$i][0]."</div>
                                <div>".$arr[$i][1]."</div>
                                <div>".$arr[$i][2]."</div>
                            </div>
                        </div>";
                }
            ?>
        </div>
   </section>
</div>
    

<?php include "includes/footer.php" ?>
