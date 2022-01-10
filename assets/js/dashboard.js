    window.addEventListener('DOMContentLoaded', async () => {
        await   getEmployees();
                // createGrid();
    })

    function createGrid(){

    $('#gridTable').jsGrid({

        height: "auto",
        width: "100%",

        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        pageSize: 15,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete data?",


        fields: [
            { name: "name", type: "text", title: "Name"},
            { name: "email", type: "text", title: "Email"},
            { name: "age", type: "number", title: "Age"},
            { name: "streetAddress", type: "number", title: "Street No." },
            { name: "city", type: "text", title: "City" },
            { name: "state", type: "text", title: "State" },
            { name: "postalCode", type: "number", title: "Postal Code" },
            { name: "phoneNumber", type: "number", title: "Phone Number" },
            { type: "control", modeSwitchButton: true, editButton: false}
            ],



fetch("./employees.json")
    .then(result=>.json())
    .then(console.log);

})



//         controller: {
//             loadData: function(filter){
//             return $.ajax({
//             type: "GET",
//             url: "./src/library/employeeController.php?getEmployees",
//             data: filter
//             });
//         },

//     insertItem: function(item){
//         return $.ajax({
//             type: "POST",
//             url: "./",
//             data: item
//         });
//     },
//     updateItem: function(item){
//         return $.ajax({
//             type: "PUT",
//             url: "./",
//             data: item
//         });
//     },
//     deleteItem: function(item){
//         return $.ajax({
//             type: "DELETE",
//             url: "./",
//             data: item
//         });
//     },
// },
// });
// }

async function getEmployees(){
    const response = await fetch(`./src/library/employeeController.php?getEmployees`);
    const data = await response.json();
    return data;
    }


