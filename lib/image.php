<?php

namespace FroalaEditor;

require_once 'utils/utils.php';
require_once 'utils/disk_management.php';

use FroalaEditor\Utils\Utils as Utils;
use FroalaEditor\Utils\DiskManagement as DiskManagement;

class Image {

  /**
  * Image upload to disk.
  *
  * @param options [optional]
  *   (
  *     fileRoute => string
  *     validation => string: 'image'. OR function
  *   )
  *  @return {link: 'linkPath'} or error string
  */
  public static function upload($options = array()) {

    $options = array_merge(Utils::$defaultUploadOptions, array('validation' => 'image'), $options);
    return DiskManagement::upload($options);
  }

  /**
  * Delete image from disk.
  *
  *  @return boolean
  */
  public static function delete() {

    return DiskManagement::delete();
  }

  /**
  * List images from disk
  *
  * @param folderPath string
  *
  * @return array of image properties
  *     - on success : [{url: 'url', thumb: 'thumb', name: 'name'}, ...]
  *     - on error   : {error: 'error message'}
  */
  public static function doList($folderPath) {

    return DiskManagement::doList($folderPath);
  }
}


?>