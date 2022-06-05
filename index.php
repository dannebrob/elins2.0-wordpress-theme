<?php 
get_header();
?>

<!-- This is a WP theme is made by Daniel Brobäck, an aspiring web developer from Sweden -->
<div id="primary" class="content-area">
    <main>
        <section id="front-img">
        <div class="frontImg1"></div>
        <div class="frontImg2"></div>
        <div class="frontImg3"></div>
            <!-- img of farm whole page -->

        </section>

        <div class="underline"></div>

        <!-- underline -->

        <section id="frontText">
            <div>
         <h1> Handla din mjölk direkt från mina kor och min gård</h1>
         <p>När DU väljer att köpa GRÄDDE MJÖLK KÖTT eller ett SKINN från mig och mina kor….då har DU gjort ett aktivt val. </p>
            <p> DU har bidragit till ett ”litet jordbruks överlevnad” som i sin tur bidrar till ett ÖPPET LANDSKAP,
             BIOLOGISK MÅNGFALD,EN LEVANDE LANDSBYGD, ETT MILJÖVÄNLIGT JORDBRUK och framför allt en GLAD BONDE som 
             kan fortsätta att driva sin gård vidare….. TACK</p>
        </div>
        
         <h2>De här företagen som köper sin mjölk och grädde av mig:</h2>
         <h4>Forslundska villan</h4>
         <p> <a href="https://www.forslundskavillan.com/">Hemsida</a>
          / <a href="https://sv-se.facebook.com/Forslundska-Villan-518049771880242/">Facebook</a>
          /<a href="https://www.instagram.com/forslundskavillan/"> Instagram</a></p>

        <h4>Josefssons Lanthandel och Cafén</h4>
        <p> <a href="http://josefssonsalltjanst.se/">Hemsida</a> 
        / <a href="https://www.facebook.com/Josefssons-Lanthandel-Caf%C3%A9-101594671280333/">Facebook</a>
        /<a href="https://www.instagram.com/josefssonscafe/"> Instagram</a></p>

        <h4>Naturfantasten</h4>
        <p> <a href="https://naturfantasten.se/">Hemsida</a> 
        / <a href="https://www.facebook.com/Naturfantasten/">Facebook</a>
        /<a href="https://instagram.com/naturfantastens_gardsbutik?igshid=huvxynb76vyq"> Instagram</a></p>
        

        <h4>Films Gårdsprodukter</h4>
        <p> <a href="https://filmsgardsprodukter.se/">Hemsida</a> 
        / <a href="https://www.facebook.com/filmgardsprodukter/">Facebook</a>
        /<a href="https://www.instagram.com/filmsgardsprodukter/"> Instagram</a></p>
        

        <h4>Paradiso Cafe Gårdsbutik & Matstudio</h4>
        <p> <a href="http://knivsta.lokaltodlat.se/">Hemsida</a> 
        / <a href="https://www.facebook.com/paradisowalloxen/">Facebook</a>
        /<a href="https://www.instagram.com/lokaltodlat/"> Instagram</a></p>
        </div>
        </section>

            <div class="underline"></div>

        <section class="boxes">

            <div id="borderBoxOne" class="borderBox">
            <div class="textBox">
                <h3>Om Gården </h3>
                <h2>Läs mer om gården</h2>
                <a href="https://www.elinsgladaekologiskakor.se/om-garden-2/"><h4>Läs mer  <span></span></h4></a>
            </div>
            </div>

            
            <div id="borderBoxTwo" class="borderBox">
            <div class="textBox">
                <h3>Upplevelser</h3>
                <h2>En dag på Bondgården</h2>
                <a href="https://www.elinsgladaekologiskakor.se/presentkorten/"><h4>Läs mer  <span></span></h4></a>
            </div>
            </div>

            
            <div id="borderBoxThree" class="borderBox">
            <div class="textBox">
                <h3>Mjölkautomaten</h3>
                <h2>Handla direkt på gården</h2>
                <a href="https://www.elinsgladaekologiskakor.se/mjolkautomaten/"><h4>Läs mer  <span></span></h4></a>
            </div>
            </div>

            <div id="borderBoxFour" class="borderBox">
            <div class="textBox">
                <h3>Vem är elin?</h3>
                <h2>Bonden på gården</h2>
                <a href="https://www.elinsgladaekologiskakor.se/om-elin-2/"><h4>Läs mer  <span></span</h4></a>
            </div>
            </div>
        

        </section>

  <div class="underline"></div>

        <section id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div id="top" <?php post_class(); ?>>
 <h1> <?php the_title(); ?> </h1>
 <?php the_content(); ?>

 
</div>

<?php endwhile; else : ?>
    <div id="top" <?php post_class(); ?>>
<h1> <?php esc_html_e( '404', 'brfvivaldi'); ?></h1>

<div <?php post_class(); ?> >
<p> <?php esc_html_e( 'Sorry! No content found!', 'brfvivaldi'); ?></p>
</div>

    </div>
<?php endif; ?><!--End of blogpost-->


</section>
<div class="underline"></div>
    </main>
</div>


<?php 
get_footer();

?>