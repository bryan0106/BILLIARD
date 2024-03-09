  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
 
 
 
<script>
// Check if the cookie exists
window.onload = function() {
    var sect = document.getElementById("portfolio");
    var headerSection = document.getElementById("headerSection");
    var hideButton = document.getElementById("hideButton");

    // Check if the cookie exists and if its value is "hideHeader=true"
    if (document.cookie.includes("hideHeader=true")) {
        // Hide the header if the cookie exists
        headerSection.style.display = "none";
        sect.style.display = 'none' ? 'block' : 'none';
    } else {
        // Show the header and add an event listener to the button
        headerSection.style.display = "block";
        hideButton.addEventListener("click", function() {
            // Set a cookie to hide the header
            var date = new Date();
            date.setDate(date.getDate() + 1); // Set expiration date to tomorrow
            var expires = "expires=" + date.toUTCString();
            document.cookie = "hideHeader=true; " + expires + "; path=/";
            // Hide the header
            headerSection.style.display = "none";
        });
    }
};
<!-- * * * * * * * * * * * *calss* * * * * * * * * * * * * * * * * * * * * * * * * * * *-->




<!-- * * * * * * * * * * * * class* * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
   let timerInterval;
let startTime;

function updateTimer() {
    const now = new Date().getTime();
    const elapsedTime = now - startTime;

    const hours = Math.floor(elapsedTime / (1000 * 60 * 60));
    const minutes = Math.floor((elapsedTime % (1000 * 60 * 60)) / (1000 * 60));
    const seconds = Math.floor((elapsedTime % (1000 * 60)) / 1000);

    const formattedTime = pad(hours) + ":" + pad(minutes) + ":" + pad(seconds);

    document.getElementById('timer').innerHTML = formattedTime;
    document.getElementById('timerB').innerHTML = formattedTime;
}

function startTimer() {
    startTime = new Date().getTime();
    timerInterval = setInterval(updateTimer, 1000);


     // Retrieve data from the clicked button
     var name = event.target.getAttribute("data-name");
        var price = event.target.getAttribute("data-price");

        // Set the data in the modal
        document.getElementById("modalName").innerText = name;
        document.getElementById("modalPrice").innerText = price;
        document.getElementById("modalNameB").innerText = name;
        document.getElementById("modalPriceB").innerText = price;
}




function insertDataIntoDatabase(date, game, tong, name, time,duration) {
    // Make an AJAX request to insert.php passing the data
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "insert.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Display the response from the server
            alert(xhr.responseText);
        }
    };
    // Construct the data to be sent in the format "key1=value1&key2=value2..."
    var data = "date=" + encodeURIComponent(date) + "&game=" + encodeURIComponent(game) + "&tong=" + encodeURIComponent(tong) + "&name=" + encodeURIComponent(name) + "&time=" + encodeURIComponent(time)+ "&duration=" + encodeURIComponent(duration);
    xhr.send(data);
}

function insertPWO(date, time, name, tong, bet, price, result) {
    // Make an AJAX request to insertpwo.php passing the data
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "insertpwo.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4) {
            if (xhr.status == 200) {
                // Display the response from the server
                alert(xhr.responseText);
            } else {
                // Handle error, if any
                console.error("Error occurred during the request:", xhr.status);
            }
        }
    };
    // Construct the data to be sent in the format "key1=value1&key2=value2..."
    var data = "date=" + encodeURIComponent(date) + "&time=" + encodeURIComponent(time) + "&name=" + encodeURIComponent(name) + "&tong=" + encodeURIComponent(tong) + "&bet=" + encodeURIComponent(bet) + "&price=" + encodeURIComponent(price) + "&result=" + encodeURIComponent(result);
    xhr.send(data);
}






function stopTimer() {
    // Prompt the user with a confirmation dialog
    var confirmSave = confirm("Do you want to save the data?");
    
    // If the user confirms, proceed with saving the data
    if (confirmSave) {
        // Get the current date
        var currentDate = new Date();
        var month = currentDate.getMonth() + 1; // Months are zero based
        var day = currentDate.getDate();
        var year = currentDate.getFullYear();
        var date = month + "/" + day + "/" + year; // Format as "mm/dd/yyyy"
        
        // Get current time
        var currentTime = new Date();
        var hours = currentTime.getHours();
        var minutes = currentTime.getMinutes();
        var seconds = currentTime.getSeconds();
        // Format the time as "hh:mm:ss"
        var duration = hours + ":" + minutes + ":" + seconds;

        // Get values from the modal and other elements
        var game = document.getElementById("modalName").innerText;
        var tong = document.getElementById("modalPrice").innerText;
        var name = document.getElementById("name").value;
        var time = document.getElementById("timer").innerText;

        // Do something with the data (e.g., insert into database)
        insertDataIntoDatabase(date, game, tong, name, time, duration);

        // Clear the timer interval
        clearInterval(timerInterval);
    } else {
        // If the user cancels, do nothing
        console.log("Data not saved.");
    }

    location.reload();
}


function startStopTimer() {
    
     // Get the current date
     var currentDate = new Date();
    var month = currentDate.getMonth() + 1; // Months are zero based
    var day = currentDate.getDate();
    var year = currentDate.getFullYear();
    var date = month + "/" + day + "/" + year; // Format as "mm/dd/yyyy"
    var currentTime = new Date();
var hours = currentTime.getHours();
var minutes = currentTime.getMinutes();
var seconds = currentTime.getSeconds();

// Format the time as "hh:mm:ss"
var duration = hours + ":" + minutes + ":" + seconds;




    // Get values from the modal and other elements
    var game = document.getElementById("modalName").innerText;
    var tong = document.getElementById("modalPrice").innerText;
    var name = document.getElementById("name").value;
    var time = document.getElementById("timer").innerText;

    // Do something with the data (e.g., insert into database)
    insertDataIntoDatabase(date, game, tong, name, time,duration);
 
    



    
    
    
    
    
    clearInterval(timerInterval);
    startTime = new Date().getTime();
    timerInterval = setInterval(updateTimer, 1000);








        // Disable the button
        document.getElementById("clickButton").disabled = true;

        // Enable the button after 3 seconds
        setTimeout(function() {
            document.getElementById("clickButton").disabled = false;
        }, 3000); // 3000 milliseconds = 3 seconds

}



function getCurrentDateTime() {
    var currentDate = new Date();
    var month = currentDate.getMonth() + 1; // Months are zero based
    var day = currentDate.getDate();
    var year = currentDate.getFullYear();
    var date = month + "/" + day + "/" + year; // Format as "mm/dd/yyyy"

    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var time = hours + ":" + minutes + ":" + seconds; // Format as "hh:mm:ss"

    return { date: date, time: time };
}

function disableButton(buttonId, duration) {
    document.getElementById(buttonId).disabled = true;
    setTimeout(function() {
        document.getElementById(buttonId).disabled = false;
    }, duration);
}




function startStopTimerB() {

    var currentDate = new Date();
    var month = currentDate.getMonth() + 1; // Months are zero based
    var day = currentDate.getDate();
    var year = currentDate.getFullYear();
    var date = month + "/" + day + "/" + year; // Format as "mm/dd/yyyy"

    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var time = hours + ":" + minutes + ":" + seconds;
   // Get values from the modal and other elements
   var game = document.getElementById("modalNameB").innerText;
   var tong = document.getElementById("modalPriceB").innerText;
   var name = "PWO";
   var duration = document.getElementById("timer").innerText;

   if (document.getElementById("playWithOwner").checked) {
    var name = document.getElementById("modalNameB").innerText;
   var tong = document.getElementById("modalPriceB").innerText;
   var bet = document.getElementById("bet").value;
   var price = document.getElementById("prize").value;
   var result = document.getElementById("resultLabel").textContent;;

    insertPWO(date, time, name, tong, bet, price,result, true); // Pass true to indicate playing with owner
} else {
    var name = "";
    insertPWO(date, time, name, tong, bet, price,result, false); // Pass true to indicate playing with owner
 }
   insertDataIntoDatabase(date, game, tong, name, time,duration);
   disableButton("clickButtonB", 3000); 
}

function stopTimerB() {

    var confirmSave = confirm("Do you want to save the data?");
    if (confirmSave) {
        var currentDate = new Date();
    var month = currentDate.getMonth() + 1; // Months are zero based
    var day = currentDate.getDate();
    var year = currentDate.getFullYear();
    var date = month + "/" + day + "/" + year; // Format as "mm/dd/yyyy"

    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    var seconds = currentTime.getSeconds();
    var time = hours + ":" + minutes + ":" + seconds;
   // Get values from the modal and other elements
   var game = document.getElementById("modalNameB").innerText;
   var tong = document.getElementById("modalPriceB").innerText;
   var name = "PWO";
   var duration = document.getElementById("timer").innerText;

   if (document.getElementById("playWithOwner").checked) {
    var name = document.getElementById("modalNameB").innerText;
   var tong = document.getElementById("modalPriceB").innerText;
   var bet = document.getElementById("bet").value;
   var price = document.getElementById("prize").value;
   var result = document.getElementById("resultLabel").textContent;;

    insertPWO(date, time, name, tong, bet, price,result); // Pass true to indicate playing with owner
} else {
  }
   insertDataIntoDatabase(date, game, tong, name, time,duration);
        // Clear the timer interval
        clearInterval(timerInterval);
    } else {
        // If the user cancels, do nothing
        console.log("Data not saved.");
    }

    location.reload();
}











function resetTimer() {
    clearInterval(timerInterval);
    document.getElementById('timer').innerHTML = '00:00:00';
}

function pad(num) {
    return num.toString().padStart(2, '0');
}

<!-- * * * * * * * * * * * * * * * COmputation counting* * * * * * * * * * * * * * * * * * * * * * * * *-->
const button = document.getElementById('clickButton');
const counter = document.getElementById('counter');
const totalc = document.getElementById('totalc');

let count = 1;

button.addEventListener('click', () => {
    count++;
    counter.textContent = count;
    totalc.textContent = count * 5;
});


<!-- * * * * * * * * * * * * * * * * hiderrr* * * * * * * * * * * * * * * * * * * * * * * *-->
const hideButton = document.getElementById('hideButton');

// Get the header element
const header = document.querySelector('header');
const contentSection = document.getElementById('portfolio');

// Add event listener for button click
hideButton.addEventListener('click', () => {
  
    header.style.display = header.style.display === 'none' ? 'block' : 'none';
    contentSection.style.display = contentSection.style.display === 'none' ? 'block' : 'none';


});


function toggleInputs() {
    var inputContainer = document.getElementById("inputContainer");
    var buttonContainer = document.getElementById("buttonContainer");
    var checkBox = document.getElementById("playWithOwner");
    if (checkBox.checked) {
        inputContainer.style.display = "block";
        buttonContainer.style.display = "block";
    } else {
        inputContainer.style.display = "none";
        buttonContainer.style.display = "none";
    }
}

function btnwin() {
    var resultLabel = document.getElementById("resultLabel");
    resultLabel.textContent = "WIN";
}
function btnloss() {
    var resultLabel = document.getElementById("resultLabel");
    resultLabel.textContent = "LOSS";
}



    </script>