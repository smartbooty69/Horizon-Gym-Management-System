document.querySelectorAll('.sidebar-submenu').forEach(e => {
    e.querySelector('.sidebar-menu-dropdown').onclick = (event) => {
        event.preventDefault()
        e.querySelector('.sidebar-menu-dropdown .dropdown-icon').classList.toggle('active')

        let dropdown_content = e.querySelector('.sidebar-menu-dropdown-content')
        let dropdown_content_lis = dropdown_content.querySelectorAll('li')

        let active_height = dropdown_content_lis[0].clientHeight * dropdown_content_lis.length

        dropdown_content.classList.toggle('active')

        dropdown_content.style.height = dropdown_content.classList.contains('active') ? active_height + 'px' : '0'
    }
})



// Get all the <a> elements within the sidebar-menu
const sidebarLinks = document.querySelectorAll('.sidebar-menu a');

// Loop through each <a> element and attach an event listener
// JavaScript (script.js)

// Function to handle sidebar menu item click
function handleSidebarItemClick(event) {
  // Prevent default link behavior
  event.preventDefault();

  // Get the text content of the clicked menu item
  const menuItemText = this.querySelector('span').textContent;

  // Set the main title to the text content of the clicked menu item
  document.querySelector('.main-title').textContent = menuItemText;

  // Get the corresponding section ID from the href attribute
  const sectionId = this.getAttribute('href').substr(1);
  
  // Remove the .hidden class from the corresponding section and hide other sections
  const allSections = document.querySelectorAll('section');
  allSections.forEach(sec => {
      if (sec.id === sectionId) {
          sec.classList.remove('hidden');
      } else {
          sec.classList.add('hidden');
      }
  });

  // Remove the .active class from all sidebar menu items
  const sidebarItems = document.querySelectorAll('.sidebar-menu a');
  sidebarItems.forEach(item => {
      item.classList.remove('active');
  });

  // Add the .active class to the clicked sidebar menu item
  this.classList.add('active');
}

// Get all sidebar menu items
const sidebarItems = document.querySelectorAll('.sidebar-menu a');

// Attach click event listeners to each sidebar menu item
sidebarItems.forEach(item => {
  item.addEventListener('click', handleSidebarItemClick);
});






// DARK MODE TOGGLE
let darkmode_toggle = document.querySelector('#darkmode-toggle')

darkmode_toggle.onclick = (e) => {
    e.preventDefault()
    document.querySelector('body').classList.toggle('dark')
    darkmode_toggle.querySelector('.darkmode-switch').classList.toggle('active')
    setDarkChart(document.querySelector('body').classList.contains('dark'))
}

let overlay = document.querySelector('.overlay')
let sidebar = document.querySelector('.sidebar')

document.querySelector('#mobile-toggle').onclick = () => {
    sidebar.classList.toggle('active')
    overlay.classList.toggle('active')
}

document.querySelector('#sidebar-close').onclick = () => {
    sidebar.classList.toggle('active')
    overlay.classList.toggle('active')
}

// Get the logout button element
const logoutButton = document.getElementById('logout');

// Add event listener to the logout button
logoutButton.addEventListener('click', function(event) {
    // Prevent the default behavior of the link
    event.preventDefault();

    // Perform logout actions here (e.g., clearing session storage, revoking tokens)

    // Redirect the user to index.html
    window.location.href = "../index.html";
});





// Get the first modal
var addMembersModal = document.getElementById("add-members");

// Get the button that opens the first modal
var addMembersBtn = document.getElementById("myBtn");

// Get the <span> element that closes the first modal
var addMembersCloseSpan = addMembersModal.getElementsByClassName("close")[0];

// When the user clicks on the button, open the first modal
addMembersBtn.onclick = function() {
  addMembersModal.style.display = "block";
}

// When the user clicks on <span> (x) in the first modal, close it
addMembersCloseSpan.onclick = function() {
  addMembersModal.style.display = "none";
}

// When the user clicks anywhere outside of the first modal, close it
window.onclick = function(event) {
  if (event.target == addMembersModal) {
    addMembersModal.style.display = "none";
  }
}





// Get the second modal
var fullMemberDetailModal = document.getElementById("full-member-detail");

// Get the button that opens the second modal
var showDataBtn = document.getElementById("show-data-button");

// Get the <span> element that closes the second modal
var fullMemberDetailCloseSpan = fullMemberDetailModal.getElementsByClassName("close")[0];

// When the user clicks on the button, open the second modal
showDataBtn.onclick = function() {
  fullMemberDetailModal.style.display = "block";
}

// When the user clicks on <span> (x) in the second modal, close it
fullMemberDetailCloseSpan.onclick = function() {
  fullMemberDetailModal.style.display = "none";
}

// When the user clicks anywhere outside of the second modal, close it
window.onclick = function(event) {
  if (event.target == fullMemberDetailModal) {
    fullMemberDetailModal.style.display = "none";
  }
}


// Get the renew modal
var renewpackageDetailModal = document.getElementById("renew-package");

// Get the button that opens the second modal
var renewBtn = document.getElementById("renew-package-button");

// Get the <span> element that closes the second modal
var renewpackageDetailCloseSpan = renewpackageDetailModal.getElementsByClassName("close")[0];

// When the user clicks on the button, open the second modal
renewBtn.onclick = function() {
  renewpackageDetailModal.style.display = "block";
}

// When the user clicks on <span> (x) in the second modal, close it
renewpackageDetailCloseSpan.onclick = function() {
  renewpackageDetailModal.style.display = "none";
}

// When the user clicks anywhere outside of the second modal, close it
window.onclick = function(event) {
  if (event.target == renewpackageDetailModal) {
    renewpackageDetailModal.style.display = "none";
  }
}


// Function to submit the add member form
function handleSubmit(event) {
    // Prevent the default form submission behavior
    event.preventDefault();
  
    // Get the form data
    const formData = new FormData(event.target);
  
    // You can access form data using the FormData API like formData.get('fieldName')
    const memberName = formData.get('memberName');
    const joinDate = formData.get('joinDate');
    const membershipPackage = formData.get('membershipPackage');
    const memberPhone = formData.get('memberPhone');
    const memberEmail = formData.get('memberEmail');
    const memberAge = formData.get('memberAge');
    const memberAddress = formData.get('memberAddress');
    const memberGender = formData.get('memberGender');
  
    // Now you can use these variables (memberId, memberName, joinDate, membershipPackage)
    // in your code. For example, you might want to add the new member to a table:
    addMember(memberId, memberName, joinDate, membershipPackage, memberPhone, memberEmail, memberAge, memberAddress, memberGender);
  
    // Close the modal
    const modal = document.getElementById('myModal');
    modal.style.display = 'none';
}


// // Wait for the DOM content to be fully loaded
// document.addEventListener("DOMContentLoaded", function() {
//   // Get the plus card element
//   var plusCard = document.getElementById('plus-card');

//   // Function to create a new card with form and buttons
//   function createCardWithFormAndButtons() {
//     // Create elements for the new card
//     var card = document.createElement('div');
//     card.classList.add('card', 'package-card'); // Add the package-card class here
//     var cardBody = document.createElement('div');
//     cardBody.classList.add('card-body');
//     var form = document.createElement('form');
//     var buttonContainer = document.createElement('div');
//     buttonContainer.setAttribute('class', 'card-btn-container');

//     // Create form elements
//     var packageNameInput = document.createElement('input');
//     packageNameInput.setAttribute('type', 'text');
//     packageNameInput.setAttribute('placeholder', 'Package Name');
//     var packageDurationSelect = document.createElement('select'); // Changed to select element
//     var durations = ["1 Month", "3 Months", "6 Months", "12 Months"];
//     for (var i = 0; i < durations.length; i++) {
//       var option = document.createElement('option');
//       option.value = durations[i];
//       option.text = durations[i];
//       packageDurationSelect.appendChild(option);
//     }
//     var packagePriceInput = document.createElement('input');
//     packagePriceInput.setAttribute('type', 'text');
//     packagePriceInput.setAttribute('placeholder', 'Package Price');
//     var packageDescriptionInput = document.createElement('textarea');
//     packageDescriptionInput.setAttribute('placeholder', 'Package Description');

//     // Create buttons
//     var addButton = document.createElement('button');
//     addButton.setAttribute('class', 'btn btn-outline');
//     addButton.setAttribute('id', 'card-add-btn');
//     addButton.textContent = 'Add';
    
//     var deleteButton = document.createElement('button');
//     deleteButton.setAttribute('class', 'btn btn-outline');
//     deleteButton.setAttribute('id', 'card-delete-btn');
//     deleteButton.textContent = 'Delete';

//     // Append form elements to form
//     form.appendChild(packageNameInput);
//     form.appendChild(packageDurationSelect);
//     form.appendChild(packagePriceInput);
//     form.appendChild(packageDescriptionInput);

//     // Append buttons to form
//     buttonContainer.appendChild(addButton);
//     buttonContainer.appendChild(deleteButton);

//     // Append form to card body
//     cardBody.appendChild(form);
//     cardBody.appendChild(buttonContainer);

//     // Append card body to card
//     card.appendChild(cardBody);

//     // Insert the new card before the plus card
//     plusCard.parentElement.insertBefore(card, plusCard);

//     // Add click event listener to the "Add" button to handle adding package to dropdown
//     addButton.addEventListener('click', function() {
//       // Get the entered data
//       var packageName = packageNameInput.value;
//       var packageDuration = packageDurationSelect.value;
//       var packagePrice = packagePriceInput.value;
//       var packageDescription = packageDescriptionInput.value;
      
//       // Create a new element to display the entered data in a table
//       var newDataDisplay = document.createElement('table');
//       newDataDisplay.setAttribute('class', 'package-data-display');

//       // Create table rows and cells for each package detail
//       var row1 = newDataDisplay.insertRow();
//       var cell1 = row1.insertCell();
//       var cell2 = row1.insertCell();
//       cell1.innerHTML = "<strong>Package Name:</strong>";
//       cell2.textContent = packageName;

//       var row2 = newDataDisplay.insertRow();
//       var cell3 = row2.insertCell();
//       var cell4 = row2.insertCell();
//       cell3.innerHTML = "<strong>Duration:</strong>";
//       cell4.textContent = packageDuration;

//       var row3 = newDataDisplay.insertRow();
//       var cell5 = row3.insertCell();
//       var cell6 = row3.insertCell();
//       cell5.innerHTML = "<strong>Price:</strong>";
//       cell6.textContent = packagePrice;

//       var row4 = newDataDisplay.insertRow();
//       var cell7 = row4.insertCell();
//       var cell8 = row4.insertCell();
//       cell7.innerHTML = "<strong>Description:</strong>";
//       cell8.textContent = packageDescription;

//       // Replace the form with the displayed data
//       cardBody.replaceChild(newDataDisplay, form);

//       // Remove the "Add" button
//       addButton.remove();
//     });

//     deleteButton.addEventListener('click', function() {
//       card.remove();
//     });
//   }

//   // Add click event listener to the plus card
//   plusCard.addEventListener('click', function() {
//     // Create a new card with form and buttons
//     createCardWithFormAndButtons();
//   });
// });


document.getElementById('exp-btn').addEventListener('click', function() {
  var sendButton = document.createElement('div');
  sendButton.innerHTML = `
      <div class="send-container">
          <button class="send">
              <div class="wrapper">
                  <i class="fa-regular fa-paper-plane"></i>
              </div>
              <span>Send</span>
          </button>
      </div>
  `;

  var displayTable = document.getElementById('display-table');
  displayTable.parentNode.insertBefore(sendButton, displayTable.nextSibling);

  // Remove the "Add Member" button
  var addMemberButton = document.getElementById('myBtn');
  addMemberButton.parentNode.removeChild(addMemberButton);

  // Disable the "Expiring" button
  this.disabled = true;
  document.getElementById('all-btn').disabled = false;
});

document.getElementById('all-btn').addEventListener('click', function() {
  var sendButton = document.querySelector('.send-container');
  var addMemberButton = document.getElementById('myBtn');

  // If the "Send" button exists, remove it
  if (sendButton) {
      sendButton.parentNode.removeChild(sendButton);
  }

  // If the "Add Member" button doesn't exist, create it
  if (!addMemberButton) {
      addMemberButton = document.createElement('button');
      addMemberButton.setAttribute('class', 'btn btn-outline');
      addMemberButton.setAttribute('id', 'myBtn');
      addMemberButton.textContent = 'Add Member';

      var boxHeaderButtonDiv = document.querySelector('.box-header-button');
      boxHeaderButtonDiv.appendChild(addMemberButton);
  }

  // Enable the "Expiring" button
  document.getElementById('exp-btn').disabled = false;
  this.disabled = true;

  // Get the first modal
  var addMembersModal = document.getElementById("add-members");

  // Get the button that opens the first modal
  var addMembersBtn = document.getElementById("myBtn");

  // Get the <span> element that closes the first modal
  var addMembersCloseSpan = addMembersModal.getElementsByClassName("close")[0];

  // When the user clicks on the button, open the first modal
  addMembersBtn.onclick = function() {
    addMembersModal.style.display = "block";
  }

  // When the user clicks on <span> (x) in the first modal, close it
  addMembersCloseSpan.onclick = function() {
    addMembersModal.style.display = "none";
  }

  // When the user clicks anywhere outside of the first modal, close it
  window.onclick = function(event) {
    if (event.target == addMembersModal) {
      addMembersModal.style.display = "none";
    }
  }

});





