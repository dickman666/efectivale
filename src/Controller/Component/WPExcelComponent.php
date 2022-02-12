<?php

namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Orm\TableRegistry;
use Cake\I18n\Time;

class WPExcelComponent extends Component {

    public $format = [
        'title' => [
            'alignment' => [
                'horizontal' => \PHPExcel_Style_Alignment::HORIZONTAL_CENTER,
            ],
            'font'  => array(
                'bold'  => true,
                'size'  => 14,
                'name'  => 'Verdana'
            )
        ],
        'bold' => [
            'font'  => [
                'bold'  => true,
                'size'  => 12,
                'name'  => 'Verdana'
            ],
        ],
    ];

    public function export($headerData, &$data) {
        $excelObj = $this->create($headerData, $data);
        $writer = new \PHPExcel_Writer_Excel2007($excelObj);
        $filename = WWW_ROOT . '/files/products/' . uniqid() . '.xlsx';
        $writer->save($filename);
        return $filename;
    }

    public function create($headerData, &$data) {
        $formattedData = $this->formatData($headerData, $data);
        $excel = $this->getExcel();
        return $this->printData($excel, $formattedData);
    }

    public function formatData($headerData, &$data)
    {
        $title = $headerData['title'];
        $headers = $this->getHeaders($headerData);
        $data = $this->getDataGrid($data, $headerData);
        return compact('headers', 'title', 'data');
    }

    public function getHeaders(&$headers) {
        return array_map(
            function($e){
                return @$e['label'];
            },
            (Array) $headers['fields']
        );
    }

    public function getDataGrid(&$data, &$headerData) {
        $grid = [];
        foreach ($data as $rowKey => $row) {
            foreach ((Array) $headerData['fields'] as $fieldKey => $columnDefinition) {
                $userFunc = &$columnDefinition['callback'];
                $grid[$rowKey][$fieldKey] =
                    $userFunc && is_callable($userFunc) ?
                    call_user_func($userFunc, $row) :
                    $row->get($fieldKey);
            }
        }
        return $grid;
    }

    public function getExcel(){
        $excelObj = new \PHPExcel();
        $excelObj->setActiveSheetIndex(0);
        return $excelObj;
    }

    public function printData(&$excelObj, $formattedData)
    {
        $row = 1;
        $col = 0;
        $this->printTitle($excelObj, $formattedData['title'], $col, $row++);
        $this->printHeaders($excelObj, $formattedData['headers'], $col, $row++);
        foreach ($formattedData['data'] as $fields){
            foreach ($fields as $field) {
                $excelObj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $field);
            }
            $col = 0;
            $row++;
        }
        return $excelObj;
    }

    public function printTitle(&$excelObj, $title, $col = 0, $row = 1) {
        $excelObj->getActiveSheet()->mergeCells('A1:H1');
        $currentCell = $excelObj->getActiveSheet()->getCellByColumnAndRow($col, $row)->getCoordinate();
        $excelObj->getActiveSheet()->setCellValueByColumnAndRow($col, $row++, $title);
        $excelObj->getActiveSheet()->getStyle($currentCell)->applyFromArray($this->format['title']);
    }

    public function printHeaders(&$excelObj, $headers, $col = 0, $row = 1) {
        foreach ($headers as $header) {
            $currentCell = $excelObj->getActiveSheet()->getCellByColumnAndRow($col, $row)->getCoordinate();
            $excelObj->getActiveSheet()->setCellValueByColumnAndRow($col++, $row, $header);
            $excelObj->getActiveSheet()->getStyle($currentCell)->applyFromArray($this->format['bold']);
        }
    }

}
