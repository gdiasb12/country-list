<!doctype html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Country Test - Gabriel Dias</title>

    <!-- Bootstrap CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap4.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
            <![endif]-->
        </head>
        <body>
            <section class="container">
                <h1>Country Test - Gabriel Dias</h1>
                <a href="/export-csv" target="_blank" class="btn btn-primary">Export as CSV</a>
                <hr>
                <table id="countries" class="table table-striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Country Name</th>
                            <th>Country Code</th>
                        </tr>
                    </thead>
                    <tbody>
                       {!! $countries !!}
                   </tbody>
               </table>
           </div>
       </section>
       <hr>
       <!-- jQuery -->
       <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.12.4.js"></script>
       <!-- DataTables -->
       <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
       <!-- Bootstrap -->
       <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap4.min.js"></script>
       <script type="text/javascript">
           $(document).ready(function() {
            $('#countries').DataTable();
        } );
    </script>
</body>
</html>