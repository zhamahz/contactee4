<?php

use  yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'Министерство образования и науки Кыргызской Республики';
?>
<?php //foreach ($cats as $cat)
//    echo $cat->name . '<br>';
//?>
<?php //debug($cats); ?>
<button type="button" class="btn btn-primary">Print</button>
<button type="button" class="btn btn-danger">PDF</button>
<button type="button" class="btn btn-success">Excel</button>




<div class="row">
    <br>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">

        <div class="card">
            <div class="card-body">


                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <td id="id">#</td>
                            <th>Количество полученных заявлений</th>
                            <th>Количество отклоненных заявлений</th>

                        </tr>
                        </thead>
                        <tbody style="font-size: 13px">
                        <tr>
                            <th></th>
                            <th>12</th>
                            <th>12</th>

                        </tr>

                        </tbody>

                    </table>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                    // Setup - add a text input to each footer cell
                    $('#example tfoot th').each(function () {
                        var title = $(this).text();
                        $(this).html('<input style="width: 135px; font-size: 15px" type="text" placeholder="' + title + '" />');
                    });
                    // DataTable
                    var table = $('#example').DataTable({
                        // dom: 'Bfrtip',
                        // "buttons": [
                        //     {
                        //         extend: "excel",
                        //         className: "btn btn-sm btn-success",
                        //         titleAttr: 'Экспорт в Excel',
                        //         text: 'Экспорт в Excel',
                        //         init: function (api, node, config) {
                        //             $(node).removeClass('dt-button buttons-excel buttons-html5')
                        //         }
                        //     },
                        //
                        //     {
                        //         extend: "print",
                        //         className: "btn btn-sm btn-dark",
                        //         titleAttr: 'Распечатать',
                        //         text: 'Распечатать',
                        //         init: function (api, node, config) {
                        //             $(node).removeClass('dt-button buttons-print')
                        //         }
                        //     }
                        // ],
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ],
                        initComplete: function () {
                            // Apply the search
                            this.api().columns().every(function () {
                                var that = this;
                                $('input', this.footer()).on('keyup change clear', function () {
                                    if (that.search() !== this.value) {
                                        that
                                            .search(this.value)
                                            .draw();
                                    }
                                });
                            });
                        }
                    });
                }
            );
        </script>
    </div>
    <a class="d-flex align-items-center justify-content-center" href="uni_list/uni_list.php"><i
            style="font-size: 40px;" class="bi bi-arrow-right"></i></a>
</div>


