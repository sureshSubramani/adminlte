<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12">
                        <?php if($this->session->flashdata('success')){ ?>
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong>Warning!</strong> <?php echo $this->session->flashdata('success'); ?>
                        </div> 
                        <?php } ?>
                        <h3 class='text-center'>How to Import Excel Data into Mysql in Codeigniter</h3>
                        <form method="post" id="import_form" enctype="multipart/form-data">
                            <p><label>Select Excel File</label>
                                <input type="file" class='' name="file" id="file" required accept=".xls, .xlsx" /></p>
                            <br />
                            <input type="submit" name="import" value="Import" class="btn btn-info" />
                        </form>
                        <br />
                        <div class="table-responsive" id="customer_data">

                        </div>
                </section>
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<script>
$(document).ready(function() {

    $('#import_form').on('submit', function(event) {
        event.preventDefault();
        $.ajax({
            url: "<?php echo base_url(); ?>import_excel/import",
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(data) {
                $('#file').val('');
                alert(data);
                console.log(data);
            }
        })
    });

});
</script>