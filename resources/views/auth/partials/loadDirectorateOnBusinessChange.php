<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $(document).on('change', '#business', function () {
            $('#directorate').prop('selectedIndex',0);
            var typeValue = $('#business').val();
	    var op=" ";
            $.ajax({
                type: 'get',
                url: '/findDirectorate',
                data: {
                    'type': typeValue
                },
                dataType: "json",
                success:function(data) {
                    console.log('success');
		    console.log(data);
                    op+='<option value="0" selected disabled>Select Directorate ...</option>';
                    for(var i=0;i<data.length;i++) {
                        op+='<option value="'+data[i].office_cd+'">'+data[i].office_desc+'</option>';
                    }
                    $("select[name='directorate']").html('');
                    $("select[name='directorate']").html(op);
                },
                error:function() {
                    //
                }
            });
        });
    });
</script>
