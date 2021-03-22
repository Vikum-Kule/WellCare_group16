var row = 1;
var globalId = null;
var global_final_rowNum = 0;

//take count of table rows..
counter();

function counter() {

    var url = "http://localhost/mvcfinal/pc_view_drug/rowCount";
    $.ajax({
        url: url,
        type: 'GET',
        success: function(data) {
            var pending = data[0];
            var request = data[1];
            var confirm = data[2];
            document.getElementById("pending").innerHTML = pending;
            document.getElementById("request").innerHTML = request;
            document.getElementById("confirmed").innerHTML = confirm;

        }
    });
}

function selectData_byName() {
    var val = document.getElementById("medicine").value;
    var opts = document.getElementById('allMedicine').childNodes;
    var medName = "";
    for (var i = 0; i < opts.length; i++) {
        if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            //alert(opts[i].value);
            medName = opts[i].value;
            //console.log(medName);
            var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
            var price = 0;
            $.ajax({
                url: url,
                type: 'POST',
                data: { medName: medName },
                success: function(data) {
                    var barnds = [];
                    var doses = [];
                    var dosageForm = [];
                    for (var x = 0; x < data.length; x++) {
                        console.log(data[x].brand);
                        if (barnds.includes(data[x].brand) === false) barnds.push(data[x].brand);
                        if (doses.includes(data[x].dose) === false) doses.push(data[x].dose);
                        if (dosageForm.includes(data[x].doseStatus) === false) dosageForm.push(data[x].doseStatus);
                    }
                    //console.log(barnds);
                    var datalist = document.getElementById('allBrand');
                    var doses_list = document.getElementById('allDoses');
                    var dose_form_list = document.getElementById('allDoseForm');
                    var fragment = document.createDocumentFragment();
                    datalist.innerHTML = "";
                    doses_list.innerHTML = "";
                    dose_form_list.innerHTML = "";
                    barnds.forEach(function(allBrand) {
                        // console.log(allBrand);
                        var option = document.createElement('option');
                        var text = document.createTextNode(allBrand);

                        option.value = allBrand;
                        option.appendChild(text);
                        fragment.appendChild(option);
                    });
                    // Append all of them to DOM.
                    datalist.appendChild(fragment);

                    //doses add...
                    for (var i = 0; i < doses.length; i++) {
                        var optn = doses[i];
                        var el = document.createElement("option");
                        el.textContent = optn;
                        el.value = optn;
                        doses_list.appendChild(el);
                    }

                    //doseForms add...
                    for (var i = 0; i < dosageForm.length; i++) {
                        var optn = dosageForm[i];
                        var el = document.createElement("option");
                        el.textContent = optn;
                        el.value = optn;
                        dose_form_list.appendChild(el);
                    }

                }
            });

            break;
        }
    }

}
var medicine_name_forQTY = ""; //define to find available qty...
function selectData_byBrand() {
    medicine_name_forQTY = "";
    var val = document.getElementById("brand").value;
    var opts = document.getElementById('allBrand').childNodes;
    var medBrand = "";
    for (var i = 0; i < opts.length; i++) {
        if (opts[i].value === val) {
            // An item was selected from the list!
            // yourCallbackHere()
            //alert(opts[i].value);
            medBrand = opts[i].value;
            //console.log(medName);
            var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
            $.ajax({
                url: url,
                type: 'POST',
                data: { medBrand: medBrand },
                success: function(data) {
                    // console.log(data);
                    var name = [];
                    var doses = [];
                    var dosageForm = [];
                    for (var x = 0; x < data.length; x++) {
                        if (name.includes(data[x].name) === false) name.push(data[x].name);
                        if (doses.includes(data[x].dose) === false) doses.push(data[x].dose);
                        if (dosageForm.includes(data[x].doseStatus) === false) dosageForm.push(data[x].doseStatus);
                    }
                    if (document.querySelector('#medicine').value != name[0]) {
                        //console.log(name[0]);
                        document.querySelector('#medicine').value = name[0];

                    }
                    medicine_name_forQTY = name[0];
                    var datalist = document.getElementById('allMedicine');
                    var doses_list = document.getElementById('allDoses');
                    var dose_form_list = document.getElementById('allDoseForm');
                    var fragment = document.createDocumentFragment();
                    datalist.innerHTML = "";
                    doses_list.innerHTML = "";
                    dose_form_list.innerHTML = "";
                    name.forEach(function(allMedicine) {
                        //console.log(allMedicine);
                        var option = document.createElement('option');
                        var text = document.createTextNode(allMedicine);

                        option.value = allMedicine;
                        option.appendChild(text);
                        fragment.appendChild(option);
                    });
                    // Append all of them to DOM.
                    datalist.appendChild(fragment);

                    //doses add...
                    for (var i = 0; i < doses.length; i++) {
                        var optn = doses[i];
                        var el = document.createElement("option");
                        el.textContent = optn;
                        el.value = optn;
                        doses_list.appendChild(el);
                    }

                    //doseForms add...
                    for (var i = 0; i < dosageForm.length; i++) {
                        var optn = dosageForm[i];
                        var el = document.createElement("option");
                        el.textContent = optn;
                        el.value = optn;
                        dose_form_list.appendChild(el);
                    }
                    defineQTY();
                }
            });


            break;
        }
    }


}

function defineQTY() {
    var brand = document.querySelector('#brand').value;
    var dose = $("#allDoses").val();
    console.log(medicine_name_forQTY);
    var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
    $.ajax({
        url: url,
        type: 'POST',
        data: { medicine_name: medicine_name_forQTY, medicine_brand: brand, medicine_dose: dose },
        success: function(data) {
            console.log(data[0].QTY);
            document.getElementById("messageQTY").textContent = "Available medicine QTY:" + data[0].QTY;
        }
    });


}

$(".allDoses option").val(function(idx, val) {
    $(this).siblings('[value="' + val + '"]').remove();
});

$(".allDoseForm option").val(function(idx, val) {
    $(this).siblings('[value="' + val + '"]').remove();
});



// var add = document.getElementById("add");
// add.addEventListener("click", displayDetails);



function displayDetails() {
    var flag = 1;
    var no = row;
    var warning = "";

    if (document.querySelector('#medicine').value == "") {
        flag = 0;
        warning = "medicine name ";
    }

    if (document.querySelector('#brand').value == "") {
        flag = 0;
        warning = warning + ",medicine barand ";
    }
    if (document.getElementById("QTY").value == "") {
        flag = 0;
        warning = warning + ",QTY ";
    }
    if (document.querySelector('#stat').value == "") {
        flag = 0;
        warning = warning + ",frequency type ";
    }
    if ($("#allDoses").val() == null) {
        flag = 0;
        warning = warning + ",dosage ";
    }
    if ($("#allDoseForm").val() == null) {
        flag = 0;
        warning = warning + ",dosage form ";
    }
    if (document.getElementById("frequency").value == null) {
        flag = 0;
        warning = warning + ",frequency ";
    }
    if (flag == 0) {
        var content = "Please enter " + warning + " !!!..";
        open_notification("Warning", content);
        return;
    }

    var orderId = document.getElementById("order-id-hidden").value;
    var name = document.querySelector('#medicine').value;
    var brand = document.querySelector('#brand').value;
    var QTY = document.getElementById("QTY").value;
    const frequency_status = document.querySelector('#stat').value;
    var dose = $("#allDoses").val();
    var doseform = $("#allDoseForm").val();
    var frequency = document.getElementById("frequency").value;

    // console.log(name);
    var url = "http://localhost/mvcfinal/pc_input_validation/inputVaidation";
    var price = 0;
    $.ajax({
        url: url,
        type: 'POST',
        data: { orderId: orderId, name: name, brand: brand, QTY: QTY, status: frequency_status, frequency: frequency, dose: dose, doseform: doseform },
        success: function(data) {
            if (data == "duplicate input") {
                open_notification("Warning", "Sorry...you have entered duplicate input");
            } else if (data == "Not Available") {
                open_notification("Warning", "Sorry...there is no available quantity...");
            } else {
                clear();
                open_notification("Success", "Successfully updated...");
                displayTable(orderId);
            }
        }
    });

}

if (document.getElementById("order-id-hidden")) {
    displayTable($("#order-id-hidden").val());
}

function displayTable(orderId) {
    var totale = 0;

    $("#display tbody").children().remove();
    var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
    $.ajax({
        url: url,
        type: 'POST',
        data: { nonprepaired_orderId: orderId },
        success: function(data) {
            //console.log(data);

            var display = document.getElementById("display");

            display.querySelector('tbody').innerHTML = "";
            for (var x = 0; x < data.length; x++) {
                var rowNum = x + 1;
                var newRow = display.insertRow(rowNum);

                var col1 = newRow.insertCell(0);
                var col2 = newRow.insertCell(1);
                var col3 = newRow.insertCell(2);
                var col4 = newRow.insertCell(3);
                var col5 = newRow.insertCell(4);
                var col6 = newRow.insertCell(5);
                var col7 = newRow.insertCell(6);
                var col8 = newRow.insertCell(7);
                var col9 = newRow.insertCell(8);
                var col10 = newRow.insertCell(9);

                col1.innerHTML = rowNum;
                col2.innerHTML = data[x].medName;
                col3.innerHTML = data[x].medBrand;
                col4.innerHTML = data[x].doseStatus;
                col5.innerHTML = data[x].dose;
                col6.innerHTML = data[x].frequencyStatus;
                col7.innerHTML = data[x].frequency;
                col8.innerHTML = data[x].QTY;
                col9.innerHTML = data[x].price;
                totale = totale + parseFloat(data[x].price);

                col10.innerHTML = "<input id='medId" + rowNum + "' type='hidden' name='medId' value=" + data[x].medicineId + "><button style='width:20px; height:30px; padding-left:20px;' onclick='deleteRow(" + rowNum + ")'><img id='deleteBtn' src='http://localhost/mvcfinal//public/img/delete.png' style='margin-top:-11px; margin-left:-5px;'  ></button>";
                global_final_rowNum = rowNum;
            }



            var total = parseFloat(totale).toFixed(2)
            document.getElementById("totalPrice").innerHTML = "Rs. " + total;



        }
    });
}

function selectedRow(rowNum) {
    var inputId = "medId" + rowNum;
    var orderId = document.getElementById("order-id-hidden").value;
    var id = document.getElementById(inputId).value;
    console.log(orderId);
    console.log(id);
    var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
    $.ajax({
        url: url,
        type: 'POST',
        data: { selected_orderId: orderId, selected_id: id },
        success: function(data) {
            console.log("hello");
            console.log(data);
        }
    });
}

function deleteRow(rowNum) {
    var inputId = "medId" + rowNum;
    var orderId = document.getElementById("order-id-hidden").value;
    var id = document.getElementById(inputId).value;
    console.log(orderId);
    console.log(id);
    var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
    $.ajax({
        url: url,
        type: 'POST',
        data: { delete_orderId: orderId, delete_id: id },
        success: function(data) {
            console.log(data);
            clear();
        }
    });

}



// function fetchNext() {
//     var currentId = document.getElementById("order-id-hidden").value;
//     var url = "http://localhost/mvc/pc_view_drug/show_medicine";
//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: { currentId: currentId },
//         success: function(data) {
//             console.log(data);
//         }
//     });
// }

// var index;
// var display = document.getElementById("display");



function fill_confirm_table() {
    var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
    var orderId = document.getElementById("order-id-hidden").value;
    $.ajax({
        url: url,
        type: 'POST',
        data: { nonprepaired_orderId: orderId },
        success: function(data) {
            var display = document.getElementById("list_of_medicine");
            display.querySelector('tbody').innerHTML = "";
            for (var x = 0; x < data.length; x++) {
                var rowNum = x;
                var newRow = display.insertRow(rowNum);

                var col1 = newRow.insertCell(0);
                var col2 = newRow.insertCell(1);

                col1.innerHTML = rowNum + 1;
                col2.innerHTML = data[x].medBrand + "(" + data[x].medName + ")" + " " + data[x].dose + data[x].doseStatus + " " + "X" + " " + data[x].QTY;

            }
        }
    });
}



// var remove = document.getElementById("remove");
// remove.addEventListener("click", removeRow);

function removeRow() {
    display.deleteRow(index);
    for (var i = 0; i < display.rows.length; i++) {
        display.rows[i + 1].cells[0].innerHTML = i + 1;
    }

    clear();
}


var reset = document.getElementById("reset");
if (reset) {
    reset.addEventListener("click", clear);
}

document.addEventListener("DOMContentLoaded", function(event) {
    var scrollpos = localStorage.getItem('scrollpos');
    if (scrollpos) window.scrollTo(0, scrollpos);
});
// function myFunction() { 
// }

function clear() {

    localStorage.setItem('scrollpos', window.scrollY);
    location.reload();
    // var datalist = document.getElementById('allMedicine');
    // var doses_list = document.getElementById('allDoses');
    // var dose_form_list = document.getElementById('allDoseForm');

    // console.log("hello");
    // document.querySelector('#medicine').value = null;
    // document.querySelector('#brand').value = null;
    // document.querySelector('#allDoseForm').value = null;
    // document.querySelector('#allDoses').value = null;
    // document.getElementById("QTY").value = "";
    // document.querySelector('#stat').value = null;
    // document.getElementById("frequency").value = "";
    // $("#allDoseForm option").remove();
    // $("#allDoses option").remove();

}

function email() {
    var url = "http://localhost/mvcfinal/pc_view_drug/sendEmail";
    var orderId = document.getElementById("order-id-hidden").value;
    var name = document.getElementById("order-name-hidden").value;
    var unAvl = document.getElementById("anAvlMedicine").value;
    var note = document.getElementById("extra").value;
    $.ajax({
        url: url,
        type: 'POST',
        data: { email_orderId: orderId, email_name: name, unAvl: unAvl, note: note },
        success: function(data) {
            console.log(data);
            open_notification("Order Proceed...", data);
        }
    });
    close_confirm();

}

function add_to_complete() {
    var url = "http://localhost/mvcfinal/pc_view_drug/confirm_to_complete";
    var orderId = document.getElementById("orderId").value;
    $.ajax({
        url: url,
        type: 'POST',
        data: { orderId: orderId },
        success: function(data) {
            open_notification("Order Completed...", "Order: " + orderId + " marked as completed..");

        }
    });
}
var pendingOrder_tab = document.getElementById("pendingOrder_tab");
if (pendingOrder_tab) {
    $("#pendingOrder_tab tr").click(function() {
        var selected = $(this).hasClass("rowColor");
        $("#pendingOrder_tab tr").removeClass("rowColor");
        if (!selected)
            $(this).addClass("rowColor");
    });

}

var requested_tab = document.getElementById("requested_tab");
if (requested_tab) {
    $("#requested_tab tr").click(function() {
        var selected = $(this).hasClass("rowColor");
        $("#requested_tab tr").removeClass("rowColor");
        if (!selected)
            $(this).addClass("rowColor");
    });

}

var completed_tab = document.getElementById("completed_tab");
if (completed_tab) {
    $("#completed_tab tr").click(function() {
        var selected = $(this).hasClass("rowColor");
        $("#completed_tab tr").removeClass("rowColor");
        if (!selected)
            $(this).addClass("rowColor");
    });

}


var global_previous_rows = 0;

function rowData_fromReq(orderId) {
    for (var x = 3 + global_previous_rows; x > 3; x--) {
        var rowNum = x;
        document.getElementById("req_data").deleteRow(rowNum);
    }

    var url = "http://localhost/mvcfinal/pc_view_drug/find_data_req_row";
    $.ajax({
        url: url,
        type: 'POST',
        data: { orderId: orderId },
        success: function(data) {

            console.log(data[1].length);
            document.getElementById("req_name").innerHTML = data[0][0].FirstName + " " + data[0][0].LastName;
            document.getElementById("req_tel").innerHTML = data[0][0].PhoneNum;
            if (data[0][0].image_path != null) {
                document.getElementById("orderPrescription").innerHTML = "yes";
            } else {
                document.getElementById("orderPrescription").innerHTML = "no";
            }

            var display = document.getElementById("req_data");
            global_previous_rows = data[1].length;
            for (var x = 0; x < data[1].length; x++) {
                var rowNum = x + 4;
                var newRow = display.insertRow(rowNum);

                var col1 = newRow.insertCell(0);
                var col2 = newRow.insertCell(1);
                var col3 = newRow.insertCell(2);
                var col4 = newRow.insertCell(3);

                col1.innerHTML = rowNum - 3;
                col2.innerHTML = data[1][x].name + "(" + data[1][x].brand + ")";
                col3.innerHTML = data[1][x].qty;
                col4.innerHTML = data[1][x].price;
            }

        }
    });
}

function pen_rowData(orderId) {
    for (var x = 3 + global_previous_rows; x > 3; x--) {
        var rowNum = x;
        document.getElementById("pen_data").deleteRow(rowNum);
    }

    var url = "http://localhost/mvcfinal/pc_view_drug/find_data_pen_row";
    $.ajax({
        url: url,
        type: 'POST',
        data: { orderId: orderId },
        success: function(data) {

            console.log(data[1]);
            document.getElementById("pen_name").innerHTML = data[0][0].FirstName + " " + data[0][0].LastName;
            document.getElementById("pen_tel").innerHTML = data[0][0].PhoneNum;
            if (data[0][0].image_path == null) {
                document.getElementById("orderPrescription").innerHTML = "yes";
            } else {
                document.getElementById("orderPrescription").innerHTML = "no";
            }

            var display = document.getElementById("pen_data");
            global_previous_rows = data[1].length;
            for (var x = 0; x < data[1].length; x++) {
                var rowNum = x + 4;
                var newRow = display.insertRow(rowNum);

                var col1 = newRow.insertCell(0);
                var col2 = newRow.insertCell(1);
                var col3 = newRow.insertCell(2);
                var col4 = newRow.insertCell(3);

                col1.innerHTML = rowNum - 3;
                col2.innerHTML = data[1][x].medName + "(" + data[1][x].medBrand + ")";
                col3.innerHTML = "X " + data[1][x].QTY;
                col4.innerHTML = data[1][x].price;
            }

        }
    });
}

// function process_rowData() {
//     var url = "http://localhost/mvcfinal/pc_view_drug/show_medicine";
//     var orderId = document.getElementById("orderId2").value;
//     $.ajax({
//         url: url,
//         type: 'POST',
//         data: { process_orderId: orderId },
//         success: function(data) {
//         }
//     });
// }

// function generate() {
//     var doc = new jsPDF('p', 'pt', 'letter');
//     var name = document.getElementById("order-name-hidden").value;
//     var Id = document.getElementById("order-id-hidden").value;
//     var notAvl = document.getElementById("anAvlMedicine").value;
//     var rows = global_final_rowNum + 2;
//     //console.log(rows);
//     var htmlstring = '';
//     var tempVarToCheckPageHeight = 0;
//     var pageHeight = 0;
//     pageHeight = doc.internal.pageSize.height;
//     specialElementHandlers = {
//         // element with id of "bypass" - jQuery style selector  
//         '#bypassme': function(element, renderer) {
//             // true = "handled elsewhere, bypass text extraction"  
//             return true
//         }
//     };
//     margins = {
//         top: 150,
//         bottom: 60,
//         left: 40,
//         right: 40,
//         width: 600
//     };
//     var y = 20;
//     doc.setLineWidth(2);

//     doc.setFont("helvetica");
//     doc.setFontType("bold");
//     doc.text(230, y = y + 20, "Well Care Pharmacy");


//     doc.setFont("helvetica");
//     doc.setFontSize(11);
//     doc.setFontType("normal");
//     doc.text(275, y = y + 21, "Order details");

//     doc.setFont("helvetica");
//     doc.setFontSize(11);
//     doc.setFontType("bold");
//     doc.text(10, y = y + 21, "Customer Name: " + name);

//     doc.setFont("helvetica");
//     doc.setFontSize(11);
//     doc.setFontType("bold");
//     doc.text(10, y = y + 21, "Order No: " + Id);

//     doc.autoTable({
//         html: '#display',
//         startY: 160,
//         theme: 'grid',
//         columnStyles: {
//             0: {
//                 cellWidth: 180,
//             },
//             1: {
//                 cellWidth: 180,
//             },
//             2: {
//                 cellWidth: 180,
//             }
//         },
//         styles: {
//             minCellHeight: 20
//         }
//     })

//     if (notAvl !== "") {
//         doc.setFont("helvetica");
//         doc.setFontSize(11);
//         doc.setFontType("bold");
//         doc.text(10, 160 + (rows * 20), "Non Available:");

//         doc.setFont("helvetica");
//         doc.setFontSize(11);
//         doc.setFontType("normal");
//         doc.text(15, 160 + ((rows * 20) + 10), notAvl);

//     }

//     doc.setFont("helvetica");
//     doc.setFontSize(11);
//     doc.setFontType("italic");
//     doc.text(50, 160 + ((rows * 20) + 100), "Complete and send your payment recipt within two days");

//     var pdf = btoa(doc.output());
//     var url = "http://localhost/mvcfinal/pc_view_drug/sendEmail";
//     var file_name = "WellCare" + Id;
//     //var file_name = 'hello world';
//     $.ajax({
//         method: "POST",
//         url: "upload.php",
//         data: { data: pdf, filename: file_name },
//     }).done(function(data) {
//         //   alert(data);
//         console.log(data);
//     });

//     // doc.save("WellCare" + Id + ".pdf");
//     // const pdf = new File([doc.output("blob")], "WellCare" + Id + ".pdf", { type: "pdf" }),
//     //     data = new FormData();

//     // data.append("file", pdf);

//     // axios
//     //     .post("/public/img", data)
//     //     .then(res => console.log(res))
//     //     .catch(err => console.log(err));
//     close_confirm();
// }