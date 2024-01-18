<? include 'config/core.php';

	// header('location: /catalog/');

	// site setting
	$menu_name = 'home';
	$site_set['visible'] = 'after';
	$site_set['header_wh'] = true;
	// $site_set['header_logo'] = 'cl';
	$site_set['preload'] = true;
?>
<? include 'block/header.php'; ?>

	<div class="bl1">
		<!-- <div class="bl1_a lazy_bag" data-src="/assets/img/bag/8.png"></div> -->
		<div class="bl1_a bl1_a1 lazy_bag" data-src="/assets/img/bag/1662477253-4b12873f-c0fa-72ca-542a-61f139e3d770.jpeg"></div>
		<div class="bl1_a bl1_a2 lazy_bag" data-src="/assets/img/bag/XXL.jpg"></div>

		<div class="bl_c">
			<div class="bl1_c">
				<div class="bl1_offer"><h1><?=t::w('bl1_offer')?></h1></div>
				<div class="bl1_disc"><p><?=t::w('bl1_disc')?></p></div>
				<div class="form_c">
					<div class="form_im dsp_n"><input type="text" class="sms" value="Консультация 1"></div>
					<div class="form_im mt0"><input type="tel" class="form_txt fr_phone phone " placeholder="8 (___) ___-__-__" ></div>
					<div class="form_im"><div class="btn send">Получить консультацию</div></div>
				</div>
			</div>
		</div>

	</div>


	<!--  -->
	<div class="bl7" id="bl2">
		<div class="bl7_rzla"></div>
		<div class="bl_c">
			<div class="bl7_rz">
				<div class="bl7_rzl">
					<div class="head_c">
						<div class="head_v1">
							<h3><?=t::w('bl7_of2')?></h3>
							<div class="head_vt" >О нас</div>
						</div>
					</div>
					<div class="bl7_c">
						<div class="bl7_te">«Главная ценность нашей команды – здоровье, то есть санаторий для нас – это не бизнес, а стиль жизни!»</div>
						
						<? $sql = db::query("select * from `word_blocks` where type = 'bl7' and lang = '$lang' ORDER BY number ASC"); ?>
						<? while($ana = mysqli_fetch_array($sql)): ?>
							<div class="bl7_i" >
								<i class="far fa-badge-check"></i>
								<div class="bl7_ic"><?=$ana['txt1']?></div>
							</div>
						<? endwhile ?>

					</div>
					<div class="bl7_b" >
						<p><?=t::w('bl7_of3')?></p>
						<a class="btn btn_whatsapp" target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><i class="fab fa-whatsapp"></i><span><?=t::w('Write')?></span></a>
					</div>
				</div>
				<div class="bl7_rzr">
					<div class="bl7_rzrc lazy_img" data-src="/assets/img/bag/close-up-doctor-holding-patient.jpg"></div>
				</div>
			</div>
			
		</div>
	</div>



	
	<!--  -->
	<div class="bl5">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<!-- <div class="head_vt"><?=t::w('OUR RECOMMENDATION')?></div> -->
					<h4><?=t::w('bl5_of')?></h4>
				</div>
			</div>
			<div class="bl5_c bl5_c2">
				<? $sql = db::query("select * from `sanatorium` where sel is not null and number is not null ORDER BY number ASC"); ?>
					<? while ($ana = mysqli_fetch_array($sql)): ?>
						<? $id = $ana['id']; ?>

						<a class="bl5_i bl5_i2" href="/sanatorium/?id=<?=$ana['id']?>" target="_blank">
							<div class="bl5_ia" href="/sanatorium/?id=<?=$ana['id']?>">
								<div class="lazy_bag"  data-src="/assets/uploads/sanatorium/<?=$ana['img']?>"></div>
							</div>
							<div class="bl5_ic">
								<div class="bl5_ict">
									<div class="bl5_ictq">
										<div class="bl5_icn"><?=$ana['name_'.$lang]?></div>
										<div class="bl5_icts"><?=fun::rank($ana['rank'])?></div>
									</div>
									<!-- <div class="bl5_iadd"><i class="fas fa-map-marker-alt"></i><?=$ana['address']?></div> -->
								</div>
								<div class="bl5_icb" href="/sanatorium/?id=<?=$ana['id']?>">
									<div class="bl5_icp">от <p class="fr_price"><?=($ana['price']?$ana['price']:@fun::p($ana['id']))?></p></div>
									<div class="btn btn_dd btn_clm"><i class="fal fa-long-arrow-down"></i></div>
								</div>
							</div>
						</a>

					<? endwhile ?>
			</div>
			<div class="bl5_b">
				<p><?=t::w('bl5_of2')?></p>
				<a class="btn" href="/catalog"><span><?=t::w('View all')?></span><i class="far fa-long-arrow-right"></i></a>
			</div>
		</div>
	</div>




	
	<!--  -->
	<div class="bl9">
		<div class="bl_c">
			<div class="head_c txt_c">
				<div class="head_v1">
					<h4><?=t::w('Guest Reviews')?></h4>
				</div>
			</div>
			<div class="bl9_c">
				<div class="swiper-container bl9_con">
					<div class="swiper-wrapper">
						
						<? $sql = db::query("select * from `sanatorium_reviews` where arh = 0"); ?>
						<? while ($ana = mysqli_fetch_array($sql)): ?>
							<div class="swiper-slide bl9_i" >
								<div class="bl9_iln">
									<div class="bl9_iln2">
										<div class="bl9_ilogo lazy_rev" data-src="/assets/uploads/reviews/<?=$ana['img']?>"></div>
										<div class="bl9_ilc"><div class="bl9_ilname"><?=$ana['name']?></div><div class="bl9_ils"><?=t::w('source:').$ana['sn']?></div></div>
									</div>
									<div class="bl9_ildt">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
									</div>
								</div>
								<p class="bl9_it"><?=$ana['txt']?></p>
							</div>
						<? endwhile ?>
						
					</div>
				</div>
				<div class="swiper-button-prev bl9_prev"><div class="btn btn_sqr"><i class="fal fa-chevron-left"></i></div></div>
				<div class="swiper-button-next bl9_next"><div class="btn btn_sqr"><i class="fal fa-chevron-right"></i></div></div>
			</div>
			<div class="bl9_b" >
				<p><?=t::w('bl9_of3')?></p>
				<a target="_blank" href="https://wa.me/<?=$site['whatsapp']?>"><div class="btn"><?=t::w('Communication')?></div></a>
			</div>
		</div>
	</div>



	<!--  -->
	<div class="bl4">
		<div class="bl_c">
		<form id="test1">
			<div class="bl4_con">

				<div class="head_c txt_c">
					<h4 ><?=t::w('bl4_of')?></h4>
					<p><?=t::w('bl4_p')?></p>
				</div>

				<div class="bl4_cls swiper-container">
					<div class="gallery-pagination bl4_pag"></div>
					<div class="swiper-wrapper">
						<div class="swiper-slide">
							<h5 class="bl4_v"><?=t::w('tv1')?></h5>
							<div class="form_im form_imr">
								<div class="form_imri">
									<label class="radio" for="tv11">
										<input type="radio" name="tv1" value="1" id="tv11" checked>
										<span>1 <?=t::w('person')?></span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv12">
										<input type="radio" name="tv1" value="2" id="tv12">
										<span>2 <?=t::w('person')?></span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv13">
										<input type="radio" name="tv1" value="3-4" id="tv13">
										<span>3-4 <?=t::w('person')?></span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv14">
										<input type="radio" name="tv1" value="<?=t::w('more')?>" id="tv14">
										<span><?=t::w('more')?></span>
									</label>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<h5 class="bl4_v"><?=t::w('tv2')?></h5>
							<div class="form_im form_imr">
								<div class="form_imri">
									<label class="radio" for="tv21">
										<input type="radio" name="tv2" value="5" id="tv21" checked>
										<span>5 <?=t::w('days')?></span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv22">
										<input type="radio" name="tv2" value="7" id="tv22">
										<span>7 <?=t::w('days')?></span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv23">
										<input type="radio" name="tv2" value="10" id="tv23">
										<span>10 <?=t::w('days')?></span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv24">
										<input type="radio" name="tv2" value="<?=t::w('more2')?>" id="tv24">
										<span><?=t::w('more2')?></span>
									</label>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<h5 class="bl4_v"><?=t::w('tv3')?></h5>
							<div class="form_im form_imr">
								<div class="form_imri">
									<label class="radio" for="tv31">
										<input type="radio" name="tv3" value="эконом" id="tv31" checked>
										<span>Эконом</span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv32">
										<input type="radio" name="tv3" value="Стандарт" id="tv32">
										<span>Стандарт</span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv33">
										<input type="radio" name="tv3" value="Комфорт" id="tv33">
										<span>Комфорт</span>
									</label>
								</div>
								<div class="form_imri">
									<label class="radio" for="tv34">
										<input type="radio" name="tv3" value="Люкс" id="tv34">
										<span>Люкс</span>
									</label>
								</div>
							</div>
						</div>
						<div class="swiper-slide">
							<h5 class="bl4_v"><?=t::w('tv4')?></h5>
							<div class="form_im"><input type="text" class="form_im_txt name" name="name" data-lenght="2" placeholder="<?=t::w('enter your name')?>" /></div>
							<div class="form_im"><input type="tel" class="form_im_txt phone phone2 fr_phone" name="phone" data-lenght="11" placeholder="8 (___) ___-__-__" /></div>
						</div>
					</div>
					<div class="bl4_clb" >
						<div class="gallery-prev"><div class="btn btn_back"><i class="far fa-angle-left"></i><span><?=t::w('back')?></span></div></div>
						<div class="gallery-next"><div class="btn btn_back"><span><?=t::w('farther')?></span><i class="far fa-angle-right"></i></div></div>
						<div class="gallery-send"><div class="btn btn_back test1"><span><?=t::w('pick up')?></span><i class="far fa-angle-right"></i></div></div>
					</div>
				</div>
			</div>
		</form>
		</div>
	</div>



	<!--  -->
	<div class="bl11">
		<div class="bl_c">
			<div class="bl11_c">
				<div class="bl11_l">
					<div class="head_c"><h4><?=t::w('Frequently asked Questions')?></h4></div>
					<p><?=t::w('bl11_disc')?></p>
					<div class="bl11_btn"><div class="btn disb_zab"><span><?=t::w('submit your')?></span></div></div>
					<div class="bl11_a lazy_bag" data-src="/assets/img/bag/doc2.png"></div>
				</div>
				<div class="bl11_r">
					<div class='faq'>
						<? $sql = db::query("select * from `word_blocks` where type = 'bl11' and lang = '$lang' ORDER BY number ASC"); ?>
						<? while($ana = mysqli_fetch_array($sql)): ?>
							<div class="faq-a">
								<div class="faq-ah">
									<div class="faq-arrow"><i class="fal fa-chevron-right"></i></div>
									<h6 class="faq-heading"><?=$ana['txt1']?></h6>
								</div>
								<p class="faq-text"><?=$ana['txt2']?></p>
							</div>
						<? endwhile ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	
<? include 'block/footer.php'; ?>