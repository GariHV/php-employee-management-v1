window.addEventListener('DOMContentLoaded', async () => {
    const employees = await getEmployees();
    createGrid(employees);
})

async function getEmployees(){
    const response = await fetch(`./src/library/employeeController.php?getEmployees`);
    const data = await response.json();
    return data;
    }

function createGrid(employees){
    $('#gridTable').jsGrid({

        height: "auto",
        width: "100%",

        filtering: true,
        editing: false,
        inserting: true,
        sorting: true,
        paging: true,
        pageSize: 15,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete data?",

        data: employees,

        rowClick: function displayEdit(args){
            /* ADD MODAL TOGGLE */
            document.getElementById('nav-dashboard').classList.remove('active');
            document.getElementById('nav-employee').classList.add('active');
            document.getElementById('main-dashboard').classList.add('hide-dashboard');
            /* añadir funcion para obtener info */
            document.getElementById('editForm').classList.remove('hide-edit-form');
        },



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


})
}
