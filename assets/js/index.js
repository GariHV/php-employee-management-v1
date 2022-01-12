window.addEventListener('DOMContentLoaded', async () => {
    const employees = await getEmployees();
    createGrid(employees);
})
console.log('a')
async function getEmployees(){
    const response = await fetch(`./library/employeeController.php?getEmployees`);
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

        },

controller: {
    insertItem: async function name(item){
        const response = await fetch(k, {
            method: 'POST', body : JSON.stringify(item),
            headers: { 'Content-Type': 'aplication/json'}});
            const data = await response.json();
            return data;
    },

    deleteItem: function name(item){},

    updateItem: async function name (item){
        console.log(item)

                const response = await fetch(k, {
            method: 'POST', body : JSON.stringify(item),
            headers: { 'Content-Type': 'aplication/json'}});
            const data = await response.json();
            return data;
    },
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
            { type: "control", modeSwitchButton: true, editButton: true}
            ],


})
}
