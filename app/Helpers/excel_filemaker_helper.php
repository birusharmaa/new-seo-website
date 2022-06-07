<?php
require(APPPATH . "ThirdParty/SimpleXLSXGen.php");
//require_once(APPPATH . "ThirdParty/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php");
//require_once APPPATH."/third_party/PHPExcel-1.8/Classes/PHPExcel/IOFactory.php";
//$this->load->library("excel");

//if (!function_exists('makeExcelfile')) {

    function makeExcelfile($data){
        $fileName = $data['c_filename'];
        $xlsx = new SimpleXLSXGen();
        $books = [
            $data['header']
        ];
        $xlsx = SimpleXLSXGen::fromArray($books); 
        $xlsx->saveAs('headerFile/'.$data['c_filename'].'_header_sample.xlsx');
    }
    
    
    function makeCsvfile($datas){
        $fileName = $datas['c_filename']."_header_sample.csv";
        header('Content-Type: text/csv');
        header('Content-Disposition: attachment; filename="'.$fileName);
        $fp = fopen('headerFile/'.$fileName, 'w');
        fputcsv($fp, $datas['header']);
        fclose($fp);
    }
    
//}

?>