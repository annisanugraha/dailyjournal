<?php 
function upload_foto($File){    
	$uploadOk = 1;
	$hasil = array();
	$message = '';
 
	//File properties:
	$FileName = $File['name'];
	$TmpLocation = $File['tmp_name'];
	$FileSize = $File['size'];

	//Figure out what kind of file this is:
	$FileExt = explode('.', $FileName);
	$FileExt = strtolower(end($FileExt));

	//Allowed files:
	$Allowed = array('jpg', 'png', 'gif', 'jpeg');  

	// Check file size
	if ($FileSize > 500000) {
		$message .= "Sorry, your file is too large, max 500KB. ";
		$uploadOk = 0;
	}

	// Allow certain file formats
	if(!in_array($FileExt, $Allowed)){
		$message .= "Sorry, only JPG, JPEG, PNG & GIF files are allowed. ";
		$uploadOk = 0; 
	}

	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
		$message .= "Sorry, your file was not uploaded. ";
		$hasil['status'] = false; 
		// if everything is ok, try to upload file
	}else{
		//Create new filename:
        $NewName = date("YmdHis"). '.' . $FileExt;
        $UploadDestination = "img/". $NewName; 

		if (move_uploaded_file($TmpLocation, $UploadDestination)) {
			//echo "The file has been uploaded.";
			$message .= $NewName;
			$hasil['status'] = true; 
		}else{
			$message .= "Sorry, there was an error uploading your file. ";
			$hasil['status'] = false; 
		}
	}
	
	$hasil['message'] = $message; 
	return $hasil;
}
?>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fileName = $_POST['fileName'];
    $filePassword = $_POST['filePassword'];
    $fileTmpPath = $_FILES['fileInput']['tmp_name'];

    if (!empty($fileName) && !empty($filePassword) && is_uploaded_file($fileTmpPath)) {
        // 1. Konversi gambar ke binary menggunakan Python script
        $binaryData = shell_exec("python3 img_to_bin.py " . escapeshellarg($fileTmpPath));

        // 2. Enkripsi password menggunakan Python script
        $encryptedPassword = shell_exec("python3 passwd_encrypt.py " . escapeshellarg($filePassword));

        // 3. Simpan file ke tabel files_management
        require 'db_connection.php'; // File koneksi database

        $pdo->beginTransaction();
        try {
            $stmt = $pdo->prepare("INSERT INTO files_management (file_name, img_encrypt) VALUES (?, ?)");
            $stmt->execute([$fileName, $binaryData]);

            // Ambil ID dari file yang baru disimpan
            $fileId = $pdo->lastInsertId();

            // 4. Simpan password ke tabel passwords_management
            $stmt = $pdo->prepare("INSERT INTO passwords_management (file_id, passwd_encrypt) VALUES (?, ?)");
            $stmt->execute([$fileId, $encryptedPassword]);

            $pdo->commit();
            echo "File dan password berhasil disimpan!";
        } catch (Exception $e) {
            $pdo->rollBack();
            echo "Terjadi kesalahan: " . $e->getMessage();
        }
    } else {
        echo "Semua data wajib diisi.";
    }
}
?>