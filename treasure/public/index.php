<?php

// If time is >= 15:30 return them something else
$current_time = new DateTime();
$target_time = new DateTime('15:30');

$pdf_file = __DIR__ . '/../itinerar.pdf';

if ($current_time >= $target_time) {
    header('Content-Type: application/pdf');
    header('Content-Disposition: inline; filename="' . basename($pdf_file) . '"');

    readfile($pdf_file);
    exit;
}

$zipFile = __DIR__ . '/../the-magic-treasure-file.zip';

if (file_exists($zipFile)) {
    // Set headers for downloading the ZIP file
    header('Content-Type: application/zip');
    header('Content-Disposition: attachment; filename="' . basename($zipFile) . '"');
    header('Content-Length: ' . filesize($zipFile));

    // Output the ZIP file
    readfile($zipFile);
    exit;
} else {
    // Handle the case where the file is not found
    http_response_code(404);
    echo "The requested file is not available.";
}
