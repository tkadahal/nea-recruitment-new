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

    <form id="form-khalti-payment" action="{{ $khalti_params['payment_url'] }}" method="post">
        @csrf
    </form>

    <script type="text/javascript">
        function submitForm() {
        document.getElementById('form-khalti-payment').submit();
    }
    window.onload = submitForm;
    </script>
</body>

</html>