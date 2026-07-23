
<?php 


// print_r($data)

?>

<div class="card">
    <card class="body">
          <button onclick="printInvoice()" class="btn btn-primary">print</button>
    </card>
</div>

<hr>

<div class="card  " id="stock">
    <div class="card-body">
        <table class="table table-strip" id="stock_table">

            <thead>
                <tr>
                    <th>Id</th>
                    <th>Product</th>
                    <th>qty</th>
                </tr>
            </thead>
            <tbody>

                <?php
                foreach ($data as $key => $value) {
                     $key++;
                    echo "
                    <tr>
                        <td>$key</td>
                        <td>$value->name</td>
                        <td>$value->qty</td>
                    </tr>
         
                 ";
                }
                ?>



            </tbody>
        </table>

    </div>
</div>

<script>

  new DataTable('#stock_table');

 function printInvoice() {
        let content = document.getElementById("stock").innerHTML;

        let printWindow = window.open("", "", "width=900,height=700");

        printWindow.document.write(`
        <html>
        <head>
            <title>Invoice</title>

            <link rel="stylesheet"
                href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css">

            <style>
                body{
                    padding:20px;
                }

                @media print{
                    .no-print{
                        display:none;
                    }
                }
            </style>
        </head>
        <body>
            ${content}
        </body>
        </html>
    `);

        printWindow.document.close();
        printWindow.focus();

        setTimeout(() => {
            printWindow.print();
            printWindow.close();
        }, 500);
    }


</script>