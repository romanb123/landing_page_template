<?php
get_header();
?>
<div class='main-content'>
    <div class='heading'>
        <h1>
            Roman
        </h1>
        <h2>
            web development
        </h2>
        <div class='btn'>
            <button>contact us</button>
        </div>
    </div>
</div>
<!-- services -->
<h3 class='servises-heading' id="services">servises</h3>
<div class='servises'>
    <div class='servise-item'>
        <img src='wp-content/uploads/2020/08/html-five.png'>
        <h3>בניית אתרים</h3>
        <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled
        it to make a type specimen book. It has survived not only five centuries,</p>
    </div>
    <div class="servise-item">
        <img src="wp-content/uploads/2020/08/html-five2.png">
        <h3>בניית דפי נחיתה</h3>
        <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled
        it to make a type specimen book. It has survived not only five centuries, </p>
    </div>
    <div class='servise-item'>
        <img src='wp-content/uploads/2020/08/wordpress.png'>
        <h3>עיצוב אתרים</h3>
        <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled
        it to make a type specimen book. It has survived not only five centuries,</p>
    </div>
    <div class="servise-item">
        <img src="wp-content/uploads/2020/08/android.png">
        <h3>בתאמב למובייל</h3>
        <p>Lorem Ipsum is simply dummy text of the printing
            and typesetting industry. Lorem Ipsum has been
            the industry's standard dummy text ever since the
            1500s, when an unknown printer took a galley of type and scrambled
        it to make a type specimen book. It has survived not only five centuries, </p>
    </div>
</div>
<!-- projects -->
<div class='projects-section' id="projects">
    <h2>projects</h2>
    <div class='projects-layout'>
        <div class='project-item'>
            <img src='wp-content/uploads/2020/08/pr_img2-scaled.jpg' width='230' height='200'>
            <ul>
                <h2>e shop project</h2>
                <li>angular</li>
                <li>css 3</li>
                <li>node js</li>
            </ul>
            <button class='project-btn'><a href="http://romanportfolio.epizy.com/">project link</a>
            </div>
            <div class='project-item'>
                <img src='wp-content/uploads/2020/08/pr_img1-scaled.jpg' width='230' height='200'>
                <ul>
                    <h2>wordpress theme</h2>
                    <li>wordpress</li>
                    <li>css 3</li>
                    <li>php</li>
                </ul>
                <button class='project-btn'><a href="http://romanportfolio.epizy.com/">project link</a>
                </div>
                <div class='project-item'>
                    <img src='wp-content/uploads/2020/08/pr_img4-scaled.jpg' width='230' height='200'>
                    <ul>
                        <h2>e shop project</h2>
                        <li>angular</li>
                        <li>css 3</li>
                        <li>node js</li>
                    </ul>
                    <button class='project-btn'><a href="http://romanportfolio.epizy.com/">project link</a>

                    </div>
                    <div class='project-item'>
                        <img src='wp-content/uploads/2020/08/pr_img3-scaled.jpg' width='230' height='200'>
                        <ul>
                            <h2>e shop project</h2>
                            <li>angular</li>
                            <li>css 3</li>
                            <li>node js</li>
                        </ul>
                        <button class='project-btn'><a href="http://romanportfolio.epizy.com/">project link</a>
                        </button>

                    </div>
                </div>
            </div>
            <div class="contact-us" id="contact">
                <h2>contact us</h2>
                <?php echo do_shortcode( '[contact-form-7 id="32" title="contact us"]' ); ?>
            </div>
            <?php
            get_footer();
            ?>