$(() => {
    const btnSubmit = $("#btn_submit");
    const btnResendEmail = $("#resend-email");
    const labelResendEmail = $("#label-resend-email");
    const labelWaitResendEmail = $("#label-wait-resend-email");
    const countdownValue = $("#countdown_value");
    const inputOTPCode = $("#otp_code");
    // const errorOTPCode = $("#error_otp_code");
    // alert(route("api.email-verify",{id:id}))
    window.VERIFY_EMAIL = {
        check: function () {
            const otp = inputOTPCode.val()
            // alert(otp)
            new CallApi(window.DATA.routeSubmit).post(
                {
                    otp: otp,
                },
                (res) => {
                    location.replace(res.data.url);
                },
                (res) => {
                    handleCreateToast(
                        "error",
                        res.error ?? res.message,
                        null,
                        true
                    );
                    console.log(res);
                }
            );
        },
        resend: function () {
            new CallApi(window.DATA.routeResendEmail).post(
                null,
                (res) => {
                    // errorOTPCode.text("");
                    countdownAllowCodeResend();
                    handleCreateToast("success", res.message, null, true);
                },
                (res) => {
                    handleCreateToast(
                        "error",
                        "Your code resend request was too fast, please wait a moment to try again",
                        "error-resend-email-verify",
                        true
                    );
                    console.log(res);
                }
            );
        },
    };
    const countdownAllowCodeResend = () => {
        labelResendEmail.hide();
        labelWaitResendEmail.show();
        let seconds = 60;
        let countdown = setInterval(function () {
            seconds--;
            countdownValue.text(seconds);
            if (seconds === 0) {
                clearInterval(countdown);
                labelResendEmail.show();
                labelWaitResendEmail.hide();
            }
        }, 1000);
    };

    btnResendEmail.click(() => {
        window.VERIFY_EMAIL.resend();
    });
    btnSubmit.click(() => {
        // errorOTPCode.text("");
        window.VERIFY_EMAIL.check();
    });
});
