<!-- TEAM MEMBERS ================================================== -->
<section class="team">
    <div class="container">
        <div class="team-header">
            <h2>
                <?php the_field('tb_section_heading'); ?>
            </h2>
            <h3>
                <?php the_field('tb_section_subheading'); ?>
            </h3>
        </div>
        <div class="team-info">
            <?php
            if(have_rows('tb_members_repeater')):
                while(have_rows('tb_members_repeater')):
                    the_row();
                    ?>
                    <div class="team-members">
                        <div class="team-photo">
                            <?php
                            $image = get_sub_field('personal_photo');
                            // dump($image);
                            ?>
                            <img src="<?php echo $image['sizes']['clients']; ?>" alt="ramgopalavarna">
                        </div>
                        <div class="team-contacts">
                            <div class="specialist">
                                <?php the_sub_field('name_field'); ?>
                            </div>
                            <div class="duty">
                                <?php the_sub_field('duty_field'); ?>
                            </div>
                            <ul class="btn-social">
                                <?php
                                if(have_rows('social_buttons_repeater')):
                                    while(have_rows('social_buttons_repeater')):
                                        the_row();
                                        ?>
                                        <li>
                                            <?php
                                            $link = get_sub_field('social_link');
                                            $target = $link['target'] ? ' target="_blank" ' : "";
                                            $title = the_sub_field('sb_icon');
                                            ?>
                                            <a href="<?php echo $link['url']; ?>" <?php echo $target; ?>>
                                                <?php echo $link[$title]; ?>
                                            </a>
                                        </li>
                                        <?php
                                    endwhile;
                                endif;
                                ?>
                            </ul>
                        </div>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>