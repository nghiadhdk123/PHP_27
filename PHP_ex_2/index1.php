<?php 


	// $array = array('Nghia','Hello World','Hello Family');
	// echo "<pre>";
	// var_dump($array);
	// echo "<pre>";

	// print_r($array);


	//Khai báo mảng không tuần tự
	// $infor['name'] = 'Trần Đình Nghĩa';
	// $infor['age'] = '19';
	// $infor['hometown'] = 'Bắc Ninh';
	// $infor['phone'] = '0904373670';

	// echo "<pre>";
	// 	echo "Tên : " . $infor['name'];
	// 	echo "<br>";
	// 	echo "Tuổi : " . $infor['age'];
	// 	echo "<br>";
	// 	echo "Quê Quán : " . $infor['hometown'];
	// 	echo "<br>";
	// 	echo "SĐt : " . $infor['phone'];
	// echo "</pre>";

	// print_r($infor);
	// var_dump($infor);


	// foreach ($infor as $key => $value) {
	// 	echo "<br> Key : " .$key . " -- Value : " .$value;
	// }
	// //Cách khai báo 2
	// foreach ($infor as $keyframe) {
	// 	echo "<br>" . $keyframe;
	// }

	// Thực hành mảng n chiều trong PHP

	$no_door = array();
	$no_door[0] = "Nghĩa";
	$no_door[1] = 19;
	$no_door[2] = "Bắc Ninh";
	$no_door[3] = array('Trần');
	$no_door[3][1] = array('Đình');

	echo "<pre>";
		print_r($no_door);
	echo "</pre>";

	echo "<pre>";
		echo "Giá trị mảng con : " . $no_door[3][1][0];
	echo "</pre>";

	//THực Hành về hàm trong PHP

	$n1 = 2;
	kt_chanle($n1);
	$n2 = 10;
	kt_chanle($n2);
	$n3 = 9;
	kt_chanle($n3);


	function kt_chanle($nb)
	{
		if($nb%3==0)
		{
			echo "<br> Số lẻ là : " . $nb;
		}else{
			echo "<br> Số chẵn là : " .$nb;
		}
	}


	function Nhan($input)
	{
		$nhan = 1;
		foreach ($input as $value) {
			$nhan*=$value;
		}

		return $nhan;
	}

	$nhann = array(1,2,4.5,2,6);
	echo "<br>";
	echo "Tích = " . Nhan($nhann);
	echo "<br>";
	echo "<br>";

	echo "<br> Các hàm xử lí mảng <br>";

	 $name = array('Nam', 'Khánh', 'Bình', 'Hậu' , 'Tuấn'); 
	 echo "<br>";
	 echo "<br> Hàm in_array";
	 var_dump(in_array('Nghĩa', $name));

	 echo "Số lượng phần tử trong mảng là : " . count($name);



	 $keyy = array(

	 	'ID' => "642814",
	 	'Name' => "TĐNghĩa",
	 	'Phone' => '0904373670',
	 );

	 if(array_key_exists('Name', $keyy))
	 {
	 	echo "<br>Name : " . $keyy['Name'];
	 }else{
	 	echo "<br>Key này không tồn tại trong mảng";
	 }

	 $index = array_search('Nghĩa', $name);    
     
     if($index == TRUE){
         echo "<br>Vị trí phần tử là: " . $index;
     }else{
         echo "<br>Không tìm thấy phần tử";
     }


 	  $arr_result = array_count_values($keyy);

	  echo "<pre>";
	    print_r($arr_result);
	  echo "</pre>";


	  array_push($name, "Trần Đình NGhĩa");

	  echo "<pre>";
	    print_r($name);
	  echo "</pre>";

	  $del = array_pop($name);
	  echo "<br>Phần tử bị xóa cuối mảng là : " .$del;
	  $del_1 = array_shift($name);
	  echo "<br>Phần tử bị xóa đầu mảng là : " .$del_1;

	  array_unshift($name, "Trần Sỹ Hà");
	  echo "<pre>";
	    print_r($name);
	  echo "</pre>";


	  	unset($name[2]);
	  echo "<pre>";
	    print_r($name);
	  echo "</pre>";


	  //Các hàm xử lí chuỗi trong PHP

	  $chuoi = "Trần Đình Nghĩa - Công Nghệ Thông Tin";

	  $cut = explode('-', $chuoi);
	  echo "<pre>";
	  	var_dump($cut);
	  echo "</pre>";

	  $noi = implode('-', $cut);
	  echo "<br>Chuỗi sau khi nối là : " .$noi;
	  echo "<br>Độ dài của Chuỗi là : " . strlen($chuoi);
	  echo "<br>Số Từ của Chuỗi là : " . str_word_count($chuoi);
	  echo str_repeat('<br>I LOVE YOU', 10);
	  $thay_the = str_replace('Trần Đình Nghĩa', 'TRần Sỹ Hà', $chuoi);
	  echo "<br>Chuỗi sau khi thay thế là : ".$thay_the;
	  echo "<br>Chuoi sau khi bam du lieu la : " .md5($thay_the);
	  echo "<br>Chuoi sau khi bam du lieu la : " .sha1($thay_the);
	  echo "<br>";
	  echo date('D/m/Y - H:i:s');
	  echo strtotime(date('Y-m-d H:i:s'));	

 ?>

 <!-- Cách kết hợp PHP với HTML -->
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 	<title>Document</title>
 </head>
 <body>
 	<h2><?= $array[0]; ?></h2>
 </body>
 </html>