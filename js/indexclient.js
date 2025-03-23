import { initializeApp } from 'https://www.gstatic.com/firebasejs/11.4.0/firebase-app.js';
import { getDatabase, ref, set, onValue, get } from "https://www.gstatic.com/firebasejs/11.4.0/firebase-database.js";
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

// Declare a global variable with var

window.playername = "";
var playerID = "";
var roomID = "";
var nameindex = "";
var bancount = "";
var playerBases = [
    document.getElementById("player1base"),
    document.getElementById("player2base"),
    document.getElementById("player3base"),
    document.getElementById("player4base")
];
var datahero0 = ["", "", ""];
var datahero1 = ["", "", ""];
var datahero2 = ["", "", ""];
var datahero3 = ["", "", ""];
var datahero = [
    datahero0,
    datahero1,
    datahero2,
    datahero3
];
var teambackgrounds = ["teamorange", "teamblue", "teamred", "teamgreen", "teambrown", "teamgrey", "teampurple", "teamcyan"];
var herobackgrounds = ["heroorange", "heroblue", "herored", "herogreen", "herobrown", "herogrey", "heropurple", "herocyan"];
var heropool0 = ['AQ', 'BYG', 'EX1', 'GM'];
var heropool1 = ['AQI', 'PET', 'HOB', 'EX2', 'RD'];
var heropool2 = ['MMR', 'EX3', 'DGP', 'GM'];
var heropool3 = ['PM', 'UY'];
var guildindex = "";
var divpositionindex = ["mdrag1", "mdrag2", "mdrag3", "mdrag4", "mdrag5", "mdrag6", "mdrag7", "mdrag8", "mdrag9", "mdrag10", "mdrag11", "mdrag11"]
var list = document.getElementById("main").getElementsByTagName("img");
const heroposition = [];
for (let i = 0; i < list.length; i++) {
    heroposition.push(list[i].id);
}
var playercount = "";
var modepick = "";
//<!-- Load parameter -->


playername = sessionStorage.getItem("playername");
roomID = sessionStorage.getItem("roomID");
document.querySelectorAll("#nameroom").forEach((element) => {
    element.innerHTML = "RoomID: " + roomID;
});
//guildindex = sessionStorage.getItem("guildindex");

//checknameindex(roomID);
readdataonce(roomID);

function readdataonce(roomID) {
    const reference = ref(db, 'room/' + roomID + '/roomSetting');
    get(reference).then((snapshot) => {
        if (snapshot.exists()) {
            const data = snapshot.val();
            playercount = data.playercount;
            switch (playercount) {
                case "1":
                    playerBases[1].classList.add("hidden");
                    playerBases[2].classList.add("hidden");
                    playerBases[3].classList.add("hidden"); break;
                case "2":
                    playerBases[2].classList.add("hidden");
                    playerBases[3].classList.add("hidden"); break;
                case "3":
                    playerBases[3].classList.add("hidden"); break;
            }
            bancount = data.bancount;
            if (bancount > 0) {
                const elements = document.querySelectorAll('#ban-symbol');
                // Now, 'elements' is a NodeList of all elements with the class 'your-class-name'
                elements.forEach(element => {
                    element.classList.add('ban-symbol'); // Perform any action on each element
                });
            }
            modepick = data.modepick;
            const inputSubOption0 = data.inputsubOption0;
            const inputSubOption1 = data.inputsubOption1;
            const inputSubOption2 = data.inputsubOption2;
            const inputSubOption3 = data.inputsubOption3;
            retrieveCheckboxStatus(inputSubOption0, heropool0);
            retrieveCheckboxStatus(inputSubOption1, heropool1);
            retrieveCheckboxStatus(inputSubOption2, heropool2);
            retrieveCheckboxStatus(inputSubOption3, heropool3);
            // Generate playerID dynamically
            for (let i = 0; i < playercount; i++) {
                const playerinformation = ref(db, `room/${roomID}/playerID${i}`);
                onValue(playerinformation, (snapshot) => {
                    const playersArray = []; // Initialize an empty array
                    snapshot.forEach((childSnapshot) => {
                        const childData = childSnapshot.val();
                        playersArray.push(childData);
                    });
                    if (playersArray[0]) {
                        playerBases[i].style.backgroundImage = `url('../Img/${teambackgrounds[playersArray[0] - 1]}.png')`;
                        let childDivs1 = playerBases[i].querySelectorAll(`.div${i + 1}`);
                        childDivs1.forEach(child => {
                            child.style.backgroundImage = `url('../Img/${herobackgrounds[playersArray[0] - 1]}.png')`;
                        });
                        guildindex=playersArray[0];
                    }
                    for (let n = 1; n < 4; n++) {
                        const index = heroposition.indexOf(playersArray[n]);//new index
                        if (index >= 0) {
                            const divremove = playerBases[i].children[n].children[1];
                            removeotherImage(divremove);
                            const li = document.getElementById("main").getElementsByTagName("li")[index]; //<li>
                            const divpick = li.querySelector("#pick-symbol");
                            pickotherImages(divpick, i, n);
                        }
                    }
                    if (playersArray[4]) {
                        playerBases[i].querySelector('p').textContent = `Guild ${i + 1}: ${playersArray[4]}`; // Update div content
                        if (playername == playersArray[4]) {
                            nameindex = i;
                            changeborder(playerBases[nameindex]);
                            addremoveUnclickableClass(playerBases[nameindex], nameindex, true)
                        }
                    }
                });
            };
        } else {
            console.log("No data available at this reference.");
        }
    }).catch((error) => {
        console.error("Error fetching data:", error); // Handle any errors
    });

}

function writeUserData(roomID, playerId, data) {
    set(ref(db, `room/${roomID}/${playerId}`), {
        hero1: data[0],
        hero2: data[1],
        hero3: data[2],
        name: playername,
        guild: guildindex,
        status: "active"
    })
        .then(() => {
            // Data saved successfully!
        })
        .catch((error) => {
            // The write failed...
        });
}

//<!-- Ban pick function -->

export function removeImage(element) {
    let data = element.previousElementSibling.children[0].id; //<img id> of div
    let character = document.getElementById(data).parentNode; //<a href img id>
    const index = heroposition.indexOf(data);
    let li = document.getElementById("main").getElementsByTagName("li")[index];//<li id=>
    let originalcharacter = li.children[0]; //<a href> of li
    let divposition = originalcharacter.children[0].id;
    const divindex = divpositionindex.indexOf(divposition);
    switch (true) {
        case divindex / 3 < 1:
            datahero0[divindex] = "";
            writeUserData(roomID, `playerID${nameindex}`, datahero0);
            break;
        case divindex / 3 >= 1 && divindex / 3 < 2:
            datahero1[divindex - 3] = "";
            writeUserData(roomID, `playerID${nameindex}`, datahero1);
            break;
        case divindex / 3 >= 2 && divindex / 3 < 3:
            datahero2[divindex - 6] = "";
            writeUserData(roomID, `playerID${nameindex}`, datahero2);
            break;
        case divindex / 9 >= 3:
            datahero3[divindex - 9] = "";
            writeUserData(roomID, `playerID${nameindex}`, datahero3);
            break;
        default:
    }

    originalcharacter.classList.remove('unclickable');

    //div get hero
    originalcharacter.children[0].setAttribute("src", "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
    character.parentNode.insertBefore(originalcharacter, character.parentNode.firstChild);
    character.parentNode.classList.remove('div1hover');
    //li get hero
    li.insertBefore(character, li.firstChild);
    li.classList.add('heroimage');
    //Reset name after move to Div
    originalcharacter.children[1].innerText = ('Hero');
}
window.removeImage = removeImage;

export function pickImage(element) {
    let data = element.previousElementSibling.children[0].id; //<img id> of li
    let character = document.getElementById(data).parentNode;//<a href of li
    let linkimage = character.children[0].getAttribute("src");
    let i = ""
    for (i = 1; i < 4; i++) {
        var pickplace = playerBases[nameindex].children[i]; //<div class>;
        var pickplacecharacter = pickplace.children[0]; //<a href>;
        if (!pickplacecharacter.classList.contains("fancybox")) {
            break; // Stops the loop
        }
        if (i == 3) {
            alert('You had all 3 heroes');
            return;
        }
    }
    //li get hero
    pickplacecharacter.children[0].setAttribute("src", linkimage);
    pickplacecharacter.classList.add('unclickable'); //<a href>
    character.parentNode.insertBefore(pickplacecharacter, character.parentNode.firstChild);
    character.parentNode.classList.remove('heroimage');
    //div get hero
    pickplace.insertBefore(character, pickplace.firstChild);
    pickplace.classList.add('div1hover');
    pickplacecharacter.children[1].innerText = data;
    datahero[nameindex][i - 1] = data;
    writeUserData(roomID, `playerID${nameindex}`, datahero[nameindex]);
}
window.pickImage = pickImage;
export function banImage(element) {
    let character = element.parentNode //<a href of li
    character.classList.add("unclickable");
    character.style.opacity = 0.5;
}
window.banImage = banImage;

////Load data
function pickotherImages(element, othersindex, j) {
    let data = element.previousElementSibling.children[0].id; //<img id> of li
    let character = document.getElementById(data).parentNode;//<a href of li
    let linkimage = character.children[0].getAttribute("src");

    var pickplace = playerBases[othersindex].children[j]; //<div class>;
    var pickplacecharacter = pickplace.children[0]; //<a href>;


    //li get hero
    pickplacecharacter.children[0].setAttribute("src", linkimage);
    pickplacecharacter.classList.add('unclickable'); //<a href>
    character.parentNode.insertBefore(pickplacecharacter, character.parentNode.firstChild);
    character.parentNode.classList.remove('heroimage');
    //div get hero
    pickplace.insertBefore(character, pickplace.firstChild);
    pickplacecharacter.children[1].innerText = data;
    datahero[othersindex][j - 1] = data;
}
function removeotherImage(element) {
    let data = element.previousElementSibling.children[0].id; //<img id> of div
    if (!data.includes("mdrag")) {
        let character = document.getElementById(data).parentNode; //<a href img id>
        const index = heroposition.indexOf(data);
        let li = document.getElementById("main").getElementsByTagName("li")[index];//<li id=>
        let originalcharacter = li.children[0]; //<a href> of li
        originalcharacter.classList.remove('unclickable');

        //div get hero
        originalcharacter.children[0].setAttribute("src", "data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7");
        character.parentNode.insertBefore(originalcharacter, character.parentNode.firstChild);
        //li get hero
        li.insertBefore(character, li.firstChild);
        li.classList.add('heroimage');
        //Reset name after move to Div
        originalcharacter.children[1].innerText = ('Hero');
    }
}


function retrieveCheckboxStatus(inputSubOption, heropool) {
    let li = document.getElementById("main").getElementsByTagName("li");
    let j = 0;
    Object.keys(inputSubOption).forEach((key) => {
        const checkboxValue = inputSubOption[key];
        if (checkboxValue == true) {
            for (let i = 0; i < li.length; i++) {
                if (li[i].getAttribute('id') === heropool[j]) {
                    li[i].style.display = "block";
                }
            }
        } else {
            for (let i = 0; i < li.length; i++) {
                if (li[i].getAttribute('id') === heropool[j]) {
                    li[i].style.display = "none";
                }
            }
        }
        j++;
    });
    lied = document.getElementById("main").querySelectorAll('li:not([style*="display: none;"])')
}


//!--- Filter hero name --->

var lied = document.getElementById("main").querySelectorAll('li:not([style*="display: none;"])')
function textfilter() {
    var input, filter, ul, li, a, i, txtValue;
    //var lied = document.getElementById("main").querySelectorAll('li:not([style*="display: none;"]):not(.unclickable)')
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    /*li = document.getElementById("main").getElementsByTagName("li");*/
    for (i = 0; i < lied.length; i++) {
        a = lied[i].getElementsByTagName("a")[0];
        if (a) {
            txtValue = a.textContent || a.innerText;
        }
        if (lied[i].classList.contains('unclickable')) {
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                lied[i].style.opacity = 0.5;
            }
        } else {
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                lied[i].style.opacity = 1;
            }
            else {
                lied[i].style.opacity = 0.5;
            }
        }
    }
}
document.getElementById("myInput").addEventListener("input", () => textfilter());

//!--- Click change Div function --->

/// Select the div

for (let i = 0; i <= 3; i++) {
    playerBases[i].children[0].addEventListener("click", () => {
        let guildname = playerBases[i].querySelector('p');
        if (guildname.textContent.length <= 8) {
            //previous nameindex of div
            resetborderandname(playerBases[nameindex], nameindex);
            addremoveUnclickableClass(playerBases[nameindex], nameindex, false);
            playerBases[nameindex].style.backgroundImage = ``;
            let childDivs = playerBases[nameindex].querySelectorAll(`.div${nameindex + 1}`);
            childDivs.forEach(child => {
                child.style.backgroundImage = ``;
            });
            //update nameindex to current div
            guildname.textContent = `Guild ${i + 1}: ${playername}`;
            nameindex = i;
            addremoveUnclickableClass(playerBases[nameindex], nameindex, true)
            changeborder(playerBases[nameindex]); //Change css of div
            playerBases[nameindex].style.backgroundImage = `url('../Img/${teambackgrounds[guildindex - 1]}.png')`;
            let childDivs1 = playerBases[nameindex].querySelectorAll(`.div${nameindex + 1}`);
            childDivs1.forEach(child => {
                child.style.backgroundImage = `url('../Img/${herobackgrounds[guildindex - 1]}.png')`;
            });
        }
    });
}
function changeborder(element) {
    element.style.borderColor = "red";
    element.style.borderRadius = "10px";
}
function resetborderandname(element, index) {
    element.style.borderColor = "black";
    element.style.borderRadius = "0px";
    element.querySelector('p').textContent = `Guild ${index + 1}`;
}

function addremoveUnclickableClass(element, index, isClickable) {
    // Select all child div elements
    const childDivs = element.querySelectorAll(`.div${index + 1}`);
    if (isClickable) {
        // Iterate over each child and remove the class
        childDivs.forEach(child => {
            child.classList.add("div1hover");
        });
    } else {
        childDivs.forEach(child => {
            child.classList.remove("div1hover");
        });
    }
}