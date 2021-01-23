    function sendForm() {
        var name = document.getElementById('name').value;
        var lastName = document.getElementById('lastName').value;
        var email = document.getElementById('email').value;
        var phone = document.getElementById('phone').value;
        var btn = $("#btn");
        $.ajax({
            url: '{{ route("form-page-post") }}',
            type: 'POST',
            cache: false,
            data: {
                'firstName': name,
                'lastName': lastName,
                'email': email,
                'phoneNumber': phone,
                '_token': "{{ csrf_token() }}"
            },
            dataType: 'text',
            beforeSend: function () {
                btn.prop("disabled", true);
            },
            success: function (data) {
                btn.prop("disabled", false);
                alert('data is send!');
                var message = data.responseText;
                console.log(message);
            },
            error: function (data) {
                alert('data not uploaded');
                btn.prop("disabled", false);
                var errors = JSON.parse(data.responseText);
                document.getElementById("form-errors").innerText = errors.errors;
                for (var error = 0; error < errors.errors['length']; error++) {
                    console.log(errors.errors[error]);
                }
            }
        })
    }
