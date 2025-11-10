<?php
/**
 * Template Name: Tính xây dựng template
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

?>
<?php 
		if ( is_page()) 
		{
			$page_id= get_the_ID();
		}	
$check_mucdautu= $_GET['mucdautu'];
$check_loainha=$_GET['loainha'];

if($check_mucdautu==1)
{
	$tengoixd='dịch vụ xây nhà trọn gói';
    $urlxd='https://levan.vn/bao-gia-xay-nha-tron-goi/';
    $calltoaction='calltoactionclickphantho';
}elseif($check_loainha==1){
	$tengoixd='dịch vụ xây nhà phố';
	$urlxd='https://levan.vn/bao-gia-thiet-ke-thi-cong-xay-dung-nha-pho/';
	$calltoaction='calltoactionclicknhapho';
}elseif($check_loainha==2){
	$tengoixd='dịch vụ xây biệt thự';
    $urlxd='https://levan.vn/bao-gia-xay-dung-biet-thu-tron-goi/';
    $calltoaction='calltoactionclickbietthu';
}elseif($check_loainha==3){
	$tengoixd='dịch vụ xây nhà cấp 4';
    $urlxd='https://levan.vn/dich-vu-xay-nha-cap-4/';
    $calltoaction='calltoactionclicknhacap4';
}

?>
<?php get_header();?>
<section id="main-content">
		<?php 
			$style= '';
			if(wp_get_attachment_url(get_post_meta(1, 'background_trang',true)) != '')
			{
				
				$style= 'style="background: url('.wp_get_attachment_url(get_post_meta(1, 'background_trang',true)).') no-repeat"';
				
			}			
		?>
		
		<div class="page_top" <?php echo $style;?>>
			<div class="mask"></div>
			<div class="container">
				<h1><?php echo get_the_title($page_id); ?></h1>
				<?php echo category_description($cate_id); ?>
				<div class="breadcum">
					<span><i class="fa fa-circle"></i>Bạn đang ở đây</span><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Trang chủ &nbsp&nbsp </a>
					<a href="#">» &nbsp&nbsp<?php echo get_the_title($page_id); ?></a>
				</div>
			</div>
		</div>
		
		<div class="single-page">
			<div class="container">
				<div class="row-fluid">
					<div class="span9">
				<div class="tinhdt page_s">
					<div class="clearfix"></div>
					
					<div class="content">
						<h2 class="ttt_line"><?php echo get_the_title($page_id);?></h2>
					</div>
				</div>
				<div class="entry">					
					<div class="tinhdt page_s">
						<?php 
							$loaixay = $_GET['loaixay'];	
							$loainha = $_GET['loainha'];
							$mucdautu = $_GET['mucdautu'];	
							$mattien = $_GET['mattien'];
							
							
							$rty = $_GET['rty'];
							$dty = $_GET['dty'];
							$tang = $_GET['tang'];
							
							$lung = $_GET['lung'];
							$bancong = $_GET['bancong'];
							$tum = $_GET['tum'];
							$mai = $_GET['mai'];
							$loaisanthuong = $_GET['loaisanthuong'];
							$santhuong = $_GET['santhuong'];
								
							
							$mong = $_GET['mong'];								
							$tangham = $_GET['tangham'];
							$sanvuon = $_GET['sanvuon'];
							
							$hem = $_GET['hem'];
						?>
						<form role="search" method="get" class="tienich" action="<?php echo get_page_link($page_id);?>">
							<p>=> Quý khách vui lòng kéo xuống dưới để xem kết quả tính chi phí xây dựng.</p>
							<div class="row-fluid field">
								<div class="span4">
									<span>Loại công trình: </span>
									<select class="form-control" id="loainha" name="loainha">
										<option value="1" <?php if($_GET['loainha'] == 1){echo 'selected';}?>>Nhà phố</option>
										<option value="2" <?php if($_GET['loainha'] == 2){echo 'selected';}?>>Biệt thự</option>
										<option value="3" <?php if($_GET['loainha'] == 3){echo 'selected';}?>>Nhà cấp bốn</option>
									</select>
								</div>											
								<div class="span4">
									<span>Mức đầu tư: </span>
									<select class="form-control" id="mucdautu" name="mucdautu">
										<option value="1" <?php if($_GET['mucdautu'] == 1){echo 'selected';}?>>Xây nhà trọn phần thô</option>
										<option value="2" <?php if($_GET['mucdautu'] == 2){echo 'selected';}?>>Xây trọn gói, vật tư tiêu chuẩn</option>
										<option value="3" <?php if($_GET['mucdautu'] == 3){echo 'selected';}?>>Xây trọn gói, vật tư khá</option>
										<option value="4" <?php if($_GET['mucdautu'] == 4){echo 'selected';}?>>Xây trọn gói, vật tư tốt</option>
									</select>
								</div>
											
								<div class="span4">
									<span>Mặt tiền: </span>
									<select class="form-control" id="mattien" name="mattien">
										<option value="1" <?php if($_GET['mattien'] == 1){echo 'selected';}?>>1</option>
										<option value="2" <?php if($_GET['mattien'] == 2){echo 'selected';}?>>2</option>
									</select>
								</div>								
							</div>
							
							<div class="clearfix"></div>
							<div class="margin-top-20"></div>
							<div class="row-fluid field">											
								<div class="span4">
									<span>Chiều rộng (m) <span style="color:red">(*)</span>: </span>
									<input type="number" required oninvalid="this.setCustomValidity('Vui lòng nhập chiều rộng')" oninput="setCustomValidity('')" class="form-control" min="0" id="rty" name="rty" step="0.01" <?php if($_GET['rty'] != ''){echo 'value="'.$rty.'"';}?>  placeholder="Nhập chiều rộng"/>
								</div>
								<div class="span4">
									<span>Chiều dài (m) <span style="color:red">(*)</span>: </span>
									<input type="number" required oninvalid="this.setCustomValidity('Vui lòng nhập chiều dài')" oninput="setCustomValidity('')" class="form-control" min="0" id="dty" name="dty" step="0.01" <?php if($_GET['dty'] != ''){echo 'value="'.$dty.'"';}?>  placeholder="Nhập chiều dài"/>
								</div>	
								<div class="span4">
									<span>Số tầng (trừ tum, lửng) <span style="color:red">(*)</span>: </span>
									<input type="number" required oninvalid="this.setCustomValidity('Vui lòng nhập số tầng')" oninput="setCustomValidity('')" class="form-control" min="0" id="tang" name="tang" step="1" <?php if($_GET['tang'] != ''){echo 'value="'.$tang.'"';}?>  placeholder="Nhập số tầng"/>
								</div>
								
							</div>
							
							<div class="clearfix"></div>
							<div class="margin-top-20"></div>
							
							<div class="row-fluid field">									
								<div class="span3">
									<span>Hẻm: </span>
									<select class="form-control" id="hem" name="hem">
										<option value="1" <?php if($_GET['hem'] == 1){echo 'selected';}?>>Rộng hơn 5m</option>
										<option value="2" <?php if($_GET['hem'] == 2){echo 'selected';}?>>Rộng từ 3m - 5m</option>
										<option value="3" <?php if($_GET['hem'] == 3){echo 'selected';}?>>Nhỏ hơn 3m</option>
									</select>
								</div>
								<div class="span3 tang">
									<span>Lửng (m2):</span>
									<input type="number" class="form-control" min="0" id="lung" name="lung" step="0.01" <?php if($_GET['lung'] != ''){echo 'value="'.$lung.'"';}?>  placeholder="Nhập diện tích"/>
								</div>
								<div class="span3 ham">
									<span>Tầng thượng (m2): </span>
									<input type="number" class="form-control"  min="0" id="tum" name="tum" step="0.01" <?php if($_GET['tum'] != ''){echo 'value="'.$tum.'"';}?>  placeholder="Nhập diện tích"/>
									
								</div>	
								<div class="span3 mong">
									<span>Ban công: </span>
									<select class="form-control" id="bancong" name="bancong">
										<option value="0" <?php if($_GET['bancong'] == 0){echo 'selected';}?>>Không có</option>
										<option value="1" <?php if($_GET['bancong'] == 1){echo 'selected';}?>>Có ban công</option>
									</select>
								</div>
							</div>
							<div class="clearfix"></div>
							<div class="margin-top-20"></div>
							<div class="row-fluid field">
								<div class="span3 mong">
									<span>Móng: </span>
									<select class="form-control" id="mong" name="mong">
										<option value="3" <?php if($_GET['mong'] == 3){echo 'selected';}?>>Móng đơn</option>
										<option value="1" <?php if($_GET['mong'] == 1){echo 'selected';}?>>Móng băng</option>
										<option value="2" <?php if($_GET['mong'] == 2){echo 'selected';}?>>Móng đài cọc</option>
									</select>
								</div>
								<div class="span3 mong">
									<span>Tầng hầm: </span>
									<select class="form-control" id="tangham" name="tangham">
										<option value="1" <?php if($_GET['tangham'] == 1){echo 'selected';}?>>Không hầm</option>
										<option value="2" <?php if($_GET['tangham'] == 2){echo 'selected';}?>>Độ sâu 1.0 - 1.3</option>
										<option value="3" <?php if($_GET['tangham'] == 3){echo 'selected';}?>>Độ sâu 1.3 - 1.7</option>
										<option value="4" <?php if($_GET['tangham'] == 4){echo 'selected';}?>>Độ sâu 1.2 - 2.0</option>										
										<option value="5" <?php if($_GET['tangham'] == 5){echo 'selected';}?>>Độ sâu > 2.0</option>
									</select>
								</div>
								<div class="span3 mong">
									<span>Mái: </span>
									<select class="form-control" id="mai" name="mai">
										<option value="1" <?php if($_GET['mai'] == 1){echo 'selected';}?>>Mái tôn</option>
										<option value="2" <?php if($_GET['mai'] == 2){echo 'selected';}?>>Mái bê tông cốt thép (BTCT)</option>
										<option value="3" <?php if($_GET['mai'] == 3){echo 'selected';}?>>Xà gồ + ngói</option>
										<option value="4" <?php if($_GET['mai'] == 4){echo 'selected';}?>>BTCT + ngói</option>
									</select>
								</div>
								
								<div class="span3 santruoc">
									<span>Sân vườn (m2): </span>
									<input type="number" class="form-control" min="0" id="sanvuon" name="sanvuon" step="0.5" <?php if($_GET['sanvuon'] != ''){echo 'value="'.$sanvuon.'"';}?>  placeholder="Nhập diện tích"/>
								</div>
								
																		
								
								
							</div>
							
							<div class="clearfix"></div>
							<div class="margin-top-20"></div>
							<button class="btn" id="tinhbtn">Tính chi phí dự trù</button>
						</form>
					</div>
					<div class="nd-s">
						<div class="clearfix"></div>
						<div class="margin-top-20"></div>
						<div class="margin-top-20"></div>
						<?php 
					
						$dongiachuan = 0;
						$tenmucdautu = '';
						$baivietnoidung = 0;
						if($dty == '' || $rty == '' || $tang <1)
						{
							if($tang < 1)
							{
								echo '<p><strong style="color: red">Bạn vui lòng nhập số tầng, diện tích xây dựng!</strong></p>';
							}
							else
							{
								echo '<p><strong style="color: red">Bạn vui lòng nhập diện tích ngôi nhà của bạn!</strong></p>';
							}										
						}
						else
						{
							$dientichxd = $dty*$rty ;
							
							$tennha = '';
							$tenloai = '';
							if($mucdautu == 1)
							{
								$tenloai = 'xây nhà phần thô';
								if($loainha == 1)
								{
									if($rty < 3.2)
									{
										$dongiachuan = 3600000;
									}
									else
									{
										$dongiachuan = 3600000;
									}
								}
								else
								{
									if($loainha == 2)
									{
										$dongiachuan = 3800000;
									}
									else
									{
										$dongiachuan = 2500000;
									}
								}
							// End Xay dung phan tho	
							}
							else
							{
								$tenloai = 'xây nhà trọn gói';
								if($loainha == 1)
								{
									if($mucdautu == 2)
									{
										$dongiachuan = 5000000;
									}
									else
									{
										if($mucdautu == 3)
										{
											$dongiachuan = 5250000;
										}
										else
										{
											$dongiachuan = 5500000;
										}
									}
								}
								else
								{
									if($loainha == 2)
									{
										if($mucdautu == 2)
										{
											$dongiachuan = 5300000;
										}
										else
										{
											if($mucdautu == 3)
											{
												$dongiachuan = 6100000;
											}
											else
											{
												$dongiachuan = 6900000;
											}
										}
									}
									else
									{
										$dongiachuan = 5000000;
									}
								}
							}
							
							if($loainha == 1)
							{
								$tennha = 'nhà phố';
							}
							else
							{
								if($loainha == 2)
								{
									$tennha = 'biệt thự';
								}
								else
								{
									$tennha = 'nhà cấp 4';
									$tang = 1;
								}
							}
							if($loainha ==2)
							{
								echo '<h3><strong>Chi phí ước tính cho '.$tennha.' với loại dịch vụ '.$tenloai.' diện tích xây dựng là '.$rty.'Mx'.$dty.'M</strong></h3>';
							}
							else
							{
								echo '<h3><strong>Chi phí ước tính cho '.$tennha.' với loại dịch vụ '.$tenloai.' diện tích xây dựng là '.$rty.'Mx'.$dty.'M</strong></h3>';
							}
							
							echo '<table class="ketqua_dientich table table-bordered">';
							echo '<thead>
								<tr>
								  <th colspan="4" class="textcenter" style="text-transform: uppercase; text-align:center; font-size: 20px;">Đơn giá '.$tenloai.'</th>
								</tr>
							  </thead>';
							  
							echo '<tdbody>';
							
							if($hem == 1)
							{
								$dongia = $dongiachuan;
							}
							else 
							{
								if($hem == 2)
								{
									$dongia = $dongiachuan +100000;
								}
								else 
								{
									$dongia = $dongiachuan +200000;
								}
							}
							$tenmong = '';
							$dtmong = 0;
							$tienmong = 0;
							if($mong == 1)
							{
								$tenmong = 'Móng băng (65%)';
								$dtmong = $dientichxd*0.65;
							}
							else
							{
								if($mong == 2)
								{
									$tenmong = 'Móng đài cọc 35% (Chưa tính BTCT)';
									$dtmong = $dientichxd*0.35;
								}
								else
								{
									$tenmong = 'Móng đơn (30%)';
									$dtmong = $dientichxd*0.3;
								}
							}
							
							
							if($tang > 0)
							{
								if($tang > 1)
								{
									//tret
									$tientret  = $dongia*$dientichxd;
									$dttret =	$dientichxd;
									
									$stt= 2;
									$tientang = 0;
									$dttang = 0;
									$tienbancong = 0;
									$dtbancong = 0;
									$tenbancong = 'Ban công tầng ';
									if($bancong == 1)
									{
										for($i = 1; $i < $tang; $i++)
										{													
											$tientang = $dongia*$dientichxd + $tientang;
											$dttang = $dttang + $dientichxd;
											$dtbancong = $dtbancong + 0.9*$rty;
										}
									}
									else
									{
										for($i = 1; $i < $tang; $i++)
										{													
											$tientang = $dongia*$dientichxd + $tientang;
											$dttang = $dttang + $dientichxd;
										}	
									}
									$stt = $stt + $i;
								}
								else
								{
									//tret
									$tientret  = $dongia*$dientichxd;
									$dttret =	$dientichxd;
									$stt= 3;
								}									
							}
							else
							{
								$stt= 3;
							}
							
							//end tang lau
							
							//lung
							$dtlung = 0;
							$dtthonglung = 0;
							$tienlung = 0;
							if($lung > 0)
							{
								$dtlung = $lung;
								$tienlung = $dtlung*$dongia;
								
								
								$dtthonglung = (($dientichxd - $dtlung)*0.5);
							}		
							//end lung
							
							//tum
							$dttum = 0;
							$tientum = 0;
							$dtsanthuong = 0;
							$tiensanthuong = 0;	
							$tensanthuong = '';	
							$tenmai = '';
							$dtmai = 0;
							$tienmai = 0;
							if($tum > 0)
							{
								$dttum = $tum;
								$tientum = $dttum*$dongia;
								
								if($loaisanthuong == 2)
								{
									$tensanthuong = 'Sân thượng có mái (60%)';
									$dtsanthuong = ($dientichxd-$dttum)*0.6;
								}
								else
								{
									$tensanthuong = 'Sân thượng (30%)';
									$dtsanthuong = ($dientichxd-$dttum)*0.3;
								}
								
								
								
								if($mai == 1)
								{
									$tenmai = 'Mái tôn  (30%)';
									$dtmai = $dttum*0.3;
								}
								else
								{
									if($mai == 2)
									{
										$tenmai = 'Mái BTCT  (40%)';
										$dtmai = $dttum*0.4;
									}
									else
									{
										if($mai == 3)
										{
											$tenmai = 'Mái ngói + Xà gồ  (70%)';
											$dtmai = $dttum*0.7;
										}
										else
										{
											$tenmai = 'Mái ngói + BTCT (100%)';
											$dtmai = $dttum;
										}
									}
								}
								
							}
							else
							{
								if($santhuong > 0)
								{
									if( $loaisanthuong == 1)
									{
										$tensanthuong = 'Sân thượng (30%)';
										$dtsanthuong = $santhuong*0.3;
									}
									else
									{
										$tensanthuong = 'Sân thượng có mái  (60%)';
										$dtsanthuong = $santhuong*0.6;
									}				
								}	
								//end santhuong
								//mai
								if($mai == 1)
								{
									$tenmai = 'Mái tôn  (30%)';
									$dtmai = $dientichxd*0.3;
								}
								else
								{
									if($mai == 2)
									{
										$tenmai = 'Mái BTCT (40%)';
										$dtmai = $dientichxd*0.4;
									}
									else
									{
										if($mai == 3)
										{
											$tenmai = 'Mái ngói + Xà gồ (70%)';
											$dtmai = $dientichxd*0.7;
										}
										else
										{
											$tenmai = 'Mái ngói + BTCT (100%)';
											$dtmai = $dientichxd;
										}
									}
								}								
							}
							
							
							//end mai
							
							//tangham
							$dtham = 0;
							$tenham = '';
							$tienham = 0;
							if($tangham > 1)
							{
								if($tangham == 2)
								{
									$tenham = 'Độ sâu 1.0 - 1.3 (150%)';
									$dtham = $dientichxd*1.5;
								}
								else
								{
									if($tangham == 3)
									{
										$tenham = 'Độ sâu 1.3 - 1.7 (170%)';
										$dtham = $dientichxd*1.7;
									}
									else
									{
										if($tangham == 4)
										{
											$tenham = 'Độ sâu 1.7 - 2.0 (200%)';
											$dtham = $dientichxd*2;
										}
										else
										{
											$tenham = 'Độ sâu > 2.0 (250%)';
											$dtham = $dientichxd*2.5;
										}
									}
								}
								
							}
							//end tangham
							//sanvuon
							$dtsan = 0;
							$tiensan = 0;
							if($sanvuon > 0)
							{
								$dtsan = $sanvuon*0.7;
								$tiensan = $dtsan*$dongia;
							}	
							//end sanvuon
											
							// tong dien tich
							$tongdientich = $dtmong + $dttret + $dttang + $dtmai + $dtham + $dtlung + $dtthonglung + $dttum + $dtsanthuong + $dtsan + $dtbancong;										
							
							if($tongdientich > 300)
							{
								$dongia = $dongia;
							}
							else 
							{
								if($tongdientich > 200)
								{
									$dongia = $dongia + 100000;
								}
								else 
								{
									$dongia = $dongia + 200000;
								}
							}
							
							
							echo '
							<tr>											
								<td colspan="4" class="textright" style="text-align:right;"><strong> ĐƠN GIÁ: '.number_format($dongia,0,',', '.').' VNĐ</strong></td>
								
							</tr>';
							echo '
							<tr class="tieude_table" style="color: #19305a;background-color:#e4c061;font-weight:bold;">
								<td>
									STT
								</td>
								<td>
									LOẠI
								</td>
								<td>
									DIỆN TÍCH XD
								</td>
								<td>
									THÀNH TIỀN
								</td>
							</tr>';
							
							//mong
							if($hem == 1)
							{
								$dongiamong = 5000000;	
							}
							else 
							{
								if($hem == 2)
								{
									$dongiamong = 3300000;	
								}
								else 
								{
									$dongiamong = 3400000;
								}
							}
						
							$tenmong = '';
							$dtmong = 0;
							$tienmong = 0;
							if($mong == 1)
							{
								$tenmong = 'Móng băng (65%)';
								$dtmong = $dientichxd*0.65;
								$tienmong  = $dongiamong*$dtmong;
							}
							else
							{
								if($mong == 2)
								{
									$tenmong = 'Móng đài cọc 35% (Chưa tính BTCT)';
									$dtmong = $dientichxd*0.35;
									$tienmong  = $dongiamong*$dtmong;
								}
								else
								{
									$tenmong = 'Móng đơn (30%)';
									$dtmong = $dientichxd*0.3;
									$tienmong  = $dongiamong*$dtmong;
								}
							}
							echo '
								<tr>
									<td>
										1
									</td>
									<td>'.$tenmong.'</td>
									<td>'.$dtmong.' m2</td>
									<td>'.number_format($tienmong,0,',', '.').'</td>
								</tr>';
							
							//tang lau
							
							if($tang > 0)
							{
								if($tang > 1)
								{
									//tret
									$tientret  = $dongia*$dientichxd;
									$dttret =	$dientichxd;
									echo '
										<tr>
											<td>
												2
											</td>
											<td> Tầng trệt (100%)</td>
											<td>'.$dttret.' m2</td>
											<td>'.number_format($tientret,0,',', '.').'</td>
										</tr>';
									$stt= 2;
									$tientang = 0;
									$dttang = 0;
									$tienbancong = 0;
									$dtbancong = 0;
									$tenbancong = 'Ban công tầng ';
									if($bancong == 1)
									{
										for($i = 1; $i < $tang; $i++)
										{													
											$tientang = $dongia*$dientichxd + $tientang;
											$dttang = $dttang + $dientichxd;
											$dtbancong = $dtbancong + 0.9*$rty;
											$tienbancong  = $tienbancong + 	$dtbancong*$dongia;
											$tenbancong = $tenbancong.$i.'; ';
											echo '
												<tr>
													<td>'.($i+2).'</td>
													<td> Tầng '.$i.'(100%)</td>
													<td>'.$dientichxd.' m2</td>
													<td>'.number_format(($dongia*$dientichxd),0,',', '.').'</td>
												</tr>';
										}
									}
									else
									{
										for($i = 1; $i < $tang; $i++)
										{													
											$tientang = $dongia*$dientichxd + $tientang;
											$dttang = $dttang + $dientichxd;
											echo '
												<tr>
													<td>'.($i+2).'</td>
													<td> Tầng '.$i.' (100%)</td>
													<td>'.$dientichxd.' m2</td>
													<td>'.number_format(($dongia*$dientichxd),0,',', '.').'</td>
												</tr>';
										}	
									}
									$stt = $stt + $i;
								}
								else
								{
									//tret
									$tientret  = $dongia*$dientichxd;
									$dttret =	$dientichxd;
									echo '
										<tr>
											<td>
												2
											</td>
											<td> Tầng trệt (100%)</td>
											<td>'.$dttret.' m2</td>
											<td>'.number_format($tientret,0,',', '.').'</td>
										</tr>';
									$stt= 3;
								}									
							}
							else
							{
								$stt= 3;
							}
							
							//end tang lau
							
							//lung
							$dtlung = 0;
							$dtthonglung = 0;
							$tienlung = 0;
							if($lung > 0)
							{
								$dtlung = $lung;
								$tienlung = $dtlung*$dongia;
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td>Lửng (100%)</td>
									<td>'.$dtlung.' m2</td>
									<td>'.number_format($tienlung,0,',', '.').'</td>
								</tr>';
								
								$dtthonglung = (($dientichxd - $dtlung)*0.5);
								$tienthonglung = $dtthonglung*$dongia ;
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td>Thông lửng (50%)</td>
									<td>'.$dtthonglung.' m2</td>
									<td>'.number_format($tienthonglung,0,',', '.').'</td>
								</tr>';
								$tienlung = $tienlung + $tienthonglung;
							}		
							//end lung
							
							//Ban cong
							if($bancong == 1)
							{
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td>'.$tenbancong.'</td>
									<td>'.$dtbancong.' m2</td>
									<td>'.number_format($tienbancong,0,',', '.').'</td>
								</tr>';
							}
							//End ban cong
							//tum
							$dttum = 0;
							$tientum = 0;
							$dtsanthuong = 0;
							$tiensanthuong = 0;	
							$tensanthuong = '';	
							$tenmai = '';
							$dtmai = 0;
							$tienmai = 0;
							if($tum > 0)
							{
								$dttum = $tum;
								$tientum = $dttum*$dongia;
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td> Tum (Tầng thượng)(100%)</td>
									<td>'.$dttum.' m2</td>
									<td>'.number_format($tientum,0,',', '.').'</td>
								</tr>';
								if($loaisanthuong == 2)
								{
									$tensanthuong = 'Sân thượng có mái (60%)';
									$dtsanthuong = ($dientichxd-$dttum)*0.6;
									$tiensanthuong = $dtsanthuong*$dongia;
								}
								else
								{
									$tensanthuong = 'Sân thượng (50%)';
									$dtsanthuong = ($dientichxd-$dttum)*0.5;
									$tiensanthuong = $dtsanthuong*$dongia;
								}
								
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td>'.$tensanthuong.'  (50%)</td>
									<td>'.$dtsanthuong.' m2</td>
									<td>'.number_format($tiensanthuong,0,',', '.').'</td>
								</tr>';	
								
								if($mai == 1)
								{
									$tenmai = 'Mái tôn  (30%)';
									$dtmai = $dttum*0.3;
									$tienmai  = $dongia*$dtmai;
								}
								else
								{
									if($mai == 2)
									{
										$tenmai = 'Mái BTCT  (40%)';
										$dtmai = $dttum*0.4;
										$tienmai  = $dongia*$dtmai;
									}
									else
									{
										if($mai == 3)
										{
											$tenmai = 'Mái ngói + Xà gồ  (70%)';
											$dtmai = $dttum*0.7;
											$tienmai  = $dongia*$dtmai;
										}
										else
										{
											$tenmai = 'Mái ngói + BTCT (100%)';
											$dtmai = $dttum;
											$tienmai  = $dongia*$dtmai;
										}
									}
								}
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td>'.$tenmai.'</td>
									<td>'.$dtmai.' m2</td>
									<td>'.number_format($tienmai,0,',', '.').'</td>
								</tr>';
							}
							else
							{
								if($santhuong > 0)
								{
									if( $loaisanthuong == 1)
									{
										$tensanthuong = 'Sân thượng (30%)';
										$dtsanthuong = $santhuong*0.3;
									}
									else
									{
										$tensanthuong = 'Sân thượng có mái  (60%)';
										$dtsanthuong = $santhuong*0.6;
									}
									$tiensanthuong = $dtsanthuong*$dongia;
									echo '
									<tr>
										<td>'.($stt++).'</td>
										<td>'.$tensanthuong.'</td>
										<td>'.$dtsanthuong.' m2</td>
										<td>'.number_format($tiensanthuong,0,',', '.').'</td>
									</tr>';											
								}	
								//end santhuong
								//mai
								if($mai == 1)
								{
									$tenmai = 'Mái tôn  (30%)';
									$dtmai = $dientichxd*0.3;
									$tienmai  = $dongia*$dtmai;
								}
								else
								{
									if($mai == 2)
									{
										$tenmai = 'Mái BTCT (40%)';
										$dtmai = $dientichxd*0.4;
										$tienmai  = $dongia*$dtmai;
									}
									else
									{
										if($mai == 3)
										{
											$tenmai = 'Mái ngói + Xà gồ (70%)';
											$dtmai = $dientichxd*0.7;
											$tienmai  = $dongia*$dtmai;
										}
										else
										{
											$tenmai = 'Mái ngói + BTCT (100%)';
											$dtmai = $dientichxd;
											$tienmai  = $dongia*$dtmai;
										}
									}
								}
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td>'.$tenmai.'</td>
									<td>'.$dtmai.' m2</td>
									<td>'.number_format($tienmai,0,',', '.').'</td>
								</tr>';
							}
							
							
							//end mai
							
							//tangham
							$dtham = 0;
							$tenham = '';
							$tienham = 0;
							if($tangham > 1)
							{
								if($tangham == 2)
								{
									$tenham = 'Độ sâu 1.0 - 1.3 (150%)';
									$dtham = $dientichxd*1.5;
									$tienham  = $dongia*$dtham;
								}
								else
								{
									if($tangham == 3)
									{
										$tenham = 'Độ sâu 1.3 - 1.7 (170%)';
										$dtham = $dientichxd*1.7;
										$tienham  = $dongia*$dtham;
									}
									else
									{
										if($tangham == 4)
										{
											$tenham = 'Độ sâu 1.7 - 2.0 (200%)';
											$dtham = $dientichxd*2;
											$tienham  = $dongia*$dtham;
										}
										else
										{
											$tenham = 'Độ sâu > 2.0 (250%)';
											$dtham = $dientichxd*2.5;
											$tienham  = $dongia*$dtham;
										}
									}
								}
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td> Tầng hầm('.$tenham.')</td>
									<td>'.$dtham.' m2</td>
									<td>'.number_format($tienham,0,',', '.').'</td>
								</tr>';
							}
							//end tangham
							//sanvuon
							$dtsan = 0;
							$tiensan = 0;
							if($sanvuon > 0)
							{
								$dtsan = $sanvuon*0.7;
								$tiensan = $dtsan*$dongia;
								echo '
								<tr>
									<td>'.($stt++).'</td>
									<td> Sân vườn + móng sân (70%)</td>
									<td>'.$dtsan.' m2</td>
									<td>'.number_format($tiensan,0,',', '.').'</td>
								</tr>';
							}	
							//end sanvuon
											
							// tong dien tich
							$tongdientich = $dtmong + $dttret + $dttang + $dtmai + $dtham + $dtlung + $dtthonglung + $dttum + $dtsanthuong + $dtsan + $dtbancong;										
							echo '
							<tr>
								<td colspan="3" class="textright">
									<strong>Tổng diện tích:</strong>
								</td>
								<td><strong>'.number_format($tongdientich,0,',', '.').'m2</strong></td>
							</tr>';
							
							//tong chi phi
							$tongchiphi = $tienmong + $tientret + $tientang + $tienmai + $tienham + $tienlung + $tienthonglung + $tientum + $tiensanthuong + $tiensan + $tienbancong;
							if($tongchiphi){
								setPostViews(get_the_ID()); 
							}

							echo '
							<tr>
								<td colspan="3" class="textright">
									<strong>Tổng chi phí ước tính:</strong>
								</td>
								<td style="color:red;"><strong>'.number_format($tongchiphi,0,',', '.').' VNĐ</strong></td>
							</tr>';
							
							echo '</tdbody>';
							echo '</table>';
						}						
						?>
					</div>		
				
					<div class="clearfix"></div>
					<div style="margin-bottom: 15px">
						<p><strong>Giúp bạn ước lượng được chi phí dự trù, tuy nhiên để có chi phí chính xác vẫn cần liên hệ nhà thầu khảo sát thực tế.</strong></p>
						<p>Những yếu tố ảnh hưởng đến chi ph&iacute; x&acirc;y dựng:</p>
						<ul style="padding-left: 30px;">
						<li>Diện t&iacute;ch x&acirc;y dựng</li>
						<li>Loại vật tư ho&agrave;n thiện (thường, kh&aacute;, tốt)</li>
						<li>Loại m&oacute;ng</li>
						<li>Loại m&aacute;i</li>
						<li>Hẻm nhỏ (nếu c&oacute;)</li>
						<li>Một số y&ecirc;u cầu của chủ đầu tư (nếu c&oacute;)</li>
						</ul>
					</div>
<!-- 					<div style="background-color: #fbe5d7;width: 100%;padding: 20px;color: black;font-size: 20px;line-height: 30px;text-align: center;margin-bottom: 20px;"><a style="color: #19305a;" href="<?=$urlxd?>" id="<?=$calltoaction?>" data-wpel-link="internal">=&gt; Xem chi tiết <?=$tengoixd ?> của Xây Dựng Lê Văn Group</a></div> -->
					<div style="background-color: #19305a; width: 100%; padding: 20px; color: white; font-size: 20px; line-height: 30px; text-align: center;"><a style="color: white;" href="tel:0909619668" id="calltoactionxaynha" data-wpel-link="internal">Bạn đã có kinh phí xây nhà dự trù?<br>
Bạn cần tư vấn xây nhà trong tầm ngân sách đó?<br>
Liên hệ anh Văn – 0909 619 668</a></div>
				</div>
			
				<!------------------end news----------------->
			</div>
					<div class="area-ct span3">
						<?php get_sidebar();?>
					</div>
				</div>
			</div>
		</div>
	</section>
		
<?php get_footer();?>