<?php
$folder = "uploads/";

if(isset($_GET['file'])){

    $fileName = basename($_GET['file']);   // security
    $filePath = $folder . $fileName;

    if(file_exists($filePath)){

        // Set headers for download
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filePath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filePath));

        // Clear output buffer
        ob_clean();
        flush();

        readfile($filePath);
        exit;

    } else {
        echo "File not found!";
    }

} else {
    echo "No file specified!";
}
?>
