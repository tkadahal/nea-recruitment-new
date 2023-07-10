<html>

<body>
    <style>
        .not-redirected-btn {
            cursor: pointer;
            font-weight: 500;
            font-style: italic;
            border: none;
            background: none;
            color: #1a0dab;
        }
    </style>
    <p>Redirecting you to <strong>connectIPS Payment System....</strong></p>

    <form id="form-connect-ips-payment" action="{{ $ips_params['checkout_url'] }}" method="post">
        <input type="hidden" name="MERCHANTID" id="MERCHANTID" value="{{ $ips_params['MERCHANTID'] }}" />
        <input type="hidden" name="APPID" id="APPID" value="{{ $ips_params['APPID'] }}" />
        <input type="hidden" name="APPNAME" id="APPNAME" value="{{ $ips_params['APPNAME'] }}" />
        <input type="hidden" name="TXNID" id="TXNID" value="{{ $ips_params['TXNID'] }}" />
        <input type="hidden" name="TXNDATE" id="TXNDATE" value="{{ $ips_params['TXNDATE'] }}" />
        <input type="hidden" name="TXNCRNCY" id="TXNCRNCY" value="{{ $ips_params['TXNCRNCY'] }}" />
        <input type="hidden" name="TXNAMT" id="TXNAMT" value="{{ $ips_params['TXNAMT'] }}" />
        <input type="hidden" name="REFERENCEID" id="REFERENCEID" value="{{ $ips_params['REFERENCEID'] }}" />
        <input type="hidden" name="REMARKS" id="REMARKS" value="{{ $ips_params['REMARKS'] }}" />
        <input type="hidden" name="PARTICULARS" id="PARTICULARS" value="{{ $ips_params['PARTICULARS'] }}" />
        <input type="hidden" name="TOKEN" id="TOKEN" value="{{ $ips_params['TOKEN'] }}" />
        <input type="hidden" name="su" value="{{ $ips_params['SUCCESS'] }}">
        <input type="hidden" name="fu" value="{{ $ips_params['FAILURE'] }}">
        <input class="not-redirected-btn" type="submit" name="connectIPS Payment"
            value="Click here if you are not redirected automatically..">
    </form>

    <script type="text/javascript">
        function submitForm() {
        document.getElementById('form-connect-ips-payment').submit();
    }
    window.onload = submitForm;
    </script>
</body>

</html>