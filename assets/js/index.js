
window.addEventListener('DOMContentLoaded', async () => {
    const employees = await getEmployees();
    createGrid(employees);
})

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
            { name: "name", type: "text", title: "Name", validate: "required"},
            { name: "email", type: "text", title: "Email"},
            { name: "age", type: "number", title: "Age", validate: {validator: "range", param: [18,80]}},
            { name: "streetAddress", type: "number", title: "Street No.", validate: "required"},
            { name: "city", type: "text", title: "City", validate: "required"},
            { name: "state", type: "text", title: "State", validate: "required" },
            { name: "postalCode", type: "number", title: "Postal Code", validate: "required"},
            { name: "phoneNumber", type: "number", title: "Phone Number", validate: "required"},
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

<<<<<<< HEAD
=======
const OkMessage = "Todo Correcto"
sendMessageOk(OkMessage)
function sendMessageOk(text){
    let messageOk = `<div class="alert alert-success msginfo" role="alert">${text}</div>`
    document.querySelector(".container").insertAdjacentHTML("beforeend", messageOk)
    setTimeout(function(){
        document.querySelector(".msginfo").remove()
        }
        ,3000)
}

const errorMessage = "Error"
sendMessageError(errorMessage)
function sendMessageError(text){
    let messageError = `<div class='alert alert-danger msginfo' role='alert'>${text}</div>`
    document.querySelector(".container").insertAdjacentHTML("beforeend", messageError)
    setTimeout(function(){
        document.querySelector(".msginfo").remove()
        }
        ,3000)
}
>>>>>>> dc9ba421d032a73a7647da3ec8f099b3e6188379
