<?php $__env->startPush('script'); ?>
    <script type="text/javascript">
        function delete_row(route, row_id,notification) {

            var delete_by = get_type();
            var table_row = '#row_' + row_id;
            if(notification)
            {
                var url = "<?php echo e(route('home')); ?>"+'/'+route+row_id;
            }
            else{
                var url = "<?php echo e(route('home')); ?>"+'/'+delete_by+'/'+route+row_id;
            }
            Swal.fire({
                title: '<?php echo e(__('Are you sure?')); ?>',
                text: "<?php echo e(__('You will not be able to revert this')); ?>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '<?php echo e(__('Yes delete it!')); ?>',
                cancelButtonText: '<?php echo e(__('Cancel')); ?>'
            }).then((confirmed) => {
                if (confirmed.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: row_id,
                            _method: 'delete'
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                    })
                        .done(function(response) {

                            Swal.fire(
                                response.title,
                                response.message,
                                response.status
                            ).then((confirmed) => {
                                if (response.url)
                                {
                                    window.location.href = response.url;
                                }
                                else
                                {
                                    location.reload();
                                }
                            });
                            if (response.status != 'error'){
                                $(table_row).fadeOut(2000);
                            }
                        })
                        .fail(function(error) {
                            Swal.fire('<?php echo e(__("Ops..!")); ?>', '<?php echo e(__('Something went wrong with ajax!')); ?>', 'error');
                        })
                }
            });
        }

        function delete_media(route, row_id) {
            var delete_by = get_type();
            var article =  '#artilce_'+row_id ;
            var url = "<?php echo e(route('home')); ?>"+'/'+delete_by+'/'+route+row_id;
            Swal.fire({
                title: '<?php echo e(__('Are you sure?')); ?>',
                text: "<?php echo e(__('You will not be able to revert this')); ?>",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: '<?php echo e(__('Yes delete it!')); ?>'
            }).then((confirmed) => {
                if (confirmed.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        dataType: 'json',
                        data: {
                            id: row_id,
                            _method: 'delete'
                        },
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: url,
                    })
                        .done(function(response) {
                            Swal.fire(
                                response.title,
                                response.message,
                                response.status
                            ).then((confirmed) => {
                                location.reload();
                            });
                            if (response.status != 'error'){
                                $(article).fadeOut(2000);
                            }
                        })
                        .fail(function(error) {
                            Swal.fire('<?php echo e(__("Ops.!")); ?>', '<?php echo e(__('Something went wrong with ajax!')); ?>', 'error');
                        })
                }
            });
        }

        function get_type(){
            var user_type = '<?php echo e(Sentinel::getUser()->user_type); ?>';
            if ( user_type === 'seller'){
                return 'seller';
            } else{
                return 'admin';
            }
        }
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH D:\smartLink\TLSouq\website\yoorii\resources\views/admin/common/delete-ajax.blade.php ENDPATH**/ ?>