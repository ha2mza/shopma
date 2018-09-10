<template>
    <div class="card">
        <div class="card-body">
            <div class="text-right">
                <button type="button" data-toggle="modal" data-target="#ModalNew"
                        class="btn btn-primary btn-rounded btn-lg">
                    <i class="fa fa-plus"></i>
                </button>
            </div>
            <h4 class="card-title">Liste De Client</h4>
            <h6 class="card-subtitle">List Des Client</h6>
            <div class="table-responsive m-t-40">
                <table id="tableclient" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>A</th>
                        <th>B</th>
                        <th>C</th>
                    </tr>
                    </thead>
                    <tbody></tbody>
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    var $ = require('jquery');
    require('datatables.net-responsive-bs4')($);
   $("#tableclient").DataTable();
    export default {
        name: "generalList",
        data: {
            // clients array

        }
    }
</script>

<style scoped>

</style>