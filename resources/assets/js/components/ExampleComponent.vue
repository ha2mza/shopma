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
                </table>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
