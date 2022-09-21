let id = $("input[name*='car_id']")
id.attr("readonly", "readonly");


$(".btnedit").click(e => {
    let textvalues = displayData(e);

    ;
    let carname = $("input[name*='car_name']");
    let carmodel = $("input[name*='car_model']");
    let carprice = $("input[name*='car_price']");

    id.val(textvalues[0]);
    carname.val(textvalues[1]);
    carmodel.val(textvalues[2]);
    carprice.val(textvalues[3].replace("$", ""));
});


function displayData(e) {
    let id = 0;
    const td = $("#tbody tr td");
    let textvalues = [];

    for (const value of td) {
        if (value.dataset.id == e.target.dataset.id) {
            textvalues[id++] = value.textContent;
        }
    }
    return textvalues;

}