<?php 

/* Template Name: Case Results */

get_header(); ?>



<div id="internal_main">

<div class="outer_container">
	
		<h1 class="internal_header"><?php the_title();?></h1><!-- page_title -->
	
		<div class="case_results_wrapper">
			
			<div class="cr_col">
				
				<?php if(get_field('case_results_column_one')): ?>
				 
					<?php while(has_sub_field('case_results_column_one')): ?>
				 
						<div class="single_case_result">
				
							<div class="single_case_result_inner">
				
								<?php echo file_get_contents("wp-content/themes/koonz/images/caseresults_icon-01.svg"); ?>
				
								<span class="singe_case_result_amount"><?php the_sub_field( 'amount' ); ?></span><!-- singe_case_result_amount -->
				
								<span class="single_case_result_subtitle"><?php the_sub_field( 'subheader' ); ?></span><!-- single_case_result_subtitle -->
				
								<span class="single_case_result_content"><?php the_sub_field( 'content' ); ?></span>
				
					</div><!-- single_case_result_inner -->
				
				</div><!-- single_case_result -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- cr_col -->
			
			<div class="cr_col">
			
				<?php if(get_field('case_results_column_two')): ?>
				 
					<?php while(has_sub_field('case_results_column_two')): ?>
				 
						<div class="single_case_result">
				
							<div class="single_case_result_inner">
				
								<?php echo file_get_contents("wp-content/themes/koonz/images/caseresults_icon-01.svg"); ?>
				
								<span class="singe_case_result_amount"><?php the_sub_field( 'amount' ); ?></span><!-- singe_case_result_amount -->
				
								<span class="single_case_result_subtitle"><?php the_sub_field( 'subheader' ); ?></span><!-- single_case_result_subtitle -->
				
								<span class="single_case_result_content"><?php the_sub_field( 'content' ); ?></span>
				
					</div><!-- single_case_result_inner -->
				
				</div><!-- single_case_result -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- cr_col -->
			
			<div class="cr_col">
			
				<?php if(get_field('case_results_column_three')): ?>
				 
					<?php while(has_sub_field('case_results_column_three')): ?>
				 
						<div class="single_case_result">
				
							<div class="single_case_result_inner">
				
								<?php echo file_get_contents("wp-content/themes/koonz/images/caseresults_icon-01.svg"); ?>
				
								<span class="singe_case_result_amount"><?php the_sub_field( 'amount' ); ?></span><!-- singe_case_result_amount -->
				
								<span class="single_case_result_subtitle"><?php the_sub_field( 'subheader' ); ?></span><!-- single_case_result_subtitle -->
				
								<span class="single_case_result_content"><?php the_sub_field( 'content' ); ?></span>
				
					</div><!-- single_case_result_inner -->
				
				</div><!-- single_case_result -->
				    
					<?php endwhile; ?>
				 
				<?php endif; ?>
			
			</div><!-- cr_col -->
			
		</div><!-- case_results_wrapper -->
		
</div><!-- internal_main -->


			  


<?php get_footer(); ?>
