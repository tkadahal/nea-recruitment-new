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
    <p>Redirecting you to <strong>IMEPay Payment System....</strong></p>

    <form id="form-imepay-checkout" action="{{ $ime_params['checkout_url'] }}" method="post">
        <input type="hidden" name="TokenId" value="{{ $ime_params['TokenId'] }}">
        <input type="hidden" name="MerchantCode" value="{{ $ime_params['MerchantCode'] }}">
        <input type="hidden" name="RefId" value="{{ $ime_params['RefId'] }}">
        <input type="hidden" name="TranAmount" value="{{ $ime_params['TranAmount'] }}">
        <input type="hidden" name="Method" value="GET">
        <input type="hidden" name="RespUrl" value="{{ $ime_params['RespUrl'] }}">
        <input type="hidden" name="CancelUrl" value="{{ $ime_params['CancelUrl'] }}">
        <input class="not-redirected-btn" type="submit" name="ime_pay"
            value="Click here if you are not redirected automatically..">
    </form>

    <script type="text/javascript">
        function submitForm() {
        document.getElementById('form-imepay-checkout').submit();
    }
    window.onload = submitForm;
    </script>
</body>

</html>