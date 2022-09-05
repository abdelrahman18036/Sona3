function handleconFormSubmit(event) {
    //Stop the default action.
    event.preventDefault();

    const data = new FormData(event.target);

    const newData = Object.fromEntries(data.entries());

    $.ajax({
        url: "contact.php",
        type: "POST",
        data: newData,
        success: function () {
            grecaptcha.reset();
            $(".conForm").trigger("reset");
            document.querySelector('.conAlert').style.display = 'block';
            setTimeout(function () {
                document.querySelector('.conAlert').style.display =
                    'none';
            }, 3000);
        }
    });
}
const form = document.querySelector('.conForm');
form.addEventListener('submit', handleconFormSubmit);

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