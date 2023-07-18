<?php
/**
 * Created by PhpStorm.
 * User: Joe
 * Date: 8/24/2015
 * Time: 2:53 PM
 */

namespace App\Helpers;


class UploadHelper {
    protected $file;
    protected $columns_name;
    protected $spl_file_object;
    protected $delimiter = ',';

    public function __construct($file_path)
    {
        $this->file = $file_path;
        $this->spl_file_object = new \SplFileObject($this->file);
        $this->spl_file_object->setCsvControl($this->delimiter);
        $this->columns_name = $this->spl_file_object->fgetcsv();
    }
    public function readElement(){
        $csv_line_data = $this->spl_file_object->fgetcsv();
        if(array_filter($csv_line_data))
        {
            $csv_line = array_combine($this->columns_name, $csv_line_data);
            return (object)$csv_line;
        }
        else
        {
            return false;
        }
    }
    public function readElements()
    {
        $iterator = new \ArrayIterator;
        do
        {
            $object = $this->readElement();
            if($object){
                $iterator->append($object);
            }
        }while((boolean)$object);

        return $iterator;
    }

}