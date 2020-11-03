<?
    include('inc/header.php');
?>

<div class="container">
    <header class="header__container">
        <div class="header">
            <div class="header__inner">
                <picture>
                    <!--[if IE 9]><video style="display: none;"><![endif]-->
                    <source srcset="dist/images/horseshoe-icon.png" media="(max-width: 767px)">
                    <!--[if IE 9]></video><![endif]-->
                    <img class="header__icon" src="dist/images/horseshoe-icon-desktop.png"/>
                </picture>
                <!-- <img class="header__icon" src="dist/images/horseshoe-icon.png"/> -->
                <div class="header__text">
                    <div class="header__pre">The Clark Foundation's 8<sup class="header__sup">th</sup> Annual</div>
                    <h1 class="header__title">Derby<br/>Day</h1>
                    <div class="header__date">May 2, 2020</div>
                </div>
            </div>
        </div>
        <div class="subheader">
            <div class="subheader__time">4:30 pm at the</div>
            <div class="subheader__location">Lancaster Country Club</div>
        </div>
    </header>
    <div class="text__container">
        <div class="text">     
            <p>Excitement is building for the Eighth Annual Derby Day party, held at the scenic Lancaster Country Club.</p>
            <p>The Club’s panoramic view of the lush greens will provide a beautiful location to celebrate the coming of spring and the Run for the Roses.</p>
            <p>In the tradition of Churchill Downs, enjoy the next best thing to being at the track on race day! Featuring a traditional Derby menu, mint juleps, a ladies' and men’s hat contest, wagering for prizes, entertainment, and a live showing of the 145th Kentucky Derby. Pony up and come on out!</p>
            <p class="text--bold">Check back in February for more details and to purchase your tickets.</p>
        </div>
    </div>
</div>
<div class="charity">
    <div class="charity__text--sm">Last year we raised over</div>
    <div class="charity__text--lg">1.1 Million for charity</div>
    <p class="charity__text">All proceeds benefit the Conestoga Valley Education Foundation, Schreiber Center for Pediatric Development, Manheim Township Education Foundation, and Anchorage Breakfast Program.</p>
</div>

<?
    include('inc/footer.php');
?>