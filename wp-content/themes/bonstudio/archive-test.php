<?php
get_header();
$images = get_template_directory_uri() . '/assets/images';
?>
	<main class="main" role="main">
		<section class="sub-keyvisual">
			<div class="sub-keyvisual__container">
				<div class="sub-keyvisual__image">
					<picture>
						<source media='(max-width: 767px)', srcset='<?= $images ?>/service/kv.png'>
						<source media='(min-width: 768px)', srcset='<?= $images ?>/service/kv.png'>
						<img src="<?= $images ?>/service/kv.png" alt="" width="1280" height="700">
					</picture>
				</div>
			</div>
		</section>

		<section class="section product-section">
			<div class="container">
				<div class="product-group">

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI CHỤP NEWBORN</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-01.png" alt="">
									</div>
									<h3 class="product__name">Gói Newborn BASIC</h3>
									<p class="product__price">
										<span>1.490.000đ</span>

										<del>1.600.000d</del>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói Newborn BASIC</p>

										<p class="product__note">(Áp dụng từ T2 - T6)</p>


										<p class="product__description">Chụp 03 bối cảnh; Studio hỗ trợ toàn bộ trang phục và đạo cụ cho bé<br>- 10 ảnh 15x21 tráng UV<br>- 01 ảnh ép gỗ treo tường 35x50<br>- Tặng 01 ảnh ép gỗ để bàn cỡ 15x21<br>- Tặng hết ảnh buổi chụp file nén 1200x900 px</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-02.png" alt="">
									</div>
									<h3 class="product__name">Gói Newborn SWEET</h3>
									<p class="product__price">
										<span>1.860.000đ </span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói Newborn SWEET</p>

										<p class="product__note">(Áp dụng từ T2 - T6)</p>


										<p class="product__description">Chụp 04 bối cảnh; Studio hỗ trợ toàn bộ trang phục và đạo cụ cho bé<br>- 10 ảnh 15x21 tráng UV<br>- 1 ảnh ép gỗ treo tường 50X75<br>- Tặng 01 ảnh tráng gương để bàn cỡ 15x21<br>- Toàn bộ ảnh buổi chụp file nén 1200x900 px</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-03.png" alt="">
									</div>
									<h3 class="product__name">Gói Newborn LOVE</h3>
									<p class="product__price">
										<span>2.390.000đ</span>

										<del>2.500.000d</del>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói Newborn LOVE</p>

										<p class="product__note">(Áp dụng từ T2 - T6)</p>


										<p class="product__description">Chụp 04 bối cảnh; Studio hỗ trợ toàn bộ trang phục và đạo cụ cho bé<br>- 1 album thiết kế size 15x21<br>- 1 ảnh tráng gương treo tường 40x60<br>- Tặng 01 ảnh tráng gương để bàn cỡ 20 x 30<br>- Toàn bộ ảnh buổi chụp file nén 1200x900t px</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-04.png" alt="">
									</div>
									<h3 class="product__name">Gói Newborn PERFECT</h3>
									<p class="product__price">
										<span>3.650.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói Newborn PERFECT</p>

										<p class="product__note">(Áp dụng từ T2 - T6)</p>


										<p class="product__description">Chụp 5-6 bối cảnh; Studio hỗ trợ toàn bộ trang phục và đạo cụ cho bé<br>- 1 Album thiết kế size 20x20<br>- 01 ảnh tráng gương treo tường 40x60<br>- Tặng 01 ảnh tráng gương để bàn cỡ 20 x 30<br>- Tặng file ảnh gốc buổi chụp </p>

									</div>
								</div>
							</li>

						</ul>
					</div>

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI ẢNH ĐƠN CHO BÉ</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-05.png" alt="">
									</div>
									<h3 class="product__name">Gói COMBO 1 BÉ</h3>
									<p class="product__price">
										<span>620.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói COMBO 1 BÉ</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ trang phục phù hợp cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé.</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 10 ảnh chỉnh sửa và in cỡ 15x21 tráng UV<br>- 1 ảnh gỗ để bàn 15x21<br>- Copy le nén chỉnh sửa (resize 900x1200) của 11 ảnh chọn in rửa.</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-06.png" alt="">
									</div>
									<h3 class="product__name">Gói COMBO 2-3 BÉ</h3>
									<p class="product__price">
										<span>860.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói COMBO 2-3 BÉ</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 4 concept nghệ thuật cho bé và 1 concept gia đình <br>- Hỗ trợ trang phục phù hợp cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 20 ảnh chỉnh sửa và in cỡ 15x21 tráng UV<br>- 1 ảnh gỗ để bàn 20x30<br>- Copy file nén chỉnh sửa (resize 900x1200) của 21 ảnh chọn in rửa.</p>

									</div>
								</div>
							</li>

						</ul>
					</div>

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI CHỤP 1 ẢNH PHÓNG 40x60 DÀNH CHO 1 BÉ</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-07.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 1</h3>
									<p class="product__price">
										<span>790.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 1</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng - 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 thtáng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh gỗ cao cấp 40x60<br>- 1 ảnh gỗ để bàn 15x21<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-08.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 2</h3>
									<p class="product__price">
										<span>1.020.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 2</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh tráng gương 40x60<br>- 1 ảnh tráng gương để bàn 15x21<br>- Copy toàn bộ le nén resize 900x1200</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-09.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 3</h3>
									<p class="product__price">
										<span>1.950.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 3</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh mika HD cỡ 40x60<br>- 1 ảnh tráng gương để bàn 15x21 cm</p>

									</div>
								</div>
							</li>

						</ul>
					</div>

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI CHỤP 1 ẢNH PHÓNG 50x75 DÀNH CHO 1 BÉ</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-10.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 1 </h3>
									<p class="product__price">
										<span>960.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 1 </p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng - 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 thtáng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh gỗ cao cấp 50x75<br>- 1 ảnh gỗ để bàn 20x30<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-11.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 2</h3>
									<p class="product__price">
										<span>1.290.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 2</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh tráng gương 50x75<br>- 1 ảnh tráng gương để bàn 20x30<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-12.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 3</h3>
									<p class="product__price">
										<span>2.550.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 3</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ  thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh mika HD cỡ 50x75<br>- 1 ảnh tráng gương để bàn 20x30<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

						</ul>
					</div>

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI CHỤP 1 ẢNH PHÓNG 60x90 DÀNH CHO 1 BÉ</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-13.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 1</h3>
									<p class="product__price">
										<span>1.050.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 1</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng - 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 thtáng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh gỗ cao cấp 60x90<br>- 1 ảnh gỗ để bàn 20x30<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-14.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 2 </h3>
									<p class="product__price">
										<span>1.460.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 2 </p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh tráng gương 60x90<br>- 1 ảnh tráng gương để bàn 20x30<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-15.png" alt="">
									</div>
									<h3 class="product__name">Gói BABY SWEET 3</h3>
									<p class="product__price">
										<span>2.950.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói BABY SWEET 3</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- 3 concept nghệ thuật cho bé và 1 concept gia đình<br>- Hỗ trợ toàn bộ trang phục cho bé từ 3 tháng – 5 tuổi và váy cưới, vest của bố mẹ trong buổi chụp<br>- Áp dụng cho bé từ 3 tháng -5 tuổi.<br>- Gia đình có nhiều hơn 1 bé, Bon Studio tính phụ thu thêm 100.000/1 bé</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 5 ảnh chỉnh sửa và in cỡ 13x18 tráng UV<br>- 1 ảnh mika HD cỡ 60x90<br>- 1 ảnh tráng gương để bàn 20x30<br>- Copy toàn bộ file nén resize 900x1200</p>

									</div>
								</div>
							</li>

						</ul>
					</div>

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI CHỤP GIA ĐÌNH</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-20.png" alt="">
									</div>
									<h3 class="product__name">Gói COMBO Gia đình nhỏ</h3>
									<p class="product__price">
										<span>1.250.000đ</span>

										<del>1.250.000đ</del>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói COMBO Gia đình nhỏ</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- Áp dụng cho gia đình có từ 3-7 thành viên ( gồm tối đa 2 trẻ dưới 7 tuổi)<br>- 4 concept cho bé và gia đình<br>- Hỗ trợ trang phục cho bé từ 3 tháng – 7 tuổi và váy cưới, vest, áo dài cho gia đình<br>- Hỗ trợ 1 mặt make up và làm tóc chuyên nghiệp cho mẹ và bé.</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 10 ảnh chỉnh sửa và in cỡ 15X21<br>- 1 ảnh gỗ cao cấp 50x75<br>- Toàn bộ file resize của buổi chụp.</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-16.png" alt="">
									</div>
									<h3 class="product__name">Gói COMBO Gia đình lớn</h3>
									<p class="product__price">
										<span>1.650.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">Gói COMBO Gia đình lớn</p>


										<p class="product__title">Chi tiết gói chụp</p>

										<p class="product__description">- Áp dụng cho gia đình có từ 8-10 thành viên ( gồm tối đa 3 trẻ dưới 7 tuổi)<br>- 5 Concept cho bé và gia đình<br>- Hỗ trợ trang phục cho bé từ 3 tháng – 7 tuổi và váy cưới, vest, áo dài cho gia đình<br>- Hỗ trợ 2 mặt make up và làm tóc chuyên nghiệp cho mẹ và bé.</p>

										<p class="product__title">sản phẩm nhận về</p>
										<p class="product__description">- 10 ảnh chỉnh sửa và in cỡ 15X21<br>- 1 ảnh gỗ cao cấp 60X90<br>- Tặng 1 ảnh gỗ để bàn 20x30<br>- Toàn bộ file resize của buổi chụp.</p>

									</div>
								</div>
							</li>

						</ul>
					</div>

					<div class="product-group__item">
						<h2 class="product-group__name">GÓI CHỤP ALBUM CAO CẤP</h2>
						<ul class="product__list">

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-17.png" alt="">
									</div>
									<h3 class="product__name">ALBUM 15x21</h3>
									<p class="product__price">
										<span>2.150.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">ALBUM 15x21</p>


										<p class="product__description">Chụp 4 bối cảnh thay 4 bộ trang phục khác nhau; Hỗ trợ toàn bộ trang phục cho bé từ 0 - 5 tuổi<br>- 1 Album 15x21: 10 tờ tương ứng với 20 trang được thiết kế theo phong cách riêng của Bon Studio<br>- 1 ảnh phóng 30x45 ép gỗ<br>- Trả toàn bộ ảnh gốc, file market album đã chỉnh sửa<br>- Khách làm thêm: 100.000/tờ</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-18.png" alt="">
									</div>
									<h3 class="product__name">ALBUM 20x20</h3>
									<p class="product__price">
										<span>2.450.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">ALBUM 20x20</p>


										<p class="product__description">Chụp 6 bối cảnh thay 6 bộ trang phục khác nhau; Hỗ trợ toàn bộ trang phục cho bé từ 0 - 5 tuổi<br>- 1 Album 20x20: 10 tờ tương ứng với 20 trang được thiết kế theo phong cách riêng của Bon Studio<br>- 1 ảnh để bàn 15x21 ép gỗ<br>- 1 ảnh phóng 50x75 ép gỗ<br>- Trả toàn bộ ảnh gốc, file market album đã chỉnh sửa<br>- Khách làm thêm: 150.000/tờ </p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-19.png" alt="">
									</div>
									<h3 class="product__name">ALBUM 25x25</h3>
									<p class="product__price">
										<span>3.100.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">ALBUM 25x25</p>


										<p class="product__description">Chụp 7 bối cảnh thay 7 bộ trang phục khác nhau; Hỗ trợ toàn bộ trang phục cho bé từ 0 - 5 tuổi<br>- 1 Album 25x25: 10 tờ tương ứng với 20 trang được thiết kế theo phong cách riêng của Bon Studio<br>- 1 ảnh để bàn 20x30 tráng gương<br>- 1 ảnh phóng 50x75 tráng gương<br>- Trả toàn bộ ảnh gốc, file market album đã chỉnh sửa<br>- Khách làm thêm: 200.000/tờ</p>

									</div>
								</div>
							</li>

							<li class="product__item js-show-product-detail">
								<div class="product-item__content">
									<div class="product__image">
										<img src="<?= $images ?>/service/img-02.png" alt="">
									</div>
									<h3 class="product__name">ALBUM 30x30</h3>
									<p class="product__price">
										<span>3.700.000đ</span>

									</p>
									<div class="product__detail">
										<p class="product__name">ALBUM 30x30</p>


										<p class="product__description">Chụp 8 bối cảnh thay 8 bộ trang phục khác nhau; hỗ trợ trang phục cho bé từ 0 - 5 tuổi<br>- 1 Album 30x30: 10 tờ tương ứng với 20 trang được thiết kế theo phong cách riêng của Bon Studio<br>- 1 ảnh để bàn 20x30 tráng gương<br>- 1 ảnh phóng 60x90 tráng gương<br>- Trả toàn bộ file ảnh gốc, file market album đã chỉnh sửa<br>- Khách làm thêm tờ: 200.000/tờ.</p>

									</div>
								</div>
							</li>

						</ul>
					</div>

				</div>
				<div class="table-price">
					<table class="table">
						<thead>
						<tr>

							<th>KÍCH THƯỚC</th>

							<th>ẢNH UV/LỤA</th>

							<th>ẢNH ÉP GỖ</th>

							<th>ẢNH TRÁNG GƯƠNG</th>

							<th>ẢNH KIM CƯƠNG</th>

							<th>ẢNH MIKA HD</th>

						</tr>
						</thead>
						<tbody>

						<tr>

							<td>13X18</td>

							<td>25.000</td>

							<td></td>

							<td></td>

							<td></td>

							<td></td>

						</tr>

						<tr>

							<td>15X21</td>

							<td>30.000</td>

							<td>110.000</td>

							<td>195.000</td>

							<td>250.000</td>

							<td></td>

						</tr>

						<tr>

							<td>20X30</td>

							<td>90.000</td>

							<td>150.000</td>

							<td>235.000</td>

							<td>300.000</td>

							<td>420.000</td>

						</tr>

						<tr>

							<td>35X50</td>

							<td>230.000</td>

							<td>350.000</td>

							<td>600.000</td>

							<td>760.000</td>

							<td>1.300.000</td>

						</tr>

						<tr>

							<td>40X60</td>

							<td>300.000</td>

							<td>500.000</td>

							<td>700.000</td>

							<td>890.000</td>

							<td>1.700.000</td>

						</tr>

						<tr>

							<td>50X75</td>

							<td>470.000</td>

							<td>600.000</td>

							<td>850.000</td>

							<td>1.050.000</td>

							<td>2.450.000</td>

						</tr>

						<tr>

							<td>60X90</td>

							<td>590.000</td>

							<td>800.000</td>

							<td>1.150.000</td>

							<td>1.350.000</td>

							<td>2.950.000</td>

						</tr>

						<tr>

							<td>70X110</td>

							<td>890.000</td>

							<td>1.200.000</td>

							<td>1.800.000</td>

							<td>2.000.000</td>

							<td>4.200.000</td>

						</tr>

						<tr>

							<td>80X120</td>

							<td>1.100.000</td>

							<td>1.500.000</td>

							<td>2.450.000</td>

							<td>2.700.000</td>

							<td>5.000.000</td>

						</tr>

						<tr>

							<td>100X150</td>

							<td>1.450.000</td>

							<td>2.000.000</td>

							<td>3.100.000</td>

							<td>3.500.000</td>

							<td>7.100.000</td>

						</tr>

						<tr>

							<td>120X180</td>

							<td>1.890.000</td>

							<td>2.500.000</td>

							<td>3.890.000</td>

							<td>4.200.000</td>

							<td>9.400.000</td>

						</tr>

						<tr>

							<td>120X240</td>

							<td>2.250.000</td>

							<td>2.950.000</td>

							<td>4.520.000</td>

							<td>4.800.000</td>

							<td>11.000.000</td>

						</tr>

						</tbody>
					</table>
				</div>
				<div class="notes">
					<p class="note__title">Lưu ý</p>
					<p class="note__description">
						+ Làm 2 ảnh phóng từ 50x75 trở lên sẽ được tặng 1 ảnh để bàn cỡ 20x30 cùng chất liệu <br>
						+ Hỗ trợ lắp ảnh mika đèn điện trong vòng bán kính 10 km, từ km thứ 10 trở đi studio thu thêm phí di chuyển<br>
						+ Tặng 1 buổi chụp tại nhà hoặc 1 Ablum mini cỡ 15x21 ( 10 tờ 20 trang) với khách hàng có hóa đơn từ 10.000.000 – 20.000.000<br>
						+ Khách hàng có nhu cầu chụp tại nhà thêm phí nội thành 200.000đ, ngoại thành thêm phí đi lại 2 chiều theo giá taxi
					</p>
				</div>
			</div>
		</section>
		<div class="modal micromodal micromodal-product" id="showProductDetail" aria-hidden="true">
			<div class="modal__overlay" tabindex="-1">
				<button class="modal__close" aria-label="Close modal" data-micromodal-close tabindex="0">
					<img src="<?= $images ?>/top/icon-close.svg" alt="" width="28" height="28">
				</button>
				<div class="modal__container scrollable" role="dialog" aria-modal="true" aria-labelledby="modal-1-title">
					<header class="modal__header">
					</header>
					<div class="modal__content" id="modal-1-content">
						<div class="product-detail__content">
							<div class="product-detail__left">
								<div class="image"></div>
								<p class="product-detail__price"></p>
							</div>
							<div class="product-detail__right">
								<h2 class="product-detail__name"></h2>
								<p class="product-detail__note"></p>
								<div class="product-detail__description"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
<?php
get_footer();
