<link rel="stylesheet" type="text/css" href="{{ asset('admin/nepalidatepicker/nepali.datepicker.v2.2.min.css') }}" />
<script type="text/javascript" src="{{ asset('admin/nepalidatepicker/nepali.datepicker.v2.2.min.js') }}" defer>
</script>
<script>
    $(document).ready(function(){
        $('.nepali-calendar').nepaliDatePicker({
        npdMonth: true,
        npdYear: true,
        npdYearCount: 100,
        });
    });
</script>
