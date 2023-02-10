document.getElementById("createEventBtn").addEventListener("click", function() {
  document.getElementById("eventForm").style.display = "block";
});


const addServiceButton = document.getElementById("add-service-button");
const servicesList = document.getElementById("services-list");

addServiceButton.addEventListener("click", function() {
  const newService = prompt("Enter the name of the service:");
  if (newService) {
    const newServiceItem = document.createElement("li");
    newServiceItem.textContent = newService;
    servicesList.appendChild(newServiceItem);
  }
}
);
