import { initializeApp } from 'https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js';
import { getDatabase, ref, get, set } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-database.js";
const readdataconstantlybutton = document.getElementById('readdataconstantly');

const firebaseConfig = {
    apiKey: "AIzaSyAOuqOcZG_5Hc_61_hQC9Q9hkXALNJ26q0",
    authDomain: "fir-project-95d84.firebaseapp.com",
    databaseURL: "https://fir-project-95d84-default-rtdb.firebaseio.com",
    projectId: "fir-project-95d84",
    storageBucket: "fir-project-95d84.firebasestorage.app",
    messagingSenderId: "646735705925",
    appId: "1:646735705925:web:4f2548f764fbd08831b02c",
    measurementId: "G-H9Z6XBXY2L"
}
// Initialize Firebase
const app = initializeApp(firebaseConfig);
const db = getDatabase();

//!-- Save parameter -->
var result = "";
var playercount = "";
var bancount = "";
var modepick = "";
var playername = "";
var checkboxStatus0 = [];
var checkboxStatus1 = [];
var checkboxStatus2 = [];
var checkboxStatus3 = [];
var guildindex = "";
var roomID = "";
var playerIDname = "";

async function checkroomID(roomID) {
    const reference = ref(db, `room/${roomID}`);
    try {
        get(reference).then((snapshot) => {
            if (snapshot.exists()) {
                const roomData = snapshot.val();
                let conditionMet = false; // Flag to track if the condition executes
                for (const playerID in roomData) { //playerID0 -> 3 roomSetting
                    if (playerID.includes("playerID")) {
                        const playerData = roomData[playerID];
                        if (!playerData.name || playerData.name.trim() === "") { //key name
                            joinnamePopup.classList.add('open');
                            overlay3.classList.add('open');
                            randombackground(joindiv);
                            conditionMet = true;
                            playerIDname = playerID;
                            break;
                        }
                    }
                }
                if (!conditionMet) {
                    alert("Room is full");
                }
            } else {
                alert("Room not exist");
            }
        }).catch((error) => {
            console.error("Error checking reference:", error);
        });
    } catch (error) {
        console.error("Error retrieving data from Firebase:", error);
    }
}

function joinpost() {
    playername = document.getElementById("joinplayername").value;

    const writeplayerData = {
        hero1: "",
        hero2: "",
        hero3: "",
        name: playername,
        guild: guildindex,
        status: "active"
    }
    console.log(writeplayerData);
    set(ref(db, `room/${roomID}/${playerIDname}`), writeplayerData)
        .then(() => {
            window.location.href = "pick.html";
        })
        .catch((error) => {
            alert("Error join room: ", error);
        });

}
function writeNewpost() {
    const newPlayerData = {
        hero1: "",
        hero2: "",
        hero3: "",
        name: "",
        guild: "",
        status: "deactive"
    };
    const roomData = {
        playerID0: {
            hero1: "",
            hero2: "",
            hero3: "",
            name: playername,
            guild: guildindex,
            status: "active"
        },
        roomSetting: {
            playercount: playercount,
            bancount: bancount,
            modepick: modepick,
            inputsubOption0: {
                checkbox1: checkboxStatus0[0],
                checkbox2: checkboxStatus0[1],
                checkbox3: checkboxStatus0[2],
                checkbox4: checkboxStatus0[3]
            },
            inputsubOption1: {
                checkbox5: checkboxStatus1[0],
                checkbox6: checkboxStatus1[1],
                checkbox7: checkboxStatus1[2],
                checkbox8: checkboxStatus1[3],
                checkbox9: checkboxStatus1[4]
            },
            inputsubOption2: {
                checkbox10: checkboxStatus2[0],
                checkbox11: checkboxStatus2[1],
                checkbox12: checkboxStatus2[2],
            },
            inputsubOption3: {
                checkbox13: checkboxStatus3[0],
                checkbox14: checkboxStatus3[1],
            }
        }
    };
    for (let i = 1; i < playercount; i++) {
        roomData[`playerID${i}`] = newPlayerData;
    }
    // Pushing data to the database
    set(ref(db, 'room/' + result), roomData)
        .then(() => {
            document.getElementById('createresult').textContent = "Room created successfully!";
        })
        .catch((error) => {
            document.getElementById('createresult').textContent = "Error creating room: ", error;
        });
}



// Get the div element
var div = document.getElementById("namePopup");
var joindiv = document.getElementById("joinnamePopup");



// Define an array of background colors for the div
const backgrounds = ["bannerorange", "bannerblue", "bannerred", "bannergreen", "bannerbrown", "bannergrey", "bannerpurple", "bannercyan"];



// Loop through the buttons and assign a click event to each one
for (let i = 1; i <= 8; i++) {
    const button = document.getElementById(`guild${i}`);
    button.addEventListener("click", () => {
        div.style.backgroundImage = `url('../Img/${backgrounds[i - 1]}.png')`;
        //sessionStorage.setItem("guildindex", i);
        guildindex = i;
    });
}
// Loop through the buttons and assign a click event to each one
for (let i = 1; i <= 8; i++) {
    const button = document.getElementById(`joinguild${i}`);
    button.addEventListener("click", () => {
        joindiv.style.backgroundImage = `url('../Img/${backgrounds[i - 1]}.png')`;
        //sessionStorage.setItem("guildindex", i);
        guildindex = i;
    });
}
joinButton.addEventListener('click', () => {
    roomID = document.getElementById('name').value;
    if (roomID) {
        checkroomID(roomID);
    }
    else { alert('Please input roomID') }
});
overlay3.addEventListener('click', () => {
    joinnamePopup.classList.remove('open');
    overlay3.classList.remove('open');
});
joinsubmitButton.addEventListener('click', () => {
    sessionStorage.setItem("playername", document.getElementById("joinplayername").value);
    sessionStorage.setItem("roomID", roomID);
    // sessionStorage.setItem("guildindex", guildindex);
    joinpost();
});
settingsButton.addEventListener('click', () => {
    settingsPopup.classList.add('open');
    overlay.classList.add('open');
});

overlay.addEventListener('click', () => {
    settingsPopup.classList.remove('open');
    overlay.classList.remove('open');
});

chooseall.addEventListener('click', () => {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    if (chooseall.innerText == "Choose all") {
        // Loop through each checkbox and check it
        checkboxes.forEach(checkbox => {
            checkbox.checked = true;
        });
        chooseall.innerText = "Unchoose"
    }
    else {
        checkboxes.forEach(checkbox => {
            checkbox.checked = false;
        });
        chooseall.innerText = "Choose all"
    }
});

closeButton.addEventListener('click', () => {
    namePopup.classList.add('open');
    overlay1.classList.add('open');
    randombackground(div);
});

overlay1.addEventListener('click', () => {
    namePopup.classList.remove('open');
    overlay1.classList.remove('open');
});
function randombackground(element) {
    const randomNumber = Math.floor(Math.random() * 8) + 1;
    element.style.backgroundImage = `url('../Img/${backgrounds[randomNumber - 1]}.png')`;
    //sessionStorage.setItem("guildindex", randomNumber);
    guildindex = randomNumber;
}

submitButton.addEventListener('click', () => {

    const settingsButton = document.getElementById('settingsButton');/*Create room*/
    const settingsPopup = document.getElementById('settingsPopup');/*Popup rule*/
    const overlay = document.getElementById('overlay'); /*Dark the area surround*/
    const closeButton = document.getElementById('closeButton'); /*Create room*/
    const chooseall = document.getElementById('chooseall');/*Chooseall*/
    const namePopup = document.getElementById('namePopup');/*Player name*/
    const submitButton = document.getElementById('submitButton');
    const overlay1 = document.getElementById('overlay1'); /*Dark the area surround*/

    playercount = document.getElementById("myRange").value;
    bancount = document.getElementById("myRange1").value;
    modepick = document.getElementById("volumeDropdown").value
    playername = document.getElementById("playername").value;

    //sessionStorage.setItem("playercount", playercount);
    //sessionStorage.setItem("bancount", bancount);
    //sessionStorage.setItem("modepick", modepick);
    sessionStorage.setItem("playername", playername);

    checkboxStatus0 = storeCheckboxStatus("input.subOption0");
    checkboxStatus1 = storeCheckboxStatus("input.subOption1");
    checkboxStatus2 = storeCheckboxStatus("input.subOption2");
    checkboxStatus3 = storeCheckboxStatus("input.subOption3");

    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for (let i = 0; i < 5; i++) {
        result += characters.charAt(Math.floor(Math.random() * characters.length));
    }
    sessionStorage.setItem("roomID", result);
    writeNewpost();
    createPopup.classList.add('open');
    overlay2.classList.add('open');
    //
    // window.open("pick.html", "_blank");
});
ok.addEventListener('click', () => {
    window.location.href = "pick.html";
});

overlay2.addEventListener('click', () => {
    createPopup.classList.remove('open');
    overlay2.classList.remove('open');
});

function storeCheckboxStatus(x) {
    var checkboxes = document.querySelectorAll(x);
    var checkboxStatus = Array.from(checkboxes).map(function (checkbox) {
        return checkbox.checked;
    });
    // sessionStorage.setItem(x, JSON.stringify(checkboxStatus));
    return checkboxStatus;
}
export function updateValue(id, value, text1, text2) {
    document.getElementById(id).textContent = text1 + value + text2;
}
window.updateValue = updateValue;
