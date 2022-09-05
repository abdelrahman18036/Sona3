function handlevolFormSubmit(event) {
    //Stop the default action.
    event.preventDefault();

    const data = new FormData(event.target);

    const newData = Object.fromEntries(data.entries());

    $.ajax({
        url: "volunteer.php",
        type: "POST",
        data: newData,
        success: function () {
            grecaptcha.reset();
            $(".volForm").trigger("reset");
            document.querySelector('.volAlert').style.display = 'block';
            setTimeout(function () {
                document.querySelector('.volAlert').style.display =
                    'none';
            }, 3000);
        }
    });
}
const form = document.querySelector('.volForm');
form.addEventListener('submit', handlevolFormSubmit);

function handlesubFormSubmit(event) {
    //Stop the default action.
    event.preventDefault();

    const data = new FormData(event.target);

    const newData = Object.fromEntries(data.entries());

    $.ajax({
        url: "subscribe.php",
        type: "POST",
        data: newData,
        success: function () {
            $(".subForm").trigger("reset");
            document.querySelector('.subAlert').style.display = 'block';
            setTimeout(function () {
                document.querySelector('.subAlert').style.display =
                    'none';
            }, 3000);
        }
    });
}
const form2 = document.querySelector('.subForm');
form2.addEventListener('submit', handlesubFormSubmit);