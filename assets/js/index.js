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
    $("#gridTable").jsGrid({
        height: "90%",
        width: "100%",
        filtering: true,
        editing: true,
        inserting: true,
        sorting: true,
        paging: true,
        autoload: true,
        pageSize: 15,
        pageButtonCount: 5,
        deleteConfirm: "Do you really want to delete the client?",

        data: employees,


        fields: [
            { name: "name", type: "text", title: "Name"},
            { name: "email", type: "text", title: "Email"},
            { name: "age", type: "number", title: "Age"},
            { name: "streetAddress", type: "number", title: "Street No." },
            { name: "city", type: "text", title: "City" },
            { name: "state", type: "text", title: "State" },
            { name: "postalCode", type: "number", title: "Postal Code" },
            { name: "phoneNumber", type: "number", title: "Phone Number" },
            { type: "control", rowClick: true, modeSwitchButton: true, editButton: true}
            ],

        rowClick: function displayEdit(args){
           /* ADD MODAL TOGGLE */
            window.location.assign('./employee.php?id='+args.item.id)
        },

        controller: {
        insertItem: async function name(item){
            var formData = new FormData();
            formData.append('id', item.id);
            formData.append('name', item.name);
            formData.append('lastName', item.lastName);
            formData.append('email', item.email);
            formData.append('age', item.age);
            formData.append('gender', item.gender);
            formData.append('city', item.city);
            formData.append('state', item.state);
            formData.append('streetAddress', item.streetAddress);
            formData.append('phoneNumber', item.phoneNumber);
            formData.append('postalCode', item.postalCode);
            console.log(item)
            console.log(formData)
            
            const response = await fetch('./library/employeeController.php?add', {
                method: 'POST', body : formData,
            // headers: { 'Content-Type': 'aplication/json'}
        });
        console.log(formData["name"])
            // const data = await response.json();
            // return data;
        },

        deleteItem: function name(item){},

        updateItem: async function name (item){
            var formData = new FormData();
            formData.append('id', item.id);
            formData.append('name', item.name);
            formData.append('lastName', item.lastName);
            formData.append('email', item.email);
            formData.append('age', item.age);
            formData.append('gender', item.gender);
            formData.append('city', item.city);
            formData.append('state', item.state);
            formData.append('streetAddress', item.streetAddress);
            formData.append('phoneNumber', item.phoneNumber);
            formData.append('postalCode', item.postalCode);
            const response = await fetch('./library/employeeController.php?edit='+item.id,
            { method: 'POST', body :formData});
        },

        },
    });
}
