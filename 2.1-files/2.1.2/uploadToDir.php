<?php
$uploadsFile = __FILE__ . '/uploads/';
$fileName = 'picture';
if(isset($_POST['upload'])) {
    uploadFile($uploadsFile, $fileName);
};
function uploadFile($uploadsFile='', $fileName='') 
{
    $extType = [
        'gif', 
        'jpg', 
        'jpe', 
        'jpeg', 
        'png',
    ];
    if ($_FILES[$fileName]['error'] === 0) {
        $tmpName = $_FILES[$fileName]['tmp_name'];
        
        if (is_uploaded_file($tmpName)) {
            $pathParts = pathinfo($_FILES[$fileName]['name']);
            
            if (in_array($pathParts['extension'], $extType)) {
                return move_uploaded_file(
                    $tmpName,
                    $uploadsFile.$pathParts['basename']
                );
            };
        };
    };
};
