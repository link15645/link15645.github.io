<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scores</title>
</head>
<style>
   body {
      background-color: #333;
      color: white;
      text-shadow: 2px 2px black;
      text-align: center;
      font-size: 3rem;
   }

   form {
      display: flex;
      justify-content: center;
      gap: 20px;
      margin: 0;
     
   }

   button {
      margin: 20px;
   }

   h2 {
      margin: 0;
      color: orange;
      text-decoration: underline;
   }
   h3 {
      margin: 0;
      color: #73c9bd
   }

input {
   width: 100px;
   height: 50px;
   font-size: 2rem;
   text-align: center;
}

button {
   width: 100px;
   height: 50px;
   background-color: orange;
   font-size: 1.25rem;
}
</style>
<body>

<h2><?php echo $_POST['team1'];?><h3 id='currentScore1'>0</h3> <form action="#"><input type="text" name='score1' id='score1'></form></h2><button id='updateScore'>Update Score</button>

<h2><?php echo $_POST['team2'];?><h3 id='currentScore2'>0</h3> <form action="#"><input type="text" name='score2' id='score2'></form></h2><button id='updateScore2'>Update Score</button>

<h2><?php echo $_POST['team3'];?> <h3 id='currentScore3'>0</h3><form action="#"><input type="text" name='score3' id='score3'></form></h2><button id='updateScore3'>Update Score</button>

<h2><?php echo $_POST['team4'];?> <h3 id='currentScore4'>0</h3><form action="#"><input type="text" name='score4' id='score4'></form></h2><button id='updateScore4'>Update Score</button>

<h2><?php echo $_POST['team5'];?> <h3 id='currentScore5'>0</h3><form action="#"><input type="text" name='score5' id='score5'></form></h2><button id='updateScore5'>Update Score</button>

<h2><?php echo $_POST['team6'];?> <h3 id='currentScore6'>0</h3><form action="#"><input type="text" name='score6' id='score6'></form></h2><button id='updateScore6'>Update Score</button>

<h2><?php echo $_POST['team7'];?> <h3 id='currentScore7'>0</h3><form action="#"><input type="text" name='score7' id='score7'></form></h2><button id='updateScore7'>Update Score</button>

<h2><?php echo $_POST['team8'];?> <h3 id='currentScore8'>0</h3><form action="#"><input type="text" name='score8' id='score8'></form></h2><button id='updateScore8'>Update Score</button>

<h2><?php echo $_POST['team9'];?> <h3 id='currentScore9'>0</h3><form action="#"><input type="text" name='score9' id='score9'></form></h2><button id='updateScore9'>Update Score</button>

<h2><?php echo $_POST['team10'];?> <h3 id='currentScore10'>0</h3><form action="#"><input type="text" name='score10' id='score10'></form></h2><button id='updateScore10'>Update Score</button>

<h2><?php echo $_POST['team11'];?> <h3 id='currentScore11'>0</h3><form action="#"><input type="text" name='score11' id='score11'></form></h2><button id='updateScore11'>Update Score</button>

<h2><?php echo $_POST['team12'];?> <h3 id='currentScore12'>0</h3><form action="#"><input type="text" name='score12' id='score12'></form></h2><button id='updateScore12'>Update Score</button>

<h2><?php echo $_POST['team13'];?> <h3 id='currentScore13'>0</h3><form action="#"><input type="text" name='score13' id='score13'></form></h2><button id='updateScore13'>Update Score</button>

<h2><?php echo $_POST['team14'];?> <h3 id='currentScore14'>0</h3><form action="#"><input type="text" name='score14' id='score14'></form></h2><button id='updateScore14'>Update Score</button>

<h2><?php echo $_POST['team15'];?> <h3 id='currentScore15'>0</h3><form action="#"><input type="text" name='score15' id='score15'></form></h2><button id='updateScore15'>Update Score</button>

<h2><?php echo $_POST['team16'];?> <h3 id='currentScore16'>0</h3><form action="#"><input type="text" name='score16' id='score16'></form></h2><button id='updateScore16'>Update Score</button>

<h2><?php echo $_POST['team17'];?> <h3 id='currentScore17'>0</h3><form action="#"><input type="text" name='score17' id='score17'></form></h2><button id='updateScore17'>Update Score</button>

<h2><?php echo $_POST['team18'];?> <h3 id='currentScore18'>0</h3><form action="#"><input type="text" name='score18' id='score18'></form></h2><button id='updateScore18'>Update Score</button>

<h2><?php echo $_POST['team19'];?> <h3 id='currentScore19'>0</h3><form action="#"><input type="text" name='score19' id='score19'></form></h2><button id='updateScore19'>Update Score</button>

<h2><?php echo $_POST['team20'];?> <h3 id='currentScore20'>0</h3><form action="#"><input type="text" name='score20' id='score20'></form></h2><button id='updateScore20'>Update Score</button>
</body>

<script>

let scores1 = [0]
let scores2 = [0]
let scores3 = [0]
let scores4 = [0]
let scores5 = [0]
let scores6 = [0]
let scores7 = [0]
let scores8 = [0]
let scores9 = [0]
let scores10 = [0]
let scores11 = [0]
let scores12 = [0]
let scores13 = [0]
let scores14 = [0]
let scores15 = [0]
let scores16 = [0]
let scores17 = [0]
let scores18 = [0]
let scores19 = [0]
let scores20 = [0]


console.log(scores1)
const disableEnter = document.addEventListener('keypress', (e) => {
   if (e.keyCode === 13 || e.which === 13) {
      e.preventDefault()
      return false
   }
})

const update1 = document.getElementById('updateScore')
update1.addEventListener('click', updateScore)
 function updateScore () {
    let score1 = document.getElementById('score1').value
    actualScore = parseInt(score1)
    

    if(score1) {
    let update = scores1[scores1.length -1]
    newScore = actualScore + update
    scores1.push(newScore)
    let currentScore1 = document.getElementById('currentScore1')
    currentScore1.innerHTML = newScore
    
    console.log(scores1)
    let reset = document.getElementById('score1')
    reset.value = ''
    } else {
      let newScore = 0;
    }
 }

 const update2 = document.getElementById('updateScore2')
update2.addEventListener('click', updateScore2)
 function updateScore2 () {
    let score1 = document.getElementById('score2').value
    actualScore = parseInt(score1)
    
    if(score1){
    let update = scores2[scores2.length -1]
    newScore = actualScore + update
    scores2.push(newScore)
    let currentScore1 = document.getElementById('currentScore2')
    currentScore1.innerHTML = newScore
    
    console.log(newScore)
    let reset = document.getElementById('score2')
    reset.value = ''
    } else {
      let newScore = 0
    }
 }

 const update3 = document.getElementById('updateScore3')
update3.addEventListener('click', updateScore3)
 function updateScore3 () {
    let score1 = document.getElementById('score3').value
    actualScore = parseInt(score1)
    
    if(score1){
    let update = scores3[scores3.length -1]
    newScore = actualScore + update
    scores3.push(newScore)
    let currentScore1 = document.getElementById('currentScore3')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score3')
    reset.value = ''
 } else {
   let newScore = 0
 }
}

 const update4 = document.getElementById('updateScore4')
update4.addEventListener('click', updateScore4)
 function updateScore4 () {
    let score1 = document.getElementById('score4').value
    actualScore = parseInt(score1)
    
    if(score1){
    let update = scores4[scores4.length -1]
    newScore = actualScore + update
    scores4.push(newScore)
    let currentScore1 = document.getElementById('currentScore4')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score4')
    reset.value = ''
 } else {
   let newScore = 0
 }
}

 const update5 = document.getElementById('updateScore5')
update5.addEventListener('click', updateScore5)
 function updateScore5 () {
    let score1 = document.getElementById('score5').value
    actualScore = parseInt(score1)
    
    if(score1){
    let update = scores5[scores5.length -1]
    newScore = actualScore + update
    scores5.push(newScore)
    let currentScore1 = document.getElementById('currentScore5')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score5')
    reset.value = ''
 } else {
   newScore = 0
 }
 }
 const update6 = document.getElementById('updateScore6')
update6.addEventListener('click', updateScore6)
 function updateScore6 () {
    let score1 = document.getElementById('score6').value
    actualScore = parseInt(score1)
    
    if(score1){
    let update = scores6[scores6.length -1]
    newScore = actualScore + update
    scores6.push(newScore)
    let currentScore1 = document.getElementById('currentScore6')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score6')
    reset.value = ''
 } else {
   newScore = 0
 }
 }
 const update7 = document.getElementById('updateScore7')
update7.addEventListener('click', updateScore7)
 function updateScore7 () {
    let score1 = document.getElementById('score7').value
    actualScore = parseInt(score1)
    

    if(score1) {
    let update = scores7[scores7.length -1]
    newScore = actualScore + update
    scores7.push(newScore)
    let currentScore1 = document.getElementById('currentScore7')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score7')
    reset.value = ''
 } else {
   newScore = 0
 }
 }


 const update8 = document.getElementById('updateScore8')
update8.addEventListener('click', updateScore8)
 function updateScore8 () {
    let score1 = document.getElementById('score8').value
    actualScore = parseInt(score1)
    
    if(score1){
    let update = scores8[scores8.length -1]
    newScore = actualScore + update
    scores8.push(newScore)
    let currentScore1 = document.getElementById('currentScore8')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score8')
    reset.value = ''
 } else {
   newScore = 0
 }
 }
 const update9 = document.getElementById('updateScore9')
update9.addEventListener('click', updateScore9)
 function updateScore9 () {
    let score1 = document.getElementById('score9').value
    actualScore = parseInt(score1)
    

    if(score1){
    let update = scores9[scores9.length -1]
    newScore = actualScore + update
    scores9.push(newScore)
    let currentScore1 = document.getElementById('currentScore9')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score9')
    reset.value = ''
 } else {
   newScore = 0
 }
}

 const update10 = document.getElementById('updateScore10')
update10.addEventListener('click', updateScore10)
 function updateScore10 () {
    let score1 = document.getElementById('score10').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores10[scores10.length -1]
    newScore = actualScore + update
    scores10.push(newScore)
    let currentScore1 = document.getElementById('currentScore10')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score10')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update11 = document.getElementById('updateScore11')
update11.addEventListener('click', updateScore11)
 function updateScore11 () {
    let score1 = document.getElementById('score11').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores11[scores11.length -1]
    newScore = actualScore + update
    scores11.push(newScore)
    let currentScore1 = document.getElementById('currentScore11')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score11')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update12 = document.getElementById('updateScore12')
update12.addEventListener('click', updateScore12)
 function updateScore12 () {
    let score1 = document.getElementById('score12').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores12[scores12.length -1]
    newScore = actualScore + update
    scores12.push(newScore)
    let currentScore1 = document.getElementById('currentScore12')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score12')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update13 = document.getElementById('updateScore13')
update13.addEventListener('click', updateScore13)
 function updateScore13 () {
    let score1 = document.getElementById('score13').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores13[scores13.length -1]
    newScore = actualScore + update
    scores13.push(newScore)
    let currentScore1 = document.getElementById('currentScore13')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score13')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update14 = document.getElementById('updateScore14')
update14.addEventListener('click', updateScore14)
 function updateScore14 () {
    let score1 = document.getElementById('score14').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores14[scores14.length -1]
    newScore = actualScore + update
    scores14.push(newScore)
    let currentScore1 = document.getElementById('currentScore14')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score14')
    reset.value = ''
 } else {
   newScore = 0
 }
}


const update15 = document.getElementById('updateScore15')
update15.addEventListener('click', updateScore15)
 function updateScore15 () {
    let score1 = document.getElementById('score15').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores15[scores15.length -1]
    newScore = actualScore + update
    scores15.push(newScore)
    let currentScore1 = document.getElementById('currentScore15')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score15')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update16 = document.getElementById('updateScore16')
update16.addEventListener('click', updateScore16)
 function updateScore16 () {
    let score1 = document.getElementById('score16').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores16[scores16.length -1]
    newScore = actualScore + update
    scores16.push(newScore)
    let currentScore1 = document.getElementById('currentScore16')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score16')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update17 = document.getElementById('updateScore17')
update17.addEventListener('click', updateScore17)
 function updateScore17 () {
    let score1 = document.getElementById('score17').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores17[scores17.length -1]
    newScore = actualScore + update
    scores17.push(newScore)
    let currentScore1 = document.getElementById('currentScore17')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score17')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update18 = document.getElementById('updateScore18')
update18.addEventListener('click', updateScore18)
 function updateScore18 () {
    let score1 = document.getElementById('score18').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores18[scores18.length -1]
    newScore = actualScore + update
    scores18.push(newScore)
    let currentScore1 = document.getElementById('currentScore18')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score18')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update19 = document.getElementById('updateScore19')
update19.addEventListener('click', updateScore19)
 function updateScore19 () {
    let score1 = document.getElementById('score19').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores19[scores19.length -1]
    newScore = actualScore + update
    scores19.push(newScore)
    let currentScore1 = document.getElementById('currentScore19')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score19')
    reset.value = ''
 } else {
   newScore = 0
 }
}

const update20 = document.getElementById('updateScore20')
update20.addEventListener('click', updateScore20)
 function updateScore20 () {
    let score1 = document.getElementById('score20').value
    actualScore = parseInt(score1)
    
    if(score1) {

    
    let update = scores20[scores20.length -1]
    newScore = actualScore + update
    scores20.push(newScore)
    let currentScore1 = document.getElementById('currentScore20')
    currentScore1.innerHTML = newScore
    console.log(newScore)
    let reset = document.getElementById('score20')
    reset.value = ''
 } else {
   newScore = 0
 }
}
</script>
</html>