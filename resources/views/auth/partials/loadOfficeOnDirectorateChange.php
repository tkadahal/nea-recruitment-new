<script>
    $(document).ready(function() {
        $(document).on('change', '#directorate', function () {
            $('#office').prop('selectedIndex',0);
            var typeValue = $('#directorate').val();
            console.log(typeValue);
            var op=" ";
            $.ajax({
                type: 'get',
                url: '/findOffice',
                data: {
                    'type': typeValue
                },
                dataType: "json",
                success:function(data) {
                    console.log('success');
                    op+='<option value="0" selected disabled>Select Office ...</option>';
                    for(var i=0;i<data.length;i++){
                        op+='<option value="'+data[i].office_cd+'">'+data[i].office_desc+'</option>';
                    }
                    $("select[name='office']").html('');
                    $("select[name='office']").html(op);
                },
                error:function(){
                    //
                }
            });
        });

    });
</script>
