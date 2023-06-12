$(document).ready(function () {
    const test = $("#form-send-mail").validate({
        rules: {
            name: {
                required: true,
            },
            email: {
                required: true,
                email,
            },
            subject: {
                required: true,
            },
            message: {
                required: true,
            },
        },
    });

    $("#form-send-mail").submit(function (e) {
        e.preventDefault();

		const form = $(this);
        const valid = form.valid();
        if (valid) {
			const url = form.attr("action");
			const data = form.serialize();
            $.ajax({
                type: "post",
                url: url,
                data: data,
                success: function (response) {
					swal("Alert", response.message, "success");

					form[0].reset();
				},
            });
        }
    });
});
