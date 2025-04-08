<?php

namespace App\Exports;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Events\AfterSheet;
use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;
use PhpOffice\PhpSpreadsheet\Worksheet\Drawing;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Style\Border;
use PhpOffice\PhpSpreadsheet\Style\Alignment;

class OrderReportExport implements FromView, ShouldAutoSize, WithStyles,WithColumnWidths ,WithHeadings, WithEvents
{
    use Exportable;
    protected $data;

    public function __construct($data) {
        $this->data = $data;
    }

    public function view(): View
    {
        return view('file-exports.order-report-export', [
            'data' => $this->data,
        ]);
    }

    public function columnWidths(): array
    {
        return [
            'A' => 15,
            'B' => 30,
            'C' => 40,
        ];
    }

    public function styles(Worksheet $sheet) {
        $sheet->getStyle('A1:A2')->getFont()->setBold(true);
<<<<<<< HEAD
        $sheet->getStyle('A3:J3')->getFont()->setBold(true)->getColor()
        ->setARGB('FFFFFF');


        $sheet->getStyle('A3:J3')->getFill()->applyFromArray([
=======
        $sheet->getStyle('A3:I3')->getFont()->setBold(true)->getColor()
        ->setARGB('FFFFFF');


        $sheet->getStyle('A3:I3')->getFill()->applyFromArray([
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'fillType' => 'solid',
            'rotation' => 0,
            'color' => ['rgb' => '063C93'],
        ]);
<<<<<<< HEAD
        $sheet->getStyle('J4:J'.$this->data['orders']->count() + 4)->getFill()->applyFromArray([
=======
        $sheet->getStyle('I4:I'.$this->data['orders']->count() + 4)->getFill()->applyFromArray([
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
            'fillType' => 'solid',
            'rotation' => 0,
            'color' => ['rgb' => 'FFF9D1'],
        ]);

        $sheet->setShowGridlines(false);
        return [
            // Define the style for cells with data
            'A1:I'.$this->data['orders']->count() + 4 => [
                'borders' => [
                    'allBorders' => [
                        'borderStyle' => Border::BORDER_THIN,
                        'color' => ['argb' => '000000'], // Specify the color of the border (optional)
                    ],
                ],
            ],
        ];
    }

    public function registerEvents(): array
    {
        return [
            AfterSheet::class => function(AfterSheet $event) {
<<<<<<< HEAD
                $event->sheet->getStyle('A1:J1') // Adjust the range as per your needs
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_CENTER)
                    ->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getStyle('A3:J'.$this->data['orders']->count() + 4) // Adjust the range as per your needs
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_CENTER)
                    ->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getStyle('A2:J2') // Adjust the range as per your needs
=======
                $event->sheet->getStyle('A1:I1') // Adjust the range as per your needs
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_CENTER)
                    ->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getStyle('A3:I'.$this->data['orders']->count() + 4) // Adjust the range as per your needs
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_CENTER)
                    ->setVertical(Alignment::VERTICAL_CENTER);
                $event->sheet->getStyle('A2:I2') // Adjust the range as per your needs
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    ->getAlignment()
                    ->setHorizontal(Alignment::HORIZONTAL_LEFT)
                    ->setVertical(Alignment::VERTICAL_CENTER);

                    $event->sheet->mergeCells('A1:G1');
                    $event->sheet->mergeCells('A2:B2');
<<<<<<< HEAD
                    $event->sheet->mergeCells('C2:J2');
=======
                    $event->sheet->mergeCells('C2:I2');
>>>>>>> a84d0c1780c81a25f2e894da52e9d099ac87d017
                    $event->sheet->getRowDimension(2)->setRowHeight(80);
                    $event->sheet->getDefaultRowDimension()->setRowHeight(30);
            },
        ];
    }
    public function headings(): array
    {
        return [
           '1'
        ];
    }
}
