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
const form = document.querySelector('.subForm');
form.addEventListener('submit', handlesubFormSubmit);