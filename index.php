<?php
/**
 * Template Name: Blog Index
 * Description: The template for displaying the Blog index /blog.
 *
 */
get_header();
?>
<div>
	<div class='featured-posts mb-5'>
		<div class='container'>
			<div class='row'>
			<div class='col-md-6'></div>
			<div class='col-md-6 text-right' >
				<h1 class='entry-title'>Lobotomy เจาะสมองผ่านดวงตา อดีตการรักษาโรคจิตเภท</h1>
			</div>
			</div>
		</div>
	</div>
	<div class='container'>
		<div class="row">
			<div class='col-12 mb-4 text-center'>
				<h1 class='entry-title'>บทความล่าสุด</h1>
			</div>
			<div class="col-12">
				<?php get_template_part( 'archive', 'loop' );?>
			</div>
			<div class="col-12 text-center">
				<a href='#'>ดูเพิ่มเติม</a>
			</div>			
		</div>
	</div>
	<div class="w-100 py-5 mt-5 text-white" style='background-color: #212121'>
		<div class='container'>
			<h1 class='text-center entry-title'>มองวิทยาศาสตร์ผ่านประวัติศาสตร์</h1>
			<div class='row mt-5'>
				<div class='col-md-8 col-12 mb-4'>
					<div class='post-thumbnail-2-3'>						
						<div class='title-bottom-left'>
							<h6>Medicine</h6>
							<h3>Lobotomy เจาะสมองผ่านดวงตา อดีตการรักษาโรคจิตเภท</h3>
						</div>
					</div>
				</div>
				<div class='col-md-4 col-6 mb-4' style='min-height: 300px;'>
					<div class='bg-white w-100 h-100 d-flex text-body' style='flex-direction: column;'>
						<div class='post-thumbnail-2-3'></div>
						<div class='p-3'>
							<h6>Space</h6>
							<h4>หายนะ Challenger ที่ NASA ถูกเตือนก่อนแล้วว่าจะเกิดขึ้น</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
get_footer();
