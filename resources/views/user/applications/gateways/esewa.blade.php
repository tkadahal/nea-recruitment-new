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
    <p>Redirecting you to <strong>eSewa Payment System....</strong></p>

    <form id="form-esewa-payment" action="{{ $esewa_params['payment_url'] }}" method="post">
        <input type="hidden" name="amt" value="{{ $esewa_params['amt'] }}">
        <input type="hidden" name="txAmt" value="{{ $esewa_params['txAmt'] }}">
        <input type="hidden" name="psc" value="{{ $esewa_params['psc'] }}">
        <input type="hidden" name="pdc" value="{{ $esewa_params['pdc'] }}">
        <input type="hidden" name="tAmt" value="{{ $esewa_params['tAmt'] }}">
        <input type="hidden" name="scd" value="{{ $esewa_params['scd'] }}">
        <input type="hidden" name="pid" value="{{ $esewa_params['pid'] }}">
        <input type="hidden" name="su" value="{{ $esewa_params['su'] }}">
        <input type="hidden" name="fu" value="{{ $esewa_params['fu'] }}">
        <input class="not-redirected-btn" type="submit" name="esewa_payment"
            value="Click here if you are not redirected automatically..">
    </form>

    <script type="text/javascript">
        function submitForm() {
        document.getElementById('form-esewa-payment').submit();
    }
    window.onload = submitForm;
    </script>
</body>

</html>