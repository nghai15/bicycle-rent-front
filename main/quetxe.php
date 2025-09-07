<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/scan.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
        <title>Mở khóa xe</title>
    </head>
    <body>
    <div class="header">
    <span class="back"><i class="fa-solid fa-arrow-left"></i></span>
    Mở khoá xe
  </div>
    
  <div class="scanner">
    <div class="bike-icon"><i class="fa-solid fa-bicycle"></i></div>
    <div>Quét mã QR tại đây</div>
    <div class="scan-box"></div>
  </div>

  <div class="bottom-actions">
    <div class="circle-btn"><i class="fa-solid fa-circle"></i></div>
    <div class="circle-btn"><i class="fa-solid fa-bolt"></i></div>
  </div>

  <div class="main-actions">
    <button class="btn-green">Lấy xe</button>
    <button class="btn-white">Trả xe</button>
  </div>

  <div class="nav">
    <div class="nav-item"><i class="fa-solid fa-house"></i></div>
    <div class="nav-item"><i class="fa-solid fa-list"></i></div>
    <div class="nav-item"><i class="fa-solid fa-bicycle"></i></div>
    <div class="nav-item"><i class="fa-solid fa-user"></i></div>
  </div>


  <script>
    let html5QrCode;
    let cameraId;
    let isScanning = false;
    let isFlashOn = false;

    // Hàm bắt đầu quét
    async function startQrScanner() {
      if (isScanning) return;

      html5QrCode = new Html5Qrcode("reader");

      const cameras = await Html5Qrcode.getCameras();
      if (cameras && cameras.length) {
        cameraId = cameras[0].id; // lấy camera đầu tiên (thường là camera sau trên điện thoại)
        html5QrCode.start(
          cameraId,
          {
            fps: 10,
            qrbox: { width: 200, height: 200 }
          },
          qrCodeMessage => {
            window.location.href = "success.php?code=" + encodeURIComponent(qrCodeMessage);
            // TODO: gọi AJAX/PHP xử lý mở khoá xe ở đây
          },
          errorMessage => {
            console.log("Scanning...", errorMessage);
          }
        );
        isScanning = true;
      }
    }

    // Bắt đầu quét khi nhấn nút camera
    document.getElementById("startScan").addEventListener("click", startQrScanner);

    // Toggle đèn flash (chỉ hoạt động trên thiết bị hỗ trợ)
    document.getElementById("toggleFlash").addEventListener("click", () => {
      if (!html5QrCode || !isScanning) return;
      isFlashOn = !isFlashOn;
      html5QrCode.applyVideoConstraints({
        advanced: [{ torch: isFlashOn }]
      }).catch(err => console.log("Flash không hỗ trợ: ", err));
    });
  </script>
</body>
</html>