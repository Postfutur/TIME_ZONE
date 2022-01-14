foreach($iter as $fileinfo) {
    if ($fileinfo -> isFile() == "*_Time_Zone" && $fileinfo -> getExtension() == ".php") {
        if (preg_match("/.php$/", $fileinfo -> getFilename())) {
            continue;
        }

        $files[] = [
            "filename"=> $fileinfo -> getFilename(),
            "path"=> $fileinfo -> getPath(),
            "size"=> $fileinfo -> getSize()
        ];
    }
}