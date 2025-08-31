<?php
    function Alert($typeColor, $message) {
        return "<div id='alertBox' class='p-4 mb-4 text-sm text-$typeColor-700 bg-$typeColor-100 rounded-lg fixed bottom-4 right-4'>
                    <span class='font-medium'>$message</span>
                </div>
                <script>
                    setTimeout(function(){
                        var alertBox = document.getElementById('alertBox');
                        if(alertBox){
                            alertBox.remove();
                        }
                    }, 4000); // 2000ms = 2 seconds
                </script>
            ";
    }
    function setActive($page) {
            return basename($_SERVER['PHP_SELF']) === $page 
                ? 'bg-blue-100 text-blue-600'   
                : 'text-gray-900 hover:bg-gray-100';                 
        }
    function MoveIMage($file, $targetDir) {
        if (!is_dir($targetDir)) {
            mkdir($targetDir, 0777, true);
        }
        $targetFile = $targetDir . basename($file["name"]);
        
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        $allowType = ["jpg", "png", "jpeg", "gif"];

        if (!in_array($fileType, $allowType)) {
            return false;
        }
        if (move_uploaded_file($file['tmp_name'], $targetFile)) {
            return true;
        } else {
            return false;
        }
    }

    // MoveIMage($_FILES['imagefile'], 'images/');
?>
