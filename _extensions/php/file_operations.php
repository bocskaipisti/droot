<?php

    function getFileSize($file_path){
        return @exif_read_data($file_path)['FileSize'];
    }

    function getFileParams($file_path){
        return @exif_read_data($file_path)['COMPUTED'];
    }


    function folder_exist($folder){
        $path = realpath($folder);
        return ($path !== false AND is_dir($path)) ? $path : false;
    }
    function file_list($folder,$filetypes){
        $return_array = array();
        if(folder_exist($folder, $filetypes)){
            $filetypes = str_replace(' ','',$filetypes); $file_display = explode(',',$filetypes);
            $dir_contents = scandir($folder);
            foreach ($dir_contents as $file) {
                $file_type = pathinfo($file, PATHINFO_EXTENSION);
                if (in_array($file_type, $file_display)) {
                    $return_array[] = $file;
                    $file_path = $folder.'/'.$file;
                    #print_r(getFileSize($file_path));
                    #print_r(getFileParams($file_path));
                }
            }
            return $return_array;
        }else{
            echo '<span style="color:#04F;">♣ &nbsp; Image Folder not exists yet!</span>';
        }
    }



?>