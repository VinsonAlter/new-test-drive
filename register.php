<?php
    require_once ('../config.php');
    require_once (BASE_PATH.DS. 'koneksi.php');
    date_default_timezone_set('Asia/Jakarta');
    $res = [];
    if(isset($_POST["email"]) ? $email = $_POST["email"] : $email = '');
    if(isset($_POST["check"]) && isset($_POST["nama"]) && isset($_POST["hp"]) && isset($_POST["modelKend"])) {
        $nama = $_POST["nama"];
        $hp = $_POST["hp"];
        $tipeMobil = $_POST["modelKend"];
        $captcha = $_POST['g-recaptcha-response'];
        $ip = $_SERVER['REMOTE_ADDR'];
        $createdOn = date('Y-m-d H:i:s');
        $sumber = "Website";
		$category = "Testdrive";
        $secret_key = "6LeMjiETAAAAAIgMp9PW6aplyxQ3RZs2rD9ZlX39";
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = array(
            'secret' => $secret_key,
            'response' => $captcha,
            'remoteip' => $ip
        );
        $curlConfig = array(
            CURLOPT_URL => $url,
            CURLOPT_POST => true,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POSTFIELDS => $data
        );

        $ch = curl_init();
        curl_setopt_array($ch, $curlConfig);
        $verify = curl_exec($ch);
        curl_close($ch);
        $captcha_success = json_decode($verify, true);
        if($captcha_success['success']) {
            $curl = 'https://103.160.12.43/op/api/register-member/';
            $curlHandle = curl_init();
			curl_setopt($curlHandle, CURLOPT_URL, $curl);
			curl_setopt($curlHandle, CURLOPT_HEADER, 0);
			curl_setopt($curlHandle, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYHOST, 2);
			curl_setopt($curlHandle, CURLOPT_SSL_VERIFYPEER, 0);
			curl_setopt($curlHandle, CURLOPT_TIMEOUT, 30);
			curl_setopt($curlHandle, CURLOPT_POST, 1);
			curl_setopt($curlHandle, CURLOPT_POSTFIELDS, array(
				'dtNama' => $nama,
				'dtTelepon' => $hp,
				'dtVarian' => $tipeMobil, 
				'dtEntry' => $createdOn,
				'dtEmail' => $email,
				'dtSumber' => $sumber,
				'dtCategory' => $category
			));
            $test = json_decode(curl_exec($curlHandle), true);
            if($test['error'] == 0) {
                $res['success'] = 1;
                $res['message'] = 'Data berhasil disimpan!';
            } else {
                $res['success'] = 0;
                $res['message'] = 'Gagal koneksi ke url, mohon dicoba lagi';
            }
            curl_close($curlHandle);
            // $res['success'] = 1;
            // $res['message'] = 'CAPTCHA masuk';
        } 
        else {
            $res['success'] = 0;
            $res['message'] = 'Pastikan CAPTCHA telah terconteng';
        }
    } else {
        $res['success'] = 0;
        $res['message'] = 'Mohon pastikan anda sudah memasukkan info anda secara lengkap dan menyetujui peraturan test drive!';
    }
    echo json_encode($res);
?>