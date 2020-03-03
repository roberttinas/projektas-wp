<?php
if(have_rows('repeater_lauko_pavadinimas')):
	while(have_rows('repeater_lauko_pavadinimas')):
		the_row(); //gauname vienos eilutes duomenis
		//the_sub_field('sub_field_pavadinimas'); //reiksme atspausdina
		//get_sub_field('sub_field_pavadinimas'); //reiksme grazina
		?>
		<!-- HTML kuris kartojasi -->
		<?php
	endwhile;
endif;
?>