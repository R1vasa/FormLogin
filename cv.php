<?php
session_start();

if (!isset($_POST['submit'])) {
    header("Location: login.php");
    exit();
}


$nama = $_POST["nama"];
$username = $_SESSION["username"];
$kontak = $_POST["kontak"];
$sosmed = $_POST["sosmed"];
$deskripsi = $_POST["deskripsi"];
$ttl = $_POST["ttl"];
$pendidikan = $_POST["pendidikan"];
$SMA = $_POST["SMA"];

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="src/output.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
  </head>
  <body class="flex justify-center p-5 bg-yellow-50 font-[Roboto]">
    <main
      class="flex flex-col w-full max-w-4xl bg-white shadow-lg border-2 border-gray-300"
    >
      <div class="bg-Primary text-white text-center py-3 text-2xl">
        <div class="bg-Primary text-white text-center py-3 text-2xl">
            <h1 class="font-bold text-3xl pb-2 sm:text-5xl">
                <?php echo $nama; ?>
            </h1>
          </div>
      </div>
      <div class="flex flex-col md:flex-row">
        <div class="bg-Secondary text-black p-5 w-full md:w-1/3">
            <div class="py-4">
                <h2 class="text-white text-center rounded-2xl bg-Primary p-1 font-bold">
                  KONTAK
                </h2>
              </div>
              <div class="text-sm font-bold space-y-2">
                <div class="flex items-center">
                  <box-icon type="solid" name="phone"></box-icon>
                  <span class="ml-2"><?php echo $kontak ?></span>
                </div>
                <div class="flex items-center">
                  <box-icon name="envelope"></box-icon>
                  <span class="ml-2"><?php echo $username; ?></span>
                </div>
                <div class="flex item-center pb-11">
                  <box-icon type="logo" name="instagram"></box-icon>
                  <span class="ml-2"><?php echo $sosmed ?></span>
                </div>
              </div>
              <div class="py-4">
                <h2 class="text-white text-center rounded-2xl bg-Primary p-1 font-bold">
                  TEMPAT & TANGGAL LAHIR
                </h2>
                <div class="text-sm font-bold space-y-2 pl-7 pt-3">
                  <ul class="list-disc"><li><?= $ttl ?></li></ul>
                  
                </div>
              </div>
              <div class="py-4">
                <h2 class="text-white text-center rounded-2xl bg-Primary p-1 font-bold">
                  KEMAMPUAN
                </h2>
              </div>
              <ul class="list-disc font-bold text-sm pl-7 space-y-2">
                <li>Ms. Word</li>
                <li>Ms. Excel</li>
                <li>Canva</li>
                <li>Java</li>
                <li>HTML</li>
                <li>CSS</li>
                <li>JavaScript</li>
              </ul>
        </div>
        <div class="w-full md:w-2/3 pt-4">
              <div class="p-3 md:p-5">
                <div>
                  <h3 class="font-bold text-white text-center rounded-2xl bg-Primary py-1 w-full md:w-1/2">
                    TENTANG SAYA
                  </h3>
                  <p class="p-5 text-justify">
                    <?= $deskripsi ?>
                  </p>
                </div>
                <div>
                  <h3 class="font-bold text-white text-center rounded-2xl bg-Primary py-1 w-full md:w-1/2">
                    PENDIDIKAN
                  </h3>
                  <div class="p-5">
                    <ul class="list-disc pl-6">
                      <li class="pb-3"><?= $pendidikan ?></li>
                    </ul>
      
                    <ul class="list-disc pl-6">
                      <li>
                        <?= $SMA?>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
        </div>
      </div>
    </main>
  </body>
</html>
