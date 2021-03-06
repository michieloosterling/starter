<?php
if( class_exists( 'acf' ) ) {
	if( have_rows( 'layouts' ) ): $i = 0; ?>
	<div class="entry-acf"><?php
	while ( have_rows( 'layouts' ) ) : $i++; the_row();
	switch ( get_row_layout() ) {

	/*--------------------------------------------------------------
	# Columns
	--------------------------------------------------------------*/
	case 'columns':
		$row_class = get_sub_field( 'row_class' );
		$row_layout = get_sub_field( 'row_layout' );
		$row_options = get_sub_field( 'row_options' );
		$column_type = get_sub_field( 'column_type' );
		$row_id = get_sub_field( 'row_id' );

		if ( $row_options ) {
			$options = implode(' ', $row_options);
		} else {
			$options = '';
		}

		if ( get_sub_field('row_image') ) {
			$background = ' style="background-image: url(%1$s);"';
			$background = sprintf( $background,
				esc_attr(get_sub_field( 'row_image' ))
			);
		} else {
			$background = '';
		}

		echo '<div class="row ' . $row_class . ' ' . $options . '" data-stretch-type="' . $row_layout . '"' . $background .' id="'.$row_id.'">';
		echo '<div class="cols ' . $column_type . '">';

		if ( get_sub_field( 'column_type' ) == 'cols-1' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
		} elseif ( get_sub_field( 'column_type' ) == 'cols-1-small' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
		} elseif ( get_sub_field( 'column_type' ) == 'cols-2' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_2' ) . '</div>';
		} elseif ( get_sub_field( 'column_type' ) == 'cols-3' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_2' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_3' ) . '</div>';
		} elseif ( get_sub_field( 'column_type' ) == 'left-wide' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_2' ) . '</div>';
		} elseif ( get_sub_field( 'column_type' ) == 'right-wide' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_2' ) . '</div>';
		} elseif ( get_sub_field( 'column_type' ) == 'cols-4' ) {
			echo '<div class="col">' . get_sub_field( 'col_1' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_2' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_3' ) . '</div>';
			echo '<div class="col">' . get_sub_field( 'col_4' ) . '</div>';
		}
		echo '</div>';
		echo '</div>';
	break;

	/*--------------------------------------------------------------
	# End
	--------------------------------------------------------------*/

	}
	endwhile;?>
	</div><?php
	endif;
}