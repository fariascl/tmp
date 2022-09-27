<?php
function validate_type($uploaded_filetype){
    $acceptedImgs = array('jpg', 'png', 'jpeg');
    $acceptedCompressed = array('rar', 'zip', 'tar', 'tar.gz');
    $acceptedOthers = array('pdf');

    $acceptedMIMEImgs = array('image/jpg', 'image/jpeg', 'image/png', 'image/x-png');
    $acceptedMIMECompressed = array('application/x-rar-compressed', 'application/zip', 'application/x-tar', 'application/gzip');
    $acceptedMIMEOthers = array('application/pdf');

    if (in_array($uploaded_filetype, $acceptedMIMEImgs) || in_array($uploaded_filetype, $acceptedMIMECompressed) || in_array($uploaded_filetype, $acceptedMIMEOthers)){
        return 1;
    }
    return 0;
}

?>
