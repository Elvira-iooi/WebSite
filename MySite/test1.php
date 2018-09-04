<?php

function isImage($filePath) {
    $fileTypeArray = array("jpg", "png", "bmp", "jpeg", "gif", "ico");
    $filePath = strtolower($filePath);
    $lastPosition = strrpos($filePath, ".");
    $isImage = false;
    if ($lastPosition >= 0) {
        $fileType = substr($filePath, $lastPosition + 1, strlen($filePath) - $lastPosition);
        if (in_array($fileType, $fileTypeArray)) {
            $isImage = true;
        }
    }
    return $isImage;
}

function getAllDirAndFile($path) {
    if (is_file($path)) {
        if (isImage($path)) {
            $str = "";
            $str.='<table style="border:solid 1px blue;" width="95%">';
            $str.="<tr>";
            $path = iconv("gb2312", "utf-8", $path);
            $str.="<td width=80%>" . $path . "</td><td width=15%><img src=" . $path . " style='width:50px;height:50px;'></td>";
            $str.="</tr>";
            $str.="</table>";
            echo $str;
        }
    } else {
        $resource = opendir($path);
        while ($file = readdir($resource)) {
            if ($file != "." && $file != "..") {
                getAllDirAndFile($path . "/" . $file);
            }
        }
    }
}
?>